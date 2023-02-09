<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonationApplicationHusbSocialHistoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id')
			->add('applicationId')
			->add('religion', ChoiceType::class, [
				//'placeholder' => 'Please Choose',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'label' => 'Religion',
				'attr'  => ['name' =>'religion'],
				'choices'  => [
					'Agnostic' => 'Agnostic',
					'Atheist' => 'Atheist',
					'Buddhist' => 'Buddhist',
					'Catholic' => 'Catholic',
					'Christian' => 'Christian',
					'Hindu' => 'Hindu',
					'Jewish' => 'Jewish',
					'Muslim/Islam' => 'Muslim/Islam',
					'No Religion' => 'No Religion',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'religion_'.strtolower($value)];
				},
			])
            ->add('birthPlace', TextType::class, [
                'label' => 'Birth Place',
            ])
            ->add('occupation', TextType::class, [
                'label' => 'Occupation',
            ])
            ->add('hobbiesInterests', TextType::class, [
                'label' => 'What are your hobbies and interests?',
            ]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbSocialHistory',
		));
	}

	public function getName()
	{
		return 'donation_application_husb_social_history';
	}
}