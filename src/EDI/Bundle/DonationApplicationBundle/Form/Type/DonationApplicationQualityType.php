<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonationApplicationQualityType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id')
			->add('applicationId')
			->add('origin')
			->add('numAvailable')
			->add('cryopreservedOnDay')
			->add('dateOfCreation')
			->add('overallQuality')
			->add('freshTransferRate')
			->add('frozenTransferRate')
			->add('comments');
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbQuality',
		));
	}

	public function getName()
	{
		return 'donation_application_quality';
	}
}