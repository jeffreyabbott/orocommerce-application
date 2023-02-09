<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbRecipient;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;

/**
 * EmbRecipient
 *
 * @ORM\Table(name="emb_recipient", indexes={@ORM\Index(name="created_at", columns={"created_at"}), @ORM\Index(name="publish_to_stories", columns={"publish_to_stories"})})
 * @ORM\Entity
 * @Config()
 */
class EmbRecipient extends ExtendEmbRecipient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=50, nullable=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="post_code", type="string", length=15, nullable=false)
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=15, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cell_phone", type="string", length=20, nullable=false)
     */
    private $cellPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="work_phone", type="string", length=20, nullable=false)
     */
    private $workPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="home_phone", type="string", length=20, nullable=false)
     */
    private $homePhone;

    /**
     * @var bool
     *
     * @ORM\Column(name="video_conferencing", type="boolean", nullable=false)
     */
    private $videoConferencing = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="video_conferencing_provider", type="string", length=15, nullable=false)
     */
    private $videoConferencingProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="video_conferencing_user_name", type="string", length=15, nullable=false)
     */
    private $videoConferencingUserName;

    /**
     * @var string
     *
     * @ORM\Column(name="email_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $emailContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="cell_phone_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $cellPhoneContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="work_phone_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $workPhoneContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="home_phone_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $homePhoneContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="marital_status", type="string", length=30, nullable=false)
     */
    private $maritalStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date", nullable=false)
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="current_age", type="string", length=10, nullable=false)
     */
    private $currentAge;

    /**
     * @var string
     *
     * @ORM\Column(name="height_ft", type="string", length=10, nullable=false)
     */
    private $heightFt;

    /**
     * @var string
     *
     * @ORM\Column(name="height_in", type="string", length=10, nullable=false)
     */
    private $heightIn;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_lbs", type="string", length=10, nullable=false)
     */
    private $weightLbs;

    /**
     * @var string
     *
     * @ORM\Column(name="bmi_calculation", type="string", length=5, nullable=false)
     */
    private $bmiCalculation;

    /**
     * @var string
     *
     * @ORM\Column(name="race_ethnic_background", type="text", length=65535, nullable=false)
     */
    private $raceEthnicBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="current_religion", type="string", length=15, nullable=false)
     */
    private $currentReligion;

    /**
     * @var string
     *
     * @ORM\Column(name="current_health_problems", type="text", length=65535, nullable=false)
     */
    private $currentHealthProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="current_medications", type="text", length=65535, nullable=false)
     */
    private $currentMedications;

    /**
     * @var bool
     *
     * @ORM\Column(name="cigarette_smoker", type="boolean", nullable=false)
     */
    private $cigaretteSmoker;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_full_name", type="string", length=50, nullable=false)
     */
    private $partnerFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_email", type="string", length=200, nullable=false)
     */
    private $partnerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_cell_phone", type="string", length=20, nullable=false)
     */
    private $partnerCellPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_work_phone", type="string", length=20, nullable=false)
     */
    private $partnerWorkPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_home_phone", type="string", length=20, nullable=false)
     */
    private $partnerHomePhone;

    /**
     * @var bool
     *
     * @ORM\Column(name="partner_video_conferencing", type="boolean", nullable=false)
     */
    private $partnerVideoConferencing = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="partner_video_conferencing_provider", type="string", length=15, nullable=false)
     */
    private $partnerVideoConferencingProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_video_conferencing_user_name", type="string", length=15, nullable=false)
     */
    private $partnerVideoConferencingUserName;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_email_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $partnerEmailContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="partner_cell_phone_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $partnerCellPhoneContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="partner_home_phone_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $partnerHomePhoneContactOk = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="partner_work_phone_contact_ok", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $partnerWorkPhoneContactOk = 'Yes';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="partner_birth_date", type="date", nullable=false)
     */
    private $partnerBirthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_current_age", type="string", length=10, nullable=false)
     */
    private $partnerCurrentAge;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_height_ft", type="string", length=10, nullable=false)
     */
    private $partnerHeightFt;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_height_in", type="string", length=10, nullable=false)
     */
    private $partnerHeightIn;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_weight_lbs", type="string", length=10, nullable=false)
     */
    private $partnerWeightLbs;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_bmi_calculation", type="string", length=5, nullable=false)
     */
    private $partnerBmiCalculation;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_race_ethnic_background", type="text", length=65535, nullable=false)
     */
    private $partnerRaceEthnicBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_current_religion", type="string", length=15, nullable=false)
     */
    private $partnerCurrentReligion;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_current_health_problems", type="text", length=65535, nullable=false)
     */
    private $partnerCurrentHealthProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_current_medications", type="text", length=65535, nullable=false)
     */
    private $partnerCurrentMedications;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_cigarette_smoker", type="string", length=3, nullable=false, options={"default"="Yes"})
     */
    private $partnerCigaretteSmoker = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="total_infertility_years", type="string", length=5, nullable=false)
     */
    private $totalInfertilityYears;

    /**
     * @var string
     *
     * @ORM\Column(name="infertility_narrative", type="text", length=65535, nullable=false)
     */
    private $infertilityNarrative;

    /**
     * @var string
     *
     * @ORM\Column(name="gynaecologic_surgeries", type="text", length=65535, nullable=false)
     */
    private $gynaecologicSurgeries;

    /**
     * @var string
     *
     * @ORM\Column(name="hsg_performed", type="text", length=65535, nullable=false)
     */
    private $hsgPerformed;

    /**
     * @var string
     *
     * @ORM\Column(name="hsg_details", type="text", length=65535, nullable=false)
     */
    private $hsgDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="fallopian_tubes", type="text", length=65535, nullable=false)
     */
    private $fallopianTubes;

    /**
     * @var string
     *
     * @ORM\Column(name="uterine_cavity_evaluation", type="text", length=65535, nullable=false, options={"comment"="Has your uterine cavity been evaluated within the past two years by an HSG, sonohystergram or diagnostic hysteroscopy?"})
     */
    private $uterineCavityEvaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="uterine_cavity_surgery", type="text", length=65535, nullable=false)
     */
    private $uterineCavitySurgery;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_pregnancies", type="boolean", nullable=false)
     */
    private $numPregnancies;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_term_deliveries", type="boolean", nullable=false)
     */
    private $numTermDeliveries;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_preterm_deliveries", type="boolean", nullable=false)
     */
    private $numPretermDeliveries;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_spontaneous_losses", type="boolean", nullable=false)
     */
    private $numSpontaneousLosses;

    /**
     * @var string
     *
     * @ORM\Column(name="spontaneous_losses_eval", type="text", length=65535, nullable=false)
     */
    private $spontaneousLossesEval;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_elective_terminations", type="boolean", nullable=false)
     */
    private $numElectiveTerminations;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_living_children", type="boolean", nullable=false)
     */
    private $numLivingChildren;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_living_children_with_current_partner", type="boolean", nullable=false)
     */
    private $numLivingChildrenWithCurrentPartner;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_living_children_with_other_partners", type="boolean", nullable=false)
     */
    private $numLivingChildrenWithOtherPartners;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_adopted_children", type="boolean", nullable=false)
     */
    private $numAdoptedChildren;

    /**
     * @var bool
     *
     * @ORM\Column(name="partner_num_living_children_with_other_partners", type="boolean", nullable=false)
     */
    private $partnerNumLivingChildrenWithOtherPartners;

    /**
     * @var int
     *
     * @ORM\Column(name="partner_num_adopted_children", type="integer", nullable=false)
     */
    private $partnerNumAdoptedChildren;

    /**
     * @var string
     *
     * @ORM\Column(name="signed_name", type="string", length=50, nullable=false)
     */
    private $signedName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="signed_date", type="date", nullable=false)
     */
    private $signedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_signed_name", type="string", length=50, nullable=true)
     */
    private $partnerSignedName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="partner_signed_date", type="date", nullable=true)
     */
    private $partnerSignedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recipient_notes", type="text", length=65535, nullable=true)
     */
    private $recipientNotes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medical_staff_comments", type="text", length=65535, nullable=true)
     */
    private $medicalStaffComments;

    /**
     * @var string
     *
     * @ORM\Column(name="medical_status", type="string", length=100, nullable=false)
     */
    private $medicalStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="medical_status_update_date", type="date", nullable=false)
     */
    private $medicalStatusUpdateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="medical_name_of_person_updating", type="string", length=300, nullable=false)
     */
    private $medicalNameOfPersonUpdating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="medical_approval_date", type="date", nullable=false)
     */
    private $medicalApprovalDate;

    /**
     * @var int
     *
     * @ORM\Column(name="medical_ranking", type="integer", nullable=false)
     */
    private $medicalRanking;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medical_director_comments", type="text", length=65535, nullable=true)
     */
    private $medicalDirectorComments;

    /**
     * @var int
     *
     * @ORM\Column(name="weighting_index", type="integer", nullable=false)
     */
    private $weightingIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=200, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="mhp_recipient_option", type="string", length=3, nullable=false, options={"comment"="Identity Disclosure Program Option for Embryo Recipient Application"})
     */
    private $mhpRecipientOption;

    /**
     * @var bool
     *
     * @ORM\Column(name="approved", type="boolean", nullable=false)
     */
    private $approved = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dr_review_datetime", type="text", length=65535, nullable=true)
     */
    private $drReviewDatetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=false)
     */
    private $deletedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infertility_signature", type="string", length=35, nullable=true)
     */
    private $infertilitySignature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_infertility_signature", type="string", length=35, nullable=true)
     */
    private $partnerInfertilitySignature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="infertility_agree", type="string", length=3, nullable=true)
     */
    private $infertilityAgree;

    /**
     * @var string
     *
     * @ORM\Column(name="info_accurate_true", type="string", length=3, nullable=false, options={"default"="No"})
     */
    private $infoAccurateTrue = 'No';

    /**
     * @var string
     *
     * @ORM\Column(name="partner_info_accurate_true", type="string", length=3, nullable=false, options={"default"="No"})
     */
    private $partnerInfoAccurateTrue = 'No';

    /**
     * @var bool
     *
     * @ORM\Column(name="publish_to_stories", type="boolean", nullable=false)
     */
    private $publishToStories = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="publish_infertility_narrative", type="boolean", nullable=false)
     */
    private $publishInfertilityNarrative = '0';


    /**
     * var int
     *
     * @ORM\ManyToOne(
     *     targetEntity="Oro\Bundle\CustomerBundle\Entity\CustomerUser"
     * )
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="SET NULL")
     * ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isActive = true;

    /**
     * @var int
     *
     * @ORM\Column(name="is_archive", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $isArchive = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datetime_acrhived", type="datetime", nullable=true)
     */
    private $datetimeAcrhived;

    /**
     * @var string
     *
     * @ORM\Column(name="sexual", type="string", length=1000, nullable=false)
     */
    private $sexual;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=1000, nullable=false)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="religion", type="string", length=1000, nullable=false)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="eduction", type="string", length=1000, nullable=false)
     */
    private $eduction;

    /**
     * @var string
     *
     * @ORM\Column(name="education_partner", type="string", length=1000, nullable=false)
     */
    private $educationPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="locationa", type="string", length=1000, nullable=false)
     */
    private $locationa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_notes", type="text", length=65535, nullable=true)
     */
    private $locationNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="race_partner", type="string", length=1000, nullable=false)
     */
    private $racePartner;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=200, nullable=false)
     */
    private $region;

    //Added Manually JDA 2022-12-31
    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_add_testimonial", type="string", length=1000, nullable=true)
     */

    private $adminAddTestimonial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_add_testimonial_attachments", type="string", length=100, nullable=true)
     */

    private $adminAddTestimonialAttachments;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_add_testimonial_date", type="date", nullable=true)
     */

    private $adminAddTestimonialDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_add_testimonial_display_website", type="string", length=3, nullable=true)
     */

    private $adminAddTestimonialDisplayWebsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_add_testimonial_initials", type="string", length=4, nullable=true)
     */

    private $adminAddTestimonialInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_art_prescription_completed_faxed", type="string", length=3, nullable=true)
     */

    private $adminArtPrescriptionCompletedFaxed;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_art_prescription_completed_faxed_date", type="date", nullable=true)
     */

    private $adminArtPrescriptionCompletedFaxedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_art_prescription_completed_faxed_initials", type="string", length=4, nullable=true)
     */

    private $adminArtPrescriptionCompletedFaxedInitials;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_baseline_date", type="date", nullable=true)
     */

    private $adminBaselineDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_biochemical_loss_pul", type="string", length=3, nullable=true)
     */

    private $adminBiochemicalLossPul;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_biochemical_loss_pul_date", type="date", nullable=true)
     */

    private $adminBiochemicalLossPulDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_biochemical_loss_pul_initials", type="string", length=4, nullable=true)
     */

    private $adminBiochemicalLossPulInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_cardiac_consult_required", type="string", length=3, nullable=true)
     */

    private $adminCardiacConsultRequired;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_cardiac_consult_required_date", type="date", nullable=true)
     */

    private $adminCardiacConsultRequiredDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_cardiac_consult_required_initials", type="string", length=4, nullable=true)
     */

    private $adminCardiacConsultRequiredInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_cardiac_consult_results_obtained", type="string", length=3, nullable=true)
     */

    private $adminCardiacConsultResultsObtained;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_cardiac_consult_results_obtained_date", type="date", nullable=true)
     */

    private $adminCardiacConsultResultsObtainedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_cardiac_consult_results_obtained_initials", type="string", length=4, nullable=true)
     */

    private $adminCardiacConsultResultsObtainedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_confirmation_received_from_lab", type="string", length=3, nullable=true)
     */

    private $adminConfirmationReceivedFromLab;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_confirmation_received_from_lab_date", type="date", nullable=true)
     */

    private $adminConfirmationReceivedFromLabDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_confirmation_received_from_lab_initials", type="string", length=4, nullable=true)
     */

    private $adminConfirmationReceivedFromLabInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_confirmed_received_from_lab", type="string", length=3, nullable=true)
     */

    private $adminConfirmedReceivedFromLab;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_confirmed_received_from_lab_date", type="date", nullable=true)
     */

    private $adminConfirmedReceivedFromLabDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_confirmed_received_from_lab_intials", type="string", length=4, nullable=true)
     */

    private $adminConfirmedReceivedFromLabIntials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_background_check_request", type="string", length=3, nullable=true)
     */

    private $adminCriminalBackgroundCheckRequest;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_criminal_background_check_request_date", type="date", nullable=true)
     */

    private $adminCriminalBackgroundCheckRequestDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_background_check_request_initials", type="string", length=4, nullable=true)
     */

    private $adminCriminalBackgroundCheckRequestInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_background_check_results", type="string", length=3, nullable=true)
     */

    private $adminCriminalBackgroundCheckResults;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_criminal_background_check_results_date", type="date", nullable=true)
     */

    private $adminCriminalBackgroundCheckResultsDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_background_check_results_initials", type="string", length=4, nullable=true)
     */

    private $adminCriminalBackgroundCheckResultsInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_history_consent_received", type="string", length=3, nullable=true)
     */

    private $adminCriminalHistoryConsentReceived;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_criminal_history_consent_received_date", type="date", nullable=true)
     */

    private $adminCriminalHistoryConsentReceivedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_history_consent_received_initials", type="string", length=4, nullable=true)
     */

    private $adminCriminalHistoryConsentReceivedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_history_consent_sent", type="string", length=3, nullable=true)
     */

    private $adminCriminalHistoryConsentSent;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_criminal_history_consent_sent_date", type="date", nullable=true)
     */

    private $adminCriminalHistoryConsentSentDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_criminal_history_consent_sent_initials", type="string", length=4, nullable=true)
     */

    private $adminCriminalHistoryConsentSentInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_dco_recpt_and_donors_do_contact", type="string", length=100, nullable=true)
     */

    private $adminDcoRecptAndDonorsDoContact;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_dco_recpt_and_donors_do_contact_date", type="date", nullable=true)
     */

    private $adminDcoRecptAndDonorsDoContactDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_dco_recpt_and_donors_do_contact_initials", type="string", length=4, nullable=true)
     */

    private $adminDcoRecptAndDonorsDoContactInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_delivery_registered", type="string", length=3, nullable=true)
     */

    private $adminDeliveryRegistered;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_delivery_registered_children_names", type="string", length=255, nullable=true)
     */

    private $adminDeliveryRegisteredChildrenNames;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_donors_accept_reject_recpt", type="string", length=3, nullable=true)
     */

    private $adminDonorsAcceptRejectRecpt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_donors_accept_reject_recpt_date", type="date", nullable=true)
     */

    private $adminDonorsAcceptRejectRecptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_donors_accept_reject_recpt_initials", type="string", length=4, nullable=true)
     */

    private $adminDonorsAcceptRejectRecptInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_donors_provided_mhp_contact_info", type="string", length=3, nullable=true)
     */

    private $adminDonorsProvidedMhpContactInfo;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_donors_provided_mhp_contact_info_date", type="date", nullable=true)
     */

    private $adminDonorsProvidedMhpContactInfoDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_donors_provided_mhp_contact_info_initials", type="string", length=4, nullable=true)
     */

    private $adminDonorsProvidedMhpContactInfoInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_early_spontaneouse_loss", type="string", length=3, nullable=true)
     */

    private $adminEarlySpontaneouseLoss;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_early_spontaneouse_loss_date", type="date", nullable=true)
     */

    private $adminEarlySpontaneouseLossDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_early_spontaneouse_loss_initials", type="string", length=4, nullable=true)
     */

    private $adminEarlySpontaneouseLossInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_ectopic", type="string", length=3, nullable=true)
     */

    private $adminEctopic;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_ectopic_date", type="date", nullable=true)
     */

    private $adminEctopicDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_ectopic_initials", type="string", length=4, nullable=true)
     */

    private $adminEctopicInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_edi_consents_received", type="string", length=3, nullable=true)
     */

    private $adminEdiConsentsReceived;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_edi_consents_received_date", type="date", nullable=true)
     */

    private $adminEdiConsentsReceivedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_edi_consents_received_initials", type="string", length=4, nullable=true)
     */

    private $adminEdiConsentsReceivedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_edi_fdet_lab_summary_cycle_worksheet_completed", type="string", length=3, nullable=true)
     */

    private $adminEdiFdetLabSummaryCycleWorksheetCompleted;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_edi_fdet_lab_summary_cycle_worksheet_completed_date", type="date", nullable=true)
     */

    private $adminEdiFdetLabSummaryCycleWorksheetCompletedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_edi_fdet_lab_summary_cycle_worksheet_completed_initials", type="string", length=4, nullable=true)
     */

    private $adminEdiFdetLabSummaryCycleWorksheetCompletedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_emailed_new_patient_paperwork", type="string", length=3, nullable=true)
     */

    private $adminEmailedNewPatientPaperwork;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_emailed_new_patient_paperwork_date", type="date", nullable=true)
     */

    private $adminEmailedNewPatientPaperworkDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_emailed_new_patient_paperwork_initials", type="string", length=4, nullable=true)
     */

    private $adminEmailedNewPatientPaperworkInitials;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_estimated_delivery_date", type="date", nullable=true)
     */

    private $adminEstimatedDeliveryDate;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_estimated_delivery_date_pregnancy_test", type="date", nullable=true)
     */

    private $adminEstimatedDeliveryDatePregnancyTest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_fetal_demise", type="string", length=3, nullable=true)
     */

    private $adminFetalDemise;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_fetal_demise_date", type="date", nullable=true)
     */

    private $adminFetalDemiseDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_fetal_demise_initials", type="string", length=4, nullable=true)
     */

    private $adminFetalDemiseInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_final_embryology_confirmation_transfered_to_edi", type="string", length=3, nullable=true)
     */

    private $adminFinalEmbryologyConfirmationTransferedToEdi;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_final_embryology_confirmation_transfered_to_edi_date", type="date", nullable=true)
     */

    private $adminFinalEmbryologyConfirmationTransferedToEdiDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_final_embryology_confirmation_transfered_to_edi_initials", type="string", length=4, nullable=true)
     */

    private $adminFinalEmbryologyConfirmationTransferedToEdiInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_financial_discussion_scheduled", type="string", length=3, nullable=true)
     */

    private $adminFinancialDiscussionScheduled;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_financial_discussion_scheduled_date", type="date", nullable=true)
     */

    private $adminFinancialDiscussionScheduledDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_financial_discussion_scheduled_donor", type="string", length=3, nullable=true)
     */

    private $adminFinancialDiscussionScheduledDonor;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_financial_discussion_scheduled_donor_date", type="date", nullable=true)
     */

    private $adminFinancialDiscussionScheduledDonorDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_financial_discussion_scheduled_donor_initials", type="string", length=4, nullable=true)
     */

    private $adminFinancialDiscussionScheduledDonorInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_financial_discussion_scheduled_initals", type="string", length=4, nullable=true)
     */

    private $adminFinancialDiscussionScheduledInitals;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp", type="string", length=3, nullable=true)
     */

    private $adminIdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_contact_permitted", type="string", length=3, nullable=true)
     */

    private $adminIdpContactPermitted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_donor_confirms_idp_first_method_of_contact", type="string", length=100, nullable=true)
     */

    private $adminIdpDonorConfirmsIdpFirstMethodOfContact;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_idp_donor_confirms_idp_first_method_of_contact_date", type="date", nullable=true)
     */

    private $adminIdpDonorConfirmsIdpFirstMethodOfContactDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_donor_confirms_idp_first_method_of_contact_initials", type="string", length=4, nullable=true)
     */

    private $adminIdpDonorConfirmsIdpFirstMethodOfContactInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_donors_failed_to_contact_dco_recpt", type="string", length=100, nullable=true)
     */

    private $adminIdpDonorsFailedToContactDcoRecpt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_idp_donors_failed_to_contact_dco_recpt_date", type="date", nullable=true)
     */

    private $adminIdpDonorsFailedToContactDcoRecptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_donors_failed_to_contact_dco_recpt_initials", type="string", length=4, nullable=true)
     */

    private $adminIdpDonorsFailedToContactDcoRecptInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_donors_failed_to_contact_dco_recpt_sweet", type="string", length=100, nullable=true)
     */

    private $adminIdpDonorsFailedToContactDcoRecptSweet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_failure_to_contact_donor", type="string", length=100, nullable=true)
     */

    private $adminIdpFailureToContactDonor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_failure_to_contact_donor_sweet", type="string", length=100, nullable=true)
     */

    private $adminIdpFailureToContactDonorSweet;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_idp_notification_of_donor", type="date", nullable=true)
     */

    private $adminIdpNotificationOfDonor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_notification_of_donor_contact_attempt", type="string", length=3, nullable=true)
     */

    private $adminIdpNotificationOfDonorContactAttempt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_request_made_by_dco_recpt", type="string", length=10, nullable=true)
     */

    private $adminIdpRequestMadeByDcoRecpt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_idp_request_made_by_dco_recpt_date", type="date", nullable=true)
     */

    private $adminIdpRequestMadeByDcoRecptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_idp_request_made_by_dco_recpt_initials", type="string", length=4, nullable=true)
     */

    private $adminIdpRequestMadeByDcoRecptInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_info_about_genetic_diseases", type="string", length=100, nullable=true)
     */

    private $adminInfoAboutGeneticDiseases;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_info_about_genetic_diseases_date", type="date", nullable=true)
     */

    private $adminInfoAboutGeneticDiseasesDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_info_about_genetic_diseases_initials", type="string", length=4, nullable=true)
     */

    private $adminInfoAboutGeneticDiseasesInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_late_spontaneous_loss", type="string", length=3, nullable=true)
     */

    private $adminLateSpontaneousLoss;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_late_spontaneous_loss_date", type="date", nullable=true)
     */

    private $adminLateSpontaneousLossDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_late_spontaneous_loss_initials", type="string", length=4, nullable=true)
     */

    private $adminLateSpontaneousLossInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_maternal_fetal_medicine_consult_required", type="string", length=3, nullable=true)
     */

    private $adminMaternalFetalMedicineConsultRequired;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_maternal_fetal_medicine_consult_required_date", type="date", nullable=true)
     */

    private $adminMaternalFetalMedicineConsultRequiredDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_maternal_fetal_medicine_consult_required_initials", type="string", length=4, nullable=true)
     */

    private $adminMaternalFetalMedicineConsultRequiredInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_medical_records_request_sent", type="string", length=3, nullable=true)
     */

    private $adminMedicalRecordsRequestSent;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_medical_records_request_sent_date", type="date", nullable=true)
     */

    private $adminMedicalRecordsRequestSentDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_medical_records_request_sent_initials", type="string", length=4, nullable=true)
     */

    private $adminMedicalRecordsRequestSentInitials;
    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_medical_records_request_received", type="string", length=3, nullable=true)
     */

    private $adminMedicalRecordsRequestReceived;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_medical_records_request_received_date", type="date", nullable=true)
     */

    private $adminMedicalRecordsRequestReceivedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_medical_records_request_received_initials", type="string", length=4, nullable=true)
     */

    private $adminMedicalRecordsRequestReceivedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mfm_consult_results_obtained", type="string", length=3, nullable=true)
     */

    private $adminMfmConsultResultsObtained;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mfm_consult_results_obtained_date", type="date", nullable=true)
     */

    private $adminMfmConsultResultsObtainedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mfm_consult_results_obtained_initials", type="string", length=4, nullable=true)
     */

    private $adminMfmConsultResultsObtainedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_found", type="string", length=3, nullable=true)
     */

    private $adminMhpFound;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_found_date", type="date", nullable=true)
     */

    private $adminMhpFoundDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_found_donors", type="string", length=3, nullable=true)
     */

    private $adminMhpFoundDonors;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_found_donors_date", type="date", nullable=true)
     */

    private $adminMhpFoundDonorsDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_found_donors_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpFoundDonorsInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_found_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpFoundInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_found_name_contact_info", type="string", length=1000, nullable=true)
     */

    private $adminMhpFoundNameContactInfo;
    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_obtained", type="string", length=3, nullable=true)
     */

    private $adminMhpReportObtained;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_report_obtained_date", type="date", nullable=true)
     */

    private $adminMhpReportObtainedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_obtained_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpReportObtainedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_obtained_donor", type="string", length=3, nullable=true)
     */

    private $adminMhpReportObtainedDonor;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_report_obtained_donor_date", type="date", nullable=true)
     */

    private $adminMhpReportObtainedDonorDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_obtained_donor_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpReportObtainedDonorInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_donor", type="string", length=3, nullable=true)
     */

    private $adminMhpReportSentDonor;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_donor_date", type="date", nullable=true)
     */

    private $adminMhpReportSentDonorDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_donor_identy_removed", type="string", length=3, nullable=true)
     */

    private $adminMhpReportSentDonorIdentyRemoved;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_donor_identy_removed_date", type="date", nullable=true)
     */

    private $adminMhpReportSentDonorIdentyRemovedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_donor_identy_removed_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpReportSentDonorIdentyRemovedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_donor_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpReportSentDonorInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_recpt", type="string", length=3, nullable=true)
     */

    private $adminMhpReportSentRecpt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_recpt_date", type="date", nullable=true)
     */

    private $adminMhpReportSentRecptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_report_sent_recpt_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpReportSentRecptInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_requested_by_donor", type="string", length=3, nullable=true)
     */

    private $adminMhpRequestedByDonor;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_requested_by_donor_date", type="date", nullable=true)
     */

    private $adminMhpRequestedByDonorDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_requested_by_donor_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpRequestedByDonorInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_requested_by_recpt", type="string", length=3, nullable=true)
     */

    private $adminMhpRequestedByRecpt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_requested_by_recpt_date", type="date", nullable=true)
     */

    private $adminMhpRequestedByRecptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_requested_by_recpt_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpRequestedByRecptInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_required_of_donors", type="string", length=3, nullable=true)
     */

    private $adminMhpRequiredOfDonors;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_required_of_donors_date", type="date", nullable=true)
     */

    private $adminMhpRequiredOfDonorsDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_required_of_donors_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpRequiredOfDonorsInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_required_of_recpt", type="string", length=3, nullable=true)
     */

    private $adminMhpRequiredOfRecpt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_required_of_recpt_date", type="date", nullable=true)
     */

    private $adminMhpRequiredOfRecptDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_required_of_recpt_intials", type="string", length=4, nullable=true)
     */

    private $adminMhpRequiredOfRecptIntials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_vetted", type="string", length=3, nullable=true)
     */

    private $adminMhpVetted;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_vetted_date", type="date", nullable=true)
     */

    private $adminMhpVettedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_vetted_donors", type="string", length=3, nullable=true)
     */

    private $adminMhpVettedDonors;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_mhp_vetted_donors_date", type="date", nullable=true)
     */

    private $adminMhpVettedDonorsDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_vetted_donors_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpVettedDonorsInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_vetted_initials", type="string", length=4, nullable=true)
     */

    private $adminMhpVettedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_mhp_vetted_willingness_to_see_recipients", type="string", length=1000, nullable=true)
     */

    private $adminMhpVettedWillingnessToSeeRecipients;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_new_patient_paperwork_received", type="string", length=3, nullable=true)
     */

    private $adminNewPatientPaperworkReceived;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_new_patient_paperwork_received_date", type="date", nullable=true)
     */

    private $adminNewPatientPaperworkReceivedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_new_patient_paperwork_received_initials", type="string", length=4, nullable=true)
     */

    private $adminNewPatientPaperworkReceivedInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_ocp_start_date", type="string", length=3, nullable=true)
     */

    private $adminOcpStartDate;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_ocp_start_date_date", type="date", nullable=true)
     */

    private $adminOcpStartDateDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_ocp_start_date_initials", type="string", length=4, nullable=true)
     */

    private $adminOcpStartDateInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_ongoing", type="string", length=3, nullable=true)
     */

    private $adminOngoing;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_ongoing_date", type="date", nullable=true)
     */

    private $adminOngoingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_ongoing_initials", type="string", length=4, nullable=true)
     */

    private $adminOngoingInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_parenting_class_info_sent", type="string", length=3, nullable=true)
     */

    private $adminParentingClassInfoSent;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_parenting_class_info_sent_date", type="date", nullable=true)
     */

    private $adminParentingClassInfoSentDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_parenting_class_info_sent_initials", type="string", length=4, nullable=true)
     */

    private $adminParentingClassInfoSentInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_physical_exam_ultrasound_hysterectomy_date", type="string", length=3, nullable=true)
     */

    private $adminPhysicalExamUltrasoundHysterectomyDate;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_physical_exam_ultrasound_hysterectomy_date_date", type="date", nullable=true)
     */

    private $adminPhysicalExamUltrasoundHysterectomyDateDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_physical_exam_ultrasound_hysterectomy_date_initials", type="string", length=4, nullable=true)
     */

    private $adminPhysicalExamUltrasoundHysterectomyDateInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_pregnancy_outcome", type="string", length=1000, nullable=true)
     */

    private $adminPregnancyOutcome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_pregnancy_outcome_results", type="string", length=1000, nullable=true)
     */

    private $adminPregnancyOutcomeResults;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_pregnancy_test_date_preg_test", type="date", nullable=true)
     */

    private $adminPregnancyTestDatePregTest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_pregnancy_test_date_preg_test_contact_number", type="string", length=20, nullable=true)
     */

    private $adminPregnancyTestDatePregTestContactNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_pregnancy_test_date_preg_test_lab_name", type="string", length=100, nullable=true)
     */

    private $adminPregnancyTestDatePregTestLabName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_preliminary_confirmation_embryos_at_edi", type="string", length=3, nullable=true)
     */

    private $adminPreliminaryConfirmationEmbryosAtEdi;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_preliminary_confirmation_embryos_at_edi_date", type="date", nullable=true)
     */

    private $adminPreliminaryConfirmationEmbryosAtEdiDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_preliminary_confirmation_embryos_at_edi_intials", type="string", length=4, nullable=true)
     */

    private $adminPreliminaryConfirmationEmbryosAtEdiIntials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_recpt_provided_mhp_contact_info", type="string", length=3, nullable=true)
     */

    private $adminRecptProvidedMhpContactInfo;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_recpt_provided_mhp_contact_info_date", type="date", nullable=true)
     */

    private $adminRecptProvidedMhpContactInfoDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_recpt_provided_mhp_contact_info_initials", type="string", length=4, nullable=true)
     */

    private $adminRecptProvidedMhpContactInfoInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_satelite_orders_faxed_facility", type="string", length=3, nullable=true)
     */

    private $adminSateliteOrdersFaxedFacility;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_satelite_orders_faxed_facility_date", type="date", nullable=true)
     */

    private $adminSateliteOrdersFaxedFacilityDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_satelite_orders_faxed_facility_initials", type="string", length=4, nullable=true)
     */

    private $adminSateliteOrdersFaxedFacilityInitials;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_transfer_date", type="date", nullable=true)
     */

    private $adminTransferDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_video_conference_scheduled", type="string", length=3, nullable=true)
     */

    private $adminVideoConferenceScheduled;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_video_conference_scheduled_date", type="date", nullable=true)
     */

    private $adminVideoConferenceScheduledDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_video_conference_scheduled_initials", type="string", length=4, nullable=true)
     */

    private $adminVideoConferenceScheduledInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_working_with_distant_ivf", type="string", length=3, nullable=true)
     */

    private $adminWorkingWithDistantIvf;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="admin_working_with_distant_ivf_date", type="date", nullable=true)
     */

    private $adminWorkingWithDistantIvfDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_working_with_distant_ivf_initials", type="string", length=4, nullable=true)
     */

    private $adminWorkingWithDistantIvfInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="application_id", type="string", length=100, nullable=true)
     */

    private $applicationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_clinician_comments", type="string", length=1000, nullable=true)
     */

    private $adminClinicianComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_edi_coordinator_comments", type="string", length=1000, nullable=true)
     */

    private $adminEdiCoordinatorComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_embryologist_comments", type="string", length=1000, nullable=true)
     */

    private $adminEmbryologistComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */

    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height_cm", type="string", length=10, nullable=true)
     */

    private $heightCm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="how_did_you_hear_about_edi", type="string", length=100, nullable=true)
     */

    private $howDidYouHearAboutEdi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */

    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middle_initial", type="string", length=1, nullable=true)
     */

    private $middleInitial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multi_state_region", type="string", length=50, nullable=true)
     */

    private $multiStateRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_first_name", type="string", length=50, nullable=true)
     */

    private $partnerFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_height_cm", type="string", length=10, nullable=true)
     */

    private $partnerHeightCm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_last_name", type="string", length=50, nullable=true)
     */

    private $partnerLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_middle_initial", type="string", length=1, nullable=true)
     */

    private $partnerMiddleInitial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_suffix", type="string", length=2, nullable=true)
     */

    private $partnerSuffix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_weight_kg", type="string", length=10, nullable=true)
     */

    private $partnerWeightKg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="physician_comments", type="string", length=1000, nullable=true)
     */

    private $physicianComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="providence", type="string", length=50, nullable=true)
     */

    private $providence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recipient_number", type="string", length=100, nullable=true)
     */

    private $recipientNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="selected_units", type="string", length=10, nullable=true)
     */

    private $selectedUnits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="selected_units_partner", type="string", length=10, nullable=true)
     */

    private $selectedUnitsPartner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="suffix", type="string", length=2, nullable=true)
     */

    private $suffix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight_kg", type="string", length=10, nullable=true)
     */

    private $weightKg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="willing_to_reduce_bmi", type="string", length=100, nullable=true)
     */

    private $willingToReduceBmi;

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $version;
//END Added by JDA 2022-12-31
    /**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbRecipient
	 */
	public function setId( int $id ): EmbRecipient {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFullName(): string {
		return $this->fullName;
	}

	/**
	 * @param string $fullName
	 *
	 * @return EmbRecipient
	 */
	public function setFullName( string $fullName ): EmbRecipient {
		$this->fullName = $fullName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress(): string {
		return $this->address;
	}

	/**
	 * @param string $address
	 *
	 * @return EmbRecipient
	 */
	public function setAddress( string $address ): EmbRecipient {
		$this->address = $address;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): string {
		return $this->city;
	}

	/**
	 * @param string $city
	 *
	 * @return EmbRecipient
	 */
	public function setCity( string $city ): EmbRecipient {
		$this->city = $city;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getState(): string {
		return $this->state;
	}

	/**
	 * @param string $state
	 *
	 * @return EmbRecipient
	 */
	public function setState( string $state ): EmbRecipient {
		$this->state = $state;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostCode(): string {
		return $this->postCode;
	}

	/**
	 * @param string $postCode
	 *
	 * @return EmbRecipient
	 */
	public function setPostCode( string $postCode ): EmbRecipient {
		$this->postCode = $postCode;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry(): string {
		return $this->country;
	}

	/**
	 * @param string $country
	 *
	 * @return EmbRecipient
	 */
	public function setCountry( string $country ): EmbRecipient {
		$this->country = $country;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @param string $email
	 *
	 * @return EmbRecipient
	 */
	public function setEmail( string $email ): EmbRecipient {
		$this->email = $email;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCellPhone(): string {
		return $this->cellPhone;
	}

	/**
	 * @param string $cellPhone
	 *
	 * @return EmbRecipient
	 */
	public function setCellPhone( string $cellPhone ): EmbRecipient {
		$this->cellPhone = $cellPhone;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getWorkPhone(): string {
		return $this->workPhone;
	}

	/**
	 * @param string $workPhone
	 *
	 * @return EmbRecipient
	 */
	public function setWorkPhone( string $workPhone ): EmbRecipient {
		$this->workPhone = $workPhone;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHomePhone(): string {
		return $this->homePhone;
	}

	/**
	 * @param string $homePhone
	 *
	 * @return EmbRecipient
	 */
	public function setHomePhone( string $homePhone ): EmbRecipient {
		$this->homePhone = $homePhone;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isVideoConferencing() {
		return $this->videoConferencing;
	}

	/**
	 * @param bool $videoConferencing
	 *
	 * @return EmbRecipient
	 */
	public function setVideoConferencing( $videoConferencing ) {
		$this->videoConferencing = $videoConferencing;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getVideoConferencingProvider(): string {
		return $this->videoConferencingProvider;
	}

	/**
	 * @param string $videoConferencingProvider
	 *
	 * @return EmbRecipient
	 */
	public function setVideoConferencingProvider( string $videoConferencingProvider ): EmbRecipient {
		$this->videoConferencingProvider = $videoConferencingProvider;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getVideoConferencingUserName(): string {
		return $this->videoConferencingUserName;
	}

	/**
	 * @param string $videoConferencingUserName
	 *
	 * @return EmbRecipient
	 */
	public function setVideoConferencingUserName( string $videoConferencingUserName ): EmbRecipient {
		$this->videoConferencingUserName = $videoConferencingUserName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmailContactOk(): string {
		return $this->emailContactOk;
	}

	/**
	 * @param string $emailContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setEmailContactOk( string $emailContactOk ): EmbRecipient {
		$this->emailContactOk = $emailContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCellPhoneContactOk(): string {
		return $this->cellPhoneContactOk;
	}

	/**
	 * @param string $cellPhoneContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setCellPhoneContactOk( string $cellPhoneContactOk ): EmbRecipient {
		$this->cellPhoneContactOk = $cellPhoneContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getWorkPhoneContactOk(): string {
		return $this->workPhoneContactOk;
	}

	/**
	 * @param string $workPhoneContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setWorkPhoneContactOk( string $workPhoneContactOk ): EmbRecipient {
		$this->workPhoneContactOk = $workPhoneContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHomePhoneContactOk(): string {
		return $this->homePhoneContactOk;
	}

	/**
	 * @param string $homePhoneContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setHomePhoneContactOk( string $homePhoneContactOk ): EmbRecipient {
		$this->homePhoneContactOk = $homePhoneContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMaritalStatus(): string {
		return $this->maritalStatus;
	}

	/**
	 * @param string $maritalStatus
	 *
	 * @return EmbRecipient
	 */
	public function setMaritalStatus( string $maritalStatus ): EmbRecipient {
		$this->maritalStatus = $maritalStatus;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getBirthDate(): \DateTime {
		return $this->birthDate;
	}

	/**
	 * @param \DateTime $birthDate
	 *
	 * @return EmbRecipient
	 */
	public function setBirthDate( \DateTime $birthDate ): EmbRecipient {
		$this->birthDate = $birthDate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrentAge(): string {
		return $this->currentAge;
	}

	/**
	 * @param string $currentAge
	 *
	 * @return EmbRecipient
	 */
	public function setCurrentAge( string $currentAge ): EmbRecipient {
		$this->currentAge = $currentAge;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHeightFt(): string {
		return $this->heightFt;
	}

	/**
	 * @param string $heightFt
	 *
	 * @return EmbRecipient
	 */
	public function setHeightFt( string $heightFt ): EmbRecipient {
		$this->heightFt = $heightFt;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHeightIn(): string {
		return $this->heightIn;
	}

	/**
	 * @param string $heightIn
	 *
	 * @return EmbRecipient
	 */
	public function setHeightIn( string $heightIn ): EmbRecipient {
		$this->heightIn = $heightIn;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getWeightLbs(): string {
		return $this->weightLbs;
	}

	/**
	 * @param string $weightLbs
	 *
	 * @return EmbRecipient
	 */
	public function setWeightLbs( string $weightLbs ): EmbRecipient {
		$this->weightLbs = $weightLbs;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBmiCalculation(): string {
		return $this->bmiCalculation;
	}

	/**
	 * @param string $bmiCalculation
	 *
	 * @return EmbRecipient
	 */
	public function setBmiCalculation( string $bmiCalculation ): EmbRecipient {
		$this->bmiCalculation = $bmiCalculation;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRaceEthnicBackground(): string {
		return $this->raceEthnicBackground;
	}

	/**
	 * @param string $raceEthnicBackground
	 *
	 * @return EmbRecipient
	 */
	public function setRaceEthnicBackground( string $raceEthnicBackground ): EmbRecipient {
		$this->raceEthnicBackground = $raceEthnicBackground;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrentReligion(): string {
		return $this->currentReligion;
	}

	/**
	 * @param string $currentReligion
	 *
	 * @return EmbRecipient
	 */
	public function setCurrentReligion( string $currentReligion ): EmbRecipient {
		$this->currentReligion = $currentReligion;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrentHealthProblems(): string {
		return $this->currentHealthProblems;
	}

	/**
	 * @param string $currentHealthProblems
	 *
	 * @return EmbRecipient
	 */
	public function setCurrentHealthProblems( string $currentHealthProblems ): EmbRecipient {
		$this->currentHealthProblems = $currentHealthProblems;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrentMedications(): string {
		return $this->currentMedications;
	}

	/**
	 * @param string $currentMedications
	 *
	 * @return EmbRecipient
	 */
	public function setCurrentMedications( string $currentMedications ): EmbRecipient {
		$this->currentMedications = $currentMedications;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isCigaretteSmoker(): bool {
		return $this->cigaretteSmoker;
	}

	/**
	 * @param bool $cigaretteSmoker
	 *
	 * @return EmbRecipient
	 */
	public function setCigaretteSmoker( bool $cigaretteSmoker ): EmbRecipient {
		$this->cigaretteSmoker = $cigaretteSmoker;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerFullName(): string {
		return $this->partnerFullName;
	}

	/**
	 * @param string $partnerFullName
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerFullName( string $partnerFullName ): EmbRecipient {
		$this->partnerFullName = $partnerFullName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerEmail(): string {
		return $this->partnerEmail;
	}

	/**
	 * @param string $partnerEmail
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerEmail( string $partnerEmail ): EmbRecipient {
		$this->partnerEmail = $partnerEmail;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCellPhone(): string {
		return $this->partnerCellPhone;
	}

	/**
	 * @param string $partnerCellPhone
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCellPhone( string $partnerCellPhone ): EmbRecipient {
		$this->partnerCellPhone = $partnerCellPhone;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerWorkPhone(): string {
		return $this->partnerWorkPhone;
	}

	/**
	 * @param string $partnerWorkPhone
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerWorkPhone( string $partnerWorkPhone ): EmbRecipient {
		$this->partnerWorkPhone = $partnerWorkPhone;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerHomePhone(): string {
		return $this->partnerHomePhone;
	}

	/**
	 * @param string $partnerHomePhone
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerHomePhone( string $partnerHomePhone ): EmbRecipient {
		$this->partnerHomePhone = $partnerHomePhone;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPartnerVideoConferencing() {
		return $this->partnerVideoConferencing;
	}

	/**
	 * @param bool $partnerVideoConferencing
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerVideoConferencing( $partnerVideoConferencing ) {
		$this->partnerVideoConferencing = $partnerVideoConferencing;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerVideoConferencingProvider(): string {
		return $this->partnerVideoConferencingProvider;
	}

	/**
	 * @param string $partnerVideoConferencingProvider
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerVideoConferencingProvider( string $partnerVideoConferencingProvider ): EmbRecipient {
		$this->partnerVideoConferencingProvider = $partnerVideoConferencingProvider;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerVideoConferencingUserName(): string {
		return $this->partnerVideoConferencingUserName;
	}

	/**
	 * @param string $partnerVideoConferencingUserName
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerVideoConferencingUserName( string $partnerVideoConferencingUserName ): EmbRecipient {
		$this->partnerVideoConferencingUserName = $partnerVideoConferencingUserName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerEmailContactOk(): string {
		return $this->partnerEmailContactOk;
	}

	/**
	 * @param string $partnerEmailContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerEmailContactOk( string $partnerEmailContactOk ): EmbRecipient {
		$this->partnerEmailContactOk = $partnerEmailContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCellPhoneContactOk(): string {
		return $this->partnerCellPhoneContactOk;
	}

	/**
	 * @param string $partnerCellPhoneContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCellPhoneContactOk( string $partnerCellPhoneContactOk ): EmbRecipient {
		$this->partnerCellPhoneContactOk = $partnerCellPhoneContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerHomePhoneContactOk(): string {
		return $this->partnerHomePhoneContactOk;
	}

	/**
	 * @param string $partnerHomePhoneContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerHomePhoneContactOk( string $partnerHomePhoneContactOk ): EmbRecipient {
		$this->partnerHomePhoneContactOk = $partnerHomePhoneContactOk;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerWorkPhoneContactOk(): string {
		return $this->partnerWorkPhoneContactOk;
	}

	/**
	 * @param string $partnerWorkPhoneContactOk
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerWorkPhoneContactOk( string $partnerWorkPhoneContactOk ): EmbRecipient {
		$this->partnerWorkPhoneContactOk = $partnerWorkPhoneContactOk;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getPartnerBirthDate(): \DateTime {
		return $this->partnerBirthDate;
	}

	/**
	 * @param \DateTime $partnerBirthDate
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerBirthDate( \DateTime $partnerBirthDate ): EmbRecipient {
		$this->partnerBirthDate = $partnerBirthDate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCurrentAge(): string {
		return $this->partnerCurrentAge;
	}

	/**
	 * @param string $partnerCurrentAge
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCurrentAge( string $partnerCurrentAge ): EmbRecipient {
		$this->partnerCurrentAge = $partnerCurrentAge;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerHeightFt(): string {
		return $this->partnerHeightFt;
	}

	/**
	 * @param string $partnerHeightFt
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerHeightFt( string $partnerHeightFt ): EmbRecipient {
		$this->partnerHeightFt = $partnerHeightFt;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerHeightIn(): string {
		return $this->partnerHeightIn;
	}

	/**
	 * @param string $partnerHeightIn
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerHeightIn( string $partnerHeightIn ): EmbRecipient {
		$this->partnerHeightIn = $partnerHeightIn;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerWeightLbs(): string {
		return $this->partnerWeightLbs;
	}

	/**
	 * @param string $partnerWeightLbs
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerWeightLbs( string $partnerWeightLbs ): EmbRecipient {
		$this->partnerWeightLbs = $partnerWeightLbs;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerBmiCalculation(): string {
		return $this->partnerBmiCalculation;
	}

	/**
	 * @param string $partnerBmiCalculation
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerBmiCalculation( string $partnerBmiCalculation ): EmbRecipient {
		$this->partnerBmiCalculation = $partnerBmiCalculation;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerRaceEthnicBackground(): string {
		return $this->partnerRaceEthnicBackground;
	}

	/**
	 * @param string $partnerRaceEthnicBackground
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerRaceEthnicBackground( string $partnerRaceEthnicBackground ): EmbRecipient {
		$this->partnerRaceEthnicBackground = $partnerRaceEthnicBackground;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCurrentReligion(): string {
		return $this->partnerCurrentReligion;
	}

	/**
	 * @param string $partnerCurrentReligion
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCurrentReligion( string $partnerCurrentReligion ): EmbRecipient {
		$this->partnerCurrentReligion = $partnerCurrentReligion;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCurrentHealthProblems(): string {
		return $this->partnerCurrentHealthProblems;
	}

	/**
	 * @param string $partnerCurrentHealthProblems
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCurrentHealthProblems( string $partnerCurrentHealthProblems ): EmbRecipient {
		$this->partnerCurrentHealthProblems = $partnerCurrentHealthProblems;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCurrentMedications(): string {
		return $this->partnerCurrentMedications;
	}

	/**
	 * @param string $partnerCurrentMedications
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCurrentMedications( string $partnerCurrentMedications ): EmbRecipient {
		$this->partnerCurrentMedications = $partnerCurrentMedications;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerCigaretteSmoker(): string {
		return $this->partnerCigaretteSmoker;
	}

	/**
	 * @param string $partnerCigaretteSmoker
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerCigaretteSmoker( string $partnerCigaretteSmoker ): EmbRecipient {
		$this->partnerCigaretteSmoker = $partnerCigaretteSmoker;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTotalInfertilityYears(): string {
		return $this->totalInfertilityYears;
	}

	/**
	 * @param string $totalInfertilityYears
	 *
	 * @return EmbRecipient
	 */
	public function setTotalInfertilityYears( string $totalInfertilityYears ): EmbRecipient {
		$this->totalInfertilityYears = $totalInfertilityYears;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getInfertilityNarrative(): string {
		return $this->infertilityNarrative;
	}

	/**
	 * @param string $infertilityNarrative
	 *
	 * @return EmbRecipient
	 */
	public function setInfertilityNarrative( string $infertilityNarrative ): EmbRecipient {
		$this->infertilityNarrative = $infertilityNarrative;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getGynaecologicSurgeries(): string {
		return $this->gynaecologicSurgeries;
	}

	/**
	 * @param string $gynaecologicSurgeries
	 *
	 * @return EmbRecipient
	 */
	public function setGynaecologicSurgeries( string $gynaecologicSurgeries ): EmbRecipient {
		$this->gynaecologicSurgeries = $gynaecologicSurgeries;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHsgPerformed(): string {
		return $this->hsgPerformed;
	}

	/**
	 * @param string $hsgPerformed
	 *
	 * @return EmbRecipient
	 */
	public function setHsgPerformed( string $hsgPerformed ): EmbRecipient {
		$this->hsgPerformed = $hsgPerformed;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHsgDetails(): string {
		return $this->hsgDetails;
	}

	/**
	 * @param string $hsgDetails
	 *
	 * @return EmbRecipient
	 */
	public function setHsgDetails( string $hsgDetails ): EmbRecipient {
		$this->hsgDetails = $hsgDetails;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFallopianTubes(): string {
		return $this->fallopianTubes;
	}

	/**
	 * @param string $fallopianTubes
	 *
	 * @return EmbRecipient
	 */
	public function setFallopianTubes( string $fallopianTubes ): EmbRecipient {
		$this->fallopianTubes = $fallopianTubes;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getUterineCavityEvaluation(): string {
		return $this->uterineCavityEvaluation;
	}

	/**
	 * @param string $uterineCavityEvaluation
	 *
	 * @return EmbRecipient
	 */
	public function setUterineCavityEvaluation( string $uterineCavityEvaluation ): EmbRecipient {
		$this->uterineCavityEvaluation = $uterineCavityEvaluation;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getUterineCavitySurgery(): string {
		return $this->uterineCavitySurgery;
	}

	/**
	 * @param string $uterineCavitySurgery
	 *
	 * @return EmbRecipient
	 */
	public function setUterineCavitySurgery( string $uterineCavitySurgery ): EmbRecipient {
		$this->uterineCavitySurgery = $uterineCavitySurgery;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumPregnancies(): bool {
		return $this->numPregnancies;
	}

	/**
	 * @param bool $numPregnancies
	 *
	 * @return EmbRecipient
	 */
	public function setNumPregnancies( bool $numPregnancies ): EmbRecipient {
		$this->numPregnancies = $numPregnancies;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumTermDeliveries(): bool {
		return $this->numTermDeliveries;
	}

	/**
	 * @param bool $numTermDeliveries
	 *
	 * @return EmbRecipient
	 */
	public function setNumTermDeliveries( bool $numTermDeliveries ): EmbRecipient {
		$this->numTermDeliveries = $numTermDeliveries;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumPretermDeliveries(): bool {
		return $this->numPretermDeliveries;
	}

	/**
	 * @param bool $numPretermDeliveries
	 *
	 * @return EmbRecipient
	 */
	public function setNumPretermDeliveries( bool $numPretermDeliveries ): EmbRecipient {
		$this->numPretermDeliveries = $numPretermDeliveries;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumSpontaneousLosses(): bool {
		return $this->numSpontaneousLosses;
	}

	/**
	 * @param bool $numSpontaneousLosses
	 *
	 * @return EmbRecipient
	 */
	public function setNumSpontaneousLosses( bool $numSpontaneousLosses ): EmbRecipient {
		$this->numSpontaneousLosses = $numSpontaneousLosses;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSpontaneousLossesEval(): string {
		return $this->spontaneousLossesEval;
	}

	/**
	 * @param string $spontaneousLossesEval
	 *
	 * @return EmbRecipient
	 */
	public function setSpontaneousLossesEval( string $spontaneousLossesEval ): EmbRecipient {
		$this->spontaneousLossesEval = $spontaneousLossesEval;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumElectiveTerminations(): bool {
		return $this->numElectiveTerminations;
	}

	/**
	 * @param bool $numElectiveTerminations
	 *
	 * @return EmbRecipient
	 */
	public function setNumElectiveTerminations( bool $numElectiveTerminations ): EmbRecipient {
		$this->numElectiveTerminations = $numElectiveTerminations;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumLivingChildren(): bool {
		return $this->numLivingChildren;
	}

	/**
	 * @param bool $numLivingChildren
	 *
	 * @return EmbRecipient
	 */
	public function setNumLivingChildren( bool $numLivingChildren ): EmbRecipient {
		$this->numLivingChildren = $numLivingChildren;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumLivingChildrenWithCurrentPartner(): bool {
		return $this->numLivingChildrenWithCurrentPartner;
	}

	/**
	 * @param bool $numLivingChildrenWithCurrentPartner
	 *
	 * @return EmbRecipient
	 */
	public function setNumLivingChildrenWithCurrentPartner( bool $numLivingChildrenWithCurrentPartner ): EmbRecipient {
		$this->numLivingChildrenWithCurrentPartner = $numLivingChildrenWithCurrentPartner;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumLivingChildrenWithOtherPartners(): bool {
		return $this->numLivingChildrenWithOtherPartners;
	}

	/**
	 * @param bool $numLivingChildrenWithOtherPartners
	 *
	 * @return EmbRecipient
	 */
	public function setNumLivingChildrenWithOtherPartners( bool $numLivingChildrenWithOtherPartners ): EmbRecipient {
		$this->numLivingChildrenWithOtherPartners = $numLivingChildrenWithOtherPartners;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumAdoptedChildren(): bool {
		return $this->numAdoptedChildren;
	}

	/**
	 * @param bool $numAdoptedChildren
	 *
	 * @return EmbRecipient
	 */
	public function setNumAdoptedChildren( bool $numAdoptedChildren ): EmbRecipient {
		$this->numAdoptedChildren = $numAdoptedChildren;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPartnerNumLivingChildrenWithOtherPartners(): bool {
		return $this->partnerNumLivingChildrenWithOtherPartners;
	}

	/**
	 * @param bool $partnerNumLivingChildrenWithOtherPartners
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerNumLivingChildrenWithOtherPartners( bool $partnerNumLivingChildrenWithOtherPartners ): EmbRecipient {
		$this->partnerNumLivingChildrenWithOtherPartners = $partnerNumLivingChildrenWithOtherPartners;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getPartnerNumAdoptedChildren(): int {
		return $this->partnerNumAdoptedChildren;
	}

	/**
	 * @param int $partnerNumAdoptedChildren
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerNumAdoptedChildren( int $partnerNumAdoptedChildren ): EmbRecipient {
		$this->partnerNumAdoptedChildren = $partnerNumAdoptedChildren;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSignedName(): string {
		return $this->signedName;
	}

	/**
	 * @param string $signedName
	 *
	 * @return EmbRecipient
	 */
	public function setSignedName( string $signedName ): EmbRecipient {
		$this->signedName = $signedName;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getSignedDate(): \DateTime {
		return $this->signedDate;
	}

	/**
	 * @param \DateTime $signedDate
	 *
	 * @return EmbRecipient
	 */
	public function setSignedDate( \DateTime $signedDate ): EmbRecipient {
		$this->signedDate = $signedDate;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPartnerSignedName(): ?string {
		return $this->partnerSignedName;
	}

	/**
	 * @param string|null $partnerSignedName
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerSignedName( ?string $partnerSignedName ): EmbRecipient {
		$this->partnerSignedName = $partnerSignedName;

		return $this;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getPartnerSignedDate(): ?\DateTime {
		return $this->partnerSignedDate;
	}

	/**
	 * @param \DateTime|null $partnerSignedDate
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerSignedDate( ?\DateTime $partnerSignedDate ): EmbRecipient {
		$this->partnerSignedDate = $partnerSignedDate;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getRecipientNotes(): ?string {
		return $this->recipientNotes;
	}

	/**
	 * @param string|null $recipientNotes
	 *
	 * @return EmbRecipient
	 */
	public function setRecipientNotes( ?string $recipientNotes ): EmbRecipient {
		$this->recipientNotes = $recipientNotes;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMedicalStaffComments(): ?string {
		return $this->medicalStaffComments;
	}

	/**
	 * @param string|null $medicalStaffComments
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalStaffComments( ?string $medicalStaffComments ): EmbRecipient {
		$this->medicalStaffComments = $medicalStaffComments;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMedicalStatus(): string {
		return $this->medicalStatus;
	}

	/**
	 * @param string $medicalStatus
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalStatus( string $medicalStatus ): EmbRecipient {
		$this->medicalStatus = $medicalStatus;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getMedicalStatusUpdateDate(): \DateTime {
		return $this->medicalStatusUpdateDate;
	}

	/**
	 * @param \DateTime $medicalStatusUpdateDate
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalStatusUpdateDate( \DateTime $medicalStatusUpdateDate ): EmbRecipient {
		$this->medicalStatusUpdateDate = $medicalStatusUpdateDate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMedicalNameOfPersonUpdating(): string {
		return $this->medicalNameOfPersonUpdating;
	}

	/**
	 * @param string $medicalNameOfPersonUpdating
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalNameOfPersonUpdating( string $medicalNameOfPersonUpdating ): EmbRecipient {
		$this->medicalNameOfPersonUpdating = $medicalNameOfPersonUpdating;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getMedicalApprovalDate(): \DateTime {
		return $this->medicalApprovalDate;
	}

	/**
	 * @param \DateTime $medicalApprovalDate
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalApprovalDate( \DateTime $medicalApprovalDate ): EmbRecipient {
		$this->medicalApprovalDate = $medicalApprovalDate;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getMedicalRanking(): int {
		return $this->medicalRanking;
	}

	/**
	 * @param int $medicalRanking
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalRanking( int $medicalRanking ): EmbRecipient {
		$this->medicalRanking = $medicalRanking;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMedicalDirectorComments(): ?string {
		return $this->medicalDirectorComments;
	}

	/**
	 * @param string|null $medicalDirectorComments
	 *
	 * @return EmbRecipient
	 */
	public function setMedicalDirectorComments( ?string $medicalDirectorComments ): EmbRecipient {
		$this->medicalDirectorComments = $medicalDirectorComments;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getWeightingIndex(): int {
		return $this->weightingIndex;
	}

	/**
	 * @param int $weightingIndex
	 *
	 * @return EmbRecipient
	 */
	public function setWeightingIndex( int $weightingIndex ): EmbRecipient {
		$this->weightingIndex = $weightingIndex;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCategory(): string {
		return $this->category;
	}

	/**
	 * @param string $category
	 *
	 * @return EmbRecipient
	 */
	public function setCategory( string $category ): EmbRecipient {
		$this->category = $category;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMhpRecipientOption(): string {
		return $this->mhpRecipientOption;
	}

	/**
	 * @param string $mhpRecipientOption
	 *
	 * @return EmbRecipient
	 */
	public function setMhpRecipientOption( string $mhpRecipientOption ): EmbRecipient {
		$this->mhpRecipientOption = $mhpRecipientOption;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isApproved() {
		return $this->approved;
	}

	/**
	 * @param bool $approved
	 *
	 * @return EmbRecipient
	 */
	public function setApproved( $approved ) {
		$this->approved = $approved;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDrReviewDatetime(): ?string {
		return $this->drReviewDatetime;
	}

	/**
	 * @param string|null $drReviewDatetime
	 *
	 * @return EmbRecipient
	 */
	public function setDrReviewDatetime( ?string $drReviewDatetime ): EmbRecipient {
		$this->drReviewDatetime = $drReviewDatetime;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt(): \DateTime {
		return $this->createdAt;
	}

	/**
	 * @param \DateTime $createdAt
	 *
	 * @return EmbRecipient
	 */
	public function setCreatedAt( \DateTime $createdAt ): EmbRecipient {
		$this->createdAt = $createdAt;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt(): \DateTime {
		return $this->updatedAt;
	}

	/**
	 * @param \DateTime $updatedAt
	 *
	 * @return EmbRecipient
	 */
	public function setUpdatedAt( \DateTime $updatedAt ): EmbRecipient {
		$this->updatedAt = $updatedAt;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDeletedAt(): \DateTime {
		return $this->deletedAt;
	}

	/**
	 * @param \DateTime $deletedAt
	 *
	 * @return EmbRecipient
	 */
	public function setDeletedAt( \DateTime $deletedAt ): EmbRecipient {
		$this->deletedAt = $deletedAt;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getInfertilitySignature(): ?string {
		return $this->infertilitySignature;
	}

	/**
	 * @param string|null $infertilitySignature
	 *
	 * @return EmbRecipient
	 */
	public function setInfertilitySignature( ?string $infertilitySignature ): EmbRecipient {
		$this->infertilitySignature = $infertilitySignature;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPartnerInfertilitySignature(): ?string {
		return $this->partnerInfertilitySignature;
	}

	/**
	 * @param string|null $partnerInfertilitySignature
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerInfertilitySignature( ?string $partnerInfertilitySignature ): EmbRecipient {
		$this->partnerInfertilitySignature = $partnerInfertilitySignature;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getInfertilityAgree(): ?string {
		return $this->infertilityAgree;
	}

	/**
	 * @param string|null $infertilityAgree
	 *
	 * @return EmbRecipient
	 */
	public function setInfertilityAgree( ?string $infertilityAgree ): EmbRecipient {
		$this->infertilityAgree = $infertilityAgree;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getInfoAccurateTrue(): string {
		return $this->infoAccurateTrue;
	}

	/**
	 * @param string $infoAccurateTrue
	 *
	 * @return EmbRecipient
	 */
	public function setInfoAccurateTrue( string $infoAccurateTrue ): EmbRecipient {
		$this->infoAccurateTrue = $infoAccurateTrue;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerInfoAccurateTrue(): string {
		return $this->partnerInfoAccurateTrue;
	}

	/**
	 * @param string $partnerInfoAccurateTrue
	 *
	 * @return EmbRecipient
	 */
	public function setPartnerInfoAccurateTrue( string $partnerInfoAccurateTrue ): EmbRecipient {
		$this->partnerInfoAccurateTrue = $partnerInfoAccurateTrue;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPublishToStories() {
		return $this->publishToStories;
	}

	/**
	 * @param bool $publishToStories
	 *
	 * @return EmbRecipient
	 */
	public function setPublishToStories( $publishToStories ) {
		$this->publishToStories = $publishToStories;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPublishInfertilityNarrative() {
		return $this->publishInfertilityNarrative;
	}

	/**
	 * @param bool $publishInfertilityNarrative
	 *
	 * @return EmbRecipient
	 */
	public function setPublishInfertilityNarrative( $publishInfertilityNarrative ) {
		$this->publishInfertilityNarrative = $publishInfertilityNarrative;

		return $this;
	}

    /**
     * @return CustomerUser|null
     */
    public function getUserId(): ?CustomerUser
    {
        return $this->userId;
    }

    /**
     * @param  CustomerUser $userId
     */
    public function setUserId(?CustomerUser $userId): void
    {
        $this->userId = $userId;
    }

	/**
	 * @return bool
	 */
	public function isActive(): bool {
		return $this->isActive;
	}

	/**
	 * @param bool $isActive
	 *
	 * @return EmbRecipient
	 */
	public function setIsActive( bool $isActive ): EmbRecipient {
		$this->isActive = $isActive;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getIsArchive() {
		return $this->isArchive;
	}

	/**
	 * @param int $isArchive
	 *
	 * @return EmbRecipient
	 */
	public function setIsArchive( $isArchive ) {
		$this->isArchive = $isArchive;

		return $this;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getDatetimeAcrhived(): ?\DateTime {
		return $this->datetimeAcrhived;
	}

	/**
	 * @param \DateTime|null $datetimeAcrhived
	 *
	 * @return EmbRecipient
	 */
	public function setDatetimeAcrhived( ?\DateTime $datetimeAcrhived ): EmbRecipient {
		$this->datetimeAcrhived = $datetimeAcrhived;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSexual(): string {
		return $this->sexual;
	}

	/**
	 * @param string $sexual
	 *
	 * @return EmbRecipient
	 */
	public function setSexual( string $sexual ): EmbRecipient {
		$this->sexual = $sexual;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRace(): string {
		return $this->race;
	}

	/**
	 * @param string $race
	 *
	 * @return EmbRecipient
	 */
	public function setRace( string $race ): EmbRecipient {
		$this->race = $race;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getReligion(): string {
		return $this->religion;
	}

	/**
	 * @param string $religion
	 *
	 * @return EmbRecipient
	 */
	public function setReligion( string $religion ): EmbRecipient {
		$this->religion = $religion;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEduction(): string {
		return $this->eduction;
	}

	/**
	 * @param string $eduction
	 *
	 * @return EmbRecipient
	 */
	public function setEduction( string $eduction ): EmbRecipient {
		$this->eduction = $eduction;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEducationPartner(): string {
		return $this->educationPartner;
	}

	/**
	 * @param string $educationPartner
	 *
	 * @return EmbRecipient
	 */
	public function setEducationPartner( string $educationPartner ): EmbRecipient {
		$this->educationPartner = $educationPartner;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getLocationa(): string {
		return $this->locationa;
	}

	/**
	 * @param string $locationa
	 *
	 * @return EmbRecipient
	 */
	public function setLocationa( string $locationa ): EmbRecipient {
		$this->locationa = $locationa;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getLocationNotes(): ?string {
		return $this->locationNotes;
	}

	/**
	 * @param string|null $locationNotes
	 *
	 * @return EmbRecipient
	 */
	public function setLocationNotes( ?string $locationNotes ): EmbRecipient {
		$this->locationNotes = $locationNotes;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRacePartner(): string {
		return $this->racePartner;
	}

	/**
	 * @param string $racePartner
	 *
	 * @return EmbRecipient
	 */
	public function setRacePartner( string $racePartner ): EmbRecipient {
		$this->racePartner = $racePartner;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRegion(): string {
		return $this->region;
	}

	/**
	 * @param string $region
	 *
	 * @return EmbRecipient
	 */
	public function setRegion( string $region ): EmbRecipient {
		$this->region = $region;

		return $this;
	}
//Generated by JDA 2022-12-31
    /**
     * @return string|null
     */
    public function getAdminAddTestimonial(): ?string
    {
        return $this->adminAddTestimonial;
    }

    /**
     * @param string|null $adminAddTestimonial
     * @return EmbRecipient
     */
    public function setAdminAddTestimonial(?string $adminAddTestimonial): EmbRecipient
    {
        $this->adminAddTestimonial = $adminAddTestimonial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminAddTestimonialAttachments(): ?string
    {
        return $this->adminAddTestimonialAttachments;
    }

    /**
     * @param string|null $adminAddTestimonialAttachments
     * @return EmbRecipient
     */
    public function setAdminAddTestimonialAttachments(?string $adminAddTestimonialAttachments): EmbRecipient
    {
        $this->adminAddTestimonialAttachments = $adminAddTestimonialAttachments;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminAddTestimonialDate(): ?DateTime
    {
        return $this->adminAddTestimonialDate;
    }

    /**
     * @param DateTime|null $adminAddTestimonialDate
     * @return EmbRecipient
     */
    public function setAdminAddTestimonialDate(?DateTime $adminAddTestimonialDate): EmbRecipient
    {
        $this->adminAddTestimonialDate = $adminAddTestimonialDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminAddTestimonialDisplayWebsite(): ?string
    {
        return $this->adminAddTestimonialDisplayWebsite;
    }

    /**
     * @param string|null $adminAddTestimonialDisplayWebsite
     * @return EmbRecipient
     */
    public function setAdminAddTestimonialDisplayWebsite(?string $adminAddTestimonialDisplayWebsite): EmbRecipient
    {
        $this->adminAddTestimonialDisplayWebsite = $adminAddTestimonialDisplayWebsite;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminAddTestimonialInitials(): ?string
    {
        return $this->adminAddTestimonialInitials;
    }

    /**
     * @param string|null $adminAddTestimonialInitials
     * @return EmbRecipient
     */
    public function setAdminAddTestimonialInitials(?string $adminAddTestimonialInitials): EmbRecipient
    {
        $this->adminAddTestimonialInitials = $adminAddTestimonialInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminArtPrescriptionCompletedFaxed(): ?string
    {
        return $this->adminArtPrescriptionCompletedFaxed;
    }

    /**
     * @param string|null $adminArtPrescriptionCompletedFaxed
     * @return EmbRecipient
     */
    public function setAdminArtPrescriptionCompletedFaxed(?string $adminArtPrescriptionCompletedFaxed): EmbRecipient
    {
        $this->adminArtPrescriptionCompletedFaxed = $adminArtPrescriptionCompletedFaxed;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminArtPrescriptionCompletedFaxedDate(): ?DateTime
    {
        return $this->adminArtPrescriptionCompletedFaxedDate;
    }

    /**
     * @param DateTime|null $adminArtPrescriptionCompletedFaxedDate
     * @return EmbRecipient
     */
    public function setAdminArtPrescriptionCompletedFaxedDate(?DateTime $adminArtPrescriptionCompletedFaxedDate): EmbRecipient
    {
        $this->adminArtPrescriptionCompletedFaxedDate = $adminArtPrescriptionCompletedFaxedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminArtPrescriptionCompletedFaxedInitials(): ?string
    {
        return $this->adminArtPrescriptionCompletedFaxedInitials;
    }

    /**
     * @param string|null $adminArtPrescriptionCompletedFaxedInitials
     * @return EmbRecipient
     */
    public function setAdminArtPrescriptionCompletedFaxedInitials(?string $adminArtPrescriptionCompletedFaxedInitials): EmbRecipient
    {
        $this->adminArtPrescriptionCompletedFaxedInitials = $adminArtPrescriptionCompletedFaxedInitials;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminBaselineDate(): ?DateTime
    {
        return $this->adminBaselineDate;
    }

    /**
     * @param DateTime|null $adminBaselineDate
     * @return EmbRecipient
     */
    public function setAdminBaselineDate(?DateTime $adminBaselineDate): EmbRecipient
    {
        $this->adminBaselineDate = $adminBaselineDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminBiochemicalLossPul(): ?string
    {
        return $this->adminBiochemicalLossPul;
    }

    /**
     * @param string|null $adminBiochemicalLossPul
     * @return EmbRecipient
     */
    public function setAdminBiochemicalLossPul(?string $adminBiochemicalLossPul): EmbRecipient
    {
        $this->adminBiochemicalLossPul = $adminBiochemicalLossPul;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminBiochemicalLossPulDate(): ?DateTime
    {
        return $this->adminBiochemicalLossPulDate;
    }

    /**
     * @param DateTime|null $adminBiochemicalLossPulDate
     * @return EmbRecipient
     */
    public function setAdminBiochemicalLossPulDate(?DateTime $adminBiochemicalLossPulDate): EmbRecipient
    {
        $this->adminBiochemicalLossPulDate = $adminBiochemicalLossPulDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminBiochemicalLossPulInitials(): ?string
    {
        return $this->adminBiochemicalLossPulInitials;
    }

    /**
     * @param string|null $adminBiochemicalLossPulInitials
     * @return EmbRecipient
     */
    public function setAdminBiochemicalLossPulInitials(?string $adminBiochemicalLossPulInitials): EmbRecipient
    {
        $this->adminBiochemicalLossPulInitials = $adminBiochemicalLossPulInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCardiacConsultRequired(): ?string
    {
        return $this->adminCardiacConsultRequired;
    }

    /**
     * @param string|null $adminCardiacConsultRequired
     * @return EmbRecipient
     */
    public function setAdminCardiacConsultRequired(?string $adminCardiacConsultRequired): EmbRecipient
    {
        $this->adminCardiacConsultRequired = $adminCardiacConsultRequired;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminCardiacConsultRequiredDate(): ?DateTime
    {
        return $this->adminCardiacConsultRequiredDate;
    }

    /**
     * @param DateTime|null $adminCardiacConsultRequiredDate
     * @return EmbRecipient
     */
    public function setAdminCardiacConsultRequiredDate(?DateTime $adminCardiacConsultRequiredDate): EmbRecipient
    {
        $this->adminCardiacConsultRequiredDate = $adminCardiacConsultRequiredDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCardiacConsultRequiredInitials(): ?string
    {
        return $this->adminCardiacConsultRequiredInitials;
    }

    /**
     * @param string|null $adminCardiacConsultRequiredInitials
     * @return EmbRecipient
     */
    public function setAdminCardiacConsultRequiredInitials(?string $adminCardiacConsultRequiredInitials): EmbRecipient
    {
        $this->adminCardiacConsultRequiredInitials = $adminCardiacConsultRequiredInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCardiacConsultResultsObtained(): ?string
    {
        return $this->adminCardiacConsultResultsObtained;
    }

    /**
     * @param string|null $adminCardiacConsultResultsObtained
     * @return EmbRecipient
     */
    public function setAdminCardiacConsultResultsObtained(?string $adminCardiacConsultResultsObtained): EmbRecipient
    {
        $this->adminCardiacConsultResultsObtained = $adminCardiacConsultResultsObtained;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminCardiacConsultResultsObtainedDate(): ?DateTime
    {
        return $this->adminCardiacConsultResultsObtainedDate;
    }

    /**
     * @param DateTime|null $adminCardiacConsultResultsObtainedDate
     * @return EmbRecipient
     */
    public function setAdminCardiacConsultResultsObtainedDate(?DateTime $adminCardiacConsultResultsObtainedDate): EmbRecipient
    {
        $this->adminCardiacConsultResultsObtainedDate = $adminCardiacConsultResultsObtainedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCardiacConsultResultsObtainedInitials(): ?string
    {
        return $this->adminCardiacConsultResultsObtainedInitials;
    }

    /**
     * @param string|null $adminCardiacConsultResultsObtainedInitials
     * @return EmbRecipient
     */
    public function setAdminCardiacConsultResultsObtainedInitials(?string $adminCardiacConsultResultsObtainedInitials): EmbRecipient
    {
        $this->adminCardiacConsultResultsObtainedInitials = $adminCardiacConsultResultsObtainedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminConfirmationReceivedFromLab(): ?string
    {
        return $this->adminConfirmationReceivedFromLab;
    }

    /**
     * @param string|null $adminConfirmationReceivedFromLab
     * @return EmbRecipient
     */
    public function setAdminConfirmationReceivedFromLab(?string $adminConfirmationReceivedFromLab): EmbRecipient
    {
        $this->adminConfirmationReceivedFromLab = $adminConfirmationReceivedFromLab;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminConfirmationReceivedFromLabDate(): ?DateTime
    {
        return $this->adminConfirmationReceivedFromLabDate;
    }

    /**
     * @param DateTime|null $adminConfirmationReceivedFromLabDate
     * @return EmbRecipient
     */
    public function setAdminConfirmationReceivedFromLabDate(?DateTime $adminConfirmationReceivedFromLabDate): EmbRecipient
    {
        $this->adminConfirmationReceivedFromLabDate = $adminConfirmationReceivedFromLabDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminConfirmationReceivedFromLabInitials(): ?string
    {
        return $this->adminConfirmationReceivedFromLabInitials;
    }

    /**
     * @param string|null $adminConfirmationReceivedFromLabInitials
     * @return EmbRecipient
     */
    public function setAdminConfirmationReceivedFromLabInitials(?string $adminConfirmationReceivedFromLabInitials): EmbRecipient
    {
        $this->adminConfirmationReceivedFromLabInitials = $adminConfirmationReceivedFromLabInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminConfirmedReceivedFromLab(): ?string
    {
        return $this->adminConfirmedReceivedFromLab;
    }

    /**
     * @param string|null $adminConfirmedReceivedFromLab
     * @return EmbRecipient
     */
    public function setAdminConfirmedReceivedFromLab(?string $adminConfirmedReceivedFromLab): EmbRecipient
    {
        $this->adminConfirmedReceivedFromLab = $adminConfirmedReceivedFromLab;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminConfirmedReceivedFromLabDate(): ?DateTime
    {
        return $this->adminConfirmedReceivedFromLabDate;
    }

    /**
     * @param DateTime|null $adminConfirmedReceivedFromLabDate
     * @return EmbRecipient
     */
    public function setAdminConfirmedReceivedFromLabDate(?DateTime $adminConfirmedReceivedFromLabDate): EmbRecipient
    {
        $this->adminConfirmedReceivedFromLabDate = $adminConfirmedReceivedFromLabDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminConfirmedReceivedFromLabIntials(): ?string
    {
        return $this->adminConfirmedReceivedFromLabIntials;
    }

    /**
     * @param string|null $adminConfirmedReceivedFromLabIntials
     * @return EmbRecipient
     */
    public function setAdminConfirmedReceivedFromLabIntials(?string $adminConfirmedReceivedFromLabIntials): EmbRecipient
    {
        $this->adminConfirmedReceivedFromLabIntials = $adminConfirmedReceivedFromLabIntials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalBackgroundCheckRequest(): ?string
    {
        return $this->adminCriminalBackgroundCheckRequest;
    }

    /**
     * @param string|null $adminCriminalBackgroundCheckRequest
     * @return EmbRecipient
     */
    public function setAdminCriminalBackgroundCheckRequest(?string $adminCriminalBackgroundCheckRequest): EmbRecipient
    {
        $this->adminCriminalBackgroundCheckRequest = $adminCriminalBackgroundCheckRequest;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminCriminalBackgroundCheckRequestDate(): ?DateTime
    {
        return $this->adminCriminalBackgroundCheckRequestDate;
    }

    /**
     * @param DateTime|null $adminCriminalBackgroundCheckRequestDate
     * @return EmbRecipient
     */
    public function setAdminCriminalBackgroundCheckRequestDate(?DateTime $adminCriminalBackgroundCheckRequestDate): EmbRecipient
    {
        $this->adminCriminalBackgroundCheckRequestDate = $adminCriminalBackgroundCheckRequestDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalBackgroundCheckRequestInitials(): ?string
    {
        return $this->adminCriminalBackgroundCheckRequestInitials;
    }

    /**
     * @param string|null $adminCriminalBackgroundCheckRequestInitials
     * @return EmbRecipient
     */
    public function setAdminCriminalBackgroundCheckRequestInitials(?string $adminCriminalBackgroundCheckRequestInitials): EmbRecipient
    {
        $this->adminCriminalBackgroundCheckRequestInitials = $adminCriminalBackgroundCheckRequestInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalBackgroundCheckResults(): ?string
    {
        return $this->adminCriminalBackgroundCheckResults;
    }

    /**
     * @param string|null $adminCriminalBackgroundCheckResults
     * @return EmbRecipient
     */
    public function setAdminCriminalBackgroundCheckResults(?string $adminCriminalBackgroundCheckResults): EmbRecipient
    {
        $this->adminCriminalBackgroundCheckResults = $adminCriminalBackgroundCheckResults;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminCriminalBackgroundCheckResultsDate(): ?DateTime
    {
        return $this->adminCriminalBackgroundCheckResultsDate;
    }

    /**
     * @param DateTime|null $adminCriminalBackgroundCheckResultsDate
     * @return EmbRecipient
     */
    public function setAdminCriminalBackgroundCheckResultsDate(?DateTime $adminCriminalBackgroundCheckResultsDate): EmbRecipient
    {
        $this->adminCriminalBackgroundCheckResultsDate = $adminCriminalBackgroundCheckResultsDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalBackgroundCheckResultsInitials(): ?string
    {
        return $this->adminCriminalBackgroundCheckResultsInitials;
    }

    /**
     * @param string|null $adminCriminalBackgroundCheckResultsInitials
     * @return EmbRecipient
     */
    public function setAdminCriminalBackgroundCheckResultsInitials(?string $adminCriminalBackgroundCheckResultsInitials): EmbRecipient
    {
        $this->adminCriminalBackgroundCheckResultsInitials = $adminCriminalBackgroundCheckResultsInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalHistoryConsentReceived(): ?string
    {
        return $this->adminCriminalHistoryConsentReceived;
    }

    /**
     * @param string|null $adminCriminalHistoryConsentReceived
     * @return EmbRecipient
     */
    public function setAdminCriminalHistoryConsentReceived(?string $adminCriminalHistoryConsentReceived): EmbRecipient
    {
        $this->adminCriminalHistoryConsentReceived = $adminCriminalHistoryConsentReceived;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminCriminalHistoryConsentReceivedDate(): ?DateTime
    {
        return $this->adminCriminalHistoryConsentReceivedDate;
    }

    /**
     * @param DateTime|null $adminCriminalHistoryConsentReceivedDate
     * @return EmbRecipient
     */
    public function setAdminCriminalHistoryConsentReceivedDate(?DateTime $adminCriminalHistoryConsentReceivedDate): EmbRecipient
    {
        $this->adminCriminalHistoryConsentReceivedDate = $adminCriminalHistoryConsentReceivedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalHistoryConsentReceivedInitials(): ?string
    {
        return $this->adminCriminalHistoryConsentReceivedInitials;
    }

    /**
     * @param string|null $adminCriminalHistoryConsentReceivedInitials
     * @return EmbRecipient
     */
    public function setAdminCriminalHistoryConsentReceivedInitials(?string $adminCriminalHistoryConsentReceivedInitials): EmbRecipient
    {
        $this->adminCriminalHistoryConsentReceivedInitials = $adminCriminalHistoryConsentReceivedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalHistoryConsentSent(): ?string
    {
        return $this->adminCriminalHistoryConsentSent;
    }

    /**
     * @param string|null $adminCriminalHistoryConsentSent
     * @return EmbRecipient
     */
    public function setAdminCriminalHistoryConsentSent(?string $adminCriminalHistoryConsentSent): EmbRecipient
    {
        $this->adminCriminalHistoryConsentSent = $adminCriminalHistoryConsentSent;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminCriminalHistoryConsentSentDate(): ?DateTime
    {
        return $this->adminCriminalHistoryConsentSentDate;
    }

    /**
     * @param DateTime|null $adminCriminalHistoryConsentSentDate
     * @return EmbRecipient
     */
    public function setAdminCriminalHistoryConsentSentDate(?DateTime $adminCriminalHistoryConsentSentDate): EmbRecipient
    {
        $this->adminCriminalHistoryConsentSentDate = $adminCriminalHistoryConsentSentDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminCriminalHistoryConsentSentInitials(): ?string
    {
        return $this->adminCriminalHistoryConsentSentInitials;
    }

    /**
     * @param string|null $adminCriminalHistoryConsentSentInitials
     * @return EmbRecipient
     */
    public function setAdminCriminalHistoryConsentSentInitials(?string $adminCriminalHistoryConsentSentInitials): EmbRecipient
    {
        $this->adminCriminalHistoryConsentSentInitials = $adminCriminalHistoryConsentSentInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDcoRecptAndDonorsDoContact(): ?string
    {
        return $this->adminDcoRecptAndDonorsDoContact;
    }

    /**
     * @param string|null $adminDcoRecptAndDonorsDoContact
     * @return EmbRecipient
     */
    public function setAdminDcoRecptAndDonorsDoContact(?string $adminDcoRecptAndDonorsDoContact): EmbRecipient
    {
        $this->adminDcoRecptAndDonorsDoContact = $adminDcoRecptAndDonorsDoContact;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminDcoRecptAndDonorsDoContactDate(): ?DateTime
    {
        return $this->adminDcoRecptAndDonorsDoContactDate;
    }

    /**
     * @param DateTime|null $adminDcoRecptAndDonorsDoContactDate
     * @return EmbRecipient
     */
    public function setAdminDcoRecptAndDonorsDoContactDate(?DateTime $adminDcoRecptAndDonorsDoContactDate): EmbRecipient
    {
        $this->adminDcoRecptAndDonorsDoContactDate = $adminDcoRecptAndDonorsDoContactDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDcoRecptAndDonorsDoContactInitials(): ?string
    {
        return $this->adminDcoRecptAndDonorsDoContactInitials;
    }

    /**
     * @param string|null $adminDcoRecptAndDonorsDoContactInitials
     * @return EmbRecipient
     */
    public function setAdminDcoRecptAndDonorsDoContactInitials(?string $adminDcoRecptAndDonorsDoContactInitials): EmbRecipient
    {
        $this->adminDcoRecptAndDonorsDoContactInitials = $adminDcoRecptAndDonorsDoContactInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDeliveryRegistered(): ?string
    {
        return $this->adminDeliveryRegistered;
    }

    /**
     * @param string|null $adminDeliveryRegistered
     * @return EmbRecipient
     */
    public function setAdminDeliveryRegistered(?string $adminDeliveryRegistered): EmbRecipient
    {
        $this->adminDeliveryRegistered = $adminDeliveryRegistered;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDeliveryRegisteredChildrenNames(): ?string
    {
        return $this->adminDeliveryRegisteredChildrenNames;
    }

    /**
     * @param string|null $adminDeliveryRegisteredChildrenNames
     * @return EmbRecipient
     */
    public function setAdminDeliveryRegisteredChildrenNames(?string $adminDeliveryRegisteredChildrenNames): EmbRecipient
    {
        $this->adminDeliveryRegisteredChildrenNames = $adminDeliveryRegisteredChildrenNames;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDonorsAcceptRejectRecpt(): ?string
    {
        return $this->adminDonorsAcceptRejectRecpt;
    }

    /**
     * @param string|null $adminDonorsAcceptRejectRecpt
     * @return EmbRecipient
     */
    public function setAdminDonorsAcceptRejectRecpt(?string $adminDonorsAcceptRejectRecpt): EmbRecipient
    {
        $this->adminDonorsAcceptRejectRecpt = $adminDonorsAcceptRejectRecpt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminDonorsAcceptRejectRecptDate(): ?DateTime
    {
        return $this->adminDonorsAcceptRejectRecptDate;
    }

    /**
     * @param DateTime|null $adminDonorsAcceptRejectRecptDate
     * @return EmbRecipient
     */
    public function setAdminDonorsAcceptRejectRecptDate(?DateTime $adminDonorsAcceptRejectRecptDate): EmbRecipient
    {
        $this->adminDonorsAcceptRejectRecptDate = $adminDonorsAcceptRejectRecptDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDonorsAcceptRejectRecptInitials(): ?string
    {
        return $this->adminDonorsAcceptRejectRecptInitials;
    }

    /**
     * @param string|null $adminDonorsAcceptRejectRecptInitials
     * @return EmbRecipient
     */
    public function setAdminDonorsAcceptRejectRecptInitials(?string $adminDonorsAcceptRejectRecptInitials): EmbRecipient
    {
        $this->adminDonorsAcceptRejectRecptInitials = $adminDonorsAcceptRejectRecptInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDonorsProvidedMhpContactInfo(): ?string
    {
        return $this->adminDonorsProvidedMhpContactInfo;
    }

    /**
     * @param string|null $adminDonorsProvidedMhpContactInfo
     * @return EmbRecipient
     */
    public function setAdminDonorsProvidedMhpContactInfo(?string $adminDonorsProvidedMhpContactInfo): EmbRecipient
    {
        $this->adminDonorsProvidedMhpContactInfo = $adminDonorsProvidedMhpContactInfo;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminDonorsProvidedMhpContactInfoDate(): ?DateTime
    {
        return $this->adminDonorsProvidedMhpContactInfoDate;
    }

    /**
     * @param DateTime|null $adminDonorsProvidedMhpContactInfoDate
     * @return EmbRecipient
     */
    public function setAdminDonorsProvidedMhpContactInfoDate(?DateTime $adminDonorsProvidedMhpContactInfoDate): EmbRecipient
    {
        $this->adminDonorsProvidedMhpContactInfoDate = $adminDonorsProvidedMhpContactInfoDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminDonorsProvidedMhpContactInfoInitials(): ?string
    {
        return $this->adminDonorsProvidedMhpContactInfoInitials;
    }

    /**
     * @param string|null $adminDonorsProvidedMhpContactInfoInitials
     * @return EmbRecipient
     */
    public function setAdminDonorsProvidedMhpContactInfoInitials(?string $adminDonorsProvidedMhpContactInfoInitials): EmbRecipient
    {
        $this->adminDonorsProvidedMhpContactInfoInitials = $adminDonorsProvidedMhpContactInfoInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEarlySpontaneouseLoss(): ?string
    {
        return $this->adminEarlySpontaneouseLoss;
    }

    /**
     * @param string|null $adminEarlySpontaneouseLoss
     * @return EmbRecipient
     */
    public function setAdminEarlySpontaneouseLoss(?string $adminEarlySpontaneouseLoss): EmbRecipient
    {
        $this->adminEarlySpontaneouseLoss = $adminEarlySpontaneouseLoss;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEarlySpontaneouseLossDate(): ?DateTime
    {
        return $this->adminEarlySpontaneouseLossDate;
    }

    /**
     * @param DateTime|null $adminEarlySpontaneouseLossDate
     * @return EmbRecipient
     */
    public function setAdminEarlySpontaneouseLossDate(?DateTime $adminEarlySpontaneouseLossDate): EmbRecipient
    {
        $this->adminEarlySpontaneouseLossDate = $adminEarlySpontaneouseLossDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEarlySpontaneouseLossInitials(): ?string
    {
        return $this->adminEarlySpontaneouseLossInitials;
    }

    /**
     * @param string|null $adminEarlySpontaneouseLossInitials
     * @return EmbRecipient
     */
    public function setAdminEarlySpontaneouseLossInitials(?string $adminEarlySpontaneouseLossInitials): EmbRecipient
    {
        $this->adminEarlySpontaneouseLossInitials = $adminEarlySpontaneouseLossInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEctopic(): ?string
    {
        return $this->adminEctopic;
    }

    /**
     * @param string|null $adminEctopic
     * @return EmbRecipient
     */
    public function setAdminEctopic(?string $adminEctopic): EmbRecipient
    {
        $this->adminEctopic = $adminEctopic;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEctopicDate(): ?DateTime
    {
        return $this->adminEctopicDate;
    }

    /**
     * @param DateTime|null $adminEctopicDate
     * @return EmbRecipient
     */
    public function setAdminEctopicDate(?DateTime $adminEctopicDate): EmbRecipient
    {
        $this->adminEctopicDate = $adminEctopicDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEctopicInitials(): ?string
    {
        return $this->adminEctopicInitials;
    }

    /**
     * @param string|null $adminEctopicInitials
     * @return EmbRecipient
     */
    public function setAdminEctopicInitials(?string $adminEctopicInitials): EmbRecipient
    {
        $this->adminEctopicInitials = $adminEctopicInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEdiConsentsReceived(): ?string
    {
        return $this->adminEdiConsentsReceived;
    }

    /**
     * @param string|null $adminEdiConsentsReceived
     * @return EmbRecipient
     */
    public function setAdminEdiConsentsReceived(?string $adminEdiConsentsReceived): EmbRecipient
    {
        $this->adminEdiConsentsReceived = $adminEdiConsentsReceived;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEdiConsentsReceivedDate(): ?DateTime
    {
        return $this->adminEdiConsentsReceivedDate;
    }

    /**
     * @param DateTime|null $adminEdiConsentsReceivedDate
     * @return EmbRecipient
     */
    public function setAdminEdiConsentsReceivedDate(?DateTime $adminEdiConsentsReceivedDate): EmbRecipient
    {
        $this->adminEdiConsentsReceivedDate = $adminEdiConsentsReceivedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEdiConsentsReceivedInitials(): ?string
    {
        return $this->adminEdiConsentsReceivedInitials;
    }

    /**
     * @param string|null $adminEdiConsentsReceivedInitials
     * @return EmbRecipient
     */
    public function setAdminEdiConsentsReceivedInitials(?string $adminEdiConsentsReceivedInitials): EmbRecipient
    {
        $this->adminEdiConsentsReceivedInitials = $adminEdiConsentsReceivedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEdiFdetLabSummaryCycleWorksheetCompleted(): ?string
    {
        return $this->adminEdiFdetLabSummaryCycleWorksheetCompleted;
    }

    /**
     * @param string|null $adminEdiFdetLabSummaryCycleWorksheetCompleted
     * @return EmbRecipient
     */
    public function setAdminEdiFdetLabSummaryCycleWorksheetCompleted(?string $adminEdiFdetLabSummaryCycleWorksheetCompleted): EmbRecipient
    {
        $this->adminEdiFdetLabSummaryCycleWorksheetCompleted = $adminEdiFdetLabSummaryCycleWorksheetCompleted;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEdiFdetLabSummaryCycleWorksheetCompletedDate(): ?DateTime
    {
        return $this->adminEdiFdetLabSummaryCycleWorksheetCompletedDate;
    }

    /**
     * @param DateTime|null $adminEdiFdetLabSummaryCycleWorksheetCompletedDate
     * @return EmbRecipient
     */
    public function setAdminEdiFdetLabSummaryCycleWorksheetCompletedDate(?DateTime $adminEdiFdetLabSummaryCycleWorksheetCompletedDate): EmbRecipient
    {
        $this->adminEdiFdetLabSummaryCycleWorksheetCompletedDate = $adminEdiFdetLabSummaryCycleWorksheetCompletedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEdiFdetLabSummaryCycleWorksheetCompletedInitials(): ?string
    {
        return $this->adminEdiFdetLabSummaryCycleWorksheetCompletedInitials;
    }

    /**
     * @param string|null $adminEdiFdetLabSummaryCycleWorksheetCompletedInitials
     * @return EmbRecipient
     */
    public function setAdminEdiFdetLabSummaryCycleWorksheetCompletedInitials(?string $adminEdiFdetLabSummaryCycleWorksheetCompletedInitials): EmbRecipient
    {
        $this->adminEdiFdetLabSummaryCycleWorksheetCompletedInitials = $adminEdiFdetLabSummaryCycleWorksheetCompletedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEmailedNewPatientPaperwork(): ?string
    {
        return $this->adminEmailedNewPatientPaperwork;
    }

    /**
     * @param string|null $adminEmailedNewPatientPaperwork
     * @return EmbRecipient
     */
    public function setAdminEmailedNewPatientPaperwork(?string $adminEmailedNewPatientPaperwork): EmbRecipient
    {
        $this->adminEmailedNewPatientPaperwork = $adminEmailedNewPatientPaperwork;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEmailedNewPatientPaperworkDate(): ?DateTime
    {
        return $this->adminEmailedNewPatientPaperworkDate;
    }

    /**
     * @param DateTime|null $adminEmailedNewPatientPaperworkDate
     * @return EmbRecipient
     */
    public function setAdminEmailedNewPatientPaperworkDate(?DateTime $adminEmailedNewPatientPaperworkDate): EmbRecipient
    {
        $this->adminEmailedNewPatientPaperworkDate = $adminEmailedNewPatientPaperworkDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEmailedNewPatientPaperworkInitials(): ?string
    {
        return $this->adminEmailedNewPatientPaperworkInitials;
    }

    /**
     * @param string|null $adminEmailedNewPatientPaperworkInitials
     * @return EmbRecipient
     */
    public function setAdminEmailedNewPatientPaperworkInitials(?string $adminEmailedNewPatientPaperworkInitials): EmbRecipient
    {
        $this->adminEmailedNewPatientPaperworkInitials = $adminEmailedNewPatientPaperworkInitials;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEstimatedDeliveryDate(): ?DateTime
    {
        return $this->adminEstimatedDeliveryDate;
    }

    /**
     * @param DateTime|null $adminEstimatedDeliveryDate
     * @return EmbRecipient
     */
    public function setAdminEstimatedDeliveryDate(?DateTime $adminEstimatedDeliveryDate): EmbRecipient
    {
        $this->adminEstimatedDeliveryDate = $adminEstimatedDeliveryDate;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminEstimatedDeliveryDatePregnancyTest(): ?DateTime
    {
        return $this->adminEstimatedDeliveryDatePregnancyTest;
    }

    /**
     * @param DateTime|null $adminEstimatedDeliveryDatePregnancyTest
     * @return EmbRecipient
     */
    public function setAdminEstimatedDeliveryDatePregnancyTest(?DateTime $adminEstimatedDeliveryDatePregnancyTest): EmbRecipient
    {
        $this->adminEstimatedDeliveryDatePregnancyTest = $adminEstimatedDeliveryDatePregnancyTest;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFetalDemise(): ?string
    {
        return $this->adminFetalDemise;
    }

    /**
     * @param string|null $adminFetalDemise
     * @return EmbRecipient
     */
    public function setAdminFetalDemise(?string $adminFetalDemise): EmbRecipient
    {
        $this->adminFetalDemise = $adminFetalDemise;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminFetalDemiseDate(): ?DateTime
    {
        return $this->adminFetalDemiseDate;
    }

    /**
     * @param DateTime|null $adminFetalDemiseDate
     * @return EmbRecipient
     */
    public function setAdminFetalDemiseDate(?DateTime $adminFetalDemiseDate): EmbRecipient
    {
        $this->adminFetalDemiseDate = $adminFetalDemiseDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFetalDemiseInitials(): ?string
    {
        return $this->adminFetalDemiseInitials;
    }

    /**
     * @param string|null $adminFetalDemiseInitials
     * @return EmbRecipient
     */
    public function setAdminFetalDemiseInitials(?string $adminFetalDemiseInitials): EmbRecipient
    {
        $this->adminFetalDemiseInitials = $adminFetalDemiseInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFinalEmbryologyConfirmationTransferedToEdi(): ?string
    {
        return $this->adminFinalEmbryologyConfirmationTransferedToEdi;
    }

    /**
     * @param string|null $adminFinalEmbryologyConfirmationTransferedToEdi
     * @return EmbRecipient
     */
    public function setAdminFinalEmbryologyConfirmationTransferedToEdi(?string $adminFinalEmbryologyConfirmationTransferedToEdi): EmbRecipient
    {
        $this->adminFinalEmbryologyConfirmationTransferedToEdi = $adminFinalEmbryologyConfirmationTransferedToEdi;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminFinalEmbryologyConfirmationTransferedToEdiDate(): ?DateTime
    {
        return $this->adminFinalEmbryologyConfirmationTransferedToEdiDate;
    }

    /**
     * @param DateTime|null $adminFinalEmbryologyConfirmationTransferedToEdiDate
     * @return EmbRecipient
     */
    public function setAdminFinalEmbryologyConfirmationTransferedToEdiDate(?DateTime $adminFinalEmbryologyConfirmationTransferedToEdiDate): EmbRecipient
    {
        $this->adminFinalEmbryologyConfirmationTransferedToEdiDate = $adminFinalEmbryologyConfirmationTransferedToEdiDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFinalEmbryologyConfirmationTransferedToEdiInitials(): ?string
    {
        return $this->adminFinalEmbryologyConfirmationTransferedToEdiInitials;
    }

    /**
     * @param string|null $adminFinalEmbryologyConfirmationTransferedToEdiInitials
     * @return EmbRecipient
     */
    public function setAdminFinalEmbryologyConfirmationTransferedToEdiInitials(?string $adminFinalEmbryologyConfirmationTransferedToEdiInitials): EmbRecipient
    {
        $this->adminFinalEmbryologyConfirmationTransferedToEdiInitials = $adminFinalEmbryologyConfirmationTransferedToEdiInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFinancialDiscussionScheduled(): ?string
    {
        return $this->adminFinancialDiscussionScheduled;
    }

    /**
     * @param string|null $adminFinancialDiscussionScheduled
     * @return EmbRecipient
     */
    public function setAdminFinancialDiscussionScheduled(?string $adminFinancialDiscussionScheduled): EmbRecipient
    {
        $this->adminFinancialDiscussionScheduled = $adminFinancialDiscussionScheduled;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminFinancialDiscussionScheduledDate(): ?DateTime
    {
        return $this->adminFinancialDiscussionScheduledDate;
    }

    /**
     * @param DateTime|null $adminFinancialDiscussionScheduledDate
     * @return EmbRecipient
     */
    public function setAdminFinancialDiscussionScheduledDate(?DateTime $adminFinancialDiscussionScheduledDate): EmbRecipient
    {
        $this->adminFinancialDiscussionScheduledDate = $adminFinancialDiscussionScheduledDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFinancialDiscussionScheduledDonor(): ?string
    {
        return $this->adminFinancialDiscussionScheduledDonor;
    }

    /**
     * @param string|null $adminFinancialDiscussionScheduledDonor
     * @return EmbRecipient
     */
    public function setAdminFinancialDiscussionScheduledDonor(?string $adminFinancialDiscussionScheduledDonor): EmbRecipient
    {
        $this->adminFinancialDiscussionScheduledDonor = $adminFinancialDiscussionScheduledDonor;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminFinancialDiscussionScheduledDonorDate(): ?DateTime
    {
        return $this->adminFinancialDiscussionScheduledDonorDate;
    }

    /**
     * @param DateTime|null $adminFinancialDiscussionScheduledDonorDate
     * @return EmbRecipient
     */
    public function setAdminFinancialDiscussionScheduledDonorDate(?DateTime $adminFinancialDiscussionScheduledDonorDate): EmbRecipient
    {
        $this->adminFinancialDiscussionScheduledDonorDate = $adminFinancialDiscussionScheduledDonorDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFinancialDiscussionScheduledDonorInitials(): ?string
    {
        return $this->adminFinancialDiscussionScheduledDonorInitials;
    }

    /**
     * @param string|null $adminFinancialDiscussionScheduledDonorInitials
     * @return EmbRecipient
     */
    public function setAdminFinancialDiscussionScheduledDonorInitials(?string $adminFinancialDiscussionScheduledDonorInitials): EmbRecipient
    {
        $this->adminFinancialDiscussionScheduledDonorInitials = $adminFinancialDiscussionScheduledDonorInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminFinancialDiscussionScheduledInitals(): ?string
    {
        return $this->adminFinancialDiscussionScheduledInitals;
    }

    /**
     * @param string|null $adminFinancialDiscussionScheduledInitals
     * @return EmbRecipient
     */
    public function setAdminFinancialDiscussionScheduledInitals(?string $adminFinancialDiscussionScheduledInitals): EmbRecipient
    {
        $this->adminFinancialDiscussionScheduledInitals = $adminFinancialDiscussionScheduledInitals;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdp(): ?string
    {
        return $this->adminIdp;
    }

    /**
     * @param string|null $adminIdp
     * @return EmbRecipient
     */
    public function setAdminIdp(?string $adminIdp): EmbRecipient
    {
        $this->adminIdp = $adminIdp;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpContactPermitted(): ?string
    {
        return $this->adminIdpContactPermitted;
    }

    /**
     * @param string|null $adminIdpContactPermitted
     * @return EmbRecipient
     */
    public function setAdminIdpContactPermitted(?string $adminIdpContactPermitted): EmbRecipient
    {
        $this->adminIdpContactPermitted = $adminIdpContactPermitted;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpDonorConfirmsIdpFirstMethodOfContact(): ?string
    {
        return $this->adminIdpDonorConfirmsIdpFirstMethodOfContact;
    }

    /**
     * @param string|null $adminIdpDonorConfirmsIdpFirstMethodOfContact
     * @return EmbRecipient
     */
    public function setAdminIdpDonorConfirmsIdpFirstMethodOfContact(?string $adminIdpDonorConfirmsIdpFirstMethodOfContact): EmbRecipient
    {
        $this->adminIdpDonorConfirmsIdpFirstMethodOfContact = $adminIdpDonorConfirmsIdpFirstMethodOfContact;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminIdpDonorConfirmsIdpFirstMethodOfContactDate(): ?DateTime
    {
        return $this->adminIdpDonorConfirmsIdpFirstMethodOfContactDate;
    }

    /**
     * @param DateTime|null $adminIdpDonorConfirmsIdpFirstMethodOfContactDate
     * @return EmbRecipient
     */
    public function setAdminIdpDonorConfirmsIdpFirstMethodOfContactDate(?DateTime $adminIdpDonorConfirmsIdpFirstMethodOfContactDate): EmbRecipient
    {
        $this->adminIdpDonorConfirmsIdpFirstMethodOfContactDate = $adminIdpDonorConfirmsIdpFirstMethodOfContactDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpDonorConfirmsIdpFirstMethodOfContactInitials(): ?string
    {
        return $this->adminIdpDonorConfirmsIdpFirstMethodOfContactInitials;
    }

    /**
     * @param string|null $adminIdpDonorConfirmsIdpFirstMethodOfContactInitials
     * @return EmbRecipient
     */
    public function setAdminIdpDonorConfirmsIdpFirstMethodOfContactInitials(?string $adminIdpDonorConfirmsIdpFirstMethodOfContactInitials): EmbRecipient
    {
        $this->adminIdpDonorConfirmsIdpFirstMethodOfContactInitials = $adminIdpDonorConfirmsIdpFirstMethodOfContactInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpDonorsFailedToContactDcoRecpt(): ?string
    {
        return $this->adminIdpDonorsFailedToContactDcoRecpt;
    }

    /**
     * @param string|null $adminIdpDonorsFailedToContactDcoRecpt
     * @return EmbRecipient
     */
    public function setAdminIdpDonorsFailedToContactDcoRecpt(?string $adminIdpDonorsFailedToContactDcoRecpt): EmbRecipient
    {
        $this->adminIdpDonorsFailedToContactDcoRecpt = $adminIdpDonorsFailedToContactDcoRecpt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminIdpDonorsFailedToContactDcoRecptDate(): ?DateTime
    {
        return $this->adminIdpDonorsFailedToContactDcoRecptDate;
    }

    /**
     * @param DateTime|null $adminIdpDonorsFailedToContactDcoRecptDate
     * @return EmbRecipient
     */
    public function setAdminIdpDonorsFailedToContactDcoRecptDate(?DateTime $adminIdpDonorsFailedToContactDcoRecptDate): EmbRecipient
    {
        $this->adminIdpDonorsFailedToContactDcoRecptDate = $adminIdpDonorsFailedToContactDcoRecptDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpDonorsFailedToContactDcoRecptInitials(): ?string
    {
        return $this->adminIdpDonorsFailedToContactDcoRecptInitials;
    }

    /**
     * @param string|null $adminIdpDonorsFailedToContactDcoRecptInitials
     * @return EmbRecipient
     */
    public function setAdminIdpDonorsFailedToContactDcoRecptInitials(?string $adminIdpDonorsFailedToContactDcoRecptInitials): EmbRecipient
    {
        $this->adminIdpDonorsFailedToContactDcoRecptInitials = $adminIdpDonorsFailedToContactDcoRecptInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpDonorsFailedToContactDcoRecptSweet(): ?string
    {
        return $this->adminIdpDonorsFailedToContactDcoRecptSweet;
    }

    /**
     * @param string|null $adminIdpDonorsFailedToContactDcoRecptSweet
     * @return EmbRecipient
     */
    public function setAdminIdpDonorsFailedToContactDcoRecptSweet(?string $adminIdpDonorsFailedToContactDcoRecptSweet): EmbRecipient
    {
        $this->adminIdpDonorsFailedToContactDcoRecptSweet = $adminIdpDonorsFailedToContactDcoRecptSweet;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpFailureToContactDonor(): ?string
    {
        return $this->adminIdpFailureToContactDonor;
    }

    /**
     * @param string|null $adminIdpFailureToContactDonor
     * @return EmbRecipient
     */
    public function setAdminIdpFailureToContactDonor(?string $adminIdpFailureToContactDonor): EmbRecipient
    {
        $this->adminIdpFailureToContactDonor = $adminIdpFailureToContactDonor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpFailureToContactDonorSweet(): ?string
    {
        return $this->adminIdpFailureToContactDonorSweet;
    }

    /**
     * @param string|null $adminIdpFailureToContactDonorSweet
     * @return EmbRecipient
     */
    public function setAdminIdpFailureToContactDonorSweet(?string $adminIdpFailureToContactDonorSweet): EmbRecipient
    {
        $this->adminIdpFailureToContactDonorSweet = $adminIdpFailureToContactDonorSweet;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminIdpNotificationOfDonor(): ?DateTime
    {
        return $this->adminIdpNotificationOfDonor;
    }

    /**
     * @param DateTime|null $adminIdpNotificationOfDonor
     * @return EmbRecipient
     */
    public function setAdminIdpNotificationOfDonor(?DateTime $adminIdpNotificationOfDonor): EmbRecipient
    {
        $this->adminIdpNotificationOfDonor = $adminIdpNotificationOfDonor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpNotificationOfDonorContactAttempt(): ?string
    {
        return $this->adminIdpNotificationOfDonorContactAttempt;
    }

    /**
     * @param string|null $adminIdpNotificationOfDonorContactAttempt
     * @return EmbRecipient
     */
    public function setAdminIdpNotificationOfDonorContactAttempt(?string $adminIdpNotificationOfDonorContactAttempt): EmbRecipient
    {
        $this->adminIdpNotificationOfDonorContactAttempt = $adminIdpNotificationOfDonorContactAttempt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpRequestMadeByDcoRecpt(): ?string
    {
        return $this->adminIdpRequestMadeByDcoRecpt;
    }

    /**
     * @param string|null $adminIdpRequestMadeByDcoRecpt
     * @return EmbRecipient
     */
    public function setAdminIdpRequestMadeByDcoRecpt(?string $adminIdpRequestMadeByDcoRecpt): EmbRecipient
    {
        $this->adminIdpRequestMadeByDcoRecpt = $adminIdpRequestMadeByDcoRecpt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminIdpRequestMadeByDcoRecptDate(): ?DateTime
    {
        return $this->adminIdpRequestMadeByDcoRecptDate;
    }

    /**
     * @param DateTime|null $adminIdpRequestMadeByDcoRecptDate
     * @return EmbRecipient
     */
    public function setAdminIdpRequestMadeByDcoRecptDate(?DateTime $adminIdpRequestMadeByDcoRecptDate): EmbRecipient
    {
        $this->adminIdpRequestMadeByDcoRecptDate = $adminIdpRequestMadeByDcoRecptDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminIdpRequestMadeByDcoRecptInitials(): ?string
    {
        return $this->adminIdpRequestMadeByDcoRecptInitials;
    }

    /**
     * @param string|null $adminIdpRequestMadeByDcoRecptInitials
     * @return EmbRecipient
     */
    public function setAdminIdpRequestMadeByDcoRecptInitials(?string $adminIdpRequestMadeByDcoRecptInitials): EmbRecipient
    {
        $this->adminIdpRequestMadeByDcoRecptInitials = $adminIdpRequestMadeByDcoRecptInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminInfoAboutGeneticDiseases(): ?string
    {
        return $this->adminInfoAboutGeneticDiseases;
    }

    /**
     * @param string|null $adminInfoAboutGeneticDiseases
     * @return EmbRecipient
     */
    public function setAdminInfoAboutGeneticDiseases(?string $adminInfoAboutGeneticDiseases): EmbRecipient
    {
        $this->adminInfoAboutGeneticDiseases = $adminInfoAboutGeneticDiseases;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminInfoAboutGeneticDiseasesDate(): ?DateTime
    {
        return $this->adminInfoAboutGeneticDiseasesDate;
    }

    /**
     * @param DateTime|null $adminInfoAboutGeneticDiseasesDate
     * @return EmbRecipient
     */
    public function setAdminInfoAboutGeneticDiseasesDate(?DateTime $adminInfoAboutGeneticDiseasesDate): EmbRecipient
    {
        $this->adminInfoAboutGeneticDiseasesDate = $adminInfoAboutGeneticDiseasesDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminInfoAboutGeneticDiseasesInitials(): ?string
    {
        return $this->adminInfoAboutGeneticDiseasesInitials;
    }

    /**
     * @param string|null $adminInfoAboutGeneticDiseasesInitials
     * @return EmbRecipient
     */
    public function setAdminInfoAboutGeneticDiseasesInitials(?string $adminInfoAboutGeneticDiseasesInitials): EmbRecipient
    {
        $this->adminInfoAboutGeneticDiseasesInitials = $adminInfoAboutGeneticDiseasesInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminLateSpontaneousLoss(): ?string
    {
        return $this->adminLateSpontaneousLoss;
    }

    /**
     * @param string|null $adminLateSpontaneousLoss
     * @return EmbRecipient
     */
    public function setAdminLateSpontaneousLoss(?string $adminLateSpontaneousLoss): EmbRecipient
    {
        $this->adminLateSpontaneousLoss = $adminLateSpontaneousLoss;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminLateSpontaneousLossDate(): ?DateTime
    {
        return $this->adminLateSpontaneousLossDate;
    }

    /**
     * @param DateTime|null $adminLateSpontaneousLossDate
     * @return EmbRecipient
     */
    public function setAdminLateSpontaneousLossDate(?DateTime $adminLateSpontaneousLossDate): EmbRecipient
    {
        $this->adminLateSpontaneousLossDate = $adminLateSpontaneousLossDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminLateSpontaneousLossInitials(): ?string
    {
        return $this->adminLateSpontaneousLossInitials;
    }

    /**
     * @param string|null $adminLateSpontaneousLossInitials
     * @return EmbRecipient
     */
    public function setAdminLateSpontaneousLossInitials(?string $adminLateSpontaneousLossInitials): EmbRecipient
    {
        $this->adminLateSpontaneousLossInitials = $adminLateSpontaneousLossInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMaternalFetalMedicineConsultRequired(): ?string
    {
        return $this->adminMaternalFetalMedicineConsultRequired;
    }

    /**
     * @param string|null $adminMaternalFetalMedicineConsultRequired
     * @return EmbRecipient
     */
    public function setAdminMaternalFetalMedicineConsultRequired(?string $adminMaternalFetalMedicineConsultRequired): EmbRecipient
    {
        $this->adminMaternalFetalMedicineConsultRequired = $adminMaternalFetalMedicineConsultRequired;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMaternalFetalMedicineConsultRequiredDate(): ?DateTime
    {
        return $this->adminMaternalFetalMedicineConsultRequiredDate;
    }

    /**
     * @param DateTime|null $adminMaternalFetalMedicineConsultRequiredDate
     * @return EmbRecipient
     */
    public function setAdminMaternalFetalMedicineConsultRequiredDate(?DateTime $adminMaternalFetalMedicineConsultRequiredDate): EmbRecipient
    {
        $this->adminMaternalFetalMedicineConsultRequiredDate = $adminMaternalFetalMedicineConsultRequiredDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMaternalFetalMedicineConsultRequiredInitials(): ?string
    {
        return $this->adminMaternalFetalMedicineConsultRequiredInitials;
    }

    /**
     * @param string|null $adminMaternalFetalMedicineConsultRequiredInitials
     * @return EmbRecipient
     */
    public function setAdminMaternalFetalMedicineConsultRequiredInitials(?string $adminMaternalFetalMedicineConsultRequiredInitials): EmbRecipient
    {
        $this->adminMaternalFetalMedicineConsultRequiredInitials = $adminMaternalFetalMedicineConsultRequiredInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMedicalRecordsRequestSent(): ?string
    {
        return $this->adminMedicalRecordsRequestSent;
    }

    /**
     * @param string|null $adminMedicalRecordsRequestSent
     * @return EmbRecipient
     */
    public function setAdminMedicalRecordsRequestSent(?string $adminMedicalRecordsRequestSent): EmbRecipient
    {
        $this->adminMedicalRecordsRequestSent = $adminMedicalRecordsRequestSent;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMedicalRecordsRequestSentDate(): ?DateTime
    {
        return $this->adminMedicalRecordsRequestSentDate;
    }

    /**
     * @param DateTime|null $adminMedicalRecordsRequestSentDate
     * @return EmbRecipient
     */
    public function setAdminMedicalRecordsRequestSentDate(?DateTime $adminMedicalRecordsRequestSentDate): EmbRecipient
    {
        $this->adminMedicalRecordsRequestSentDate = $adminMedicalRecordsRequestSentDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMedicalRecordsRequestSentInitials(): ?string
    {
        return $this->adminMedicalRecordsRequestSentInitials;
    }

    /**
     * @param string|null $adminMedicalRecordsRequestSentInitials
     * @return EmbRecipient
     */
    public function setAdminMedicalRecordsRequestSentInitials(?string $adminMedicalRecordsRequestSentInitials): EmbRecipient
    {
        $this->adminMedicalRecordsRequestSentInitials = $adminMedicalRecordsRequestSentInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMedicalRecordsRequestReceived(): ?string
    {
        return $this->adminMedicalRecordsRequestReceived;
    }

    /**
     * @param string|null $adminMedicalRecordsRequestReceived
     * @return EmbRecipient
     */
    public function setAdminMedicalRecordsRequestReceived(?string $adminMedicalRecordsRequestReceived): EmbRecipient
    {
        $this->adminMedicalRecordsRequestReceived = $adminMedicalRecordsRequestReceived;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMedicalRecordsRequestReceivedDate(): ?DateTime
    {
        return $this->adminMedicalRecordsRequestReceivedDate;
    }

    /**
     * @param DateTime|null $adminMedicalRecordsRequestReceivedDate
     * @return EmbRecipient
     */
    public function setAdminMedicalRecordsRequestReceivedDate(?DateTime $adminMedicalRecordsRequestReceivedDate): EmbRecipient
    {
        $this->adminMedicalRecordsRequestReceivedDate = $adminMedicalRecordsRequestReceivedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMedicalRecordsRequestReceivedInitials(): ?string
    {
        return $this->adminMedicalRecordsRequestReceivedInitials;
    }

    /**
     * @param string|null $adminMedicalRecordsRequestReceivedInitials
     * @return EmbRecipient
     */
    public function setAdminMedicalRecordsRequestReceivedInitials(?string $adminMedicalRecordsRequestReceivedInitials): EmbRecipient
    {
        $this->adminMedicalRecordsRequestReceivedInitials = $adminMedicalRecordsRequestReceivedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMfmConsultResultsObtained(): ?string
    {
        return $this->adminMfmConsultResultsObtained;
    }

    /**
     * @param string|null $adminMfmConsultResultsObtained
     * @return EmbRecipient
     */
    public function setAdminMfmConsultResultsObtained(?string $adminMfmConsultResultsObtained): EmbRecipient
    {
        $this->adminMfmConsultResultsObtained = $adminMfmConsultResultsObtained;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMfmConsultResultsObtainedDate(): ?DateTime
    {
        return $this->adminMfmConsultResultsObtainedDate;
    }

    /**
     * @param DateTime|null $adminMfmConsultResultsObtainedDate
     * @return EmbRecipient
     */
    public function setAdminMfmConsultResultsObtainedDate(?DateTime $adminMfmConsultResultsObtainedDate): EmbRecipient
    {
        $this->adminMfmConsultResultsObtainedDate = $adminMfmConsultResultsObtainedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMfmConsultResultsObtainedInitials(): ?string
    {
        return $this->adminMfmConsultResultsObtainedInitials;
    }

    /**
     * @param string|null $adminMfmConsultResultsObtainedInitials
     * @return EmbRecipient
     */
    public function setAdminMfmConsultResultsObtainedInitials(?string $adminMfmConsultResultsObtainedInitials): EmbRecipient
    {
        $this->adminMfmConsultResultsObtainedInitials = $adminMfmConsultResultsObtainedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpFound(): ?string
    {
        return $this->adminMhpFound;
    }

    /**
     * @param string|null $adminMhpFound
     * @return EmbRecipient
     */
    public function setAdminMhpFound(?string $adminMhpFound): EmbRecipient
    {
        $this->adminMhpFound = $adminMhpFound;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpFoundDate(): ?DateTime
    {
        return $this->adminMhpFoundDate;
    }

    /**
     * @param DateTime|null $adminMhpFoundDate
     * @return EmbRecipient
     */
    public function setAdminMhpFoundDate(?DateTime $adminMhpFoundDate): EmbRecipient
    {
        $this->adminMhpFoundDate = $adminMhpFoundDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpFoundDonors(): ?string
    {
        return $this->adminMhpFoundDonors;
    }

    /**
     * @param string|null $adminMhpFoundDonors
     * @return EmbRecipient
     */
    public function setAdminMhpFoundDonors(?string $adminMhpFoundDonors): EmbRecipient
    {
        $this->adminMhpFoundDonors = $adminMhpFoundDonors;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpFoundDonorsDate(): ?DateTime
    {
        return $this->adminMhpFoundDonorsDate;
    }

    /**
     * @param DateTime|null $adminMhpFoundDonorsDate
     * @return EmbRecipient
     */
    public function setAdminMhpFoundDonorsDate(?DateTime $adminMhpFoundDonorsDate): EmbRecipient
    {
        $this->adminMhpFoundDonorsDate = $adminMhpFoundDonorsDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpFoundDonorsInitials(): ?string
    {
        return $this->adminMhpFoundDonorsInitials;
    }

    /**
     * @param string|null $adminMhpFoundDonorsInitials
     * @return EmbRecipient
     */
    public function setAdminMhpFoundDonorsInitials(?string $adminMhpFoundDonorsInitials): EmbRecipient
    {
        $this->adminMhpFoundDonorsInitials = $adminMhpFoundDonorsInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpFoundInitials(): ?string
    {
        return $this->adminMhpFoundInitials;
    }

    /**
     * @param string|null $adminMhpFoundInitials
     * @return EmbRecipient
     */
    public function setAdminMhpFoundInitials(?string $adminMhpFoundInitials): EmbRecipient
    {
        $this->adminMhpFoundInitials = $adminMhpFoundInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportObtained(): ?string
    {
        return $this->adminMhpReportObtained;
    }

    /**
     * @param string|null $adminMhpReportObtained
     * @return EmbRecipient
     */
    public function setAdminMhpReportObtained(?string $adminMhpReportObtained): EmbRecipient
    {
        $this->adminMhpReportObtained = $adminMhpReportObtained;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpReportObtainedDate(): ?DateTime
    {
        return $this->adminMhpReportObtainedDate;
    }

    /**
     * @param DateTime|null $adminMhpReportObtainedDate
     * @return EmbRecipient
     */
    public function setAdminMhpReportObtainedDate(?DateTime $adminMhpReportObtainedDate): EmbRecipient
    {
        $this->adminMhpReportObtainedDate = $adminMhpReportObtainedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportObtainedInitials(): ?string
    {
        return $this->adminMhpReportObtainedInitials;
    }

    /**
     * @param string|null $adminMhpReportObtainedInitials
     * @return EmbRecipient
     */
    public function setAdminMhpReportObtainedInitials(?string $adminMhpReportObtainedInitials): EmbRecipient
    {
        $this->adminMhpReportObtainedInitials = $adminMhpReportObtainedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportSentDonor(): ?string
    {
        return $this->adminMhpReportSentDonor;
    }

    /**
     * @param string|null $adminMhpReportSentDonor
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentDonor(?string $adminMhpReportSentDonor): EmbRecipient
    {
        $this->adminMhpReportSentDonor = $adminMhpReportSentDonor;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpReportSentDonorDate(): ?DateTime
    {
        return $this->adminMhpReportSentDonorDate;
    }

    /**
     * @param DateTime|null $adminMhpReportSentDonorDate
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentDonorDate(?DateTime $adminMhpReportSentDonorDate): EmbRecipient
    {
        $this->adminMhpReportSentDonorDate = $adminMhpReportSentDonorDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportSentDonorIdentyRemoved(): ?string
    {
        return $this->adminMhpReportSentDonorIdentyRemoved;
    }

    /**
     * @param string|null $adminMhpReportSentDonorIdentyRemoved
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentDonorIdentyRemoved(?string $adminMhpReportSentDonorIdentyRemoved): EmbRecipient
    {
        $this->adminMhpReportSentDonorIdentyRemoved = $adminMhpReportSentDonorIdentyRemoved;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpReportSentDonorIdentyRemovedDate(): ?DateTime
    {
        return $this->adminMhpReportSentDonorIdentyRemovedDate;
    }

    /**
     * @param DateTime|null $adminMhpReportSentDonorIdentyRemovedDate
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentDonorIdentyRemovedDate(?DateTime $adminMhpReportSentDonorIdentyRemovedDate): EmbRecipient
    {
        $this->adminMhpReportSentDonorIdentyRemovedDate = $adminMhpReportSentDonorIdentyRemovedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportSentDonorIdentyRemovedInitials(): ?string
    {
        return $this->adminMhpReportSentDonorIdentyRemovedInitials;
    }

    /**
     * @param string|null $adminMhpReportSentDonorIdentyRemovedInitials
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentDonorIdentyRemovedInitials(?string $adminMhpReportSentDonorIdentyRemovedInitials): EmbRecipient
    {
        $this->adminMhpReportSentDonorIdentyRemovedInitials = $adminMhpReportSentDonorIdentyRemovedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportSentDonorInitials(): ?string
    {
        return $this->adminMhpReportSentDonorInitials;
    }

    /**
     * @param string|null $adminMhpReportSentDonorInitials
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentDonorInitials(?string $adminMhpReportSentDonorInitials): EmbRecipient
    {
        $this->adminMhpReportSentDonorInitials = $adminMhpReportSentDonorInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportSentRecpt(): ?string
    {
        return $this->adminMhpReportSentRecpt;
    }

    /**
     * @param string|null $adminMhpReportSentRecpt
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentRecpt(?string $adminMhpReportSentRecpt): EmbRecipient
    {
        $this->adminMhpReportSentRecpt = $adminMhpReportSentRecpt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpReportSentRecptDate(): ?DateTime
    {
        return $this->adminMhpReportSentRecptDate;
    }

    /**
     * @param DateTime|null $adminMhpReportSentRecptDate
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentRecptDate(?DateTime $adminMhpReportSentRecptDate): EmbRecipient
    {
        $this->adminMhpReportSentRecptDate = $adminMhpReportSentRecptDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportSentRecptInitials(): ?string
    {
        return $this->adminMhpReportSentRecptInitials;
    }

    /**
     * @param string|null $adminMhpReportSentRecptInitials
     * @return EmbRecipient
     */
    public function setAdminMhpReportSentRecptInitials(?string $adminMhpReportSentRecptInitials): EmbRecipient
    {
        $this->adminMhpReportSentRecptInitials = $adminMhpReportSentRecptInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequestedByDonor(): ?string
    {
        return $this->adminMhpRequestedByDonor;
    }

    /**
     * @param string|null $adminMhpRequestedByDonor
     * @return EmbRecipient
     */
    public function setAdminMhpRequestedByDonor(?string $adminMhpRequestedByDonor): EmbRecipient
    {
        $this->adminMhpRequestedByDonor = $adminMhpRequestedByDonor;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpRequestedByDonorDate(): ?DateTime
    {
        return $this->adminMhpRequestedByDonorDate;
    }

    /**
     * @param DateTime|null $adminMhpRequestedByDonorDate
     * @return EmbRecipient
     */
    public function setAdminMhpRequestedByDonorDate(?DateTime $adminMhpRequestedByDonorDate): EmbRecipient
    {
        $this->adminMhpRequestedByDonorDate = $adminMhpRequestedByDonorDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequestedByDonorInitials(): ?string
    {
        return $this->adminMhpRequestedByDonorInitials;
    }

    /**
     * @param string|null $adminMhpRequestedByDonorInitials
     * @return EmbRecipient
     */
    public function setAdminMhpRequestedByDonorInitials(?string $adminMhpRequestedByDonorInitials): EmbRecipient
    {
        $this->adminMhpRequestedByDonorInitials = $adminMhpRequestedByDonorInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequestedByRecpt(): ?string
    {
        return $this->adminMhpRequestedByRecpt;
    }

    /**
     * @param string|null $adminMhpRequestedByRecpt
     * @return EmbRecipient
     */
    public function setAdminMhpRequestedByRecpt(?string $adminMhpRequestedByRecpt): EmbRecipient
    {
        $this->adminMhpRequestedByRecpt = $adminMhpRequestedByRecpt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpRequestedByRecptDate(): ?DateTime
    {
        return $this->adminMhpRequestedByRecptDate;
    }

    /**
     * @param DateTime|null $adminMhpRequestedByRecptDate
     * @return EmbRecipient
     */
    public function setAdminMhpRequestedByRecptDate(?DateTime $adminMhpRequestedByRecptDate): EmbRecipient
    {
        $this->adminMhpRequestedByRecptDate = $adminMhpRequestedByRecptDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequestedByRecptInitials(): ?string
    {
        return $this->adminMhpRequestedByRecptInitials;
    }

    /**
     * @param string|null $adminMhpRequestedByRecptInitials
     * @return EmbRecipient
     */
    public function setAdminMhpRequestedByRecptInitials(?string $adminMhpRequestedByRecptInitials): EmbRecipient
    {
        $this->adminMhpRequestedByRecptInitials = $adminMhpRequestedByRecptInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequiredOfDonors(): ?string
    {
        return $this->adminMhpRequiredOfDonors;
    }

    /**
     * @param string|null $adminMhpRequiredOfDonors
     * @return EmbRecipient
     */
    public function setAdminMhpRequiredOfDonors(?string $adminMhpRequiredOfDonors): EmbRecipient
    {
        $this->adminMhpRequiredOfDonors = $adminMhpRequiredOfDonors;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpRequiredOfDonorsDate(): ?DateTime
    {
        return $this->adminMhpRequiredOfDonorsDate;
    }

    /**
     * @param DateTime|null $adminMhpRequiredOfDonorsDate
     * @return EmbRecipient
     */
    public function setAdminMhpRequiredOfDonorsDate(?DateTime $adminMhpRequiredOfDonorsDate): EmbRecipient
    {
        $this->adminMhpRequiredOfDonorsDate = $adminMhpRequiredOfDonorsDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequiredOfDonorsInitials(): ?string
    {
        return $this->adminMhpRequiredOfDonorsInitials;
    }

    /**
     * @param string|null $adminMhpRequiredOfDonorsInitials
     * @return EmbRecipient
     */
    public function setAdminMhpRequiredOfDonorsInitials(?string $adminMhpRequiredOfDonorsInitials): EmbRecipient
    {
        $this->adminMhpRequiredOfDonorsInitials = $adminMhpRequiredOfDonorsInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequiredOfRecpt(): ?string
    {
        return $this->adminMhpRequiredOfRecpt;
    }

    /**
     * @param string|null $adminMhpRequiredOfRecpt
     * @return EmbRecipient
     */
    public function setAdminMhpRequiredOfRecpt(?string $adminMhpRequiredOfRecpt): EmbRecipient
    {
        $this->adminMhpRequiredOfRecpt = $adminMhpRequiredOfRecpt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpRequiredOfRecptDate(): ?DateTime
    {
        return $this->adminMhpRequiredOfRecptDate;
    }

    /**
     * @param DateTime|null $adminMhpRequiredOfRecptDate
     * @return EmbRecipient
     */
    public function setAdminMhpRequiredOfRecptDate(?DateTime $adminMhpRequiredOfRecptDate): EmbRecipient
    {
        $this->adminMhpRequiredOfRecptDate = $adminMhpRequiredOfRecptDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpRequiredOfRecptIntials(): ?string
    {
        return $this->adminMhpRequiredOfRecptIntials;
    }

    /**
     * @param string|null $adminMhpRequiredOfRecptIntials
     * @return EmbRecipient
     */
    public function setAdminMhpRequiredOfRecptIntials(?string $adminMhpRequiredOfRecptIntials): EmbRecipient
    {
        $this->adminMhpRequiredOfRecptIntials = $adminMhpRequiredOfRecptIntials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpVetted(): ?string
    {
        return $this->adminMhpVetted;
    }

    /**
     * @param string|null $adminMhpVetted
     * @return EmbRecipient
     */
    public function setAdminMhpVetted(?string $adminMhpVetted): EmbRecipient
    {
        $this->adminMhpVetted = $adminMhpVetted;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpVettedDate(): ?DateTime
    {
        return $this->adminMhpVettedDate;
    }

    /**
     * @param DateTime|null $adminMhpVettedDate
     * @return EmbRecipient
     */
    public function setAdminMhpVettedDate(?DateTime $adminMhpVettedDate): EmbRecipient
    {
        $this->adminMhpVettedDate = $adminMhpVettedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpVettedDonors(): ?string
    {
        return $this->adminMhpVettedDonors;
    }

    /**
     * @param string|null $adminMhpVettedDonors
     * @return EmbRecipient
     */
    public function setAdminMhpVettedDonors(?string $adminMhpVettedDonors): EmbRecipient
    {
        $this->adminMhpVettedDonors = $adminMhpVettedDonors;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpVettedDonorsDate(): ?DateTime
    {
        return $this->adminMhpVettedDonorsDate;
    }

    /**
     * @param DateTime|null $adminMhpVettedDonorsDate
     * @return EmbRecipient
     */
    public function setAdminMhpVettedDonorsDate(?DateTime $adminMhpVettedDonorsDate): EmbRecipient
    {
        $this->adminMhpVettedDonorsDate = $adminMhpVettedDonorsDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpVettedDonorsInitials(): ?string
    {
        return $this->adminMhpVettedDonorsInitials;
    }

    /**
     * @param string|null $adminMhpVettedDonorsInitials
     * @return EmbRecipient
     */
    public function setAdminMhpVettedDonorsInitials(?string $adminMhpVettedDonorsInitials): EmbRecipient
    {
        $this->adminMhpVettedDonorsInitials = $adminMhpVettedDonorsInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpVettedInitials(): ?string
    {
        return $this->adminMhpVettedInitials;
    }

    /**
     * @param string|null $adminMhpVettedInitials
     * @return EmbRecipient
     */
    public function setAdminMhpVettedInitials(?string $adminMhpVettedInitials): EmbRecipient
    {
        $this->adminMhpVettedInitials = $adminMhpVettedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminNewPatientPaperworkReceived(): ?string
    {
        return $this->adminNewPatientPaperworkReceived;
    }

    /**
     * @param string|null $adminNewPatientPaperworkReceived
     * @return EmbRecipient
     */
    public function setAdminNewPatientPaperworkReceived(?string $adminNewPatientPaperworkReceived): EmbRecipient
    {
        $this->adminNewPatientPaperworkReceived = $adminNewPatientPaperworkReceived;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminNewPatientPaperworkReceivedDate(): ?DateTime
    {
        return $this->adminNewPatientPaperworkReceivedDate;
    }

    /**
     * @param DateTime|null $adminNewPatientPaperworkReceivedDate
     * @return EmbRecipient
     */
    public function setAdminNewPatientPaperworkReceivedDate(?DateTime $adminNewPatientPaperworkReceivedDate): EmbRecipient
    {
        $this->adminNewPatientPaperworkReceivedDate = $adminNewPatientPaperworkReceivedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminNewPatientPaperworkReceivedInitials(): ?string
    {
        return $this->adminNewPatientPaperworkReceivedInitials;
    }

    /**
     * @param string|null $adminNewPatientPaperworkReceivedInitials
     * @return EmbRecipient
     */
    public function setAdminNewPatientPaperworkReceivedInitials(?string $adminNewPatientPaperworkReceivedInitials): EmbRecipient
    {
        $this->adminNewPatientPaperworkReceivedInitials = $adminNewPatientPaperworkReceivedInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminOcpStartDate(): ?string
    {
        return $this->adminOcpStartDate;
    }

    /**
     * @param string|null $adminOcpStartDate
     * @return EmbRecipient
     */
    public function setAdminOcpStartDate(?string $adminOcpStartDate): EmbRecipient
    {
        $this->adminOcpStartDate = $adminOcpStartDate;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminOcpStartDateDate(): ?DateTime
    {
        return $this->adminOcpStartDateDate;
    }

    /**
     * @param DateTime|null $adminOcpStartDateDate
     * @return EmbRecipient
     */
    public function setAdminOcpStartDateDate(?DateTime $adminOcpStartDateDate): EmbRecipient
    {
        $this->adminOcpStartDateDate = $adminOcpStartDateDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminOcpStartDateInitials(): ?string
    {
        return $this->adminOcpStartDateInitials;
    }

    /**
     * @param string|null $adminOcpStartDateInitials
     * @return EmbRecipient
     */
    public function setAdminOcpStartDateInitials(?string $adminOcpStartDateInitials): EmbRecipient
    {
        $this->adminOcpStartDateInitials = $adminOcpStartDateInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminOngoing(): ?string
    {
        return $this->adminOngoing;
    }

    /**
     * @param string|null $adminOngoing
     * @return EmbRecipient
     */
    public function setAdminOngoing(?string $adminOngoing): EmbRecipient
    {
        $this->adminOngoing = $adminOngoing;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminOngoingDate(): ?DateTime
    {
        return $this->adminOngoingDate;
    }

    /**
     * @param DateTime|null $adminOngoingDate
     * @return EmbRecipient
     */
    public function setAdminOngoingDate(?DateTime $adminOngoingDate): EmbRecipient
    {
        $this->adminOngoingDate = $adminOngoingDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminOngoingInitials(): ?string
    {
        return $this->adminOngoingInitials;
    }

    /**
     * @param string|null $adminOngoingInitials
     * @return EmbRecipient
     */
    public function setAdminOngoingInitials(?string $adminOngoingInitials): EmbRecipient
    {
        $this->adminOngoingInitials = $adminOngoingInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminParentingClassInfoSent(): ?string
    {
        return $this->adminParentingClassInfoSent;
    }

    /**
     * @param string|null $adminParentingClassInfoSent
     * @return EmbRecipient
     */
    public function setAdminParentingClassInfoSent(?string $adminParentingClassInfoSent): EmbRecipient
    {
        $this->adminParentingClassInfoSent = $adminParentingClassInfoSent;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminParentingClassInfoSentDate(): ?DateTime
    {
        return $this->adminParentingClassInfoSentDate;
    }

    /**
     * @param DateTime|null $adminParentingClassInfoSentDate
     * @return EmbRecipient
     */
    public function setAdminParentingClassInfoSentDate(?DateTime $adminParentingClassInfoSentDate): EmbRecipient
    {
        $this->adminParentingClassInfoSentDate = $adminParentingClassInfoSentDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminParentingClassInfoSentInitials(): ?string
    {
        return $this->adminParentingClassInfoSentInitials;
    }

    /**
     * @param string|null $adminParentingClassInfoSentInitials
     * @return EmbRecipient
     */
    public function setAdminParentingClassInfoSentInitials(?string $adminParentingClassInfoSentInitials): EmbRecipient
    {
        $this->adminParentingClassInfoSentInitials = $adminParentingClassInfoSentInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPhysicalExamUltrasoundHysterectomyDate(): ?string
    {
        return $this->adminPhysicalExamUltrasoundHysterectomyDate;
    }

    /**
     * @param string|null $adminPhysicalExamUltrasoundHysterectomyDate
     * @return EmbRecipient
     */
    public function setAdminPhysicalExamUltrasoundHysterectomyDate(?string $adminPhysicalExamUltrasoundHysterectomyDate): EmbRecipient
    {
        $this->adminPhysicalExamUltrasoundHysterectomyDate = $adminPhysicalExamUltrasoundHysterectomyDate;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminPhysicalExamUltrasoundHysterectomyDateDate(): ?DateTime
    {
        return $this->adminPhysicalExamUltrasoundHysterectomyDateDate;
    }

    /**
     * @param DateTime|null $adminPhysicalExamUltrasoundHysterectomyDateDate
     * @return EmbRecipient
     */
    public function setAdminPhysicalExamUltrasoundHysterectomyDateDate(?DateTime $adminPhysicalExamUltrasoundHysterectomyDateDate): EmbRecipient
    {
        $this->adminPhysicalExamUltrasoundHysterectomyDateDate = $adminPhysicalExamUltrasoundHysterectomyDateDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPhysicalExamUltrasoundHysterectomyDateInitials(): ?string
    {
        return $this->adminPhysicalExamUltrasoundHysterectomyDateInitials;
    }

    /**
     * @param string|null $adminPhysicalExamUltrasoundHysterectomyDateInitials
     * @return EmbRecipient
     */
    public function setAdminPhysicalExamUltrasoundHysterectomyDateInitials(?string $adminPhysicalExamUltrasoundHysterectomyDateInitials): EmbRecipient
    {
        $this->adminPhysicalExamUltrasoundHysterectomyDateInitials = $adminPhysicalExamUltrasoundHysterectomyDateInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPregnancyOutcome(): ?string
    {
        return $this->adminPregnancyOutcome;
    }

    /**
     * @param string|null $adminPregnancyOutcome
     * @return EmbRecipient
     */
    public function setAdminPregnancyOutcome(?string $adminPregnancyOutcome): EmbRecipient
    {
        $this->adminPregnancyOutcome = $adminPregnancyOutcome;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPregnancyOutcomeResults(): ?string
    {
        return $this->adminPregnancyOutcomeResults;
    }

    /**
     * @param string|null $adminPregnancyOutcomeResults
     * @return EmbRecipient
     */
    public function setAdminPregnancyOutcomeResults(?string $adminPregnancyOutcomeResults): EmbRecipient
    {
        $this->adminPregnancyOutcomeResults = $adminPregnancyOutcomeResults;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminPregnancyTestDatePregTest(): ?DateTime
    {
        return $this->adminPregnancyTestDatePregTest;
    }

    /**
     * @param DateTime|null $adminPregnancyTestDatePregTest
     * @return EmbRecipient
     */
    public function setAdminPregnancyTestDatePregTest(?DateTime $adminPregnancyTestDatePregTest): EmbRecipient
    {
        $this->adminPregnancyTestDatePregTest = $adminPregnancyTestDatePregTest;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPregnancyTestDatePregTestContactNumber(): ?string
    {
        return $this->adminPregnancyTestDatePregTestContactNumber;
    }

    /**
     * @param string|null $adminPregnancyTestDatePregTestContactNumber
     * @return EmbRecipient
     */
    public function setAdminPregnancyTestDatePregTestContactNumber(?string $adminPregnancyTestDatePregTestContactNumber): EmbRecipient
    {
        $this->adminPregnancyTestDatePregTestContactNumber = $adminPregnancyTestDatePregTestContactNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPregnancyTestDatePregTestLabName(): ?string
    {
        return $this->adminPregnancyTestDatePregTestLabName;
    }

    /**
     * @param string|null $adminPregnancyTestDatePregTestLabName
     * @return EmbRecipient
     */
    public function setAdminPregnancyTestDatePregTestLabName(?string $adminPregnancyTestDatePregTestLabName): EmbRecipient
    {
        $this->adminPregnancyTestDatePregTestLabName = $adminPregnancyTestDatePregTestLabName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPreliminaryConfirmationEmbryosAtEdi(): ?string
    {
        return $this->adminPreliminaryConfirmationEmbryosAtEdi;
    }

    /**
     * @param string|null $adminPreliminaryConfirmationEmbryosAtEdi
     * @return EmbRecipient
     */
    public function setAdminPreliminaryConfirmationEmbryosAtEdi(?string $adminPreliminaryConfirmationEmbryosAtEdi): EmbRecipient
    {
        $this->adminPreliminaryConfirmationEmbryosAtEdi = $adminPreliminaryConfirmationEmbryosAtEdi;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminPreliminaryConfirmationEmbryosAtEdiDate(): ?DateTime
    {
        return $this->adminPreliminaryConfirmationEmbryosAtEdiDate;
    }

    /**
     * @param DateTime|null $adminPreliminaryConfirmationEmbryosAtEdiDate
     * @return EmbRecipient
     */
    public function setAdminPreliminaryConfirmationEmbryosAtEdiDate(?DateTime $adminPreliminaryConfirmationEmbryosAtEdiDate): EmbRecipient
    {
        $this->adminPreliminaryConfirmationEmbryosAtEdiDate = $adminPreliminaryConfirmationEmbryosAtEdiDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminPreliminaryConfirmationEmbryosAtEdiIntials(): ?string
    {
        return $this->adminPreliminaryConfirmationEmbryosAtEdiIntials;
    }

    /**
     * @param string|null $adminPreliminaryConfirmationEmbryosAtEdiIntials
     * @return EmbRecipient
     */
    public function setAdminPreliminaryConfirmationEmbryosAtEdiIntials(?string $adminPreliminaryConfirmationEmbryosAtEdiIntials): EmbRecipient
    {
        $this->adminPreliminaryConfirmationEmbryosAtEdiIntials = $adminPreliminaryConfirmationEmbryosAtEdiIntials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminRecptProvidedMhpContactInfo(): ?string
    {
        return $this->adminRecptProvidedMhpContactInfo;
    }

    /**
     * @param string|null $adminRecptProvidedMhpContactInfo
     * @return EmbRecipient
     */
    public function setAdminRecptProvidedMhpContactInfo(?string $adminRecptProvidedMhpContactInfo): EmbRecipient
    {
        $this->adminRecptProvidedMhpContactInfo = $adminRecptProvidedMhpContactInfo;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminRecptProvidedMhpContactInfoDate(): ?DateTime
    {
        return $this->adminRecptProvidedMhpContactInfoDate;
    }

    /**
     * @param DateTime|null $adminRecptProvidedMhpContactInfoDate
     * @return EmbRecipient
     */
    public function setAdminRecptProvidedMhpContactInfoDate(?DateTime $adminRecptProvidedMhpContactInfoDate): EmbRecipient
    {
        $this->adminRecptProvidedMhpContactInfoDate = $adminRecptProvidedMhpContactInfoDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminRecptProvidedMhpContactInfoInitials(): ?string
    {
        return $this->adminRecptProvidedMhpContactInfoInitials;
    }

    /**
     * @param string|null $adminRecptProvidedMhpContactInfoInitials
     * @return EmbRecipient
     */
    public function setAdminRecptProvidedMhpContactInfoInitials(?string $adminRecptProvidedMhpContactInfoInitials): EmbRecipient
    {
        $this->adminRecptProvidedMhpContactInfoInitials = $adminRecptProvidedMhpContactInfoInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminSateliteOrdersFaxedFacility(): ?string
    {
        return $this->adminSateliteOrdersFaxedFacility;
    }

    /**
     * @param string|null $adminSateliteOrdersFaxedFacility
     * @return EmbRecipient
     */
    public function setAdminSateliteOrdersFaxedFacility(?string $adminSateliteOrdersFaxedFacility): EmbRecipient
    {
        $this->adminSateliteOrdersFaxedFacility = $adminSateliteOrdersFaxedFacility;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminSateliteOrdersFaxedFacilityDate(): ?DateTime
    {
        return $this->adminSateliteOrdersFaxedFacilityDate;
    }

    /**
     * @param DateTime|null $adminSateliteOrdersFaxedFacilityDate
     * @return EmbRecipient
     */
    public function setAdminSateliteOrdersFaxedFacilityDate(?DateTime $adminSateliteOrdersFaxedFacilityDate): EmbRecipient
    {
        $this->adminSateliteOrdersFaxedFacilityDate = $adminSateliteOrdersFaxedFacilityDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminSateliteOrdersFaxedFacilityInitials(): ?string
    {
        return $this->adminSateliteOrdersFaxedFacilityInitials;
    }

    /**
     * @param string|null $adminSateliteOrdersFaxedFacilityInitials
     * @return EmbRecipient
     */
    public function setAdminSateliteOrdersFaxedFacilityInitials(?string $adminSateliteOrdersFaxedFacilityInitials): EmbRecipient
    {
        $this->adminSateliteOrdersFaxedFacilityInitials = $adminSateliteOrdersFaxedFacilityInitials;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminTransferDate(): ?DateTime
    {
        return $this->adminTransferDate;
    }

    /**
     * @param DateTime|null $adminTransferDate
     * @return EmbRecipient
     */
    public function setAdminTransferDate(?DateTime $adminTransferDate): EmbRecipient
    {
        $this->adminTransferDate = $adminTransferDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminVideoConferenceScheduled(): ?string
    {
        return $this->adminVideoConferenceScheduled;
    }

    /**
     * @param string|null $adminVideoConferenceScheduled
     * @return EmbRecipient
     */
    public function setAdminVideoConferenceScheduled(?string $adminVideoConferenceScheduled): EmbRecipient
    {
        $this->adminVideoConferenceScheduled = $adminVideoConferenceScheduled;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminVideoConferenceScheduledDate(): ?DateTime
    {
        return $this->adminVideoConferenceScheduledDate;
    }

    /**
     * @param DateTime|null $adminVideoConferenceScheduledDate
     * @return EmbRecipient
     */
    public function setAdminVideoConferenceScheduledDate(?DateTime $adminVideoConferenceScheduledDate): EmbRecipient
    {
        $this->adminVideoConferenceScheduledDate = $adminVideoConferenceScheduledDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminVideoConferenceScheduledInitials(): ?string
    {
        return $this->adminVideoConferenceScheduledInitials;
    }

    /**
     * @param string|null $adminVideoConferenceScheduledInitials
     * @return EmbRecipient
     */
    public function setAdminVideoConferenceScheduledInitials(?string $adminVideoConferenceScheduledInitials): EmbRecipient
    {
        $this->adminVideoConferenceScheduledInitials = $adminVideoConferenceScheduledInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminWorkingWithDistantIvf(): ?string
    {
        return $this->adminWorkingWithDistantIvf;
    }

    /**
     * @param string|null $adminWorkingWithDistantIvf
     * @return EmbRecipient
     */
    public function setAdminWorkingWithDistantIvf(?string $adminWorkingWithDistantIvf): EmbRecipient
    {
        $this->adminWorkingWithDistantIvf = $adminWorkingWithDistantIvf;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminWorkingWithDistantIvfDate(): ?DateTime
    {
        return $this->adminWorkingWithDistantIvfDate;
    }

    /**
     * @param DateTime|null $adminWorkingWithDistantIvfDate
     * @return EmbRecipient
     */
    public function setAdminWorkingWithDistantIvfDate(?DateTime $adminWorkingWithDistantIvfDate): EmbRecipient
    {
        $this->adminWorkingWithDistantIvfDate = $adminWorkingWithDistantIvfDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminWorkingWithDistantIvfInitials(): ?string
    {
        return $this->adminWorkingWithDistantIvfInitials;
    }

    /**
     * @param string|null $adminWorkingWithDistantIvfInitials
     * @return EmbRecipient
     */
    public function setAdminWorkingWithDistantIvfInitials(?string $adminWorkingWithDistantIvfInitials): EmbRecipient
    {
        $this->adminWorkingWithDistantIvfInitials = $adminWorkingWithDistantIvfInitials;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    /**
     * @param string|null $applicationId
     * @return EmbRecipient
     */
    public function setApplicationId(?string $applicationId): EmbRecipient
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminClinicianComments(): ?string
    {
        return $this->adminClinicianComments;
    }

    /**
     * @param string|null $adminClinicianComments
     * @return EmbRecipient
     */
    public function setAdminClinicianComments(?string $adminClinicianComments): EmbRecipient
    {
        $this->adminClinicianComments = $adminClinicianComments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEdiCoordinatorComments(): ?string
    {
        return $this->adminEdiCoordinatorComments;
    }

    /**
     * @param string|null $adminEdiCoordinatorComments
     * @return EmbRecipient
     */
    public function setAdminEdiCoordinatorComments(?string $adminEdiCoordinatorComments): EmbRecipient
    {
        $this->adminEdiCoordinatorComments = $adminEdiCoordinatorComments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminEmbryologistComments(): ?string
    {
        return $this->adminEmbryologistComments;
    }

    /**
     * @param string|null $adminEmbryologistComments
     * @return EmbRecipient
     */
    public function setAdminEmbryologistComments(?string $adminEmbryologistComments): EmbRecipient
    {
        $this->adminEmbryologistComments = $adminEmbryologistComments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return EmbRecipient
     */
    public function setFirstName(?string $firstName): EmbRecipient
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHeightCm(): ?string
    {
        return $this->heightCm;
    }

    /**
     * @param string|null $heightCm
     * @return EmbRecipient
     */
    public function setHeightCm(?string $heightCm): EmbRecipient
    {
        $this->heightCm = $heightCm;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHowDidYouHearAboutEdi(): ?string
    {
        return $this->howDidYouHearAboutEdi;
    }

    /**
     * @param string|null $howDidYouHearAboutEdi
     * @return EmbRecipient
     */
    public function setHowDidYouHearAboutEdi(?string $howDidYouHearAboutEdi): EmbRecipient
    {
        $this->howDidYouHearAboutEdi = $howDidYouHearAboutEdi;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return EmbRecipient
     */
    public function setLastName(?string $lastName): EmbRecipient
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiddleInitial(): ?string
    {
        return $this->middleInitial;
    }

    /**
     * @param string|null $middleInitial
     * @return EmbRecipient
     */
    public function setMiddleInitial(?string $middleInitial): EmbRecipient
    {
        $this->middleInitial = $middleInitial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMultiStateRegion(): ?string
    {
        return $this->multiStateRegion;
    }

    /**
     * @param string|null $multiStateRegion
     * @return EmbRecipient
     */
    public function setMultiStateRegion(?string $multiStateRegion): EmbRecipient
    {
        $this->multiStateRegion = $multiStateRegion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartnerFirstName(): ?string
    {
        return $this->partnerFirstName;
    }

    /**
     * @param string|null $partnerFirstName
     * @return EmbRecipient
     */
    public function setPartnerFirstName(?string $partnerFirstName): EmbRecipient
    {
        $this->partnerFirstName = $partnerFirstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartnerHeightCm(): ?string
    {
        return $this->partnerHeightCm;
    }

    /**
     * @param string|null $partnerHeightCm
     * @return EmbRecipient
     */
    public function setPartnerHeightCm(?string $partnerHeightCm): EmbRecipient
    {
        $this->partnerHeightCm = $partnerHeightCm;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartnerLastName(): ?string
    {
        return $this->partnerLastName;
    }

    /**
     * @param string|null $partnerLastName
     * @return EmbRecipient
     */
    public function setPartnerLastName(?string $partnerLastName): EmbRecipient
    {
        $this->partnerLastName = $partnerLastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartnerMiddleInitial(): ?string
    {
        return $this->partnerMiddleInitial;
    }

    /**
     * @param string|null $partnerMiddleInitial
     * @return EmbRecipient
     */
    public function setPartnerMiddleInitial(?string $partnerMiddleInitial): EmbRecipient
    {
        $this->partnerMiddleInitial = $partnerMiddleInitial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartnerSuffix(): ?string
    {
        return $this->partnerSuffix;
    }

    /**
     * @param string|null $partnerSuffix
     * @return EmbRecipient
     */
    public function setPartnerSuffix(?string $partnerSuffix): EmbRecipient
    {
        $this->partnerSuffix = $partnerSuffix;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPartnerWeightKg(): ?string
    {
        return $this->partnerWeightKg;
    }

    /**
     * @param string|null $partnerWeightKg
     * @return EmbRecipient
     */
    public function setPartnerWeightKg(?string $partnerWeightKg): EmbRecipient
    {
        $this->partnerWeightKg = $partnerWeightKg;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhysicianComments(): ?string
    {
        return $this->physicianComments;
    }

    /**
     * @param string|null $physicianComments
     * @return EmbRecipient
     */
    public function setPhysicianComments(?string $physicianComments): EmbRecipient
    {
        $this->physicianComments = $physicianComments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProvidence(): ?string
    {
        return $this->providence;
    }

    /**
     * @param string|null $providence
     * @return EmbRecipient
     */
    public function setProvidence(?string $providence): EmbRecipient
    {
        $this->providence = $providence;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecipientNumber(): ?string
    {
        return $this->recipientNumber;
    }

    /**
     * @param string|null $recipientNumber
     * @return EmbRecipient
     */
    public function setRecipientNumber(?string $recipientNumber): EmbRecipient
    {
        $this->recipientNumber = $recipientNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedUnits(): ?string
    {
        return $this->selectedUnits;
    }

    /**
     * @param string|null $selectedUnits
     * @return EmbRecipient
     */
    public function setSelectedUnits(?string $selectedUnits): EmbRecipient
    {
        $this->selectedUnits = $selectedUnits;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedUnitsPartner(): ?string
    {
        return $this->selectedUnitsPartner;
    }

    /**
     * @param string|null $selectedUnitsPartner
     * @return EmbRecipient
     */
    public function setSelectedUnitsPartner(?string $selectedUnitsPartner): EmbRecipient
    {
        $this->selectedUnitsPartner = $selectedUnitsPartner;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * @param string|null $suffix
     * @return EmbRecipient
     */
    public function setSuffix(?string $suffix): EmbRecipient
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWeightKg(): ?string
    {
        return $this->weightKg;
    }

    /**
     * @param string|null $weightKg
     * @return EmbRecipient
     */
    public function setWeightKg(?string $weightKg): EmbRecipient
    {
        $this->weightKg = $weightKg;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWillingToReduceBmi(): ?string
    {
        return $this->willingToReduceBmi;
    }

    /**
     * @param string|null $willingToReduceBmi
     * @return EmbRecipient
     */
    public function setWillingToReduceBmi(?string $willingToReduceBmi): EmbRecipient
    {
        $this->willingToReduceBmi = $willingToReduceBmi;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return EmbRecipient
     */
    public function setVersion(int $version): EmbRecipient
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpFoundNameContactInfo(): ?string
    {
        return $this->adminMhpFoundNameContactInfo;
    }

    /**
     * @param string|null $adminMhpFoundNameContactInfo
     * @return EmbRecipient
     */
    public function setAdminMhpFoundNameContactInfo(?string $adminMhpFoundNameContactInfo): EmbRecipient
    {
        $this->adminMhpFoundNameContactInfo = $adminMhpFoundNameContactInfo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpVettedWillingnessToSeeRecipients(): ?string
    {
        return $this->adminMhpVettedWillingnessToSeeRecipients;
    }

    /**
     * @param string|null $adminMhpVettedWillingnessToSeeRecipients
     * @return EmbRecipient
     */
    public function setAdminMhpVettedWillingnessToSeeRecipients(?string $adminMhpVettedWillingnessToSeeRecipients): EmbRecipient
    {
        $this->adminMhpVettedWillingnessToSeeRecipients = $adminMhpVettedWillingnessToSeeRecipients;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportObtainedDonor(): ?string
    {
        return $this->adminMhpReportObtainedDonor;
    }

    /**
     * @param string|null $adminMhpReportObtainedDonor
     * @return EmbRecipient
     */
    public function setAdminMhpReportObtainedDonor(?string $adminMhpReportObtainedDonor): EmbRecipient
    {
        $this->adminMhpReportObtainedDonor = $adminMhpReportObtainedDonor;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAdminMhpReportObtainedDonorDate(): ?DateTime
    {
        return $this->adminMhpReportObtainedDonorDate;
    }

    /**
     * @param DateTime|null $adminMhpReportObtainedDonorDate
     * @return EmbRecipient
     */
    public function setAdminMhpReportObtainedDonorDate(?DateTime $adminMhpReportObtainedDonorDate): EmbRecipient
    {
        $this->adminMhpReportObtainedDonorDate = $adminMhpReportObtainedDonorDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdminMhpReportObtainedDonorInitials(): ?string
    {
        return $this->adminMhpReportObtainedDonorInitials;
    }

    /**
     * @param string|null $adminMhpReportObtainedDonorInitials
     * @return EmbRecipient
     */
    public function setAdminMhpReportObtainedDonorInitials(?string $adminMhpReportObtainedDonorInitials): EmbRecipient
    {
        $this->adminMhpReportObtainedDonorInitials = $adminMhpReportObtainedDonorInitials;
        return $this;
    }


//End Generated by JDA 2022-12-31


}
