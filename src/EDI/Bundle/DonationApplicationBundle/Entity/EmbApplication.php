<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbApplication;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;


/**
 * EmbApplication
 *
 * @ORM\Table(name="emb_application")
 * @ORM\Entity
 * @Config()
 */
class EmbApplication extends ExtendEmbApplication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_number", type="string", length=15, nullable=true)
     */
    private $embNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_created", type="datetime", nullable=false, options={"default":"CURRENT_TIMESTAMP"})
     */
    private $datetimeCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="initials", type="string", length=5, nullable=false)
     */
    private $initials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_1", type="string", length=50, nullable=false)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_2", type="string", length=50, nullable=false)
     */
    private $photo2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo_1_description", type="string", length=250, nullable=true)
     */
    private $photo1Description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo_2_description", type="string", length=250, nullable=true)
     */
    private $photo2Description;

    /**
     * @var string
     *
     * @ORM\Column(name="include_photo", type="string", length=3, nullable=false)
     */
    private $includePhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="include_photo_office", type="string", length=3, nullable=false)
     */
    private $includePhotoOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="include_photo_web_print", type="string", length=3, nullable=false)
     */
    private $includePhotoWebPrint;

    /**
     * @var string
     *
     * @ORM\Column(name="emb_src_own", type="string", length=3, nullable=false)
     */
    private $embSrcOwn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_own_pi_1", type="string", length=10, nullable=true)
     */
    private $embSrcOwnPi1;

    /**
     * @var string
     *
     * @ORM\Column(name="emb_src_own_pi_2", type="string", length=10, nullable=false)
     */
    private $embSrcOwnPi2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_donor_sperm", type="string", length=10, nullable=true)
     */
    private $embSrcDonorSperm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_donor_sperm_pi_1", type="string", length=10, nullable=true)
     */
    private $embSrcDonorSpermPi1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_donor_sperm_pi_2", type="string", length=10, nullable=true)
     */
    private $embSrcDonorSpermPi2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_donor_eggs", type="string", length=10, nullable=true)
     */
    private $embSrcDonorEggs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_donor_eggs_pi_1", type="string", length=10, nullable=true)
     */
    private $embSrcDonorEggsPi1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_donor_eggs_pi_2", type="string", length=10, nullable=true)
     */
    private $embSrcDonorEggsPi2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_mixture", type="string", length=10, nullable=true)
     */
    private $embSrcMixture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_mixture_pi_1", type="string", length=10, nullable=true)
     */
    private $embSrcMixturePi1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emb_src_mixture_pi_2", type="string", length=10, nullable=true)
     */
    private $embSrcMixturePi2;

    /**
     * @var string
     *
     * @ORM\Column(name="agree_blood_re_test", type="string", length=3, nullable=false)
     */
    private $agreeBloodReTest;

    /**
     * @var string
     *
     * @ORM\Column(name="agree_blood_re_test_pi_1", type="string", length=4, nullable=false)
     */
    private $agreeBloodReTestPi1;

    /**
     * @var string
     *
     * @ORM\Column(name="agree_blood_re_test_pi_2", type="string", length=4, nullable=false)
     */
    private $agreeBloodReTestPi2;

    /**
     * @var string
     *
     * @ORM\Column(name="past_embryo_donor", type="string", length=1250, nullable=false)
     */
    private $pastEmbryoDonor;

    /**
     * @var string
     *
     * @ORM\Column(name="other_facilities", type="text", length=65535, nullable=false, options={"default": ""})
     */
    private $otherFacilities;

    /**
     * @var string
     *
     * @ORM\Column(name="best_qualities", type="text", length=65535, nullable=false, options={"default": ""})
     */
    private $bestQualities;

    /**
     * @var string
     *
     * @ORM\Column(name="srms_comments", type="text", length=65535, nullable=false, options={"default": ""})
     */
    private $srmsComments;

    /**
     * @var string
     *
     * @ORM\Column(name="say_to_recipient", type="text", length=65535, nullable=false, options={"default": ""})
     */
    private $sayToRecipient;

    /**
     * @var int
     *
     * @ORM\Column(name="information_true_accurate", type="integer", nullable=false)
     */
    private $informationTrueAccurate;

    /**
     * @var string
     *
     * @ORM\Column(name="signed_name_husband", type="string", length=200, nullable=false)
     */
    private $signedNameHusband;

    /**
     * @var string
     *
     * @ORM\Column(name="signed_name_wife", type="string", length=200, nullable=false)
     */
    private $signedNameWife;

    /**
     * @var string
     *
     * @ORM\Column(name="signed_date", type="string", length=15, nullable=false)
     */
    private $signedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="other_limiting_stipulations", type="text", length=65535, nullable=false, options={"default": ""})
     */
    private $otherLimitingStipulations;

    /**
     * @var int
     *
     * @ORM\Column(name="on_reserve", type="integer", nullable=false, options={"unsigned":true, "default":0})
     */
    private $onReserve = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=30, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="mhp_option", type="string", length=4, nullable=false)
     */
    private $mhpOption;

    /**
     * @var string
     *
     * @ORM\Column(name="ptp_idp_option", type="string", length=4, nullable=false)
     */
    private $ptpIdpOption;

    /**
     * @var string
     *
     * @ORM\Column(name="mhp_donor_info", type="string", length=15, nullable=false)
     */
    private $mhpDonorInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_single_name", type="string", length=150, nullable=false)
     */
    private $donorSingleName;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_single_signature", type="string", length=150, nullable=false)
     */
    private $donorSingleSignature;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_first_partner_name", type="string", length=150, nullable=false)
     */
    private $donorFirstPartnerName;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_first_partner_signature", type="string", length=150, nullable=false)
     */
    private $donorFirstPartnerSignature;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_second_partner_name", type="string", length=150, nullable=false)
     */
    private $donorSecondPartnerName;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_second_partner_signature", type="string", length=150, nullable=false)
     */
    private $donorSecondPartnerSignature;

    /**
     * @var string
     *
     * @ORM\Column(name="id_info_when", type="string", length=1, nullable=false, options={"fixed"=true,"comment"="1->When the DCO is any, 2->When the DCO is six or more years of age,3->When the DCO is 12 or more years of age,4->When the DCO is 18 or more years of age"})
     */
    private $idInfoWhen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryo_status", type="string", length=15, nullable=true)
     */
    private $embryoStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_when_created", type="string", length=15, nullable=true)
     */
    private $embryosWhenCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_where_created", type="string", length=100, nullable=true)
     */
    private $embryosWhereCreated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_multiple_storage_facilities", type="string", length=3, nullable=true)
     */
    private $embryosMultipleStorageFacilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_where_stored", type="string", length=100, nullable=true)
     */
    private $embryosWhereStored;

    /**
     * @var int|null
     *
     * @ORM\Column(name="embryos_how_many_stored", type="integer", nullable=true)
     */
    private $embryosHowManyStored;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_residual_storage_fees", type="string", length=3, nullable=true)
     */
    private $embryosResidualStorageFees;

    /**
     * @var string
     *
     * @ORM\Column(name="emb_charity", type="text", length=65535, nullable=false, options={"default": ""})
     */
    private $embCharity;

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
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_modified", type="datetime", nullable=false, options={"default": "CURRENT_TIMESTAMP"})
     */
    private $datetimeModified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medical_staff_comments", type="text", length=65535, nullable=true)
     */
    private $medicalStaffComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medical_director_comments", type="text", length=65535, nullable=true)
     */
    private $medicalDirectorComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dr_review_datetime", type="text", length=65535, nullable=true)
     */
    private $drReviewDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="is_archive", type="integer", nullable=false, options={"unsigned"=true, "default": "0"})
     */
    private $isArchive = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datetime_acrhived", type="datetime", nullable=true)
     */
    private $datetimeAcrhived;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_were_they_created_name", type="string", length=100, nullable=true)
     */
    private $embryosWereTheyCreatedName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_were_they_created_location", type="string", length=100, nullable=true)
     */
    private $embryosWereTheyCreatedLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_were_they_created_name1", type="string", length=100, nullable=true)
     */
    private $embryosWereTheyCreatedName1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="embryos_were_they_created_location1", type="string", length=100, nullable=true)
     */
    private $embryosWereTheyCreatedLocation1;


    /**
     * One Cart has One EmbPicture
     * @ORM\OneToMany(targetEntity="EmbPicture", mappedBy="embapplication", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id",referencedColumnName="application_id")
     */
    private $pictures;
	/**
	 * One Cart has One EmbContactInfo.
	 * @ORM\OneToOne(targetEntity="EmbContactInfo", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embcontactinfo;
	/**
	 * One Cart has One EmbHusbEduHistory.
	 * @ORM\OneToOne(targetEntity="EmbHusbEduHistory", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embhusbeduhistory;

	/**
	 * One Cart has One EmbHusbFamHist.
	 * @ORM\OneToOne(targetEntity="EmbHusbFamHist", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embhusbfamhist;

	/**
	 * One Cart has One EmbHusbMedHist.
	 * @ORM\OneToOne(targetEntity="EmbHusbMedHist", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embhusbmedhist;

	/**
	 * One Cart has One EmbHusbPhyChar.
	 * @ORM\OneToOne(targetEntity="EmbHusbPhysChar", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embhusbphyschar;

	/**
	 * One Cart has One EmbHusbSocialHistory.
	 * @ORM\OneToOne(targetEntity="EmbHusbSocialHistory", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embhusbsocialhistory;

	/**
	 * One Cart has One EmbWifeEduHistory.
	 * @ORM\OneToOne(targetEntity="EmbWifeEduHistory", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embwifeeduhistory;

	/**
	 * One Cart has One EmbWifeFamHist.
	 * @ORM\OneToOne(targetEntity="EmbWifeFamHist", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embwifefamhist;

	/**
	 * One Cart has One EmbWifeMedHist.
	 * @ORM\OneToOne(targetEntity="EmbWifeMedHist", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embwifemedhist;

	/**
	 * One Cart has One EmbWifePhyChar.
	 * @ORM\OneToOne(targetEntity="EmbWifePhysChar", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embwifephyschar;

	/**
	 * One Cart has One EmbWifeSocialHistory.
	 * @ORM\OneToOne(targetEntity="EmbWifeSocialHistory", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embwifesocialhistory;

	/**
	 * One Cart has One EmbWifeOgHist.
	 * @ORM\OneToOne(targetEntity="EmbWifeOgHist", mappedBy="embapplication")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */
	private $embwifeoghist;

	/**
	 * @ORM\OneToMany(targetEntity="EmbStipulation", mappedBy="embapplication", cascade={"persist", "remove"}, fetch="EAGER", orphanRemoval=true)
     * @ORM\JoinColumn(name="id",referencedColumnName="application_id")
	 */
	private $stipulations;

    /** @var Collection $marriage_stipulations */
    private $marriage_stipulations;
    /** @var Collection $religion_stipulations */
    private $religion_stipulations;
    /** @var Collection $race_stipulations */
    private $race_stipulations;
    /** @var $education_stipulation */
    private $education_stipulation;
    /** @var $location_stipulation */
    private $location_stipulation;

	public function __construct() {
        //$this->datetimeCreated = new \DateTime();
        $this->pictures = new ArrayCollection();
		$this->stipulations = new ArrayCollection();

        //These are not serialized
        $this->marriage_stipulations = new ArrayCollection();
        $this->religion_stipulations = new ArrayCollection();
        $this->race_stipulations = new ArrayCollection();

    }

	/**
	 * @return int
	 */
	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbApplication
	 */
	public function setId( ?int $id ): EmbApplication {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbNumber(): ?string {
		return $this->embNumber;
	}

	/**
	 * @param string|null $embNumber
	 *
	 * @return EmbApplication
	 */
	public function setEmbNumber( ?string $embNumber ): EmbApplication {
		$this->embNumber = $embNumber;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDatetimeCreated(): ?\DateTime {
		return $this->datetimeCreated;
	}

	/**
	 * @param \DateTime $datetimeCreated
	 *
	 * @return EmbApplication
	 */
	public function setDatetimeCreated( ?\DateTime $datetimeCreated ): EmbApplication {
		$this->datetimeCreated = $datetimeCreated;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getInitials(): ?string {
		return $this->initials;
	}

	/**
	 * @param string $initials
	 *
	 * @return EmbApplication
	 */
	public function setInitials( ?string $initials ): EmbApplication {
		$this->initials = $initials;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string {
		return $this->email;
	}

	/**
	 * @param string|null $email
	 *
	 * @return EmbApplication
	 */
	public function setEmail( ?string $email ): EmbApplication {
		$this->email = $email;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoto1(): ?string {
		return $this->photo1;
	}

	/**
	 * @param string $photo1
	 *
	 * @return EmbApplication
	 */
	public function setPhoto1( ?string $photo1 ): EmbApplication {
		$this->photo1 = $photo1;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoto2(): ?string {
		return $this->photo2;
	}

	/**
	 * @param string $photo2
	 *
	 * @return EmbApplication
	 */
	public function setPhoto2( ?string $photo2 ): EmbApplication {
		$this->photo2 = $photo2;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPhoto1Description(): ?string {
		return $this->photo1Description;
	}

	/**
	 * @param string|null $photo1Description
	 *
	 * @return EmbApplication
	 */
	public function setPhoto1Description( ?string $photo1Description ): EmbApplication {
		$this->photo1Description = $photo1Description;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPhoto2Description(): ?string {
		return $this->photo2Description;
	}

	/**
	 * @param string|null $photo2Description
	 *
	 * @return EmbApplication
	 */
	public function setPhoto2Description( ?string $photo2Description ): EmbApplication {
		$this->photo2Description = $photo2Description;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIncludePhoto(): ?string {
		return $this->includePhoto;
	}

	/**
	 * @param string $includePhoto
	 *
	 * @return EmbApplication
	 */
	public function setIncludePhoto( ?string $includePhoto ): EmbApplication {
		$this->includePhoto = $includePhoto;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIncludePhotoOffice(): ?string {
		return $this->includePhotoOffice;
	}

	/**
	 * @param string $includePhotoOffice
	 *
	 * @return EmbApplication
	 */
	public function setIncludePhotoOffice( ?string $includePhotoOffice ): EmbApplication {
		$this->includePhotoOffice = $includePhotoOffice;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIncludePhotoWebPrint(): ?string {
		return $this->includePhotoWebPrint;
	}

	/**
	 * @param string $includePhotoWebPrint
	 *
	 * @return EmbApplication
	 */
	public function setIncludePhotoWebPrint( ?string $includePhotoWebPrint ): EmbApplication {
		$this->includePhotoWebPrint = $includePhotoWebPrint;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmbSrcOwn(): ?string {
		return $this->embSrcOwn;
	}

	/**
	 * @param string $embSrcOwn
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcOwn( ?string $embSrcOwn ): EmbApplication {
		$this->embSrcOwn = $embSrcOwn;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcOwnPi1(): ?string {
		return $this->embSrcOwnPi1;
	}

	/**
	 * @param string|null $embSrcOwnPi1
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcOwnPi1( ?string $embSrcOwnPi1 ): EmbApplication {
		$this->embSrcOwnPi1 = $embSrcOwnPi1;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmbSrcOwnPi2(): ?string {
		return $this->embSrcOwnPi2;
	}

	/**
	 * @param string $embSrcOwnPi2
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcOwnPi2( ?string $embSrcOwnPi2 ): EmbApplication {
		$this->embSrcOwnPi2 = $embSrcOwnPi2;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcDonorSperm(): ?string {
		return $this->embSrcDonorSperm;
	}

	/**
	 * @param string|null $embSrcDonorSperm
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcDonorSperm( ?string $embSrcDonorSperm ): EmbApplication {
		$this->embSrcDonorSperm = $embSrcDonorSperm;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcDonorSpermPi1(): ?string {
		return $this->embSrcDonorSpermPi1;
	}

	/**
	 * @param string|null $embSrcDonorSpermPi1
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcDonorSpermPi1( ?string $embSrcDonorSpermPi1 ): EmbApplication {
		$this->embSrcDonorSpermPi1 = $embSrcDonorSpermPi1;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcDonorSpermPi2(): ?string {
		return $this->embSrcDonorSpermPi2;
	}

	/**
	 * @param string|null $embSrcDonorSpermPi2
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcDonorSpermPi2( ?string $embSrcDonorSpermPi2 ): EmbApplication {
		$this->embSrcDonorSpermPi2 = $embSrcDonorSpermPi2;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcDonorEggs(): ?string {
		return $this->embSrcDonorEggs;
	}

	/**
	 * @param string|null $embSrcDonorEggs
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcDonorEggs( ?string $embSrcDonorEggs ): EmbApplication {
		$this->embSrcDonorEggs = $embSrcDonorEggs;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcDonorEggsPi1(): ?string {
		return $this->embSrcDonorEggsPi1;
	}

	/**
	 * @param string|null $embSrcDonorEggsPi1
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcDonorEggsPi1( ?string $embSrcDonorEggsPi1 ): EmbApplication {
		$this->embSrcDonorEggsPi1 = $embSrcDonorEggsPi1;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcDonorEggsPi2(): ?string {
		return $this->embSrcDonorEggsPi2;
	}

	/**
	 * @param string|null $embSrcDonorEggsPi2
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcDonorEggsPi2( ?string $embSrcDonorEggsPi2 ): EmbApplication {
		$this->embSrcDonorEggsPi2 = $embSrcDonorEggsPi2;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcMixture(): ?string {
		return $this->embSrcMixture;
	}

	/**
	 * @param string|null $embSrcMixture
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcMixture( ?string $embSrcMixture ): EmbApplication {
		$this->embSrcMixture = $embSrcMixture;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcMixturePi1(): ?string {
		return $this->embSrcMixturePi1;
	}

	/**
	 * @param string|null $embSrcMixturePi1
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcMixturePi1( ?string $embSrcMixturePi1 ): EmbApplication {
		$this->embSrcMixturePi1 = $embSrcMixturePi1;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbSrcMixturePi2(): ?string {
		return $this->embSrcMixturePi2;
	}

	/**
	 * @param string|null $embSrcMixturePi2
	 *
	 * @return EmbApplication
	 */
	public function setEmbSrcMixturePi2( ?string $embSrcMixturePi2 ): EmbApplication {
		$this->embSrcMixturePi2 = $embSrcMixturePi2;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAgreeBloodReTest(): ?string {
		return $this->agreeBloodReTest;
	}

	/**
	 * @param string $agreeBloodReTest
	 *
	 * @return EmbApplication
	 */
	public function setAgreeBloodReTest( ?string $agreeBloodReTest ): EmbApplication {
		$this->agreeBloodReTest = $agreeBloodReTest;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAgreeBloodReTestPi1(): ?string {
		return $this->agreeBloodReTestPi1;
	}

	/**
	 * @param string $agreeBloodReTestPi1
	 *
	 * @return EmbApplication
	 */
	public function setAgreeBloodReTestPi1( ?string $agreeBloodReTestPi1 ): EmbApplication {
		$this->agreeBloodReTestPi1 = $agreeBloodReTestPi1;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAgreeBloodReTestPi2(): ?string {
		return $this->agreeBloodReTestPi2;
	}

	/**
	 * @param string $agreeBloodReTestPi2
	 *
	 * @return EmbApplication
	 */
	public function setAgreeBloodReTestPi2( ?string $agreeBloodReTestPi2 ): EmbApplication {
		$this->agreeBloodReTestPi2 = $agreeBloodReTestPi2;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPastEmbryoDonor(): ?string {
		return $this->pastEmbryoDonor;
	}

	/**
	 * @param string $pastEmbryoDonor
	 *
	 * @return EmbApplication
	 */
	public function setPastEmbryoDonor( ?string $pastEmbryoDonor ): EmbApplication {
		$this->pastEmbryoDonor = $pastEmbryoDonor;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOtherFacilities(): ?string {
		return $this->otherFacilities;
	}

	/**
	 * @param string $otherFacilities
	 *
	 * @return EmbApplication
	 */
	public function setOtherFacilities( ?string $otherFacilities ): EmbApplication {
		$this->otherFacilities = $otherFacilities;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBestQualities(): ?string {
		return $this->bestQualities;
	}

	/**
	 * @param string $bestQualities
	 *
	 * @return EmbApplication
	 */
	public function setBestQualities( ?string $bestQualities ): EmbApplication {
		$this->bestQualities = $bestQualities;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSrmsComments(): ?string {
		return $this->srmsComments;
	}

	/**
	 * @param string $srmsComments
	 *
	 * @return EmbApplication
	 */
	public function setSrmsComments( ?string $srmsComments ): EmbApplication {
		$this->srmsComments = $srmsComments;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSayToRecipient(): ?string {
		return $this->sayToRecipient;
	}

	/**
	 * @param string $sayToRecipient
	 *
	 * @return EmbApplication
	 */
	public function setSayToRecipient( ?string $sayToRecipient ): EmbApplication {
		$this->sayToRecipient = $sayToRecipient;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getInformationTrueAccurate(): ?int {
		return $this->informationTrueAccurate;
	}

	/**
	 * @param int $informationTrueAccurate
	 *
	 * @return EmbApplication
	 */
	public function setInformationTrueAccurate( ?int $informationTrueAccurate ): EmbApplication {
		$this->informationTrueAccurate = $informationTrueAccurate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSignedNameHusband(): ?string {
		return $this->signedNameHusband;
	}

	/**
	 * @param string $signedNameHusband
	 *
	 * @return EmbApplication
	 */
	public function setSignedNameHusband( ?string $signedNameHusband ): EmbApplication {
		$this->signedNameHusband = $signedNameHusband;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSignedNameWife(): ?string {
		return $this->signedNameWife;
	}

	/**
	 * @param string $signedNameWife
	 *
	 * @return EmbApplication
	 */
	public function setSignedNameWife( ?string $signedNameWife ): EmbApplication {
		$this->signedNameWife = $signedNameWife;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSignedDate(): ?string {
		return $this->signedDate;
	}

	/**
	 * @param string $signedDate
	 *
	 * @return EmbApplication
	 */
	public function setSignedDate( ?string $signedDate ): EmbApplication {
		$this->signedDate = $signedDate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOtherLimitingStipulations(): ?string {
		return $this->otherLimitingStipulations;
	}

	/**
	 * @param string $otherLimitingStipulations
	 *
	 * @return EmbApplication
	 */
	public function setOtherLimitingStipulations( ?string $otherLimitingStipulations ): EmbApplication {
		$this->otherLimitingStipulations = $otherLimitingStipulations;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getOnReserve() {
		return $this->onReserve;
	}

	/**
	 * @param int $onReserve
	 *
	 * @return EmbApplication
	 */
	public function setOnReserve( $onReserve ) {
		$this->onReserve = $onReserve;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isActive(): ?bool {
		return $this->isActive;
	}

	/**
	 * @param bool $isActive
	 *
	 * @return EmbApplication
	 */
	public function setIsActive( ?bool $isActive ): EmbApplication {
		$this->isActive = $isActive;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCategory(): ?string {
		return $this->category;
	}

	/**
	 * @param string|null $category
	 *
	 * @return EmbApplication
	 */
	public function setCategory( ?string $category ): EmbApplication {
		$this->category = $category;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMhpOption(): ?string {
		return $this->mhpOption;
	}

	/**
	 * @param string $mhpOption
	 *
	 * @return EmbApplication
	 */
	public function setMhpOption( ?string $mhpOption ): EmbApplication {
		$this->mhpOption = $mhpOption;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPtpIdpOption(): ?string {
		return $this->ptpIdpOption;
	}

	/**
	 * @param string $ptpIdpOption
	 *
	 * @return EmbApplication
	 */
	public function setPtpIdpOption( ?string $ptpIdpOption ): EmbApplication {
		$this->ptpIdpOption = $ptpIdpOption;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMhpDonorInfo(): ?string {
		return $this->mhpDonorInfo;
	}

	/**
	 * @param string $mhpDonorInfo
	 *
	 * @return EmbApplication
	 */
	public function setMhpDonorInfo( ?string $mhpDonorInfo ): EmbApplication {
		$this->mhpDonorInfo = $mhpDonorInfo;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDonorSingleName(): ?string {
		return $this->donorSingleName;
	}

	/**
	 * @param string $donorSingleName
	 *
	 * @return EmbApplication
	 */
	public function setDonorSingleName( ?string $donorSingleName ): EmbApplication {
		$this->donorSingleName = $donorSingleName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDonorSingleSignature(): ?string {
		return $this->donorSingleSignature;
	}

	/**
	 * @param string $donorSingleSignature
	 *
	 * @return EmbApplication
	 */
	public function setDonorSingleSignature( ?string $donorSingleSignature ): EmbApplication {
		$this->donorSingleSignature = $donorSingleSignature;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDonorFirstPartnerName(): ?string {
		return $this->donorFirstPartnerName;
	}

	/**
	 * @param string $donorFirstPartnerName
	 *
	 * @return EmbApplication
	 */
	public function setDonorFirstPartnerName( ?string $donorFirstPartnerName ): EmbApplication {
		$this->donorFirstPartnerName = $donorFirstPartnerName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDonorFirstPartnerSignature(): ?string {
		return $this->donorFirstPartnerSignature;
	}

	/**
	 * @param string $donorFirstPartnerSignature
	 *
	 * @return EmbApplication
	 */
	public function setDonorFirstPartnerSignature( ?string $donorFirstPartnerSignature ): EmbApplication {
		$this->donorFirstPartnerSignature = $donorFirstPartnerSignature;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDonorSecondPartnerName(): ?string {
		return $this->donorSecondPartnerName;
	}

	/**
	 * @param string $donorSecondPartnerName
	 *
	 * @return EmbApplication
	 */
	public function setDonorSecondPartnerName( ?string $donorSecondPartnerName ): EmbApplication {
		$this->donorSecondPartnerName = $donorSecondPartnerName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDonorSecondPartnerSignature(): ?string {
		return $this->donorSecondPartnerSignature;
	}

	/**
	 * @param string $donorSecondPartnerSignature
	 *
	 * @return EmbApplication
	 */
	public function setDonorSecondPartnerSignature( ?string $donorSecondPartnerSignature ): EmbApplication {
		$this->donorSecondPartnerSignature = $donorSecondPartnerSignature;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIdInfoWhen(): ?string {
		return $this->idInfoWhen;
	}

	/**
	 * @param string $idInfoWhen
	 *
	 * @return EmbApplication
	 */
	public function setIdInfoWhen( ?string $idInfoWhen ): EmbApplication {
		$this->idInfoWhen = $idInfoWhen;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryoStatus(): ?string {
		return $this->embryoStatus;
	}

	/**
	 * @param string|null $embryoStatus
	 *
	 * @return EmbApplication
	 */
	public function setEmbryoStatus( ?string $embryoStatus ): EmbApplication {
		$this->embryoStatus = $embryoStatus;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWhenCreated(): ?string {
		return $this->embryosWhenCreated;
	}

	/**
	 * @param string|null $embryosWhenCreated
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWhenCreated( ?string $embryosWhenCreated ): EmbApplication {
		$this->embryosWhenCreated = $embryosWhenCreated;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWhereCreated(): ?string {
		return $this->embryosWhereCreated;
	}

	/**
	 * @param string|null $embryosWhereCreated
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWhereCreated( ?string $embryosWhereCreated ): EmbApplication {
		$this->embryosWhereCreated = $embryosWhereCreated;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosMultipleStorageFacilities(): ?string {
		return $this->embryosMultipleStorageFacilities;
	}

	/**
	 * @param string|null $embryosMultipleStorageFacilities
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosMultipleStorageFacilities( ?string $embryosMultipleStorageFacilities ): EmbApplication {
		$this->embryosMultipleStorageFacilities = $embryosMultipleStorageFacilities;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWhereStored(): ?string {
		return $this->embryosWhereStored;
	}

	/**
	 * @param string|null $embryosWhereStored
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWhereStored( ?string $embryosWhereStored ): EmbApplication {
		$this->embryosWhereStored = $embryosWhereStored;

		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getEmbryosHowManyStored(): ?int {
		return $this->embryosHowManyStored;
	}

	/**
	 * @param int|null $embryosHowManyStored
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosHowManyStored( ?int $embryosHowManyStored ): EmbApplication {
		$this->embryosHowManyStored = $embryosHowManyStored;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosResidualStorageFees(): ?string {
		return $this->embryosResidualStorageFees;
	}

	/**
	 * @param string|null $embryosResidualStorageFees
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosResidualStorageFees( ?string $embryosResidualStorageFees ): EmbApplication {
		$this->embryosResidualStorageFees = $embryosResidualStorageFees;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmbCharity(): ?string {
		return $this->embCharity;
	}

	/**
	 * @param string $embCharity
	 *
	 * @return EmbApplication
	 */
	public function setEmbCharity( ?string $embCharity ): EmbApplication {
		$this->embCharity = $embCharity;

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
	 * @return \DateTime
	 */
	public function getDatetimeModified(): ?\DateTime {
		return $this->datetimeModified;
	}

	/**
	 * @param \DateTime $datetimeModified
	 *
	 * @return EmbApplication
	 */
	public function setDatetimeModified( ?\DateTime $datetimeModified ): EmbApplication {
		$this->datetimeModified = $datetimeModified;

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
	 * @return EmbApplication
	 */
	public function setMedicalStaffComments( ?string $medicalStaffComments ): EmbApplication {
		$this->medicalStaffComments = $medicalStaffComments;

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
	 * @return EmbApplication
	 */
	public function setMedicalDirectorComments( ?string $medicalDirectorComments ): EmbApplication {
		$this->medicalDirectorComments = $medicalDirectorComments;

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
	 * @return EmbApplication
	 */
	public function setDrReviewDatetime( ?string $drReviewDatetime ): EmbApplication {
		$this->drReviewDatetime = $drReviewDatetime;

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
	 * @return EmbApplication
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
	 * @return EmbApplication
	 */
	public function setDatetimeAcrhived( ?\DateTime $datetimeAcrhived ): EmbApplication {
		$this->datetimeAcrhived = $datetimeAcrhived;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWereTheyCreatedName(): ?string {
		return $this->embryosWereTheyCreatedName;
	}

	/**
	 * @param string|null $embryosWereTheyCreatedName
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWereTheyCreatedName( ?string $embryosWereTheyCreatedName ): EmbApplication {
		$this->embryosWereTheyCreatedName = $embryosWereTheyCreatedName;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWereTheyCreatedLocation(): ?string {
		return $this->embryosWereTheyCreatedLocation;
	}

	/**
	 * @param string|null $embryosWereTheyCreatedLocation
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWereTheyCreatedLocation( ?string $embryosWereTheyCreatedLocation ): EmbApplication {
		$this->embryosWereTheyCreatedLocation = $embryosWereTheyCreatedLocation;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWereTheyCreatedName1(): ?string {
		return $this->embryosWereTheyCreatedName1;
	}

	/**
	 * @param string|null $embryosWereTheyCreatedName1
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWereTheyCreatedName1( ?string $embryosWereTheyCreatedName1 ): EmbApplication {
		$this->embryosWereTheyCreatedName1 = $embryosWereTheyCreatedName1;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmbryosWereTheyCreatedLocation1(): ?string {
		return $this->embryosWereTheyCreatedLocation1;
	}

	/**
	 * @param string|null $embryosWereTheyCreatedLocation1
	 *
	 * @return EmbApplication
	 */
	public function setEmbryosWereTheyCreatedLocation1( ?string $embryosWereTheyCreatedLocation1 ): EmbApplication {
		$this->embryosWereTheyCreatedLocation1 = $embryosWereTheyCreatedLocation1;

		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getEmbcontactinfo() {
		return $this->embcontactinfo;
	}

	/**
	 * @param mixed $embcontactinfo
	 *
	 * @return EmbApplication
	 */
	public function setEmbcontactinfo( $embcontactinfo ) {
		$this->embcontactinfo = $embcontactinfo;

		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getEmbhusbeduhistory() {
		return $this->embhusbeduhistory;
	}

	/**
	 * @param mixed $embhusbeduhistory
	 *
	 * @return EmbApplication
	 */
	public function setEmbhusbeduhistory( $embhusbeduhistory ) {
		$this->embhusbeduhistory = $embhusbeduhistory;

		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getEmbhusbfamhist() {
		return $this->embhusbfamhist;
	}

	/**
	 * @param mixed $embhusbfamhist
	 *
	 * @return EmbApplication
	 */
	public function setEmbhusbfamhist( $embhusbfamhist ) {
		$this->embhusbfamhist = $embhusbfamhist;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbhusbmedhist() {
		return $this->embhusbmedhist;
	}

	/**
	 * @param mixed $embhusbmedhist
	 *
	 * @return EmbApplication
	 */
	public function setEmbhusbmedhist( $embhusbmedhist ) {
		$this->embhusbmedhist = $embhusbmedhist;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbhusbphyschar() {
		return $this->embhusbphyschar;
	}

	/**
	 * @param mixed $embhusbphyschar
	 *
	 * @return EmbApplication
	 */
	public function setEmbhusbphyschar( $embhusbphyschar ) {
		$this->embhusbphyschar = $embhusbphyschar;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbhusbsocialhistory() {
		return $this->embhusbsocialhistory;
	}

	/**
	 * @param mixed $embhusbsocialhistory
	 *
	 * @return EmbApplication
	 */
	public function setEmbhusbsocialhistory( $embhusbsocialhistory ) {
		$this->embhusbsocialhistory = $embhusbsocialhistory;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbwifeeduhistory() {
		return $this->embwifeeduhistory;
	}

	/**
	 * @param mixed $embwifeeduhistory
	 *
	 * @return EmbApplication
	 */
	public function setEmbwifeeduhistory( $embwifeeduhistory ) {
		$this->embwifeeduhistory = $embwifeeduhistory;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbwifefamhist() {
		return $this->embwifefamhist;
	}

	/**
	 * @param mixed $embwifefamhist
	 *
	 * @return EmbApplication
	 */
	public function setEmbwifefamhist( $embwifefamhist ) {
		$this->embwifefamhist = $embwifefamhist;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbwifemedhist() {
		return $this->embwifemedhist;
	}

	/**
	 * @param mixed $embwifemedhist
	 *
	 * @return EmbApplication
	 */
	public function setEmbwifemedhist( $embwifemedhist ) {
		$this->embwifemedhist = $embwifemedhist;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbwifephyschar() {
		return $this->embwifephyschar;
	}

	/**
	 * @param mixed $embwifephyschar
	 *
	 * @return EmbApplication
	 */
	public function setEmbwifephyschar( $embwifephyschar ) {
		$this->embwifephyschar = $embwifephyschar;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbwifesocialhistory() {
		return $this->embwifesocialhistory;
	}

	/**
	 * @param mixed $embwifesocialhistory
	 *
	 * @return EmbApplication
	 */
	public function setEmbwifesocialhistory( $embwifesocialhistory ) {
		$this->embwifesocialhistory = $embwifesocialhistory;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmbwifeoghist() {
		return $this->embwifeoghist;
	}

	/**
	 * @param mixed $embwifeoghist
	 *
	 * @return EmbApplication
	 */
	public function setEmbwifeoghist( $embwifeoghist ) {
		$this->embwifeoghist = $embwifeoghist;

		return $this;
	}

    /**
     * @return Collection
     */
    public function getPictures(): Collection {
        return $this->pictures;
    }

    /**
     * @param Collection $pictures
     *
     * @return EmbApplication
     */
    public function setPictures(Collection $pictures): EmbApplication {

        $this->pictures = $pictures;
        return $this;
    }

    /**
     * @param EmbPicture $picture
     *
     * @return EmbApplication
     */
    public function addPicture(EmbPicture $picture)
    {
        $this->pictures->add($picture);
        $picture->setEmbapplication($this);
        return $this;
    }

    /**
     * @param EmbPicture $picture
     *
     * @return EmbApplication
     */

    public function removePicture(EmbPicture $picture)
    {
        $this->pictures->removeElement($picture);
        return $this;
    }





	/**
	 * @return Collection
	 */
	public function getStipulations(): Collection {
		return $this->stipulations;
	}

	/**
	 * @param Collection $stipulations
	 *
	 * @return EmbApplication
	 */
	public function setStipulations( Collection $stipulations ): EmbApplication {
		$this->stipulations = $stipulations;

		return $this;
	}

    /**
     * @param EmbStipulation $stipulation
     *
     * @return EmbApplication
     */

   public function addStipulation(EmbStipulation $stipulation)
    {
        $this->stipulations->add($stipulation);
        $stipulation->setEmbapplication($this);
        return $this;
    }

    /**
     * @param EmbStipulation $stipulation
     *
     * @return EmbApplication
     */

    public function removeStipulation(EmbStipulation $stipulation)
    {
        $this->stipulations->removeElement($stipulation);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMarriageStipulations(): Collection
    {
        return $this->marriage_stipulations;
    }

    /**
     * @param Collection $marriage_stipulations
     */
    public function setMarriageStipulations(Collection $marriage_stipulations): void
    {
        $this->marriage_stipulations = $marriage_stipulations;
    }

    /**
     * @return Collection
     */
    public function getReligionStipulations(): Collection
    {
        return $this->religion_stipulations;
    }

    /**
     * @param Collection $religion_stipulations
     */
    public function setReligionStipulations(Collection $religion_stipulations): void
    {
        $this->religion_stipulations = $religion_stipulations;
    }

    /**
     * @return Collection
     */
    public function getRaceStipulations(): Collection
    {
        return $this->race_stipulations;
    }

    /**
     * @param Collection $race_stipulations
     */
    public function setRaceStipulations(Collection $race_stipulations): void
    {
        $this->race_stipulations = $race_stipulations;
    }

    /**
     * @return mixed
     */
    public function getEducationStipulation()
    {
        return $this->education_stipulation;
    }

    /**
     * @param mixed $education_stipulation
     */
    public function setEducationStipulation($education_stipulation): void
    {
        $this->education_stipulation = $education_stipulation;
    }

    /**
     * @return mixed
     */
    public function getLocationStipulation()
    {
        return $this->location_stipulation;
    }

    /**
     * @param mixed $location_stipulation
     */
    public function setLocationStipulation($location_stipulation): void
    {
        $this->location_stipulation = $location_stipulation;
    }

}
