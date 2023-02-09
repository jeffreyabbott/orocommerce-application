<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeSocialAndEduHistCombo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeEduHistoryType;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationWifeSocialHistoryType;


class DonationApplicationWifeSocialandEduHistoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('emb_social_history', CollectionType::class, [
				'entry_type' => DonationApplicationWifeSocialHistoryType::class,
				'entry_options' => ['label' => true],
			])
			->add('emb_edu_history', CollectionType::class, [
				'entry_type' => DonationApplicationWifeEduHistoryType::class,
				'entry_options' => ['label' => true],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => EmbWifeSocialAndEduHistCombo::class,
		));
	}

	public function getName()
	{
		return 'donation_application_social_edu_hist';
	}
}