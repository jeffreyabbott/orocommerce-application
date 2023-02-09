<?php


namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
 *
 * @ORM\Table(name="product")
 *
 */
class Product {
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToMany(targetEntity="Feature", mappedBy="product")
	 **/
	private $features;


	public function __construct() {
		$this->features = new ArrayCollection();
	}

	public function getId() {
		return $this->id;
	}

	public function addFeature( Feature $feature ) {
		return $this->features[] = $feature;
	}

	public function getFeatures() {
		return $this->features;
	}

}