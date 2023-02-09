<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbQuality;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbQuality
 *
 * @ORM\Table(name="emb_quality")
 * @ORM\Entity
 * @Config()
 */
class EmbQuality extends ExtendEmbQuality
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
     * ORM\Column(name="application_id", type="integer", nullable=false, options={"unsigned"=true})
     * ORM\ManyToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_Id", referencedColumnName="id")
     */
    private $applicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="string", length=255, nullable=false)
     */
    private $origin;

    /**
     * @var bool
     *
     * @ORM\Column(name="num_available", type="boolean", nullable=false)
     */
    private $numAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="cryopreserved_on_day", type="string", length=15, nullable=false)
     */
    private $cryopreservedOnDay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_creation", type="date", nullable=false)
     */
    private $dateOfCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="overall_quality", type="string", length=255, nullable=false)
     */
    private $overallQuality;

    /**
     * @var string
     *
     * @ORM\Column(name="fresh_transfer_rate", type="string", length=100, nullable=false)
     */
    private $freshTransferRate;

    /**
     * @var string
     *
     * @ORM\Column(name="frozen_transfer_rate", type="string", length=100, nullable=false)
     */
    private $frozenTransferRate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbQuality
	 */
	public function setId( int $id ): EmbQuality {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getApplicationId(): int {
		return $this->applicationId;
	}

	/**
	 * @param int $applicationId
	 *
	 * @return EmbQuality
	 */
	public function setApplicationId( int $applicationId ): EmbQuality {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrigin(): string {
		return $this->origin;
	}

	/**
	 * @param string $origin
	 *
	 * @return EmbQuality
	 */
	public function setOrigin( string $origin ): EmbQuality {
		$this->origin = $origin;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNumAvailable(): bool {
		return $this->numAvailable;
	}

	/**
	 * @param bool $numAvailable
	 *
	 * @return EmbQuality
	 */
	public function setNumAvailable( bool $numAvailable ): EmbQuality {
		$this->numAvailable = $numAvailable;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCryopreservedOnDay(): string {
		return $this->cryopreservedOnDay;
	}

	/**
	 * @param string $cryopreservedOnDay
	 *
	 * @return EmbQuality
	 */
	public function setCryopreservedOnDay( string $cryopreservedOnDay ): EmbQuality {
		$this->cryopreservedOnDay = $cryopreservedOnDay;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateOfCreation(): \DateTime {
		return $this->dateOfCreation;
	}

	/**
	 * @param \DateTime $dateOfCreation
	 *
	 * @return EmbQuality
	 */
	public function setDateOfCreation( \DateTime $dateOfCreation ): EmbQuality {
		$this->dateOfCreation = $dateOfCreation;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOverallQuality(): string {
		return $this->overallQuality;
	}

	/**
	 * @param string $overallQuality
	 *
	 * @return EmbQuality
	 */
	public function setOverallQuality( string $overallQuality ): EmbQuality {
		$this->overallQuality = $overallQuality;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFreshTransferRate(): string {
		return $this->freshTransferRate;
	}

	/**
	 * @param string $freshTransferRate
	 *
	 * @return EmbQuality
	 */
	public function setFreshTransferRate( string $freshTransferRate ): EmbQuality {
		$this->freshTransferRate = $freshTransferRate;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFrozenTransferRate(): string {
		return $this->frozenTransferRate;
	}

	/**
	 * @param string $frozenTransferRate
	 *
	 * @return EmbQuality
	 */
	public function setFrozenTransferRate( string $frozenTransferRate ): EmbQuality {
		$this->frozenTransferRate = $frozenTransferRate;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getComments(): ?string {
		return $this->comments;
	}

	/**
	 * @param string|null $comments
	 *
	 * @return EmbQuality
	 */
	public function setComments( ?string $comments ): EmbQuality {
		$this->comments = $comments;

		return $this;
	}


}
