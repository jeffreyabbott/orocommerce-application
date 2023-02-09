<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbPicture;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;


/**
 * EmbPicture
 *
 * @ORM\Table(name="emb_picture")
 * @ORM\Entity(repositoryClass="EDI\Bundle\DonationApplicationBundle\Repository\EmbPicturesRespository")
 * @Config()
 */
class EmbPicture extends ExtendEmbPicture
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
     * @ORM\ManyToOne(targetEntity="EmbApplication", inversedBy="embapplication")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */

    private $embapplication;


	/**
     * @var string
     *
     * @ORM\Column(name="picture_file_name", type="string", length=50, nullable=false)
     */
    private $pictureFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="name_alias", type="string", length=50, nullable=false)
     */
    private $nameAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="include_picture_web_print", type="string", length=3, nullable=false)
     */
    private $includePictureWebPrint;

    /**
     * @var string
     *
     * @ORM\Column(name="include_picture_office", type="string", length=3, nullable=false)
     */
    private $includePictureOffice;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_approved", type="boolean", nullable=false)
     */
    private $isApproved;

	/**
	 * @return int
	 */
	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbPicture
	 */
	public function setId( ?int $id ): EmbPicture {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPictureFileName(): ?string {
		return $this->pictureFileName;
	}

	/**
	 * @param string $pictureFileName
	 *
	 * @return EmbPicture
	 */
	public function setPictureFileName( string $pictureFileName ): EmbPicture {
		$this->pictureFileName = $pictureFileName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getNameAlias(): ?string {
		return $this->nameAlias;
	}

	/**
	 * @param string $nameAlias
	 *
	 * @return EmbPicture
	 */
	public function setNameAlias( string $nameAlias ): EmbPicture {
		$this->nameAlias = $nameAlias;

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
	 * @return EmbPicture
	 */
	public function setDescription( string $description ): EmbPicture {
		$this->description = $description;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIncludePictureWebPrint(): ?string {
		return $this->includePictureWebPrint;
	}

	/**
	 * @param string $includePictureWebPrint
	 *
	 * @return EmbPicture
	 */
	public function setIncludePictureWebPrint( string $includePictureWebPrint ): EmbPicture {
		$this->includePictureWebPrint = $includePictureWebPrint;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getIncludePictureOffice(): ?string {
		return $this->includePictureOffice;
	}

	/**
	 * @param string $includePictureOffice
	 *
	 * @return EmbPicture
	 */
	public function setIncludePictureOffice( string $includePictureOffice ): EmbPicture {
		$this->includePictureOffice = $includePictureOffice;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isActive(): ?bool {
		return $this->isActive;
	}

	/**
	 * @param bool $isActive
	 *
	 * @return EmbPicture
	 */
	public function setIsActive( bool $isActive ): EmbPicture {
		$this->isActive = $isActive;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isApproved(): ?bool {
		return $this->isApproved;
	}

	/**
	 * @param bool $isApproved
	 *
	 * @return EmbPicture
	 */
	public function setIsApproved( bool $isApproved ): EmbPicture {
		$this->isApproved = $isApproved;

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
}
