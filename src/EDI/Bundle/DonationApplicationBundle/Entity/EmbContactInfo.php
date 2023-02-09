<?php

namespace EDI\Bundle\DonationApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EDI\Bundle\DonationApplicationBundle\Model\ExtendEmbContactInfo;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbApplication;
use http\Exception\UnexpectedValueException;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;

/**
 * EmbContactInfo
 *
 * @ORM\Table(name="emb_contact_info")
 * @ORM\Entity
 * @Config()
 */
class EmbContactInfo extends ExtendEmbContactInfo
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
	 * One ContactInfo has One Application.
	 * ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embcontactinfo")
	 * ORM\JoinColumn(name="application_id", referencedColumnName="id")
	 */

	private $applicationId;


	/**
     * @var int|null
     *
     * ORM\Column(name="application_id", type="integer", nullable=true)
     * One ContactInfo has One Application.
     * @ORM\OneToOne(targetEntity="EmbApplication", inversedBy="embcontactinfo")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */

    private $embapplication;

	/**
	 * Returns the EmbApplication.
	 *
	 * @return EmbApplication
	 */
	public function getEmbApplication()
	{
		return $this->embapplication;
	}

	/**
	 * Sets the EmbApplication.
	 *
	 * @param EmbApplication $embapplication
	 */
	public function setEmbApplication(EmbApplication $embapplication)
	{
		$this->embapplication = $embapplication;
	}



    /**
     * @var string|null
     *
     * @ORM\Column(name="full_name", type="string", length=100, nullable=true)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_full_name", type="string", length=100, nullable=false)
     */
    private $partnerFullName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=200, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=200, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=200, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="home_phone", type="string", length=200, nullable=true)
     */
    private $homePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="home_phone_contact", type="string", length=3, nullable=true)
     */
    private $homePhoneContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="business_phone", type="string", length=200, nullable=true)
     */
    private $businessPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="business_phone_contact", type="string", length=3, nullable=true)
     */
    private $businessPhoneContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cell_phone", type="string", length=200, nullable=true)
     */
    private $cellPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cell_phone_contact", type="string", length=3, nullable=true)
     */
    private $cellPhoneContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pager", type="string", length=200, nullable=true)
     */
    private $pager;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pager_contact", type="string", length=3, nullable=true)
     */
    private $pagerContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_contact", type="string", length=3, nullable=true)
     */
    private $emailContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_security", type="string", length=200, nullable=true)
     */
    private $socialSecurity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="how_i_heard", type="string", length=255, nullable=true)
     */
    private $howIHeard;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false, options={"default"="United states"})
     */
    private $country = 'United states';

	/**
	 * @return int
	 */
	public function getId(): ?int {
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return EmbContactInfo
	 */
	public function setId( int $id ): EmbContactInfo {
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
	 * @return EmbContactInfo
	 */
	public function setApplicationId( ?int $applicationId ): EmbContactInfo {
		$this->applicationId = $applicationId;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getFullName(): ?string {
		return $this->fullName;
	}

	/**
	 * @param string|null $fullName
	 *
	 * @return EmbContactInfo
	 */
	public function setFullName( ?string $fullName ): EmbContactInfo {
		$this->fullName = $fullName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPartnerFullName(): ?string {
		return $this->partnerFullName;
	}

	/**
	 * @param string $partnerFullName
	 *
	 * @return EmbContactInfo
	 */
	public function setPartnerFullName( string $partnerFullName ): EmbContactInfo {
		$this->partnerFullName = $partnerFullName;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getAddress(): ?string {
		return $this->address;
	}

	/**
	 * @param string|null $address
	 *
	 * @return EmbContactInfo
	 */
	public function setAddress( ?string $address ): EmbContactInfo {
		$this->address = $address;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCity(): ?string {
		return $this->city;
	}

	/**
	 * @param string|null $city
	 *
	 * @return EmbContactInfo
	 */
	public function setCity( ?string $city ): EmbContactInfo {
		$this->city = $city;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getState(): ?string {
		return $this->state;
	}

	/**
	 * @param string|null $state
	 *
	 * @return EmbContactInfo
	 */
	public function setState( ?string $state ): EmbContactInfo {
		$this->state = $state;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getZip(): ?string {
		return $this->zip;
	}

	/**
	 * @param string|null $zip
	 *
	 * @return EmbContactInfo
	 */
	public function setZip( ?string $zip ): EmbContactInfo {
		$this->zip = $zip;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHomePhone(): ?string {
		return $this->homePhone;
	}

	/**
	 * @param string|null $homePhone
	 *
	 * @return EmbContactInfo
	 */
	public function setHomePhone( ?string $homePhone ): EmbContactInfo {
		$this->homePhone = $homePhone;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHomePhoneContact(): ?string {
		return $this->homePhoneContact;
	}

	/**
	 * @param string|null $homePhoneContact
	 *
	 * @return EmbContactInfo
	 */
	public function setHomePhoneContact( ?string $homePhoneContact ): EmbContactInfo {
		$this->homePhoneContact = $homePhoneContact;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBusinessPhone(): ?string {
		return $this->businessPhone;
	}

	/**
	 * @param string|null $businessPhone
	 *
	 * @return EmbContactInfo
	 */
	public function setBusinessPhone( ?string $businessPhone ): EmbContactInfo {
		$this->businessPhone = $businessPhone;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getBusinessPhoneContact(): ?string {
		return $this->businessPhoneContact;
	}

	/**
	 * @param string|null $businessPhoneContact
	 *
	 * @return EmbContactInfo
	 */
	public function setBusinessPhoneContact( ?string $businessPhoneContact ): EmbContactInfo {
		$this->businessPhoneContact = $businessPhoneContact;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCellPhone(): ?string {
		return $this->cellPhone;
	}

	/**
	 * @param string|null $cellPhone
	 *
	 * @return EmbContactInfo
	 */
	public function setCellPhone( ?string $cellPhone ): EmbContactInfo {
		$this->cellPhone = $cellPhone;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getCellPhoneContact(): ?string {
		return $this->cellPhoneContact;
	}

	/**
	 * @param string|null $cellPhoneContact
	 *
	 * @return EmbContactInfo
	 */
	public function setCellPhoneContact( ?string $cellPhoneContact ): EmbContactInfo {
		$this->cellPhoneContact = $cellPhoneContact;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPager(): ?string {
		return $this->pager;
	}

	/**
	 * @param string|null $pager
	 *
	 * @return EmbContactInfo
	 */
	public function setPager( ?string $pager ): EmbContactInfo {
		$this->pager = $pager;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getPagerContact(): ?string {
		return $this->pagerContact;
	}

	/**
	 * @param string|null $pagerContact
	 *
	 * @return EmbContactInfo
	 */
	public function setPagerContact( ?string $pagerContact ): EmbContactInfo {
		$this->pagerContact = $pagerContact;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string {
		return $this->email;
	}

	/**
	 * @param string|null $email
	 *
	 * @return EmbContactInfo
	 */
	public function setEmail( ?string $email ): EmbContactInfo {
		$this->email = $email;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmailContact(): ?string {
		return $this->emailContact;
	}

	/**
	 * @param string|null $emailContact
	 *
	 * @return EmbContactInfo
	 */
	public function setEmailContact( ?string $emailContact ): EmbContactInfo {
		$this->emailContact = $emailContact;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getSocialSecurity(): ?string {
		return $this->socialSecurity;
	}

	/**
	 * @param string|null $socialSecurity
	 *
	 * @return EmbContactInfo
	 */
	public function setSocialSecurity( ?string $socialSecurity ): EmbContactInfo {
		$this->socialSecurity = $socialSecurity;

		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getHowIHeard(): ?string {
		return $this->howIHeard;
	}

	/**
	 * @param string|null $howIHeard
	 *
	 * @return EmbContactInfo
	 */
	public function setHowIHeard( ?string $howIHeard ): EmbContactInfo {
		$this->howIHeard = $howIHeard;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry(): string {
		return $this->country;
	}

	/**
	 * @param string $country
	 *
	 * @return EmbContactInfo
	 */
	public function setCountry( string $country ): EmbContactInfo {
		$this->country = $country;

		return $this;
	}

}
