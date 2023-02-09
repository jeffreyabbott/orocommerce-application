<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Choice;

class DonationApplicationWifeMedHistType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id')
			->add('applicationId')
			->add('medicalProblems', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Medical Problems',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'medical_problems'],
				'choices'  => [
					'No' => 'No',
                    'Yes and of what type?' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'medical_problems_'.strtolower($value)];
				},
			])
			->add('medicalProblemsText', TextareaType::class, ['label' => 'Yes and of what type?', 'attr' => ['name' => 'medical_problems_text']])
			->add('surgeries', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Surgeries',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'surgeries'],
				'choices'  => [
					'No' => 'No',
                    'Yes and of what type?' =>'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'surgeries_'.strtolower($value)];
				},
			])


			->add('surgeriesText', TextareaType::class, ['label' => 'Yes and of what type?'])

			->add('currentMedications', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Current Medications',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'current_medications'],
				'choices'  => [
					'No' => 'No',
                    'Yes and they are' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'current_medications_'.strtolower($value)];
				},
			])

			->add('currentMedicationsText', TextareaType::class, ['label' => 'Yes and they are?'])

			->add('allergies', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Allergies',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'allergies'],
				'choices'  => [
					'No' => 'No',
					'Yes and they are?' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'allergies_'.strtolower($value)];
				},
			])

			->add('allergiesText', TextareaType::class, ['label' => 'Yes and they are?'])

			->add('smoker', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Smoker',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'smoker'],
				'choices'  => [
					'No' => 'No',
					'Yes and how much each day?' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'smoker_'.strtolower($value)];
				},
			])
			->add('smokerHowMuch', TextareaType::class, ['label' => 'Yes and how much each day?'])
			->add('smokerWillingToQuit', ChoiceType::class, [
                'label' => "Willing to quit?",
                'expanded' => true,
                'multiple' => false,
                'attr' => ['name' => 'smoker_willing_to_quit'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'smoker_willing_to_quit_'.strtolower($value)];
                },

            ])


			->add('alcoholUse', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Alcohol Use',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'alcohol_use'],
				'choices'  => [
					'No' => 'No',
					'Yes and how much each week' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'alcohol_use_'.strtolower($value)];
				},
			])

			->add('alcoholUseText', TextareaType::class, ['label' => 'Yes and how much each week?'])
			->add('glassesContacts', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Glasses/Contacts',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'glasses_contacts'],
				'choices'  => [
					'No' => 'No',
					'Yes (Reading)' => 'Yes (Reading)',
					'Yes (Driving)' => 'Yes (Driving)',
					'Yes (All the Time)' => 'Yes (All the Time)',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'glasses_contacts_'.strtolower($value)];
				},
			])

			->add('hearingProblems', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Hearing Problems',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'hearing_problems'],
				'choices'  => [
					'No' => 'No',
					'Yes and to what severity' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'hearing_problems_'.strtolower($value)];
				},
			])

			->add('hearingProblemsSeverity', TextareaType::class, ['label' => 'Yes and to what severity?'])


			->add('dentalProblems', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Dental Problems',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'Dental Problem'],
				'choices'  => [
					'No' => 'No',
					'Yes and to what severity' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'dental_problems_'.strtolower($value)];
				},
			])

			->add('dentalProblemsSeverity', TextareaType::class, ['label' => 'Yes and to what severity?'])
			->add('dietRestrictions', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Diet Restrictions',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'diet_restrictions'],
				'choices'  => [
					'No' => 'No',
					'Yes and they are?' => 'Yes',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'diet_restrictions_'.strtolower($value)];
				},
			])

			->add('dietRestrictionsText', TextareaType::class, ['label' => 'Yes and they are?'])

			->add('bloodType', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'Blood Type',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'blood_type'],
				'choices'  => [
					'Don\'t Know' => 'Don\'t Know',
					'A Positive' => 'A Positive',
					'A Negative' => 'A Negative',
					'A Unknown' => 'A Unknown',
					'B Positive' => 'B Positive',
					'B Negative' => 'B Negative',
					'B Unknown' => 'B Unknown',
					'AB Positive' => 'AB Positive',
					'AB Negative' => 'AB Negative',
					'AB Unknown' => 'AB Unknown',
					'O Positive' => 'O Positive',
					'O Negative' => 'O Negative',
					'O Unknown' => 'O Unknown',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'blood_type_'.strtolower($value)];
				},
			])
			->add('historyInfertility', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'label' => 'History of Infertility',
				'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'history_infertility'],
				'choices'  => [
					'No' => 'No',
					'Yes' => 'Yes, then please describe',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'history_infertility_'.strtolower($value)];
				},
			])
			->add('historyInfertilityText', TextareaType::class, ['label' => 'Yes then please describe?']);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeMedHist',
		));
	}

	public function getName()
	{
		return 'donation_application_wife_med_hist';
	}
}