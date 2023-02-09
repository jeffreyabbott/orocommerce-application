<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
//use Oro\Bundle\AttachmentBundle\Form\Type\FileType;

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Image;


class DonationApplicationPictureType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
	//		->add('id')
	//		->add('pictureFileName')

			->add('pictureFileName', FileType::class, [
				'label' => 'Upload Picture:',

				// unmapped means that this field is not associated to any entity property
				'mapped' => false,

				// make it optional so you don't have to re-upload the PDF file
				// every time you edit the Product details
				'required' => false,
				// unmapped fields can't define their validation using annotations
				// in the associated entity, so you can use the PHP constraint classes
				'constraints' => [
                        new Image([
                            'maxSize' => '2M',
                            'mimeTypesMessage' => 'Please upload a valid image file',
                        ])
				],
			])

			->add('nameAlias', TextType::class, [
				'label' => 'Name or Alias:'
			])
			->add('description')
			->add('includePictureWebPrint', ChoiceType::class, [
				'label' => '',
				'expanded' => true,
				'multiple'  => true,
				'choices'  => [
					'Yes, I agree to have my photograph shown within the EDI office only and not published on the web site' => 'Yes'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'include_picture_office_'.strtolower($key)];
				},
			])
			->add('includePictureOffice', ChoiceType::class, [
				'label' => '',
				'expanded' => true,
				'multiple'  => true,
				'choices'  => [
					'Yes, I agree to have my photograph published in print and/or on the web. I would also like to use the Name or Alisa above for the web site' => 'Yes'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'include_picture_office_'.strtolower($key)];
				},
			])
			->add('isActive')
			->add('isApproved');
        $builder->get('includePictureWebPrint')->addModelTransformer(new CallbackTransformer(
            function ($includePictureWebPrint) {
                return array($includePictureWebPrint);
            },
            function ($includePictureWebPrint) {
                return $includePictureWebPrint[0];
            }
        ));
        $builder->get('includePictureOffice')->addModelTransformer(new CallbackTransformer(
            function ($includePictureOffice) {
                return array($includePictureOffice);
            },
            function ($includePictureOffice) {
                return $includePictureOffice[0];
            }
        ));
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbPicture',
		));
	}

	public function getName()
	{
		return 'donation_application_picture';
	}
}