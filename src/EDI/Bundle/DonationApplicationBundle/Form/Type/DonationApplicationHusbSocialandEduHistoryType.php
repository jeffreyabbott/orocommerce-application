<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialAndEduHistCombo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbEduHistoryType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationHusbSocialHistoryType;


class DonationApplicationHusbSocialandEduHistoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('emb_social_history', CollectionType::class, [
				'entry_type' => DonationApplicationHusbSocialHistoryType::class,
				'entry_options' => ['label' => true],
			])
			->add('emb_edu_history', CollectionType::class, [
				'entry_type' => DonationApplicationHusbEduHistoryType::class,
				'entry_options' => ['label' => true],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => EmbHusbSocialAndEduHistCombo::class,
		));
	}

	public function getName()
	{
		return 'donation_application_social_edu_hist';
	}
}