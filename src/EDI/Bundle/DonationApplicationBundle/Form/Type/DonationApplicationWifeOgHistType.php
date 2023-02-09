<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DonationApplicationWifeOgHistType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id')
			->add('applicationId')
			->add('numPregnancies', IntegerType::class, [
				'label' => 'Total number of Pregnancies',
				'attr'  => ['name' =>'num_pregnancies'],
			])
			->add('numTermDeliveries', IntegerType::class, [
				'label' => 'Total Number of Term Deliveries ( >37 weeks gestational age )',
				'attr'  => ['name' =>'num_term_deliveries'],
			])
			->add('numPrematureDeliveries', IntegerType::class, [
				'label' => 'Total Number of Premature Deliveries (between 20 and 37 weeks gestational age',
				'attr'  => ['name' =>'num_premature_deliveries'],
			])
			->add('numElectiveTerminations', IntegerType::class,	[
				'label' => 'Total number of Elective Terminations',
				'attr'  => ['name' =>'num_elective_terminations'],
			])
			->add('numSpontaneousLosses', IntegerType::class, [
				'label' => 'Total Number of spontaneous losses',
				'attr'  => ['name' =>'num_spontaneous_losses'],
			])
			->add('numLivingChildren', IntegerType::class, [
				'label' => 'Total Number of living children',
				'attr'  => ['name' =>'num_living_children'],
			])
			->add('offspringProblems', ChoiceType::class, [
				'attr'  => ['name' =>'offspring_problems'],
				'label' => 'Any congenital, developmental or emotional problems with your genetic offspring',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'choices'  => [
					'No' => 'No',
					'Yes, Please describe' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'offspring_problems_'.strtolower($value)];
				},
			])
			->add('offspringProblemsText', TextType::class, [
				'label' => 'Yes, please describe',
				'attr'  => ['name' =>'offspring_problems_text'],
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeOgHist',
		));
	}

	public function getName()
	{
		return 'donation_application_wife_og_hist';
	}
}