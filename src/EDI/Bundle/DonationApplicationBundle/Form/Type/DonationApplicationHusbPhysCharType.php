<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonationApplicationHusbPhysCharType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('id')
		->add('applicationId')
        ->add('dateOfBirth', TextType::class, [
            'label' => 'Date of Birth',
            ]) //Date field
        ->add('ethnicOrigin', TextType::class, [
            'label' => 'Ethnic Origin',
            ])
		->add('race', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Race',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'race'],
			'choices'  => [
				'Mixed Race' => 'Mixed Race',
				'African-American' => 'African-American',
				'Arctic' => 'Arctic',
				'Asian' => 'Asian',
				'Caucasian' => 'Caucasian',
				'Hispanic' => 'Hispanic',
				'Indigenous Australian' => 'Indigenous Australian',
				'Native American' => 'Native American',
				'Pacific' => 'Pacific',
				'North East Asian' => 'North East Asian',
				'South East Asian' => 'South East Asian',
				'West African, Bushmen, Ethiopian' => 'West African, Bushmen, Ethiopian',
				'Other Race' => 'Other Race',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'race_'.strtolower($value)];
			},
		])

		->add('skinTone', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Skin Tone',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'skin_tone'],
			'choices'  => [
				'Fair' => 'Fair',
				'Medium' => 'Medium',
				'Olive' => 'Olive',
				'Asian' => 'Asian',
				'Light Brown' => 'Light Brown',
				'Dark Brown' => 'Dark Brown',
				'Black' => 'Black',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'skin_tone_'.strtolower($value)];
			},
		])

		->add('boneStructure', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Bone Structure',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'bone_structure'],
			'choices'  => [
				'Small' => 'Small',
				'Medium' => 'Medium',
				'Large' => 'Large',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'bone_structure_'.strtolower($value)];
			},
		])
		->add('eyeColor', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Eye Color',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'eye_color'],
			'choices'  => [
				'Blue' => 'Blue',
				'Blue/Hazel' => 'Blue/Hazel',
				'Green' => 'Green',
				'Light Brown' => 'Light Brown',
				'Dark Brown' => 'Dark Brown',
				'Black' => 'Black',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'eye_color_'.strtolower($value)];
			},
		])
		->add('hairColor', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Hair Color',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'hair_color'],
			'choices'  => [
				'Light Blonde' => 'Light Blonde',
				'Medium Blonde' => 'Medium Blonde',
				'Dark Blonde' => 'Dark Blonde',
				'Strawberry Blonde' => 'Strawberry Blonde',
				'Light Red' => 'Light Red',
				'Red' => 'Red',
				'Red/Brown' => 'Red/Brown',
				'Auburn' => 'Auburn',
				'Light Brown' => 'Light Brown',
				'Medium Brown' => 'Medium Brown',
				'Dark Brown' => 'Dark Brown',
				'Black' => 'Black',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'hair_color_'.strtolower($value)];
			},
		])
		->add('hairTexture', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Hair Texture',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'hair_texture'],
			'choices'  => [
				'Thin' => 'Thin',
				'Thick' => 'Thick',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'hair_texture_'.strtolower($value)];
			},
		])
		->add('hairStructure')
		->add('hairStructure', ChoiceType::class, [
			'placeholder' => 'Please Choose',
			'label' => 'Hair Structure',
			'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
			'multiple'  => false,
			'attr'  => ['name' =>'hair_structure'],
			'choices'  => [
				'Straight' => 'Straight',
				'Curly' => 'Curly',
				'Frizzy' => 'Frizzy',
				'Wavy' => 'Wavy',
			],
			'choice_attr' => function($choiceValue, $key, $value) {
				// adds a class like attending_yes, attending_no, etc
				return ['id' => 'hair_structure_'.strtolower($value)];
			},
		])
            ->add('heightFt', TextType::class, [
                'label' => 'Height Feet'
            ])
            ->add('heightIn', TextType::class, [
                'label' => 'Height Inches'
            ])
            ->add('weightLbs', TextType::class, [
                'label' => 'Weight (lbs)'
            ]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbHusbPhysChar',
		));
	}

	public function getName()
	{
		return 'donation_application_husb_phys_char';
	}
}