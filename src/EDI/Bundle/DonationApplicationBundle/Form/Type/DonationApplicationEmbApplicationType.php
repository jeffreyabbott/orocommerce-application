<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Form\Transformer\ChoiceToStringTransformer;
use EDI\Bundle\DonationApplicationBundle\Form\Type\DonationApplicationStipulationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; //Should this be the ORO version?
use Symfony\Component\Form\Extension\Core\Type\CollectionType; //Should this be the ORO version?
use Symfony\Component\Form\Extension\Core\Type\TextType; //Should this be the ORO version?
use Oro\Bundle\FormBundle\Form\Type\OroDateType;



class DonationApplicationEmbApplicationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id')
			->add('embNumber')
			->add('datetimeCreated')
			->add('initials')
			->add('email')
			->add('photo1')
			->add('photo2')
			->add('photo1Description')
			->add('photo2Description')
			->add('includePhoto')
			->add('includePhotoOffice')
			->add('includePhotoWebPrint')
			->add('embSrcOwn', ChoiceType::class, [
                'label'    => false,
                'required' => false,
                'expanded' => true,
                'multiple'  => true,
                //'mapped' => array(),
                'attr'  => ['name' => 'emb_src_own'],
                'choices'  => [
                    'Our eggs and sperm were used to create the embryos (i.e.,the embryos were not created using donor eggs or donor sperm).' => 'Yes',
                    ],
            ])
/*            ->get('embSrcOwn')
                ->addModelTransformer(new CallbackTransformer(
                    function ($embSrcOwnAsString) {
                        // transform the string to array
                        return [0=>$embSrcOwnAsString];
                    },
                    function ($embSrcOwnAsArray) {
                        // transform the array to string
                        return $embSrcOwnAsArray[0];
                    }
                ))
*/
            ->add('embSrcOwnPi1', TextType::class, ['label'=> false])
			->add('embSrcOwnPi2', TextType::class, ['label'=> false])
			->add('embSrcDonorSperm', ChoiceType::class, [
                'label'    => false,
                'required' => false,
                'expanded' => true,
                'multiple'  => true,
                //'mapped' => false,
				'attr'  => ['name' => 'emb_src_donor_sperm'],
                'choices'  => [
                    'All the embryos were created using our eggs and donor sperm.' => 'Yes',
                ],
            ])
 /*           ->get('embSrcDonorSperm')
                ->addModelTransformer(new CallbackTransformer(
                    function ($embSrcDonorSpermAsString) {
                        // transform the string to array
                        return [0=>$embSrcDonorSpermAsString];
                    },
                    function ($embSrcDonorSpermAsArray) {
                        // transform the array to string
                        return $embSrcDonorSpermAsArray[0];
                    }
                ))
 */           ->add('embSrcDonorSpermPi1', TextType::class, ['label'=> false])
			->add('embSrcDonorSpermPi2', TextType::class, ['label'=> false])
			->add('embSrcDonorEggs', ChoiceType::class, [
				'attr'  => ['name' => 'emb_src_donor_eggs'],
                'label'    => false,
                'required' => false,
                'expanded' => true,
                'multiple'  => true,
                //'mapped' => false,
                'choices'  => [
                    'All the embryos were created using donor eggs and our sperm.' => 'Yes',
                ],
			])
/*            ->get('embSrcDonorEggs')
                ->addModelTransformer(new CallbackTransformer(
                    function ($embSrcDonorEggsAsString) {
                        // transform the string to array
                        return [0=>$embSrcDonorEggsAsString];
                    },
                    function ($embSrcDonorEggsAsArray) {
                        // transform the array to string
                        return $embSrcDonorEggsAsArray[0];
                    }
                ))
*/
            ->add('embSrcDonorEggsPi1', TextType::class, ['label'=> false])
			->add('embSrcDonorEggsPi2', TextType::class, ['label'=> false])
			->add('embSrcMixture', ChoiceType::class, [
				'attr'  => ['name' => 'emb_src_mixture'],
                'label'    => false,
                'required' => false,
                'expanded' => true,
                'multiple'  => true,
                /*'mapped' => 'string',*/
                'choices'  => [
                    'We have a mixture of embryos that were created with our own eggs and sperm as well as donated eggs and/or donated sperm.' => 'Yes',
                ],
			])
/*            ->get('embSrcMixture')
                ->addModelTransformer(new CallbackTransformer(
                    function ($embSrcMixtureAsString) {
                        // transform the string to array
                        return [0=>$embSrcMixtureAsString];
                    },
                    function ($embSrcMixtureAsArray) {
                        // transform the array to string
                        return $embSrcMixtureAsArray[0];
                    }
                ))
*/          ->add('embSrcMixturePi1', TextType::class, ['label'=> false])
			->add('embSrcMixturePi2', TextType::class, ['label'=> false])
			->add('agreeBloodReTest', ChoiceType::class, [
				'label' => false,
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'agree_blood_re_test'],
				'choices'  => [
					'We agree to have our blood re-tested in the future at no expense to ourselves' => 'Yes',
					'We do not agree to have our blood re-tested.' => 'No',
				],
                'choice_attr' => function($choice, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['class' => 'agree_blood_re_test'];
                },
			])
			->add('agreeBloodReTestPi1')
			->add('agreeBloodReTestPi2')
			->add('pastEmbryoDonor')
			->add('otherFacilities')
			->add('bestQualities')
			->add('srmsComments')
			->add('sayToRecipient')
			->add('informationTrueAccurate')
			->add('signedNameHusband')
			->add('signedNameWife')
			->add('signedDate')
			->add('otherLimitingStipulations')
			->add('onReserve')
			->add('isActive')
			->add('category', ChoiceType::class, [
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'category'],
				'choices'  => [
/*					'Anonymous Embryo Donation <br> This is the most common form of embryo donation. It is perfect the the donors who are wanting to provide a wonderful gift while desiring closure in donating their embryos. It is ideal for the embryo recipient who wants the least expensive option in receiving embryos. The decision to accept the embryo recipient into the program is the responsibility of EDI\'s clinicians, who have over a quarter century of combined experience in the infertility field. EDI is strongly committed to help match healthy cryopreserved embryos with healthy embryo recipients.' => 'Anonymous',
					'Approved Embryo Donation <br> This is the second most common form of embryo donation. It is ideal for the donors who want additional information about the recipients. It is ideal for the recipients that are willing to participate in the MHP interview process. EDI still ultimately decides which embryo recipients are emotionally and physically ready to accept donated embryos gathering on their vast experience in the field of embryo donation.' => 'Approved',
					'Open Embryo Donation <br> This is the least common form of embryo donation. It requires a greater level of participation for both donors and recipients. This is the most expensive form of embryo donation. The donors and recipients will know each other. It is up to the participants themselves how much a relationship they will have after the embryos are transferred. It is uncertain if the Florida state statutes will protect all participants, so legal representation is required and contracts will need to be signed.' => 'Open'
*/
					'Anonymous Embryo Donation' => 'Anonymous',
					'Approved Embryo Donation' => 'Approved',
					'Open Embryo Donation' => 'Open'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'category_'.strtolower($value)];
				},
			])
			->add('mhpOption' , ChoiceType::class, [
				'label' => 'If you need help to work though the decision to participate in the IDP, a skilled Mental Health Professional (MHP) will be found to assist you. Do you need MHP assistance?',
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'mhp_option'],
				'choices'  => [
					'Yes' => 'Yes',
					'No' => 'No'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'mhp_option_'.strtolower($value)];
				},
			])
			->add('ptpIdpOption', ChoiceType::class, [
				'label' => 'Do you want to participate in the Identity Disclosure Program™?',
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'ptp_idp_option'],
				'choices'  => [
					'Yes' => 'Yes',
					'No' => 'No'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'ptp_idp_option_'.strtolower($value)];
				},
			])
			->add('mhpDonorInfo', ChoiceType::class, [
				'label' => 'Choose One*',
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'mhp_donor_info'],
				'choices'  => [
					'Single' => 'Single',
					'Partner' => 'Partner',
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'mhp_donor_'.strtolower($value).'_info'];
				},
			])
			->add('donorSingleName')
			->add('donorSingleSignature')
			->add('donorFirstPartnerName')
			->add('donorFirstPartnerSignature')
			->add('donorSecondPartnerName')
			->add('donorSecondPartnerSignature')
			->add('idInfoWhen', ChoiceType::class, [
				'label' => 'Identifying information will be provided when',
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'id_info_when'],
				'choices'  => [
					'When the DCO is any age' => '1',
					'When the DCO is six or more years of age' => '2',
					'When the DCO is 12 or more years of age' => '3',
					'When the DCO is 18 or more years of age' => '4'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'id_info_when_'.strtolower($value)];
				},
			])
			->add('embryoStatus')
			->add('embryosWhenCreated',  OroDateType::class, [
				'label' => 'When were they created?',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
			])
			->add('embryosWhereCreated')
			->add('embryosMultipleStorageFacilities', ChoiceType::class, [
				'label' => 'Is there more than one storage facility that currently has your embryos?',
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'embryos_multiple_storage_facilities'],
				'choices'  => [
					'Yes' => 'Yes',
					'No' => 'No'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'embryos_multiple_storage_facilities_'.strtolower($value)];
				},
			])
			->add('embryosWhereStored')
			->add('embryosHowManyStored')
			->add('embryosResidualStorageFees', ChoiceType::class, [
				'label' => ' Are there any residual storage fees currently?',
				'expanded' => true,
				'multiple'  => false,
				'attr'  => ['name' =>'embryos_residual_storage_fees'],
				'choices'  => [
					'Yes' => 'Yes',
					'No' => 'No'
				],
				'choice_attr' => function($choiceValue, $key, $value) {
					// adds a class like attending_yes, attending_no, etc
					return ['id' => 'embryos_residual_storage_fees_'.strtolower($value)];
				},
			])
			->add('embCharity')
			->add('userId')
			->add('datetimeModified')
			->add('medicalStaffComments')
			->add('medicalDirectorComments')
			->add('drReviewDatetime')
			->add('isArchive')
			->add('datetimeAcrhived')
			->add('embryosWereTheyCreatedName')
			->add('embryosWereTheyCreatedLocation')
			->add('embryosWereTheyCreatedName1')
			->add('embryosWereTheyCreatedLocation1')
            ->add('marriage_stipulations', CollectionType::class, [
                'entry_type' => DonationApplicationStipulationType::class,
                'entry_options' => ['label' => true],
            ])
            ->add('religion_stipulations', CollectionType::class, [
                'entry_type' => DonationApplicationStipulationType::class,
                'entry_options' => ['label' => true],
            ])
            ->add('race_stipulations', CollectionType::class, [
                'entry_type' => DonationApplicationStipulationType::class,
                'entry_options' => ['label' => true],
            ])


            /*            ->add('stipulations', CollectionType::class, [
                'entry_type' => DonationApplicationStipulationType::class,
                'entry_options' => ['label' => true],
            ])
            ->add('religion_stipulations',CollectionType::class, [
                'entry_type' => StipulationBaseType::class,
                'entry_options' => [
                    'stipulation_type' => EDIConstants::STIPULATION_TYPE_RELIGION,
                    'is_multiple' => true,
                ],
            ])
            ->add('race_stipulations',CollectionType::class, [
                'entry_type' => StipulationBaseType::class,
                'entry_options' => [
                    'stipulation_type' => EDIConstants::STIPULATION_TYPE_RACE,
                    'is_multiple' => true,
                ],
            ]) */
            ->add('location_stipulation', DonationApplicationLocationStipulationType::class
            )

            ->add('education_stipulation', DonationApplicationEducationStipulationType::class
            )
    /*        ->add('test_button', SubmitType::class, [
                    'label' => 'Test',
                    'attr' => ['class' => 'save'],
                ])*/

        ;
        $builder->get('embSrcOwn')->addModelTransformer(new CallbackTransformer(
            function ($embSrc) {
                return array($embSrc);
            },
            function ($embSrc) {
                return $embSrc[0];
            }
        ));
        $builder->get('embSrcDonorSperm')->addModelTransformer(new CallbackTransformer(
            function ($embSrc) {
                return array($embSrc);
            },
            function ($embSrc) {
                return $embSrc[0];
            }
        ));

        $builder->get('embSrcDonorEggs')->addModelTransformer(new CallbackTransformer(
            function ($embSrc) {
                return array($embSrc);
            },
            function ($embSrc) {
                return $embSrc[0];
            }
        ));

        $builder->get('embSrcMixture')->addModelTransformer(new CallbackTransformer(
            function ($embSrc) {
                // transform the string back to an array
                return array($embSrc);
            },
            function ($embSrc) {
                // transform the array to a string
                return $embSrc[0];
            }

        ));

    }



	public function getName()
	{
		return 'donation_application';
	}

}