<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonationApplicationHusbFamHistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('applicationId')
            ->add('motherAlive', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Is your Mother alive',
                'attr'  => ['name' =>'mother_alive'],
                'choices'  => [
                    'Yes' => 'Yes',
                    'Died at what age and why?' => 'No',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'mother_alive_'.strtolower($value)];
                },
            ])

            ->add('motherDeathAge', IntegerType::class, [
                'label' => 'Age at Death',
                'attr'  => ['name' =>'mother_death_age'],
            ])
            ->add('motherDeathCause', TextareaType::class, [
                'label' => 'Cause of Death',
                'attr'  => ['name' =>'mother_death_cause'],
            ])
            ->add('motherMedicalProblems', TextareaType::class, [
                'label' => 'Mother\'s Medical Problems',
                'attr'  => ['name' =>'mother_medical_problems'],
            ])

            ->add('fatherAlive', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'label' => 'Is your Father alive',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'attr'  => ['name' =>'father_alive'],
                'choices'  => [
                    'Yes' => 'Yes',
                    'Died at what age and why?' => 'No',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'father_alive_'.strtolower($value)];
                },
            ])
            ->add('fatherDeathAge', IntegerType::class, [
                'label' => 'Age at Death',
                'attr'  => ['name' =>'father_death_age'],
            ])
            ->add('fatherDeathCause', TextareaType::class, [
                'label' => 'Cause of Death',
                'attr'  => ['name' =>'father_death_cause'],
            ])
            ->add('fatherMedicalProblems', TextareaType::class, [
                'label' => 'Father\'s Medical Problems',
                'attr'  => ['name' =>'father_medical_problems'],
            ])

            ->add('haveSisters',ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Do you have any Sisters',
                'attr'  => ['name' =>'have_sisters'],
                'choices'  => [
                    'No' => 'No',
                    'Yes, How many and general health?' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'have_sisters_'.strtolower($value)];
                },
            ])
            ->add('numSistersAndHealth', TextareaType::class, [
                'label' => 'Yes, How many and general health?',
                'attr'  => ['name' =>'num_sisters_and_health'],
            ])

            ->add('haveBrothers',ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Do you have any Brothers',
                'attr'  => ['name' =>'have_brothers'],
                'choices'  => [
                    'No' => 'No',
                    'Yes, How many and general health?' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'have_brothers_'.strtolower($value)];
                },
            ])
            ->add('numBrothersAndHealth', TextareaType::class, [
                'label' => 'Yes, How many and general health?',
                'attr'  => ['name' =>'num_brothers_and_health'],
            ])

            ->add('alcoholism', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Alcoholism',
                'attr'  => ['name' =>'alcoholism'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'alcoholism_'.strtolower($value)];
                },
            ])
            ->add('bloodDiseases', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Blood Diseases (hemophilia, thalassemia, etc.)',
                'attr'  => ['name' =>'blood_diseases'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'blood_diseases_'.strtolower($value)];
                },
            ])
            ->add('hearingDifficulties', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Born with Hearing Difficulties',
                'attr'  => ['name' =>'hearing_difficulties'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'hearing_difficulties_'.strtolower($value)];
                },
            ])
            ->add('malformations', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Born with Malformations (i.e., cleft lip/palate, heart..)',
                'attr'  => ['name' =>'malformations'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'malformations_'.strtolower($value)];
                },
            ])
            ->add('spinalCranialProblems', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Born with Spinal/Cranial Problems',
                'attr'  => ['name' =>'spinal_cranial_problems'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'spinal_cranial_problems_'.strtolower($value)];
                },
            ])
            ->add('chromosomeAbnormalities', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Chromosome Abnormalities (i.e., Down\'s syndrome)',
                'attr'  => ['name' =>'chromosome_abnormalities'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'chromosome_abnormalities_'.strtolower($value)];
                },
            ])
            ->add('colorBlindness', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Color Blindness',
                'attr'  => ['name' =>'color_blindness'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'color_blindness_'.strtolower($value)];
                },
            ])
            ->add('bornBlind', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Born Blind',
                'attr'  => ['name' =>'born_blind'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'born_blind_'.strtolower($value)];
                },
            ])
            ->add('cysticFibrosis', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Cystic Fibrosis',
                'attr'  => ['name' =>'cystic_fibrosis'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'cystic_fibrosis_'.strtolower($value)];
                },
            ])
            ->add('bornDeaf', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Born Deaf',
                'attr'  => ['name' =>'born_deaf'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'born_deaf_'.strtolower($value)];
                },
            ])
            //This is not on the current pages for Wife
            ->add('diabetes', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Diabetes',
                'attr'  => ['name' =>'diabetes'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'diabetes_'.strtolower($value)];
                },
            ])
            ->add('epilepsy', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Epilepsy',
                'attr'  => ['name' =>'epilepsy'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'epilepsy_'.strtolower($value)];
                },
            ])
            ->add('glaucoma', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Glaucoma',
                'attr'  => ['name' =>'glaucoma'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'glaucoma_'.strtolower($value)];
                },
            ])
            ->add('highBloodPressure', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'High Blood Pressure',
                'attr'  => ['name' =>'high_blood_pressure'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'high_blood_pressure_'.strtolower($value)];
                },
            ])
            ->add('mentalRetardation', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Mental Retardation',
                'attr'  => ['name' =>'mental_retardation'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'mental_retardation_'.strtolower($value)];
                },
            ])
            ->add('muscularDystrophy', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Muscular Dystrophy',
                'attr'  => ['name' =>'muscular_dystrophy'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'muscular_dystrophy_'.strtolower($value)];
                },
            ])
            ->add('neurofibromatosis', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Neurofibromatosis',
                'attr'  => ['name' =>'neurofibromatosis'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'neurofibromatosis_'.strtolower($value)];
                },
            ])
            ->add('prematureOrganDegeneration', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Premature Degeneration of Any Organ',
                'attr'  => ['name' =>'premature_organ_degeneration'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'premature_organ_degeneration_'.strtolower($value)];
                },
            ])
            ->add('psychiatricIllness', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Psychiatric Illness (i.e., Hallucinations, Schizophrenia..)',
                'attr'  => ['name' =>'psychiatric_illness'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'psychiatric_illness_'.strtolower($value)];
                },
            ])
            ->add('severeAllergies', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Severe Allergies',
                'attr'  => ['name' =>'severe_allergies'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'severe_allergies_'.strtolower($value)];
                },
            ])
            ->add('sickleCellDisease', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Sickle Cell Disease',
                'attr'  => ['name' =>'sickle_cell_disease'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'sickle_cell_disease_'.strtolower($value)];
                },
            ])
            ->add('taySachDisease', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Tay Sach\'s Disease',
                'attr'  => ['name' =>'tay_sach_disease'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'tay_sach_disease_'.strtolower($value)];
                },
            ])
            ->add('transmissibleSpongiform', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Transmissible Spongiform Encephalopathy (TSE)',
                'attr'  => ['name' =>'transmissible_spongiform'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'transmissible_spongiform_'.strtolower($value)];
                },
            ])
            ->add('twoOrMoreMiscarriages', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Two of More Miscarriages for Any Family Member',
                'attr'  => ['name' =>'two_or_more_miscarriages'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'two_or_more_miscarriages_'.strtolower($value)];
                },
            ])
            ->add('otherGeneticDiseases', ChoiceType::class, [
                //'placeholder' => 'Please Choose',
                'expanded' => true, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
                'multiple'  => false,
                'label' => 'Other Genetic Diseases',
                'attr'  => ['name' =>'other_genetic_diseases'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'other_genetic_diseases_'.strtolower($value)];
                },
            ])
            ->add('explainYesAnswers', TextareaType::class, [
                'label' => 'Please explain any "Yes" answers below:',
                'attr' => ['name'=> 'explain_yes_answers'],
            ]);
    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbFamHist',
		));
	}

	public function getName()
	{
		return 'donation_application_husb_fam_hist';
	}
}