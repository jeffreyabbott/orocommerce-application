<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbWifeOgHist;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbWifeOgHist
 *
 * @ORM\Table(name="emb_wife_og_hist")
 * @ORM\Entity
 * @Config()
 */
class EmbWifeOgHist extends ExtendEmbWifeOgHist
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
     * One EmbWifeOgHist has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_pregnancies", type="string", length=200, nullable=true)
     */
    private $numPregnancies;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_term_deliveries", type="string", length=200, nullable=true)
     */
    private $numTermDeliveries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_premature_deliveries", type="string", length=200, nullable=true)
     */
    private $numPrematureDeliveries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_elective_terminations", type="string", length=200, nullable=true)
     */
    private $numElectiveTerminations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_spontaneous_losses", type="string", length=200, nullable=true)
     */
    private $numSpontaneousLosses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_living_children", type="string", length=200, nullable=true)
     */
    private $numLivingChildren;

    /**
     * @var string
     *
     * @ORM\Column(name="offspring_problems", type="text", length=65535, nullable=false)
     */
    private $offspringProblems;

    /**
     * @var string
     *
     * @ORM\Column(name="offspring_problems_text", type="string", length=250, nullable=false)
     */
    private $offspringProblemsText;

	/**
	 * @var int|null
	 *
	 * ORM\Column(name="application_id", type="integer", nullable=true)
	 * One ContactInfo has One Application.
	 * @ORM\OneToOne(targetEntity="EmbApplication", mappedBy="embwifeoghist")
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
	 * @return EmbWifeOgHist
	 */
	public function setId( int $id ): EmbWifeOgHist {
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
	 * @return EmbWifeOgHist
	 */
	public function setApplicationId( ?int $applicationId ): EmbWifeOgHist {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNumPregnancies(): ?string {
		return $this->numPregnancies;
	}

	/**
	 * @param string|null $numPregnancies
	 *
	 * @return EmbWifeOgHist
	 */
	public function setNumPregnancies( ?string $numPregnancies ): EmbWifeOgHist {
		$this->numPregnancies = $numPregnancies;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNumTermDeliveries(): ?string {
		return $this->numTermDeliveries;
	}

	/**
	 * @param string|null $numTermDeliveries
	 *
	 * @return EmbWifeOgHist
	 */
	public function setNumTermDeliveries( ?string $numTermDeliveries ): EmbWifeOgHist {
		$this->numTermDeliveries = $numTermDeliveries;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNumPrematureDeliveries(): ?string {
		return $this->numPrematureDeliveries;
	}

	/**
	 * @param string|null $numPrematureDeliveries
	 *
	 * @return EmbWifeOgHist
	 */
	public function setNumPrematureDeliveries( ?string $numPrematureDeliveries ): EmbWifeOgHist {
		$this->numPrematureDeliveries = $numPrematureDeliveries;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNumElectiveTerminations(): ?string {
		return $this->numElectiveTerminations;
	}

	/**
	 * @param string|null $numElectiveTerminations
	 *
	 * @return EmbWifeOgHist
	 */
	public function setNumElectiveTerminations( ?string $numElectiveTerminations ): EmbWifeOgHist {
		$this->numElectiveTerminations = $numElectiveTerminations;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNumSpontaneousLosses(): ?string {
		return $this->numSpontaneousLosses;
	}

	/**
	 * @param string|null $numSpontaneousLosses
	 *
	 * @return EmbWifeOgHist
	 */
	public function setNumSpontaneousLosses( ?string $numSpontaneousLosses ): EmbWifeOgHist {
		$this->numSpontaneousLosses = $numSpontaneousLosses;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getNumLivingChildren(): ?string {
		return $this->numLivingChildren;
	}

	/**
	 * @param string|null $numLivingChildren
	 *
	 * @return EmbWifeOgHist
	 */
	public function setNumLivingChildren( ?string $numLivingChildren ): EmbWifeOgHist {
		$this->numLivingChildren = $numLivingChildren;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOffspringProblems(): ?string {
		return $this->offspringProblems;
	}

	/**
	 * @param string $offspringProblems
	 *
	 * @return EmbWifeOgHist
	 */
	public function setOffspringProblems( string $offspringProblems ): EmbWifeOgHist {
		$this->offspringProblems = $offspringProblems;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOffspringProblemsText(): ?string {
		return $this->offspringProblemsText;
	}

	/**
	 * @param string $offspringProblemsText
	 *
	 * @return EmbWifeOgHist
	 */
	public function setOffspringProblemsText( string $offspringProblemsText ): EmbWifeOgHist {
		$this->offspringProblemsText = $offspringProblemsText;

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
	 * @return EmbWifeOgHist
	 */
	public function setEmbapplication( ?int $embapplication ): EmbWifeOgHist {
		$this->embapplication = $embapplication;

		return $this;
	}


}
