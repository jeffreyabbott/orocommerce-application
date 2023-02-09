<?php

namespace EDI\Bundle\DonationApplicationBundle\Form\Type;
use EDI\Bundle\DonationApplicationBundle\Entity\EDIConstants;
use Oro\Bundle\FormBundle\Form\Type\OroDateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface; // Fatal error: Declaration of InventoryBundle\Form\Type\VehicleType::configureOptions(InventoryBundle\Form\Type\OptionsResolver $resolver) must be compatible with Symfony\Component\Form\FormTypeInterface::configureOptions(Symfony\Component\OptionsResolver\OptionsResolver $resolver)
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType; //Should this be the ORO version?
use Symfony\Component\Form\Extension\Core\Type\TextType; //Should this be the ORO version?
use Symfony\Component\Form\Extension\Core\Type\EmailType; //Should this be the ORO version?


class DonationApplicationRecipientType  extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('id') //numeric
			->add('fullName') //old version
			->add('address') //text
			->add('city')  //text
			->add('state',  ChoiceType::class, [
                'label' => 'State',
                'expanded' => false,
                'multiple'  => false,
                'attr'  => ['name' =>'state'],
                'choices'  => EDIConstants::STATES,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'state_'.strtolower($value).'_id'];
                },
                ]) //convert to dropdown of states?
			->add('postCode') // zip code for usa - text
			->add('country',  ChoiceType::class, [
                'label' => 'Country',
                'expanded' => false,
                'multiple'  => false,
                'attr'  => ['name' =>'country'],
                'choices'  => EDIConstants::COUNTRIES,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'country_'.strtolower($value).'_id'];
                },
            ]) //Drop down.
			->add('email', EmailType::class) //email
			->add('cellPhone') //Text
			->add('workPhone') //Text (this is not on the new pages - old version)
			->add('homePhone') //Text
			->add('videoConferencing', ChoiceType::class, [
                'label' => 'Do you have Video Conferencing abilities (Y/N)',
                'expanded' => false,
                'multiple'  => false,
                'attr'  => ['name' =>'video_conferencing'],
                'choices'  => [
                    'Yes' => 'Yes',
                    'No' => 'No'
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'video_conferencing_'.strtolower($value)."_id"];
                },
            ])
			->add('videoConferencingProvider')
			->add('videoConferencingUserName')
			->add('emailContactOk')
			->add('cellPhoneContactOk')
			->add('workPhoneContactOk')
			->add('homePhoneContactOk')
			->add('maritalStatus', ChoiceType::class, [
                'label' => 'Marital Status',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'martial_status'],
                'choices'  => EDIConstants::MARITAL_STATUS,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'marital_status_'.strtolower($value)."_id"];
                },
            ])
			->add('birthDate', OroDateType::class, [
                'label' => 'DOB',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
			->add('currentAge') // calculated / remove
			->add('heightFt', NumberType::class)
			->add('heightIn', NumberType::class)
			->add('weightLbs',NumberType::class)
			->add('bmiCalculation') // Remove from Form as it is calculated or make read only
			->add('raceEthnicBackground') // text box
			->add('currentReligion')
			->add('currentHealthProblems')
			->add('currentMedications')
			->add('cigaretteSmoker',ChoiceType::class, [
                'label' => 'Do you smoke?',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'cigarette_smoker'],
                'choices'  => [
                    'Yes' => 'Yes',
                    'No' => 'No'
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'cigarette_smoker_'.strtolower($value)."_id"];
                },
            ])
			->add('partnerFullName')
			->add('partnerEmail')
			->add('partnerCellPhone')
			->add('partnerWorkPhone')
			->add('partnerHomePhone')
			->add('partnerVideoConferencing')
			->add('partnerVideoConferencingProvider')
			->add('partnerVideoConferencingUserName')
			->add('partnerEmailContactOk')
			->add('partnerCellPhoneContactOk')
			->add('partnerHomePhoneContactOk')
			->add('partnerWorkPhoneContactOk')
			->add('partnerBirthDate', OroDateType::class, [
                'label' => 'DOB',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
			->add('partnerCurrentAge') //calculated / remove
			->add('partnerHeightFt', NumberType::class)
			->add('partnerHeightIn', NumberType::class)
			->add('partnerWeightLbs', NumberType::class)
			->add('partnerBmiCalculation')
			->add('partnerRaceEthnicBackground') // text box
			->add('partnerCurrentReligion')
			->add('partnerCurrentHealthProblems')
			->add('partnerCurrentMedications')
			->add('partnerCigaretteSmoker')
			->add('totalInfertilityYears', NumberType::class)
			->add('infertilityNarrative', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
            ])
			->add('gynaecologicSurgeries') //text
			->add('hsgPerformed') //Not sure if this is ADMIN or not. remove on display
			->add('hsgDetails') //text
			->add('fallopianTubes') //text
			->add('uterineCavityEvaluation') //text
			->add('uterineCavitySurgery') //Text
			->add('numPregnancies', NumberType::class) //
			->add('numTermDeliveries', NumberType::class)
			->add('numPretermDeliveries', NumberType::class)
			->add('numSpontaneousLosses', NumberType::class)
			->add('spontaneousLossesEval') //text
			->add('numElectiveTerminations', NumberType::class)
			->add('numLivingChildren', NumberType::class)
			->add('numLivingChildrenWithCurrentPartner', NumberType::class)
			->add('numLivingChildrenWithOtherPartners', NumberType::class)
			->add('numAdoptedChildren', NumberType::class)
			->add('partnerNumLivingChildrenWithOtherPartners')
			->add('partnerNumAdoptedChildren')
			->add('signedName') //text
			->add('signedDate', OroDateType::class, [
                'label' => 'DOB',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
			->add('partnerSignedName')
			->add('partnerSignedDate')
			->add('recipientNotes') // text
			->add('medicalStaffComments', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
            ]) //Still used or is this moved?
			->add('medicalStatus')
			->add('medicalStatusUpdateDate')
			->add('medicalNameOfPersonUpdating')
			->add('medicalApprovalDate') //This the same as Approval Date?
			->add('medicalRanking', ChoiceType::class, [
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'medical_ranking'],
                'choices'  => [
                    /*					'Anonymous Embryo Donation <br> This is the most common form of embryo donation. It is perfect the the donors who are wanting to provide a wonderful gift while desiring closure in donating their embryos. It is ideal for the embryo recipient who wants the least expensive option in receiving embryos. The decision to accept the embryo recipient into the program is the responsibility of EDI\'s clinicians, who have over a quarter century of combined experience in the infertility field. EDI is strongly committed to help match healthy cryopreserved embryos with healthy embryo recipients.' => 'Anonymous',
                                        'Approved Embryo Donation <br> This is the second most common form of embryo donation. It is ideal for the donors who want additional information about the recipients. It is ideal for the recipients that are willing to participate in the MHP interview process. EDI still ultimately decides which embryo recipients are emotionally and physically ready to accept donated embryos gathering on their vast experience in the field of embryo donation.' => 'Approved',
                                        'Open Embryo Donation <br> This is the least common form of embryo donation. It requires a greater level of participation for both donors and recipients. This is the most expensive form of embryo donation. The donors and recipients will know each other. It is up to the participants themselves how much a relationship they will have after the embryos are transferred. It is uncertain if the Florida state statutes will protect all participants, so legal representation is required and contracts will need to be signed.' => 'Open'
                    */
                    'No children. Few fertility options, limited finances or resources.' => '1',
                    'No living children (death of a child). Few fertility options, limited finances or resources.' => '2',
                    'One partner raised one or more children with different partner' => '3',
                    'Both partners raised children with different partners' => '4',
                    'Raised one adopted child together' => '5',
                    'Raised one genetic child together' => '6',
                    'Raised children with other partners and one genetic child together' => '7',
                    'No children but with other fertility options' => '8',
                    'Raised multiple genetic children together' => '9',
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'medical_ranking_'.strtolower($value)];
                },
            ]) //This the same as Ranking?
			->add('medicalDirectorComments')
			->add('weightingIndex')
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
			->add('mhpRecipientOption')
			->add('approved')
			->add('drReviewDatetime')
			->add('createdAt')
			->add('updatedAt')
			->add('deletedAt')
			->add('infertilitySignature')//text
			->add('partnerInfertilitySignature')
			->add('infertilityAgree', ChoiceType::class, [
                'label' => 'I/We have read and understood the above and hereby allow EDI to list the country in which I/We currently live (the region of the country if within the US), the type of embryo donation procedure I/we have agreed their embryos:',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'admin_idp'],
                'choices'  => [
                    'Do' => 'Do',
                    'Do not' => 'Do not'
                ],
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'admin_idp_'.strtolower($value)."_id"];
                },
            ])
			->add('infoAccurateTrue', ChoiceType::class, [
                'label' => '',
                'expanded' => true,
                'multiple'  => true,
                'choices'  => [
                    'I acknowledge that the information supplied above is true and accurate.' => '1'
                ],
                'mapped' => false
            ])
			->add('partnerInfoAccurateTrue')
			->add('publishToStories')
			->add('publishInfertilityNarrative')
			->add('userId')
			->add('isActive')
			->add('isArchive')
			->add('datetimeAcrhived')
			->add('sexual')
			->add('race', ChoiceType::class, [
                'label' => 'Race',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'race'],
                'choices'  => EDIConstants::RACES,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'race_'.strtolower($value)."_id"];
                },
            ])
			->add('religion', ChoiceType::class, [
                'label' => 'Religion',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'religion'],
                'choices'  => EDIConstants::RELIGIONS,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'religion_'.strtolower($value)."_id"];
                },
            ])
			->add('eduction', ChoiceType::class, [
                'label' => 'Education',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'education'],
                'choices'  => EDIConstants::EDUCATIONS,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'education_'.strtolower($value)."_id"];
                },
            ])
			->add('educationPartner') // Not used any longer for legacy
			->add('locationa')
			->add('locationNotes')
			->add('racePartner', ChoiceType::class, [
                'label' => 'Partner Race',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'race_partner'],
                'choices'  => EDIConstants::RACES,
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'race_partner_'.strtolower($value)."_id"];
                },
            ])
			->add('region')//;
// Added by JDA 2023-01-05
        ->add('adminAddTestimonial')
        ->add('adminAddTestimonialAttachments')
        ->add('adminAddTestimonialDate')
        ->add('adminAddTestimonialDisplayWebsite')
        ->add('adminAddTestimonialInitials')
        ->add('adminArtPrescriptionCompletedFaxed')
        ->add('adminArtPrescriptionCompletedFaxedDate')
        ->add('adminArtPrescriptionCompletedFaxedInitials')
        ->add('adminBaselineDate')
        ->add('adminBiochemicalLossPul')
        ->add('adminBiochemicalLossPulDate')
        ->add('adminBiochemicalLossPulInitials')
        ->add('adminCardiacConsultRequired')
        ->add('adminCardiacConsultRequiredDate')
        ->add('adminCardiacConsultRequiredInitials')
        ->add('adminCardiacConsultResultsObtained')
        ->add('adminCardiacConsultResultsObtainedDate')
        ->add('adminCardiacConsultResultsObtainedInitials')
        ->add('adminConfirmationReceivedFromLab', ChoiceType::class, [
                'label' => 'Confirmation received from the laboratory',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminConfirmationReceivedFromLab'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminConfirmationReceivedFromLab_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminConfirmationReceivedFromLabDate', OroDateType::class, [
                'label' => 'Confirmation received from laboratory Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminConfirmationReceivedFromLabInitials')//Text

        ->add('adminConfirmedReceivedFromLab')
        ->add('adminConfirmedReceivedFromLabDate')
        ->add('adminConfirmedReceivedFromLabIntials')
        ->add('adminCriminalBackgroundCheckRequest')
        ->add('adminCriminalBackgroundCheckRequestDate')
        ->add('adminCriminalBackgroundCheckRequestInitials')
        ->add('adminCriminalBackgroundCheckResults')
        ->add('adminCriminalBackgroundCheckResultsDate')
        ->add('adminCriminalBackgroundCheckResultsInitials')
        ->add('adminCriminalHistoryConsentReceived')
        ->add('adminCriminalHistoryConsentReceivedDate')
        ->add('adminCriminalHistoryConsentReceivedInitials')
        ->add('adminCriminalHistoryConsentSent')
        ->add('adminCriminalHistoryConsentSentDate')
        ->add('adminCriminalHistoryConsentSentInitials')
        ->add('adminDcoRecptAndDonorsDoContact')
        ->add('adminDcoRecptAndDonorsDoContactDate')
        ->add('adminDcoRecptAndDonorsDoContactInitials')
        ->add('adminDeliveryRegistered')
        ->add('adminDeliveryRegisteredChildrenNames')
        ->add('adminDonorsAcceptRejectRecpt', ChoiceType::class, [
            'label' => 'Donors Accept/Reject Recipient',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminDonorsAcceptRejectRecpt'],
            'choices'  => [
                'Accept' => 'Accept',
                'Reject' => 'Reject'
            ],
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminDonorsAcceptRejectRecpt_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminDonorsAcceptRejectRecptDate', OroDateType::class, [
                'label' => '<change_label> Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminDonorsAcceptRejectRecptInitials', TextType::class, [
                'label' => '<change_label> Initials'
            ])

        ->add('adminDonorsProvidedMhpContactInfo', ChoiceType::class, [
                'label' => 'Donor(s) provided MHP Contact Information',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminDonorsProvidedMhpContactInfo'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminDonorsProvidedMhpContactInfo_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminDonorsProvidedMhpContactInfoDate', OroDateType::class, [
                'label' => 'Donor(s) provided MHP Contact Information Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminDonorsProvidedMhpContactInfoInitials', TextType::class, [
                'label' => 'Donor(s) provided MHP Contact Information Initials'
            ])
        ->add('adminEarlySpontaneouseLoss')
        ->add('adminEarlySpontaneouseLossDate')
        ->add('adminEarlySpontaneouseLossInitials')
        ->add('adminEctopic')
        ->add('adminEctopicDate')
        ->add('adminEctopicInitials')
        ->add('adminEdiConsentsReceived', ChoiceType::class, [
            'label' => 'EDI consents received?',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminEdiConsentsReceived'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminEdiConsentsReceived_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminEdiConsentsReceivedDate', OroDateType::class, [
                'label' => 'EDI consents received Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminEdiConsentsReceivedInitials', TextType::class, [
                'label' => 'EDI consents received Initials'
            ])
        ->add('adminEdiFdetLabSummaryCycleWorksheetCompleted', ChoiceType::class, [
            'label' => 'EDI FDET Laboratory Summary Cycle Worksheet completed',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminEdiFdetLabSummaryCycleWorksheetCompleted'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminEdiFdetLabSummaryCycleWorksheetCompleted_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminEdiFdetLabSummaryCycleWorksheetCompletedDate', OroDateType::class, [
            'label' => 'EDI FDET Laboratory Summary Cycle Worksheet completed Date',
            'widget' => 'single_text',
            'input' => 'string',
            //default format of the date
            'format' => 'yyyy-MM-dd',
        ])
        ->add('adminEdiFdetLabSummaryCycleWorksheetCompletedInitials', TextType::class, [
            'label' => 'EDI FDET Laboratory Summary Cycle Worksheet completed Date'
        ])
        ->add('adminEmailedNewPatientPaperwork', ChoiceType::class, [
                'label' => 'Recipient emailed / mailed New Patient Paperwork & EDI Consents?',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminEmailedNewPatientPaperwork'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminEmailedNewPatientPaperwork_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminEmailedNewPatientPaperworkDate', OroDateType::class, [
                'label' => 'Recipient email / mailed New Patient Paperwork & EDI Consents Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminEmailedNewPatientPaperworkInitials') //Text field
        ->add('adminEstimatedDeliveryDate')
        ->add('adminEstimatedDeliveryDatePregnancyTest')
        ->add('adminFetalDemise')
        ->add('adminFetalDemiseDate')
        ->add('adminFetalDemiseInitials')
        ->add('adminFinalEmbryologyConfirmationTransferedToEdi')
        ->add('adminFinalEmbryologyConfirmationTransferedToEdiDate')
        ->add('adminFinalEmbryologyConfirmationTransferedToEdiInitials')
        ->add('adminFinancialDiscussionScheduled', ChoiceType::class, [
            'label' => 'Has the Financial Discussion Been Scheduled?',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminFinancialDiscussionScheduled'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminFinancialDiscussionScheduled_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminFinancialDiscussionScheduledDate', OroDateType::class, [
            'label' => 'Financial Discussion Scheduled Date',
            'widget' => 'single_text',
            'input' => 'string',
            //default format of the date
            'format' => 'yyyy-MM-dd',
        ])
        ->add('adminFinancialDiscussionScheduledInitals') //Text field
        ->add('adminFinancialDiscussionScheduledDonor')
        ->add('adminFinancialDiscussionScheduledDonorDate')
        ->add('adminFinancialDiscussionScheduledDonorInitials')
        ->add('adminIdp', ChoiceType::class, [
            'label' => 'Do you want only embryos with the IDP option available understanding this may limit your choice?',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'admin_idp'],
            'choices'  => [
                'Yes' => 'Yes',
                'No' => 'No'
            ],
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'admin_idp_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminIdpContactPermitted')
        ->add('adminIdpDonorConfirmsIdpFirstMethodOfContact')
        ->add('adminIdpDonorConfirmsIdpFirstMethodOfContactDate')
        ->add('adminIdpDonorConfirmsIdpFirstMethodOfContactInitials')
        ->add('adminIdpDonorsFailedToContactDcoRecpt')
        ->add('adminIdpDonorsFailedToContactDcoRecptDate')
        ->add('adminIdpDonorsFailedToContactDcoRecptInitials')
        ->add('adminIdpDonorsFailedToContactDcoRecptSweet')
        ->add('adminIdpFailureToContactDonor')
        ->add('adminIdpFailureToContactDonorSweet')
        ->add('adminIdpNotificationOfDonor')
        ->add('adminIdpNotificationOfDonorContactAttempt')
        ->add('adminIdpRequestMadeByDcoRecpt')
        ->add('adminIdpRequestMadeByDcoRecptDate')
        ->add('adminIdpRequestMadeByDcoRecptInitials')
        ->add('adminInfoAboutGeneticDiseases')
        ->add('adminInfoAboutGeneticDiseasesDate')
        ->add('adminInfoAboutGeneticDiseasesInitials')
        ->add('adminLateSpontaneousLoss')
        ->add('adminLateSpontaneousLossDate')
        ->add('adminLateSpontaneousLossInitials')
        ->add('adminMaternalFetalMedicineConsultRequired')
        ->add('adminMaternalFetalMedicineConsultRequiredDate')
        ->add('adminMaternalFetalMedicineConsultRequiredInitials')
        ->add('adminMedicalRecordsRequestSent', ChoiceType::class, [
                'label' => 'Medical Records Request Sent',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMedicalRecordsRequestSent'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMedicalRecordsRequestSent_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMedicalRecordsRequestSentDate', OroDateType::class, [
                'label' => 'Medical Records Request Sent Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMedicalRecordsRequestSentInitials', TextType::class, [
                'label' => 'Medical Records Request Sent Initials'
            ]) //text
        ->add('adminMedicalRecordsRequestReceived', ChoiceType::class, [
                'label' => 'Medical Records Request Received',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMedicalRecordsRequestReceived'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMedicalRecordsRequestReceived_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMedicalRecordsRequestReceivedDate', OroDateType::class, [
                'label' => 'Medical Records Request Received Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMedicalRecordsRequestReceivedInitials', TextType::class, [
                'label' => 'Medical Records Request Received Initials'
            ]) //text
        ->add('adminMfmConsultResultsObtained')
        ->add('adminMfmConsultResultsObtainedDate')
        ->add('adminMfmConsultResultsObtainedInitials')
        ->add('adminMhpFound', ChoiceType::class, [
            'label' => 'MHP Found',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpFound'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpFound_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpFoundDate', OroDateType::class, [
                'label' => 'MHP Found Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpFoundInitials', TextType::class, [
                'label' => 'MHP Found Initials'
            ])
        ->add('adminMhpFoundNameContactInfo') //Text
        ->add('adminMhpFoundDonors', ChoiceType::class, [
                'label' => 'MHP Found Donors',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMhpFoundDonors'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMhpFoundDonors_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMhpFoundDonorsDate', OroDateType::class, [
                'label' => 'MHP Found Donors Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpFoundDonorsInitials', TextType::class, [
                'label' => 'MHP Found Donors Initials'
            ])
        ->add('adminMhpReportObtained', ChoiceType::class, [
            'label' => 'MHP Report Obtained',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpReportObtained'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpReportObtained_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpReportObtainedDate', OroDateType::class, [
                'label' => 'MHP Report Obtained Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpReportObtainedInitials', TextType::class, [
                'label' => 'MHP Report Obtained Initials'
            ])
        ->add('adminMhpReportObtainedDonor', ChoiceType::class, [
                'label' => 'MHP Report Obtained Donor',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMhpReportObtainedDonor'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMhpReportObtainedDonor_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMhpReportObtainedDonorDate', OroDateType::class, [
                'label' => 'MHP Report Obtained Donor Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpReportObtainedDonorInitials', TextType::class, [
                'label' => 'MHP Report Obtained Donor Initials'
            ])

        ->add('adminMhpReportSentDonor', ChoiceType::class, [
            'label' => 'MHP Report sent to Donor(s) intact',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpReportSentDonor'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpReportSentDonor_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpReportSentDonorDate', OroDateType::class, [
                'label' => 'MHP Report sent to Donor(s) intact Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpReportSentDonorInitials', TextType::class, [
                'label' => 'MHP Report sent to Donor(s) intact Initials'
            ])

        ->add('adminMhpReportSentDonorIdentyRemoved', ChoiceType::class, [
            'label' => 'MHP report sent to Donor(s) with Identifying Information removed',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpReportSentDonorIdentyRemoved'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpReportSentDonorIdentyRemoved_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpReportSentDonorIdentyRemovedDate', OroDateType::class, [
                'label' => 'MHP report sent to Donor(s) with Identifying Information removed Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpReportSentDonorIdentyRemovedInitials', TextType::class, [
                'label' => 'MHP report sent to Donor(s) with Identifying Information removed Initials'
            ])

        ->add('adminMhpReportSentRecpt', ChoiceType::class, [
            'label' => 'MHP report sent to Recipient(s) intact',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpReportSentRecpt'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpReportSentRecpt_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpReportSentRecptDate', OroDateType::class, [
                'label' => 'MHP report sent to Recipient(s) intact Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpReportSentRecptInitials', TextType::class, [
                'label' => 'MHP report sent to Recipient(s) intact Initials'
            ])

        ->add('adminMhpRequestedByDonor',ChoiceType::class, [
                'label' => 'MHP Requested by Donor',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMhpRequestedByDonor'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMhpRequestedByDonor_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMhpRequestedByDonorDate', OroDateType::class, [
                'label' => 'MHP Requested by Donor Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpRequestedByDonorInitials', TextType::class, [
                'label' => 'MHP Requested by Donor Initials'
            ])

        ->add('adminMhpRequestedByRecpt',ChoiceType::class, [
            'label' => 'MHP Requested by Recipient',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpRequestedByRecpt'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpRequestedByRecpt_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpRequestedByRecptDate', OroDateType::class, [
                'label' => 'MHP Requested by Recipient Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpRequestedByRecptInitials', TextType::class, [
                'label' => 'MHP Requested by Recipient Initials'
            ])
        ->add('adminMhpRequiredOfDonors', ChoiceType::class, [
            'label' => 'MHP Required of Donors',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpRequiredOfDonors'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpRequiredOfDonors_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpRequiredOfDonorsDate', OroDateType::class, [
                'label' => 'MHP Required of Donors Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpRequiredOfDonorsInitials', TextType::class, [
                'label' => 'MHP Required of Donors Initials'
            ])

        ->add('adminMhpRequiredOfRecpt', ChoiceType::class, [
            'label' => 'MHP Required of Recipient',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminMhpRequiredOfRecpt'],
            'choices'  => [
                'No for anonymous' => 'No',
                'Yes for Approved and Open' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminMhpRequiredOfRecpt_'.strtolower($value)."_id"];
            },
        ])
        ->add('adminMhpRequiredOfRecptDate') //Remove in controller
        ->add('adminMhpRequiredOfRecptIntials') //Remove in controller
        ->add('adminMhpVetted', ChoiceType::class, [
                'label' => 'MHP Vetted',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMhpVetted'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMhpVetted_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMhpVettedDate', OroDateType::class, [
                'label' => 'MHP Vetted Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpVettedInitials', TextType::class, [
                'label' => 'MHP Vetted Initials'
            ])
        ->add('adminMhpVettedWillingnessToSeeRecipients') //text
        ->add('adminMhpVettedDonors', ChoiceType::class, [
                'label' => 'MHP Vetted Donors',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminMhpVettedDonors'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminMhpVettedDonors_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminMhpVettedDonorsDate', OroDateType::class, [
                'label' => 'MHP Vetted Donors Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminMhpVettedDonorsInitials', TextType::class, [
                'label' => 'MHP Vetted Donors Initials'
            ])
        ->add('adminNewPatientPaperworkReceived',  ChoiceType::class, [
            'label' => 'New Patient Paperwork Received',
            'expanded' => true,
            'multiple'  => false,
            'attr'  => ['name' =>'adminNewPatientPaperworkReceived'],
            'choices'  => [
                'No' => 'No',
                'Yes' => 'Yes'
            ],
            'empty_data' => 'No',
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'adminNewPatientPaperworkReceived_'.strtolower($value)."_id"];
            },
        ])
       ->add('adminNewPatientPaperworkReceivedDate', OroDateType::class, [
            'label' => 'New Patient Paperwork Received Date',
            'widget' => 'single_text',
            'input' => 'string',
            //default format of the date
            'format' => 'yyyy-MM-dd',
        ])
        ->add('adminNewPatientPaperworkReceivedInitials') //Text Field

        ->add('adminOcpStartDate')
        ->add('adminOcpStartDateDate')
        ->add('adminOcpStartDateInitials')
        ->add('adminOngoing')
        ->add('adminOngoingDate')
        ->add('adminOngoingInitials')
        ->add('adminParentingClassInfoSent')
        ->add('adminParentingClassInfoSentDate')
        ->add('adminParentingClassInfoSentInitials')
        ->add('adminPhysicalExamUltrasoundHysterectomyDate')
        ->add('adminPhysicalExamUltrasoundHysterectomyDateDate')
        ->add('adminPhysicalExamUltrasoundHysterectomyDateInitials')
        ->add('adminPregnancyOutcome')
        ->add('adminPregnancyOutcomeResults')
        ->add('adminPregnancyTestDatePregTest')
        ->add('adminPregnancyTestDatePregTestContactNumber')
        ->add('adminPregnancyTestDatePregTestLabName')
        ->add('adminPreliminaryConfirmationEmbryosAtEdi')
        ->add('adminPreliminaryConfirmationEmbryosAtEdi', ChoiceType::class, [
                'label' => 'Preliminary Confirmation by the laboratory that embryos are located here at EDI',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminPreliminaryConfirmationEmbryosAtEdi'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminPreliminaryConfirmationEmbryosAtEdi_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminPreliminaryConfirmationEmbryosAtEdiDate', OroDateType::class, [
                'label' => 'Preliminary Confirmation by the laboratory that embryos are located here at EDI',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminPreliminaryConfirmationEmbryosAtEdiIntials') //text
        ->add('adminRecptProvidedMhpContactInfo', ChoiceType::class, [
                'label' => 'Recipient provided MHP Contact Information',
                'expanded' => true,
                'multiple'  => false,
                'attr'  => ['name' =>'adminRecptProvidedMhpContactInfo'],
                'choices'  => [
                    'No' => 'No',
                    'Yes' => 'Yes'
                ],
                'empty_data' => 'No',
                'choice_attr' => function($choiceValue, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['id' => 'adminRecptProvidedMhpContactInfo_'.strtolower($value)."_id"];
                },
            ])
        ->add('adminRecptProvidedMhpContactInfoDate', OroDateType::class, [
                'label' => 'Recipient provided MHP Contact Information Date',
                'widget' => 'single_text',
                'input' => 'string',
                //default format of the date
                'format' => 'yyyy-MM-dd',
            ])
        ->add('adminRecptProvidedMhpContactInfoInitials', TextType::class, [
                'label' => 'Recipient provided MHP Contact Information Initials'
            ])
        ->add('adminSateliteOrdersFaxedFacility')
        ->add('adminSateliteOrdersFaxedFacilityDate')
        ->add('adminSateliteOrdersFaxedFacilityInitials')
        ->add('adminTransferDate')
        ->add('adminVideoConferenceScheduled')
        ->add('adminVideoConferenceScheduledDate')
        ->add('adminVideoConferenceScheduledInitials')
        ->add('adminWorkingWithDistantIvf')
        ->add('adminWorkingWithDistantIvfDate')
        ->add('adminWorkingWithDistantIvfInitials')
        ->add('applicationId')
        ->add('adminClinicianComments', TextareaType::class, [
            'attr' => ['class' => 'tinymce'],
        ])
        ->add('adminEdiCoordinatorComments', TextareaType::class, [
            'attr' => ['class' => 'tinymce'],
        ])
        ->add('adminEmbryologistComments', TextareaType::class, [
        'attr' => ['class' => 'tinymce'],
        ])
        ->add('firstName') //text
        ->add('heightCm', NumberType::class)
        ->add('howDidYouHearAboutEdi', ChoiceType::class, [
            'label' => 'How did you hear about EDI',
            'expanded' => false,
            'multiple'  => false,
            'attr'  => ['name' =>'howDidYouHearAboutEDI'],
            'choices'  => EDIConstants::HOW_FOUND_EDI,
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'how_did_you_hear_about_edi_'.strtolower($value).'_id'];
            },
        ])
        ->add('lastName') //text
        ->add('middleInitial') //text
        ->add('multiStateRegion',   ChoiceType::class, [
            'label' => 'Multi-state Region',
            'expanded' => false,
            'multiple'  => false,
            'attr'  => ['name' =>'multiStateRegion'],
            'choices'  => EDIConstants::STATES_REGIONS,
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'multi_state_region_'.strtolower($value).'_id'];
            },
        ]) //Drop down.)
        ->add('partnerFirstName')
        ->add('partnerHeightCm', NumberType::class)
        ->add('partnerLastName')
        ->add('partnerMiddleInitial') //text
        ->add('partnerSuffix') //text
        ->add('partnerWeightKg', NumberType::class)
        ->add('physicianComments', TextareaType::class, [
            'attr' => ['class' => 'tinymce'],
        ])
        ->add('providence') //Text - show if country is not USA
        ->add('recipientNumber')
        ->add('selectedUnits', ChoiceType::class, [
            'label' => 'Select Units',
            'expanded' => false,
            'multiple'  => false,
            'attr'  => ['name' =>'selected_units'],
            'choices'  => [
                'Imperial (pounds)' => 'Imperial (pounds)',
                'Metric (kg)' => 'Metric (kg)'
            ],
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'selected_units_'.strtolower($value)."_id"];
            },
        ])
        ->add('selectedUnitsPartner')
        ->add('suffix') //text
        ->add('weightKg', NumberType::class)
        ->add('willingToReduceBmi', ChoiceType::class, [
            'label' => 'We strongly recommend that your BMI be no more than 38, although lower BMI’s are associated with higher delivery rates and less
complicated pregnancies. As a result, EDI may require a loss of XX lbs/kg to be accepted by the program. If this is feasible, please continue
on.',
            'expanded' => false,
            'multiple'  => false,
            'attr'  => ['name' =>'willing_to_reduce_bmi'],
            'choices'  => [
                'Yes' => 'Yes, I am willing to reduce my weight by XX lbs/Kg', //This needs to be calculated for the XX
                'No' => 'No, I am not willing to reduce my weight by XX lbs/Kg' // This needs to be calcuated for the XX
            ],
            'choice_attr' => function($choiceValue, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['id' => 'willing_to_reduce_bmi_'.strtolower($value)."_id"];
            },
        ]);
// End Added by JDA 2023-01-05

	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'EDI\Bundle\DonationApplicationBundle\Entity\EmbRecipient',
		));
	}

	public function getName()
	{
		return 'donation_application_recipient';
	}
}