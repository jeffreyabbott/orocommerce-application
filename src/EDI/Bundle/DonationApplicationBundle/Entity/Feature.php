<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/** @ORM\Entity
 *
 * @ORM\Table(name="feature")
 *
 */
class Feature {
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Product", inversedBy="features")
	 * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
	 **/
	private $product;

	public function getId() {
		return $this->id;
	}

	public function getProduct() {
		return $this->product;
	}

	public function setProduct( $product ) {
		$this->product = $product;
	}

}