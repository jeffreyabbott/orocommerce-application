<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbStipulation;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use EDI\Bundle\DonationApplicationBundle\Entity\StipulationType;

/**
 * EmbStipulation
 *
 * @ORM\Table(name="emb_stipulation")
 * @ORM\Entity
 * @Config()
 */
class EmbStipulation extends ExtendEmbStipulation
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
	 * @var EmbApplication|null
	 *
	 * Many Stipulations have One Application.
	 * @ORM\ManyToOne(targetEntity="EmbApplication", inversedBy="stipulations")
	 * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */

	private $embapplication;

    /**
     * @var string
     *
     * @ORM\Column(name="stipulation", type="string", length=250, nullable=false)
     */
    private $stipulation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime_modified", type="datetime", nullable=false)
     */
    private $datetimeModified;
    /*Added the column back in for the stipulationtype because when saving the Application it would overwrite the stipulation type with null Added by JDA on 2021-12-29 */
    /**
     * @var int
     *
     * @ORM\Column(name="stipulation_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $stipulationType;


    /*Removed the relationship because when saving the Application it would overwrite the stipulation type with null REmoved by JDA on 2021-12-29
	/**
     * var StipulationType|null
     * ORM\OneToOne(targetEntity="StipulationType")
	 * ORM\JoinColumn(name="stipulation_type", referencedColumnName="id")
	 */
    /*private $emb_stipulation_type;*/

	/**
	 * @return int
	 */
	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbStipulation
	 */
	public function setId( ?int $id ): EmbStipulation {
		$this->id = $id;

		return $this;
	}

    /**
     * @return \EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication|null
     */
    public function getEmbapplication(): ?\EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication
    {
        return $this->embapplication;
    }

    /**
     * @param \EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication|null $embapplication
     */
    public function setEmbapplication(?\EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication $embapplication): void
    {
        $this->embapplication = $embapplication;
    }


	/**
	 * @return \DateTime
	 */
	public function getDatetimeModified(): ?\DateTime {
		return $this->datetimeModified;
	}

	/**
	 * @param \DateTime $datetimeModified
	 *
	 * @return EmbStipulation
	 */
	public function setDatetimeModified( ?\DateTime $datetimeModified ): EmbStipulation {
		$this->datetimeModified = $datetimeModified;

		return $this;
	}


    /**
     * @return string
     */
    public function getStipulation(): ?string
    {
        return $this->stipulation;
    }

    /**
     * @param string $stipulation
     */
    public function setStipulation(string $stipulation): void
    {
        $this->stipulation = $stipulation;
    }

    /**
     * @return int
     */
    public function getStipulationType(): ?int
    {
        return $this->stipulationType;
    }

    /**
     * @param int $stipulationType
     */
    public function setStipulationType(?int $stipulationType): void
    {
        $this->stipulationType = $stipulationType;
    }

    /**
     * return \EDI\Bundle\DonationApplicationBundle\Entity\StipulationType|null
     */
    /*Removed the relationship because when saving the Application it would overwrite the stipulation type with null REmoved by JDA on 2021-12-29
    /*
    public function getEmbStipulationType(): ?\EDI\Bundle\DonationApplicationBundle\Entity\StipulationType
    {
        return $this->emb_stipulation_type;
    }
*/
    /**
     * param \EDI\Bundle\DonationApplicationBundle\Entity\StipulationType|null $emb_stipulation_type
     */
    /*Removed the relationship because when saving the Application it would overwrite the stipulation type with null REmoved by JDA on 2021-12-29
/*    public function setEmbStipulationType(?\EDI\Bundle\DonationApplicationBundle\Entity\StipulationType $emb_stipulation_type): void
    {
        $this->emb_stipulation_type = $emb_stipulation_type;
    }
*/

}
