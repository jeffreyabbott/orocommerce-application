<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbWifeEduHistory;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbWifeEduHistory
 *
 * @ORM\Table(name="emb_wife_edu_history")
 * @ORM\Entity
 * @Config()
 */
class EmbWifeEduHistory extends ExtendEmbWifeEduHistory
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
     * @var int
     *
     * ORM\Column(name="application_id", type="integer", nullable=false)
     * One EmbWifeEduHistory has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="highest_education_level", type="string", length=200, nullable=false)
     */
    private $highestEducationLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="high_school_gpa", type="string", length=20, nullable=false)
     */
    private $highSchoolGpa;

    /**
     * @var string
     *
     * @ORM\Column(name="college_gpa", type="string", length=20, nullable=false)
     */
    private $collegeGpa;

    /**
     * @var string
     *
     * @ORM\Column(name="sat_act_scores", type="string", length=20, nullable=false)
     */
    private $satActScores;

    /**
     * @var string
     *
     * @ORM\Column(name="iq_score", type="string", length=20, nullable=false)
     */
    private $iqScore;

    /**
     * @var string
     *
     * @ORM\Column(name="other_educational_comments", type="text", length=65535, nullable=false)
     */
    private $otherEducationalComments;

	/**
	 * @var int|null
	 *
	 * ORM\Column(name="application_id", type="integer", nullable=true)
	 * One ContactInfo has One Application.
	 * @ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embwifeeduhistory")
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
	 * @return EmbWifeEduHistory
	 */
	public function setId( int $id ): EmbWifeEduHistory {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getApplicationId(): ?int {
		return $this->applicationId;
	}

	/**
	 * @param int $applicationId
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setApplicationId( int $applicationId ): EmbWifeEduHistory {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHighestEducationLevel(): ?string {
		return $this->highestEducationLevel;
	}

	/**
	 * @param string $highestEducationLevel
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setHighestEducationLevel( string $highestEducationLevel ): EmbWifeEduHistory {
		$this->highestEducationLevel = $highestEducationLevel;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getHighSchoolGpa(): ?string {
		return $this->highSchoolGpa;
	}

	/**
	 * @param string $highSchoolGpa
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setHighSchoolGpa( string $highSchoolGpa ): EmbWifeEduHistory {
		$this->highSchoolGpa = $highSchoolGpa;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCollegeGpa(): ?string {
		return $this->collegeGpa;
	}

	/**
	 * @param string $collegeGpa
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setCollegeGpa( string $collegeGpa ): EmbWifeEduHistory {
		$this->collegeGpa = $collegeGpa;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSatActScores(): ?string {
		return $this->satActScores;
	}

	/**
	 * @param string $satActScores
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setSatActScores( string $satActScores ): EmbWifeEduHistory {
		$this->satActScores = $satActScores;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIqScore(): ?string {
		return $this->iqScore;
	}

	/**
	 * @param string $iqScore
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setIqScore( string $iqScore ): EmbWifeEduHistory {
		$this->iqScore = $iqScore;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOtherEducationalComments(): ?string {
		return $this->otherEducationalComments;
	}

	/**
	 * @param string $otherEducationalComments
	 *
	 * @return EmbWifeEduHistory
	 */
	public function setOtherEducationalComments( string $otherEducationalComments ): EmbWifeEduHistory {
		$this->otherEducationalComments = $otherEducationalComments;

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
	 * @return EmbWifeEduHistory
	 */
	public function setEmbapplication( ?int $embapplication ): EmbWifeEduHistory {
		$this->embapplication = $embapplication;

		return $this;
	}


}
