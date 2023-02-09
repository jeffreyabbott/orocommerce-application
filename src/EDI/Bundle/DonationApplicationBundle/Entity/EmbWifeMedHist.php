<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbWifeMedHist;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbWifeMedHist
 *
 * @ORM\Table(name="emb_wife_med_hist")
 * @ORM\Entity
 * @Config()
 */
class EmbWifeMedHist extends ExtendEmbWifeMedHist
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
     * @var int|null
     *
     * ORM\Column(name="application_id", type="integer", nullable=true)
     * One EmbWifeMedHist has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medical_problems", type="string", length=255, nullable=true)
     */
    private $medicalProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="medical_problems_text", type="text", length=65535, nullable=false)
     */
    private $medicalProblemsText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surgeries", type="string", length=255, nullable=true)
     */
    private $surgeries;

    /**
     * @var string
     *
     * @ORM\Column(name="surgeries_text", type="text", length=65535, nullable=false)
     */
    private $surgeriesText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="current_medications", type="string", length=255, nullable=true)
     */
    private $currentMedications;

    /**
     * @var string
     *
     * @ORM\Column(name="current_medications_text", type="text", length=65535, nullable=false)
     */
    private $currentMedicationsText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allergies", type="string", length=255, nullable=true)
     */
    private $allergies;

    /**
     * @var string
     *
     * @ORM\Column(name="allergies_text", type="text", length=65535, nullable=false)
     */
    private $allergiesText;

    /**
     * @var string
     *
     * @ORM\Column(name="smoker", type="string", length=3, nullable=false)
     */
    private $smoker;

    /**
     * @var string|null
     *
     * @ORM\Column(name="smoker_willing_to_quit", type="string", length=255, nullable=true)
     */
    private $smokerWillingToQuit;

    /**
     * @var string
     *
     * @ORM\Column(name="smoker_how_much", type="string", length=255, nullable=false)
     */
    private $smokerHowMuch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alcohol_use", type="string", length=255, nullable=true)
     */
    private $alcoholUse;

    /**
     * @var string
     *
     * @ORM\Column(name="alcohol_use_text", type="text", length=65535, nullable=false)
     */
    private $alcoholUseText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="glasses_contacts", type="string", length=255, nullable=true)
     */
    private $glassesContacts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hearing_problems", type="string", length=255, nullable=true)
     */
    private $hearingProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="hearing_problems_severity", type="string", length=255, nullable=false)
     */
    private $hearingProblemsSeverity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dental_problems", type="string", length=255, nullable=true)
     */
    private $dentalProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="dental_problems_severity", type="string", length=255, nullable=false)
     */
    private $dentalProblemsSeverity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diet_restrictions", type="string", length=255, nullable=true)
     */
    private $dietRestrictions;

    /**
     * @var string
     *
     * @ORM\Column(name="diet_restrictions_text", type="text", length=65535, nullable=false)
     */
    private $dietRestrictionsText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blood_type", type="string", length=255, nullable=true)
     */
    private $bloodType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="history_infertility", type="string", length=255, nullable=true)
     */
    private $historyInfertility;

    /**
     * @var string
     *
     * @ORM\Column(name="history_infertility_text", type="string", length=250, nullable=false)
     */
    private $historyInfertilityText;

	/**
	 * @var int|null
	 *
	 * ORM\Column(name="application_id", type="integer", nullable=true)
	 * One ContactInfo has One Application.
	 * @ORM\OneToOne(targetEntity="EmbApplication", mappedBy="embwifemedhist")
	 * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */

	private $embapplication;

	/**
	 * @return int
	 */
	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbWifeMedHist
	 */
	public function setId( int $id ): EmbWifeMedHist {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getApplicationId(): ?int {
		return $this->applicationId;
	}

	/**
	 * @param int|null $applicationId
	 *
	 * @return EmbWifeMedHist
	 */
	public function setApplicationId( ?int $applicationId ): EmbWifeMedHist {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMedicalProblems(): ?string {
		return $this->medicalProblems;
	}

	/**
	 * @param string|null $medicalProblems
	 *
	 * @return EmbWifeMedHist
	 */
	public function setMedicalProblems( ?string $medicalProblems ): EmbWifeMedHist {
		$this->medicalProblems = $medicalProblems;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMedicalProblemsText(): ?string {
		return $this->medicalProblemsText;
	}

	/**
	 * @param string $medicalProblemsText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setMedicalProblemsText( string $medicalProblemsText ): EmbWifeMedHist {
		$this->medicalProblemsText = $medicalProblemsText;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSurgeries(): ?string {
		return $this->surgeries;
	}

	/**
	 * @param string|null $surgeries
	 *
	 * @return EmbWifeMedHist
	 */
	public function setSurgeries( ?string $surgeries ): EmbWifeMedHist {
		$this->surgeries = $surgeries;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSurgeriesText(): ?string {
		return $this->surgeriesText;
	}

	/**
	 * @param string $surgeriesText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setSurgeriesText( string $surgeriesText ): EmbWifeMedHist {
		$this->surgeriesText = $surgeriesText;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCurrentMedications(): ?string {
		return $this->currentMedications;
	}

	/**
	 * @param string|null $currentMedications
	 *
	 * @return EmbWifeMedHist
	 */
	public function setCurrentMedications( ?string $currentMedications ): EmbWifeMedHist {
		$this->currentMedications = $currentMedications;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrentMedicationsText(): ?string {
		return $this->currentMedicationsText;
	}

	/**
	 * @param string $currentMedicationsText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setCurrentMedicationsText( string $currentMedicationsText ): EmbWifeMedHist {
		$this->currentMedicationsText = $currentMedicationsText;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getAllergies(): ?string {
		return $this->allergies;
	}

	/**
	 * @param string|null $allergies
	 *
	 * @return EmbWifeMedHist
	 */
	public function setAllergies( ?string $allergies ): EmbWifeMedHist {
		$this->allergies = $allergies;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAllergiesText(): ?string {
		return $this->allergiesText;
	}

	/**
	 * @param string $allergiesText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setAllergiesText( string $allergiesText ): EmbWifeMedHist {
		$this->allergiesText = $allergiesText;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSmoker(): ?string {
		return $this->smoker;
	}

	/**
	 * @param string $smoker
	 *
	 * @return EmbWifeMedHist
	 */
	public function setSmoker( string $smoker ): EmbWifeMedHist {
		$this->smoker = $smoker;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSmokerWillingToQuit(): ?string {
		return $this->smokerWillingToQuit;
	}

	/**
	 * @param string|null $smokerWillingToQuit
	 *
	 * @return EmbWifeMedHist
	 */
	public function setSmokerWillingToQuit( ?string $smokerWillingToQuit ): EmbWifeMedHist {
		$this->smokerWillingToQuit = $smokerWillingToQuit;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSmokerHowMuch(): ?string {
		return $this->smokerHowMuch;
	}

	/**
	 * @param string $smokerHowMuch
	 *
	 * @return EmbWifeMedHist
	 */
	public function setSmokerHowMuch( string $smokerHowMuch ): EmbWifeMedHist {
		$this->smokerHowMuch = $smokerHowMuch;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getAlcoholUse(): ?string {
		return $this->alcoholUse;
	}

	/**
	 * @param string|null $alcoholUse
	 *
	 * @return EmbWifeMedHist
	 */
	public function setAlcoholUse( ?string $alcoholUse ): EmbWifeMedHist {
		$this->alcoholUse = $alcoholUse;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAlcoholUseText(): ?string {
		return $this->alcoholUseText;
	}

	/**
	 * @param string $alcoholUseText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setAlcoholUseText( string $alcoholUseText ): EmbWifeMedHist {
		$this->alcoholUseText = $alcoholUseText;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getGlassesContacts(): ?string {
		return $this->glassesContacts;
	}

	/**
	 * @param string|null $glassesContacts
	 *
	 * @return EmbWifeMedHist
	 */
	public function setGlassesContacts( ?string $glassesContacts ): EmbWifeMedHist {
		$this->glassesContacts = $glassesContacts;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHearingProblems(): ?string {
		return $this->hearingProblems;
	}

	/**
	 * @param string|null $hearingProblems
	 *
	 * @return EmbWifeMedHist
	 */
	public function setHearingProblems( ?string $hearingProblems ): EmbWifeMedHist {
		$this->hearingProblems = $hearingProblems;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHearingProblemsSeverity(): ?string {
		return $this->hearingProblemsSeverity;
	}

	/**
	 * @param string $hearingProblemsSeverity
	 *
	 * @return EmbWifeMedHist
	 */
	public function setHearingProblemsSeverity( ?string $hearingProblemsSeverity ): EmbWifeMedHist {
		$this->hearingProblemsSeverity = $hearingProblemsSeverity;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDentalProblems(): ?string {
		return $this->dentalProblems;
	}

	/**
	 * @param string|null $dentalProblems
	 *
	 * @return EmbWifeMedHist
	 */
	public function setDentalProblems( ?string $dentalProblems ): EmbWifeMedHist {
		$this->dentalProblems = $dentalProblems;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDentalProblemsSeverity(): ?string {
		return $this->dentalProblemsSeverity;
	}

	/**
	 * @param string $dentalProblemsSeverity
	 *
	 * @return EmbWifeMedHist
	 */
	public function setDentalProblemsSeverity( ?string $dentalProblemsSeverity ): EmbWifeMedHist {
		$this->dentalProblemsSeverity = $dentalProblemsSeverity;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDietRestrictions(): ?string {
		return $this->dietRestrictions;
	}

	/**
	 * @param string|null $dietRestrictions
	 *
	 * @return EmbWifeMedHist
	 */
	public function setDietRestrictions( ?string $dietRestrictions ): EmbWifeMedHist {
		$this->dietRestrictions = $dietRestrictions;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDietRestrictionsText(): ?string {
		return $this->dietRestrictionsText;
	}

	/**
	 * @param string $dietRestrictionsText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setDietRestrictionsText( string $dietRestrictionsText ): EmbWifeMedHist {
		$this->dietRestrictionsText = $dietRestrictionsText;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBloodType(): ?string {
		return $this->bloodType;
	}

	/**
	 * @param string|null $bloodType
	 *
	 * @return EmbWifeMedHist
	 */
	public function setBloodType( ?string $bloodType ): EmbWifeMedHist {
		$this->bloodType = $bloodType;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHistoryInfertility(): ?string {
		return $this->historyInfertility;
	}

	/**
	 * @param string|null $historyInfertility
	 *
	 * @return EmbWifeMedHist
	 */
	public function setHistoryInfertility( ?string $historyInfertility ): EmbWifeMedHist {
		$this->historyInfertility = $historyInfertility;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHistoryInfertilityText(): ?string {
		return $this->historyInfertilityText;
	}

	/**
	 * @param string $historyInfertilityText
	 *
	 * @return EmbWifeMedHist
	 */
	public function setHistoryInfertilityText( string $historyInfertilityText ): EmbWifeMedHist {
		$this->historyInfertilityText = $historyInfertilityText;

		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getEmbapplication(): ?int {
		return $this->embapplication;
	}

	/**
	 * @param int|null $embapplication
	 *
	 * @return EmbWifeMedHist
	 */
	public function setEmbapplication( ?int $embapplication ): EmbWifeMedHist {
		$this->embapplication = $embapplication;

		return $this;
	}


}
