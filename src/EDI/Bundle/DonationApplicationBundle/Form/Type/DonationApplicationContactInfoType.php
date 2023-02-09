<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use Faker\Provider\Text;
use Monolog\Logger;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DonationApplicationContactInfoType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$states = EDIConstants::STATES;
		natsort($states);
		$states = array_flip($states);
		//moves Florida to the top
		$states = array('Florida' => 'FL') + $states;

		$countries = EDIConstants::COUNTRIES;
		natsort($countries);
		$countries = array_flip($countries);
		//moves Florida to the top
		$countries = array('United States of America' => 'us') + $countries;

		$builder
			->add('id')
			->add('applicationId')
			->add('fullName', TextType::class, [
                'label' => 'Full Name',
            ])
			->add('partnerFullName', TextType::class, [
                'label' => 'Partner Full Name',
            ])
			->add('address', TextType::class, [
                'label' => 'Street Address',
            ])
			->add('city', TextType::class, [
                'label' => 'City',
            ])
			->add('state', ChoiceType::class, [
				'placeholder' => 'Please Choose',
				'label' => 'State',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'state'],
				'choices'  => $states,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'state_'.strtolower($value)];
				},
			])
			->add('zip', TextType::class, [
                'label' => 'Zipcode',
            ])
			->add('homePhone', TextType::class, [
                'label' => 'Home Phone',
            ])
			->add('homePhoneContact', ChoiceType::class, [
				'attr'  => ['name' =>'homePhoneContact'],
				//'placeholder' => 'Please Choose',
				'label' => 'Contact?:',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'choices'  => EDIConstants::YES_NO,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'home_phone_contact_'.strtolower($value)];
				},
			])
			->add('businessPhone', TextType::class, [
                'label' => 'Business Phone',
            ])
			->add('businessPhoneContact', ChoiceType::class, [
				'attr'  => ['name' =>'businessPhoneContact'],
				//'placeholder' => 'Please Choose',
				'label' => 'Contact?:',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'choices'  => EDIConstants::YES_NO,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'business_phone_contact_'.strtolower($value)];
				},
			])
			->add('cellPhone', TextType::class, [
                'label' => 'Cell Phone',
            ])
			->add('cellPhoneContact', ChoiceType::class, [
				'attr'  => ['name' =>'cellPhoneContact'],
				//'placeholder' => 'Please Choose',
				'label' => 'Contact?:',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'choices'  => EDIConstants::YES_NO,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'cell_phone_contact_'.strtolower($value)];
				},
			])
			->add('pager', TextType::class, [
                'label' => 'Pager',
            ])
			->add('pagerContact', ChoiceType::class, [
				'attr'  => ['name' =>'pagerPhoneContact'],
				//'placeholder' => 'Please Choose',
				'label' => 'Contact?:',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'choices'  => EDIConstants::YES_NO,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'pager_phone_contact_'.strtolower($value)];
				},
			])
			->add('email', EmailType::class, [
                'label' => 'Email',
            ])
			->add('emailContact', ChoiceType::class, [
				'attr'  => ['name' =>'emailPhoneContact'],
				//'placeholder' => 'Please Choose',
				'label' => 'Contact?:',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'choices'  => EDIConstants::YES_NO,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'email_phone_contact_'.strtolower($value)];
				},
			])
			->add('socialSecurity')
			->add('howIHeard', TextType::class, [
                'label' => 'How I found out about the Embryo Donation Program:'
            ])
			->add('country', ChoiceType::class, [
				'placeholder' => 'Please Choose',
				'label' => 'Country',
				'expanded' => false, //expanded=false multiple=false is dropdown, expanded=true multiple=false is radio button, expanded=true multiple=true is checkboxes
				'multiple'  => false,
				'attr'  => ['name' =>'country'],
				'choices'  => $countries,
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'country_'.strtolower($value)];
				},
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbContactInfo',
		));
	}

	public function getName()
	{
		return 'donation_application_contact_info';
	}
}