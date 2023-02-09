<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendStipulationType;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;

/**
 * StipulationType
 *
 * @ORM\Table(name="emb_stipulation_type")
 * @ORM\Entity
 * @Config()
 */
class StipulationType extends ExtendStipulationType
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

	/**
	 * @return int
	 */
	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return StipulationType
	 */
	public function setId( ?int $id ): StipulationType {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): ?string {
		return $this->description;
	}

	/**
	 * @param string $description
	 *
	 * @return StipulationType
	 */
	public function setDescription( ?string $description ): ?StipulationType {
		$this->description = $description;

		return $this;
	}



}
