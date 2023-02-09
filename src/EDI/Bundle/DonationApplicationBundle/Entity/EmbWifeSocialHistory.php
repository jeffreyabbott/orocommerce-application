<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbWifeSocialHistory;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbWifeSocialHistory
 *
 * @ORM\Table(name="emb_wife_social_history")
 * @ORM\Entity
 * @Config()
 */
class EmbWifeSocialHistory extends ExtendEmbWifeSocialHistory
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
     * One EmbWifeSocialHistory has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="religion", type="string", length=200, nullable=true)
     */
    private $religion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_place", type="string", length=200, nullable=true)
     */
    private $birthPlace;

    /**
     * @var string|null
     *
     * @ORM\Column(name="occupation", type="string", length=200, nullable=true)
     */
    private $occupation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hobbies_interests", type="string", length=255, nullable=true)
     */
    private $hobbiesInterests;

	/**
	 * @var int|null
	 *
	 * ORM\Column(name="application_id", type="integer", nullable=true)
	 * One ContactInfo has One Application.
	 * @ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embwifesocialhistory")
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
	 * @return EmbWifeSocialHistory
	 */
	public function setId( int $id ): EmbWifeSocialHistory {
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
	 * @return EmbWifeSocialHistory
	 */
	public function setApplicationId( ?int $applicationId ): EmbWifeSocialHistory {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getReligion(): ?string {
		return $this->religion;
	}

	/**
	 * @param string|null $religion
	 *
	 * @return EmbWifeSocialHistory
	 */
	public function setReligion( ?string $religion ): EmbWifeSocialHistory {
		$this->religion = $religion;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBirthPlace(): ?string {
		return $this->birthPlace;
	}

	/**
	 * @param string|null $birthPlace
	 *
	 * @return EmbWifeSocialHistory
	 */
	public function setBirthPlace( ?string $birthPlace ): EmbWifeSocialHistory {
		$this->birthPlace = $birthPlace;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getOccupation(): ?string {
		return $this->occupation;
	}

	/**
	 * @param string|null $occupation
	 *
	 * @return EmbWifeSocialHistory
	 */
	public function setOccupation( ?string $occupation ): EmbWifeSocialHistory {
		$this->occupation = $occupation;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHobbiesInterests(): ?string {
		return $this->hobbiesInterests;
	}

	/**
	 * @param string|null $hobbiesInterests
	 *
	 * @return EmbWifeSocialHistory
	 */
	public function setHobbiesInterests( ?string $hobbiesInterests ): EmbWifeSocialHistory {
		$this->hobbiesInterests = $hobbiesInterests;

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
	 * @return EmbWifeSocialHistory
	 */
	public function setEmbapplication( ?int $embapplication ): EmbWifeSocialHistory {
		$this->embapplication = $embapplication;

		return $this;
	}


}
