<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\StipulationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class DonationApplicationStipulationTypeType  extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id', HiddenType::class)
			->add('description');
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\StipulationType',
		));
	}

	public function getName()
	{
		return 'donation_application_stipulation_type';
	}
}