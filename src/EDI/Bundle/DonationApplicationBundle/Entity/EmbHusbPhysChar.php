<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbHusbPhysChar;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbHusbPhysChar
 *
 * @ORM\Table(name="emb_husb_phys_char")
 * @ORM\Entity
 * @Config()
 */
class EmbHusbPhysChar extends ExtendEmbHusbPhysChar
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
     * One EmbHusbPhysChar has One Application.
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
	 * @ORM\OneToOne(targetEntity="EmbApplication", mappedBy="embhusbphychar")
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
	 * @return EmbHusbPhysChar
	 */
	public function setId( int $id ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setApplicationId( ?int $applicationId ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setDateOfBirth( ?\DateTime $dateOfBirth ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setEthnicOrigin( string $ethnicOrigin ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setRace( ?string $race ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setSkinTone( ?string $skinTone ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setBoneStructure( ?string $boneStructure ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setEyeColor( ?string $eyeColor ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setHairColor( ?string $hairColor ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setHairTexture( ?string $hairTexture ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setHairStructure( ?string $hairStructure ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setHeightFt( ?string $heightFt ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setHeightIn( ?string $heightIn ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setWeightLbs( ?string $weightLbs ): EmbHusbPhysChar {
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
	 * @return EmbHusbPhysChar
	 */
	public function setEmbapplication( ?int $embapplication ): EmbHusbPhysChar {
		$this->embapplication = $embapplication;

		return $this;
	}


}
