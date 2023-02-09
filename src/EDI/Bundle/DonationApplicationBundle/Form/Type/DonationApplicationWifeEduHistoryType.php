<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeEduHistory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonationApplicationWifeEduHistoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id')
			->add('applicationId')
			->add('highestEducationLevel', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'label' => 'Highest Education Level',
				'attr'  => ['name' =>'highest_education_level'],
				'choices'  => [
					'Some High School' => 'Some High School',
					'High School' => 'High School',
					'Some College' => 'Some College',
					'College' => 'College',
					'Masters' => 'Masters',
					'Ph.D +' => 'Ph.D +',
					],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'highest_education_level_'.strtolower($value)];
				},
			])
			->add('highSchoolGpa', TextType::class, [
                'label' => 'High school GPA',
            ])
			->add('collegeGpa', TextType::class, [
                'label' => 'College GPA',
            ])
			->add('satActScores', TextType::class, [
                'label' => 'Combined SAT/ACT Score'
            ])
			->add('iqScore', TextType::class, [
                'label' => 'I.Q. Score'
            ])
			->add('otherEducationalComments', TextType::class, [
                'label' => 'Other Educational Comments:'
            ]);


	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => EmbWifeEduHistory::class
		));
	}

	public function getName()
	{
		return 'donation_application_wife_edu_history';
	}
}