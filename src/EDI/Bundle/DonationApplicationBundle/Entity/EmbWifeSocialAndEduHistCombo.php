<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeEduHistory;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbWifeSocialHistory;

class EmbWifeSocialAndEduHistCombo {
	protected $emb_social_history;
	protected $emb_edu_history;

	public function __construct() {
		$this->emb_edu_history = new ArrayCollection();
		$this->emb_social_history = new ArrayCollection();
	}

	/**
	 * @return ArrayCollection
	 */
	public function getEmbSocialHistory(): ArrayCollection {
		return $this->emb_social_history;
	}

	/**
	 * @param ArrayCollection $emb_social_history
	 *
	 * @return EmbWifeSocialAndEduHistCombo
	 */
	public function setEmbSocialHistory( ArrayCollection $emb_social_history ): EmbWifeSocialAndEduHistCombo {
		$this->emb_social_history = $emb_social_history;

		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getEmbEduHistory(): ArrayCollection {
		return $this->emb_edu_history;
	}

	/**
	 * @param ArrayCollection $emb_edu_history
	 *
	 * @return EmbWifeSocialAndEduHistCombo
	 */
	public function setEmbEduHistory( ArrayCollection $emb_edu_history ): EmbWifeSocialAndEduHistCombo {
		$this->emb_edu_history = $emb_edu_history;

		return $this;
	}
}