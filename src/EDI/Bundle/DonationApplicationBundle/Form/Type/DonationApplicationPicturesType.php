<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationPictureType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Oro\Bundle\AttachmentBundle\Form\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonationApplicationPicturesType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add( 'emb_pictures', CollectionType::class, [
				'entry_type'    => DonationApplicationPictureType::class,
				'entry_options' => [ 'label' => true ],
			]);
        $builder->setMethod('PATCH');

	}
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbPictures',
        ));
    }
	public function getName()
	{
		return 'donation_application_pictures';
	}
}