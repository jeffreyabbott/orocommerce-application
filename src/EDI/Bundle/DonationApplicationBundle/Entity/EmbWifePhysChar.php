<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbWifePhysChar;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbWifePhysChar
 *
 * @ORM\Table(name="emb_wife_phys_char")
 * @ORM\Entity
 * @Config()
 */
class EmbWifePhysChar extends ExtendEmbWifePhysChar
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
     * One EmbWifePhysChar has One Application.
     * ORM\OneToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="ethnic_origin", type="string", length=255, nullable=false)
     */
    private $ethnicOrigin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="race", type="string", length=200, nullable=true)
     */
    private $race;

    /**
     * @var string|null
     *
     * @ORM\Column(name="skin_tone", type="string", length=200, nullable=true)
     */
    private $skinTone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bone_structure", type="string", length=200, nullable=true)
     */
    private $boneStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eye_color", type="string", length=200, nullable=true)
     */
    private $eyeColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hair_color", type="string", length=200, nullable=true)
     */
    private $hairColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hair_texture", type="text", length=65535, nullable=true)
     */
    private $hairTexture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hair_structure", type="string", length=200, nullable=true)
     */
    private $hairStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height_ft", type="string", length=200, nullable=true)
     */
    private $heightFt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height_in", type="string", length=200, nullable=true)
     */
    private $heightIn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight_lbs", type="string", length=200, nullable=true)
     */
    private $weightLbs;

	/**
	 * @var int|null
	 *
	 * ORM\Column(name="application_id", type="integer", nullable=true)
	 * One ContactInfo has One Application.
	 * @ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embwifephychar")
	 * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */

	private $embapplication;

	/**
	 * @return int
	 */
	public function getId(): ?int{
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbWifePhysChar
	 */
	public function setId( int $id ): EmbWifePhysChar {
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
	 * @return EmbWifePhysChar
	 */
	public function setApplicationId( ?int $applicationId ): EmbWifePhysChar {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getDateOfBirth(): ?\DateTime {
		return $this->dateOfBirth;
	}

	/**
	 * @param \DateTime|null $dateOfBirth
	 *
	 * @return EmbWifePhysChar
	 */
	public function setDateOfBirth( ?\DateTime $dateOfBirth ): EmbWifePhysChar {
		$this->dateOfBirth = $dateOfBirth;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEthnicOrigin(): ?string {
		return $this->ethnicOrigin;
	}

	/**
	 * @param string $ethnicOrigin
	 *
	 * @return EmbWifePhysChar
	 */
	public function setEthnicOrigin( string $ethnicOrigin ): EmbWifePhysChar {
		$this->ethnicOrigin = $ethnicOrigin;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getRace(): ?string {
		return $this->race;
	}

	/**
	 * @param string|null $race
	 *
	 * @return EmbWifePhysChar
	 */
	public function setRace( ?string $race ): EmbWifePhysChar {
		$this->race = $race;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSkinTone(): ?string {
		return $this->skinTone;
	}

	/**
	 * @param string|null $skinTone
	 *
	 * @return EmbWifePhysChar
	 */
	public function setSkinTone( ?string $skinTone ): EmbWifePhysChar {
		$this->skinTone = $skinTone;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBoneStructure(): ?string {
		return $this->boneStructure;
	}

	/**
	 * @param string|null $boneStructure
	 *
	 * @return EmbWifePhysChar
	 */
	public function setBoneStructure( ?string $boneStructure ): EmbWifePhysChar {
		$this->boneStructure = $boneStructure;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEyeColor(): ?string {
		return $this->eyeColor;
	}

	/**
	 * @param string|null $eyeColor
	 *
	 * @return EmbWifePhysChar
	 */
	public function setEyeColor( ?string $eyeColor ): EmbWifePhysChar {
		$this->eyeColor = $eyeColor;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHairColor(): ?string {
		return $this->hairColor;
	}

	/**
	 * @param string|null $hairColor
	 *
	 * @return EmbWifePhysChar
	 */
	public function setHairColor( ?string $hairColor ): EmbWifePhysChar {
		$this->hairColor = $hairColor;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHairTexture(): ?string {
		return $this->hairTexture;
	}

	/**
	 * @param string|null $hairTexture
	 *
	 * @return EmbWifePhysChar
	 */
	public function setHairTexture( ?string $hairTexture ): EmbWifePhysChar {
		$this->hairTexture = $hairTexture;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHairStructure(): ?string {
		return $this->hairStructure;
	}

	/**
	 * @param string|null $hairStructure
	 *
	 * @return EmbWifePhysChar
	 */
	public function setHairStructure( ?string $hairStructure ): EmbWifePhysChar {
		$this->hairStructure = $hairStructure;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHeightFt(): ?string {
		return $this->heightFt;
	}

	/**
	 * @param string|null $heightFt
	 *
	 * @return EmbWifePhysChar
	 */
	public function setHeightFt( ?string $heightFt ): EmbWifePhysChar {
		$this->heightFt = $heightFt;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHeightIn(): ?string {
		return $this->heightIn;
	}

	/**
	 * @param string|null $heightIn
	 *
	 * @return EmbWifePhysChar
	 */
	public function setHeightIn( ?string $heightIn ): EmbWifePhysChar {
		$this->heightIn = $heightIn;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getWeightLbs(): ?string {
		return $this->weightLbs;
	}

	/**
	 * @param string|null $weightLbs
	 *
	 * @return EmbWifePhysChar
	 */
	public function setWeightLbs( ?string $weightLbs ): EmbWifePhysChar {
		$this->weightLbs = $weightLbs;

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
	 * @return EmbWifePhysChar
	 */
	public function setEmbapplication( ?int $embapplication ): EmbWifePhysChar {
		$this->embapplication = $embapplication;

		return $this;
	}


}
