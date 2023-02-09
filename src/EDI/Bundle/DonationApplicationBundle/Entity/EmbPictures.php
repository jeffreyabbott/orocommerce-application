<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbPicture;


class EmbPictures {
	protected $emb_pictures;

	public function __construct() {
		$this->emb_pictures = new ArrayCollection();
	}

	/**
	 * @return ArrayCollection
	 */
	public function getEmbPictures(): ArrayCollection {
		return $this->emb_pictures;
	}

	/**
	 * @param ArrayCollection $emb_pictures
	 *
	 * @return EmbPictures
	 */
	public function setEmbPictures( ArrayCollection $emb_pictures ): EmbPictures {
		$this->emb_pictures = $emb_pictures;

		return $this;
	}


}