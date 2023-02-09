<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbFavorite;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;

/**
 * EmbFavorite
 *
 * @ORM\Table(name="emb_favorite")
 * @ORM\Entity
 * @Config()
 */
class EmbFavorite extends ExtendEmbFavorite
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
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * ORM\Column(name="application_id", type="integer", nullable=false, options={"unsigned"=true})
     * ORM\ManyToOne(targetEntity="EmbApplication")
     * ORM\JoinColumn(name="application_Id", referencedColumnName="id")
     */
    private $applicationId;

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbFavorite
	 */
	public function setId( int $id ): EmbFavorite {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getUserId(): int {
		return $this->userId;
	}

	/**
	 * @param int $userId
	 *
	 * @return EmbFavorite
	 */
	public function setUserId( int $userId ): EmbFavorite {
		$this->userId = $userId;

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
	 * @return EmbFavorite
	 */
	public function setApplicationId( int $applicationId ): EmbFavorite {
		$this->applicationId = $applicationId;

		return $this;
	}


}
