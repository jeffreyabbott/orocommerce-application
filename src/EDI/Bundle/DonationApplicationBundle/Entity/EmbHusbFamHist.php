<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbHusbFamHist;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbHusbFamHist
 *
 * @ORM\Table(name="emb_husb_fam_hist")
 * @ORM\Entity
 * @Config()
 */
class EmbHusbFamHist extends ExtendEmbHusbFamHist
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
     * One HusbFamHist has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mother_alive", type="string", length=200, nullable=true)
     */
    private $motherAlive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mother_death_age", type="string", length=3, nullable=true)
     */
    private $motherDeathAge;

    /**
     * @var string
     *
     * @ORM\Column(name="mother_death_cause", type="text", length=65535, nullable=false)
     */
    private $motherDeathCause;

    /**
     * @var string
     *
     * @ORM\Column(name="mother_medical_problems", type="text", length=65535, nullable=false)
     */
    private $motherMedicalProblems;

    /**
     * @var string|null
     *
     * @ORM\Column(name="father_alive", type="string", length=200, nullable=true)
     */
    private $fatherAlive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="father_death_age", type="string", length=3, nullable=true)
     */
    private $fatherDeathAge;

    /**
     * @var string
     *
     * @ORM\Column(name="father_death_cause", type="text", length=65535, nullable=false)
     */
    private $fatherDeathCause;

    /**
     * @var string
     *
     * @ORM\Column(name="father_medical_problems", type="text", length=65535, nullable=false)
     */
    private $fatherMedicalProblems;

    /**
     * @var string|null
     *
     * @ORM\Column(name="have_sisters", type="string", length=3, nullable=true)
     */
    private $haveSisters;

    /**
     * @var string
     *
     * @ORM\Column(name="num_sisters_and_health", type="string", length=255, nullable=false)
     */
    private $numSistersAndHealth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="have_brothers", type="string", length=3, nullable=true)
     */
    private $haveBrothers;

    /**
     * @var string
     *
     * @ORM\Column(name="num_brothers_and_health", type="string", length=255, nullable=false)
     */
    private $numBrothersAndHealth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alcoholism", type="string", length=3, nullable=true)
     */
    private $alcoholism;

    /**
     * @var string|null
     *
     * @ORM\Column(name="blood_diseases", type="string", length=3, nullable=true)
     */
    private $bloodDiseases;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hearing_difficulties", type="string", length=3, nullable=true)
     */
    private $hearingDifficulties;

    /**
     * @var string|null
     *
     * @ORM\Column(name="malformations", type="string", length=3, nullable=true)
     */
    private $malformations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="spinal_cranial_problems", type="string", length=3, nullable=true)
     */
    private $spinalCranialProblems;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chromosome_abnormalities", type="string", length=3, nullable=true)
     */
    private $chromosomeAbnormalities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color_blindness", type="string", length=3, nullable=true)
     */
    private $colorBlindness;

    /**
     * @var string|null
     *
     * @ORM\Column(name="born_blind", type="string", length=3, nullable=true)
     */
    private $bornBlind;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cystic_fibrosis", type="string", length=3, nullable=true)
     */
    private $cysticFibrosis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="born_deaf", type="string", length=3, nullable=true)
     */
    private $bornDeaf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diabetes", type="string", length=3, nullable=true)
     */
    private $diabetes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epilepsy", type="string", length=3, nullable=true)
     */
    private $epilepsy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="glaucoma", type="string", length=3, nullable=true)
     */
    private $glaucoma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="high_blood_pressure", type="string", length=3, nullable=true)
     */
    private $highBloodPressure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mental_retardation", type="string", length=3, nullable=true)
     */
    private $mentalRetardation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="muscular_dystrophy", type="string", length=3, nullable=true)
     */
    private $muscularDystrophy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="neurofibromatosis", type="string", length=3, nullable=true)
     */
    private $neurofibromatosis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="premature_organ_degeneration", type="string", length=3, nullable=true)
     */
    private $prematureOrganDegeneration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psychiatric_illness", type="string", length=3, nullable=true)
     */
    private $psychiatricIllness;

    /**
     * @var string|null
     *
     * @ORM\Column(name="severe_allergies", type="string", length=3, nullable=true)
     */
    private $severeAllergies;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sickle_cell_disease", type="string", length=3, nullable=true)
     */
    private $sickleCellDisease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tay_sach_disease", type="string", length=3, nullable=true)
     */
    private $taySachDisease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transmissible_spongiform", type="string", length=200, nullable=true)
     */
    private $transmissibleSpongiform;

    /**
     * @var string|null
     *
     * @ORM\Column(name="two_or_more_miscarriages", type="string", length=200, nullable=true)
     */
    private $twoOrMoreMiscarriages;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_genetic_diseases", type="string", length=200, nullable=true)
     */
    private $otherGeneticDiseases;

    /**
     * @var string
     *
     * @ORM\Column(name="explain_yes_answers", type="text", length=65535, nullable=false)
     */
    private $explainYesAnswers;

	/**
	 * @var int|null
	 *
	 * ORM\Column(name="application_id", type="integer", nullable=true)
	 * One ContactInfo has One Application.
	 * @ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embhusbfamhist")
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
	 * @return EmbHusbFamHist
	 */
	public function setId( int $id ): EmbHusbFamHist {
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
	 * @return EmbHusbFamHist
	 */
	public function setApplicationId( ?int $applicationId ): EmbHusbFamHist {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMotherAlive(): ?string {
		return $this->motherAlive;
	}

	/**
	 * @param string|null $motherAlive
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMotherAlive( ?string $motherAlive ): EmbHusbFamHist {
		$this->motherAlive = $motherAlive;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMotherDeathAge(): ?string {
		return $this->motherDeathAge;
	}

	/**
	 * @param string|null $motherDeathAge
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMotherDeathAge( ?string $motherDeathAge ): EmbHusbFamHist {
		$this->motherDeathAge = $motherDeathAge;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMotherDeathCause(): ?string {
		return $this->motherDeathCause;
	}

	/**
	 * @param string $motherDeathCause
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMotherDeathCause( string $motherDeathCause ): EmbHusbFamHist {
		$this->motherDeathCause = $motherDeathCause;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMotherMedicalProblems(): ?string {
		return $this->motherMedicalProblems;
	}

	/**
	 * @param string $motherMedicalProblems
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMotherMedicalProblems( string $motherMedicalProblems ): EmbHusbFamHist {
		$this->motherMedicalProblems = $motherMedicalProblems;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getFatherAlive(): ?string {
		return $this->fatherAlive;
	}

	/**
	 * @param string|null $fatherAlive
	 *
	 * @return EmbHusbFamHist
	 */
	public function setFatherAlive( ?string $fatherAlive ): EmbHusbFamHist {
		$this->fatherAlive = $fatherAlive;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getFatherDeathAge(): ?string {
		return $this->fatherDeathAge;
	}

	/**
	 * @param string|null $fatherDeathAge
	 *
	 * @return EmbHusbFamHist
	 */
	public function setFatherDeathAge( ?string $fatherDeathAge ): EmbHusbFamHist {
		$this->fatherDeathAge = $fatherDeathAge;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFatherDeathCause(): ?string {
		return $this->fatherDeathCause;
	}

	/**
	 * @param string $fatherDeathCause
	 *
	 * @return EmbHusbFamHist
	 */
	public function setFatherDeathCause( string $fatherDeathCause ): EmbHusbFamHist {
		$this->fatherDeathCause = $fatherDeathCause;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFatherMedicalProblems(): ?string {
		return $this->fatherMedicalProblems;
	}

	/**
	 * @param string $fatherMedicalProblems
	 *
	 * @return EmbHusbFamHist
	 */
	public function setFatherMedicalProblems( string $fatherMedicalProblems ): EmbHusbFamHist {
		$this->fatherMedicalProblems = $fatherMedicalProblems;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHaveSisters(): ?string {
		return $this->haveSisters;
	}

	/**
	 * @param string|null $haveSisters
	 *
	 * @return EmbHusbFamHist
	 */
	public function setHaveSisters( ?string $haveSisters ): EmbHusbFamHist {
		$this->haveSisters = $haveSisters;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumSistersAndHealth(): ?string {
		return $this->numSistersAndHealth;
	}

	/**
	 * @param string $numSistersAndHealth
	 *
	 * @return EmbHusbFamHist
	 */
	public function setNumSistersAndHealth( string $numSistersAndHealth ): EmbHusbFamHist {
		$this->numSistersAndHealth = $numSistersAndHealth;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHaveBrothers(): ?string {
		return $this->haveBrothers;
	}

	/**
	 * @param string|null $haveBrothers
	 *
	 * @return EmbHusbFamHist
	 */
	public function setHaveBrothers( ?string $haveBrothers ): EmbHusbFamHist {
		$this->haveBrothers = $haveBrothers;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumBrothersAndHealth(): ?string {
		return $this->numBrothersAndHealth;
	}

	/**
	 * @param string $numBrothersAndHealth
	 *
	 * @return EmbHusbFamHist
	 */
	public function setNumBrothersAndHealth( string $numBrothersAndHealth ): EmbHusbFamHist {
		$this->numBrothersAndHealth = $numBrothersAndHealth;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getAlcoholism(): ?string {
		return $this->alcoholism;
	}

	/**
	 * @param string|null $alcoholism
	 *
	 * @return EmbHusbFamHist
	 */
	public function setAlcoholism( ?string $alcoholism ): EmbHusbFamHist {
		$this->alcoholism = $alcoholism;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBloodDiseases(): ?string {
		return $this->bloodDiseases;
	}

	/**
	 * @param string|null $bloodDiseases
	 *
	 * @return EmbHusbFamHist
	 */
	public function setBloodDiseases( ?string $bloodDiseases ): EmbHusbFamHist {
		$this->bloodDiseases = $bloodDiseases;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHearingDifficulties(): ?string {
		return $this->hearingDifficulties;
	}

	/**
	 * @param string|null $hearingDifficulties
	 *
	 * @return EmbHusbFamHist
	 */
	public function setHearingDifficulties( ?string $hearingDifficulties ): EmbHusbFamHist {
		$this->hearingDifficulties = $hearingDifficulties;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMalformations(): ?string {
		return $this->malformations;
	}

	/**
	 * @param string|null $malformations
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMalformations( ?string $malformations ): EmbHusbFamHist {
		$this->malformations = $malformations;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSpinalCranialProblems(): ?string {
		return $this->spinalCranialProblems;
	}

	/**
	 * @param string|null $spinalCranialProblems
	 *
	 * @return EmbHusbFamHist
	 */
	public function setSpinalCranialProblems( ?string $spinalCranialProblems ): EmbHusbFamHist {
		$this->spinalCranialProblems = $spinalCranialProblems;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getChromosomeAbnormalities(): ?string {
		return $this->chromosomeAbnormalities;
	}

	/**
	 * @param string|null $chromosomeAbnormalities
	 *
	 * @return EmbHusbFamHist
	 */
	public function setChromosomeAbnormalities( ?string $chromosomeAbnormalities ): EmbHusbFamHist {
		$this->chromosomeAbnormalities = $chromosomeAbnormalities;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getColorBlindness(): ?string {
		return $this->colorBlindness;
	}

	/**
	 * @param string|null $colorBlindness
	 *
	 * @return EmbHusbFamHist
	 */
	public function setColorBlindness( ?string $colorBlindness ): EmbHusbFamHist {
		$this->colorBlindness = $colorBlindness;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBornBlind(): ?string {
		return $this->bornBlind;
	}

	/**
	 * @param string|null $bornBlind
	 *
	 * @return EmbHusbFamHist
	 */
	public function setBornBlind( ?string $bornBlind ): EmbHusbFamHist {
		$this->bornBlind = $bornBlind;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCysticFibrosis(): ?string {
		return $this->cysticFibrosis;
	}

	/**
	 * @param string|null $cysticFibrosis
	 *
	 * @return EmbHusbFamHist
	 */
	public function setCysticFibrosis( ?string $cysticFibrosis ): EmbHusbFamHist {
		$this->cysticFibrosis = $cysticFibrosis;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBornDeaf(): ?string {
		return $this->bornDeaf;
	}

	/**
	 * @param string|null $bornDeaf
	 *
	 * @return EmbHusbFamHist
	 */
	public function setBornDeaf( ?string $bornDeaf ): EmbHusbFamHist {
		$this->bornDeaf = $bornDeaf;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getDiabetes(): ?string {
		return $this->diabetes;
	}

	/**
	 * @param string|null $diabetes
	 *
	 * @return EmbHusbFamHist
	 */
	public function setDiabetes( ?string $diabetes ): EmbHusbFamHist {
		$this->diabetes = $diabetes;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEpilepsy(): ?string {
		return $this->epilepsy;
	}

	/**
	 * @param string|null $epilepsy
	 *
	 * @return EmbHusbFamHist
	 */
	public function setEpilepsy( ?string $epilepsy ): EmbHusbFamHist {
		$this->epilepsy = $epilepsy;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getGlaucoma(): ?string {
		return $this->glaucoma;
	}

	/**
	 * @param string|null $glaucoma
	 *
	 * @return EmbHusbFamHist
	 */
	public function setGlaucoma( ?string $glaucoma ): EmbHusbFamHist {
		$this->glaucoma = $glaucoma;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHighBloodPressure(): ?string {
		return $this->highBloodPressure;
	}

	/**
	 * @param string|null $highBloodPressure
	 *
	 * @return EmbHusbFamHist
	 */
	public function setHighBloodPressure( ?string $highBloodPressure ): EmbHusbFamHist {
		$this->highBloodPressure = $highBloodPressure;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMentalRetardation(): ?string {
		return $this->mentalRetardation;
	}

	/**
	 * @param string|null $mentalRetardation
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMentalRetardation( ?string $mentalRetardation ): EmbHusbFamHist {
		$this->mentalRetardation = $mentalRetardation;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getMuscularDystrophy(): ?string {
		return $this->muscularDystrophy;
	}

	/**
	 * @param string|null $muscularDystrophy
	 *
	 * @return EmbHusbFamHist
	 */
	public function setMuscularDystrophy( ?string $muscularDystrophy ): EmbHusbFamHist {
		$this->muscularDystrophy = $muscularDystrophy;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNeurofibromatosis(): ?string {
		return $this->neurofibromatosis;
	}

	/**
	 * @param string|null $neurofibromatosis
	 *
	 * @return EmbHusbFamHist
	 */
	public function setNeurofibromatosis( ?string $neurofibromatosis ): EmbHusbFamHist {
		$this->neurofibromatosis = $neurofibromatosis;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPrematureOrganDegeneration(): ?string {
		return $this->prematureOrganDegeneration;
	}

	/**
	 * @param string|null $prematureOrganDegeneration
	 *
	 * @return EmbHusbFamHist
	 */
	public function setPrematureOrganDegeneration( ?string $prematureOrganDegeneration ): EmbHusbFamHist {
		$this->prematureOrganDegeneration = $prematureOrganDegeneration;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPsychiatricIllness(): ?string {
		return $this->psychiatricIllness;
	}

	/**
	 * @param string|null $psychiatricIllness
	 *
	 * @return EmbHusbFamHist
	 */
	public function setPsychiatricIllness( ?string $psychiatricIllness ): EmbHusbFamHist {
		$this->psychiatricIllness = $psychiatricIllness;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSevereAllergies(): ?string {
		return $this->severeAllergies;
	}

	/**
	 * @param string|null $severeAllergies
	 *
	 * @return EmbHusbFamHist
	 */
	public function setSevereAllergies( ?string $severeAllergies ): EmbHusbFamHist {
		$this->severeAllergies = $severeAllergies;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSickleCellDisease(): ?string {
		return $this->sickleCellDisease;
	}

	/**
	 * @param string|null $sickleCellDisease
	 *
	 * @return EmbHusbFamHist
	 */
	public function setSickleCellDisease( ?string $sickleCellDisease ): EmbHusbFamHist {
		$this->sickleCellDisease = $sickleCellDisease;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getTaySachDisease(): ?string {
		return $this->taySachDisease;
	}

	/**
	 * @param string|null $taySachDisease
	 *
	 * @return EmbHusbFamHist
	 */
	public function setTaySachDisease( ?string $taySachDisease ): EmbHusbFamHist {
		$this->taySachDisease = $taySachDisease;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getTransmissibleSpongiform(): ?string {
		return $this->transmissibleSpongiform;
	}

	/**
	 * @param string|null $transmissibleSpongiform
	 *
	 * @return EmbHusbFamHist
	 */
	public function setTransmissibleSpongiform( ?string $transmissibleSpongiform ): EmbHusbFamHist {
		$this->transmissibleSpongiform = $transmissibleSpongiform;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getTwoOrMoreMiscarriages(): ?string {
		return $this->twoOrMoreMiscarriages;
	}

	/**
	 * @param string|null $twoOrMoreMiscarriages
	 *
	 * @return EmbHusbFamHist
	 */
	public function setTwoOrMoreMiscarriages( ?string $twoOrMoreMiscarriages ): EmbHusbFamHist {
		$this->twoOrMoreMiscarriages = $twoOrMoreMiscarriages;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getOtherGeneticDiseases(): ?string {
		return $this->otherGeneticDiseases;
	}

	/**
	 * @param string|null $otherGeneticDiseases
	 *
	 * @return EmbHusbFamHist
	 */
	public function setOtherGeneticDiseases( ?string $otherGeneticDiseases ): EmbHusbFamHist {
		$this->otherGeneticDiseases = $otherGeneticDiseases;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getExplainYesAnswers(): ?string {
		return $this->explainYesAnswers;
	}

	/**
	 * @param string $explainYesAnswers
	 *
	 * @return EmbHusbFamHist
	 */
	public function setExplainYesAnswers( string $explainYesAnswers ): EmbHusbFamHist {
		$this->explainYesAnswers = $explainYesAnswers;

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
	 * @return EmbHusbFamHist
	 */
	public function setEmbapplication( ?int $embapplication ): EmbHusbFamHist {
		$this->embapplication = $embapplication;

		return $this;
	}


}
