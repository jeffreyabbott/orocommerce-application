<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbWifeFamHistory;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbWifeFamHist
 *
 * @ORM\Table(name="emb_wife_fam_hist")
 * @ORM\Entity
 * @Config()
 */
class EmbWifeFamHist extends ExtendEmbWifeFamHistory
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
     * One EmbWifeFamHist has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     *
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
	 * @ORM\OneToOne(targetEntity="EmbApplication", mappedBy="embwifefamhist")
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
	 * @return EmbWifeFamHist
	 */
	public function setId( int $id ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setApplicationId( ?int $applicationId ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMotherAlive( ?string $motherAlive ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMotherDeathAge( ?string $motherDeathAge ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMotherDeathCause( string $motherDeathCause ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMotherMedicalProblems( string $motherMedicalProblems ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setFatherAlive( ?string $fatherAlive ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setFatherDeathAge( ?string $fatherDeathAge ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setFatherDeathCause( string $fatherDeathCause ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setFatherMedicalProblems( string $fatherMedicalProblems ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setHaveSisters( ?string $haveSisters ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setNumSistersAndHealth( string $numSistersAndHealth ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setHaveBrothers( ?string $haveBrothers ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setNumBrothersAndHealth( string $numBrothersAndHealth ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setAlcoholism( ?string $alcoholism ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setBloodDiseases( ?string $bloodDiseases ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setHearingDifficulties( ?string $hearingDifficulties ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMalformations( ?string $malformations ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setSpinalCranialProblems( ?string $spinalCranialProblems ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setChromosomeAbnormalities( ?string $chromosomeAbnormalities ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setColorBlindness( ?string $colorBlindness ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setBornBlind( ?string $bornBlind ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setCysticFibrosis( ?string $cysticFibrosis ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setBornDeaf( ?string $bornDeaf ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setDiabetes( ?string $diabetes ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setEpilepsy( ?string $epilepsy ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setGlaucoma( ?string $glaucoma ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setHighBloodPressure( ?string $highBloodPressure ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMentalRetardation( ?string $mentalRetardation ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setMuscularDystrophy( ?string $muscularDystrophy ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setNeurofibromatosis( ?string $neurofibromatosis ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setPrematureOrganDegeneration( ?string $prematureOrganDegeneration ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setPsychiatricIllness( ?string $psychiatricIllness ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setSevereAllergies( ?string $severeAllergies ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setSickleCellDisease( ?string $sickleCellDisease ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setTaySachDisease( ?string $taySachDisease ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setTransmissibleSpongiform( ?string $transmissibleSpongiform ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setTwoOrMoreMiscarriages( ?string $twoOrMoreMiscarriages ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setOtherGeneticDiseases( ?string $otherGeneticDiseases ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setExplainYesAnswers( string $explainYesAnswers ): EmbWifeFamHist {
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
	 * @return EmbWifeFamHist
	 */
	public function setEmbapplication( ?int $embapplication ): EmbWifeFamHist {
		$this->embapplication = $embapplication;

		return $this;
	}


}
