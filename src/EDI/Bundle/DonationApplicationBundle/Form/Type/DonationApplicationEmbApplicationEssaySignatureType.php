<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; //Should this be the ORO version?
use Symfony\Component\Form\Extension\Core\Type\CollectionType; //Should this be the ORO version?
use Symfony\Component\Form\Extension\Core\Type\TextType; //Should this be the ORO version?
use Oro\Bundle\FormBundle\Form\Type\OroDateType;

class DonationApplicationEmbApplicationEssaySignatureType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id', HiddenType::class)
			->add('sayToRecipient', TextareaType::class, [
				'label' => 'What we want to say to the Recipient of our Donated Embryos',
				'attr' => [
					'cols' => '100',
					'rows' => '5'
				],
			])
			->add('signedNameHusband', TextType::class, [
				'label' => 'Husband/Sperm Donor Name'
			])
			->add('signedNameWife', TextType::class, [
				'label' => 'Wife/Egg Donor Name'
			])
			->add('signedDate', TextType::class, [
				'label' => 'Date'
			])
			->add('informationTrueAccurate', ChoiceType::class, [
				'label' => '',
				'expanded' => true,
				'multiple'  => true,
				'choices'  => [
					'We acknowledge that the information supplied above is true and accurate and that Embryo Donation International has my permission to use the information provided for potential Embryo Recipients.' => '1'
				],
				'mapped' => false
			]);

	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication',
		));
	}

	public function getName()
	{
		return 'donation_essay_signature_form';
	}
}