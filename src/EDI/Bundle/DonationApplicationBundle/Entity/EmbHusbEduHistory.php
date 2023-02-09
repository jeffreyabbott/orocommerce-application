<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbHusbEduHistory;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;


/**
 * EmbHusbEduHistory
 *
 * @ORM\Table(name="emb_husb_edu_history")
 * @ORM\Entity
 * @Config()
 */
class EmbHusbEduHistory extends ExtendEmbHusbEduHistory
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
     * One HusbEduHistory has One Application.
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
	 * @ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embhusbeduhistory")
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
	 * @return EmbHusbEduHistory
	 */
	public function setId( int $id ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setApplicationId( int $applicationId ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setHighestEducationLevel( string $highestEducationLevel ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setHighSchoolGpa( string $highSchoolGpa ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setCollegeGpa( string $collegeGpa ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setSatActScores( string $satActScores ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setIqScore( string $iqScore ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setOtherEducationalComments( string $otherEducationalComments ): EmbHusbEduHistory {
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
	 * @return EmbHusbEduHistory
	 */
	public function setEmbapplication( ?int $embapplication ): EmbHusbEduHistory {
		$this->embapplication = $embapplication;

		return $this;
	}


}
