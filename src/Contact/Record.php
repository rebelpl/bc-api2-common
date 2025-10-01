<?php
namespace Rebel\BCApi2\Entity\Contact;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Picture;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['contactInformation' => ContactInformation\Record::class, 'picture' => Picture\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function setType(?string $value): self
    {
        $this->set('type', $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->get('jobTitle');
    }

    public function setJobTitle(?string $value): self
    {
        $this->set('jobTitle', $value);
        return $this;
    }

    public function getCompanyNumber(): ?string
    {
        return $this->get('companyNumber');
    }

    public function setCompanyNumber(?string $value): self
    {
        $this->set('companyNumber', $value);
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->get('companyName');
    }

    public function setCompanyName(?string $value): self
    {
        $this->set('companyName', $value);
        return $this;
    }

    public function getContactBusinessRelation(): ?string
    {
        return $this->get('contactBusinessRelation');
    }

    public function setContactBusinessRelation(?string $value): self
    {
        $this->set('contactBusinessRelation', $value);
        return $this;
    }

    public function getAddressLine1(): ?string
    {
        return $this->get('addressLine1');
    }

    public function setAddressLine1(?string $value): self
    {
        $this->set('addressLine1', $value);
        return $this;
    }

    public function getAddressLine2(): ?string
    {
        return $this->get('addressLine2');
    }

    public function setAddressLine2(?string $value): self
    {
        $this->set('addressLine2', $value);
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function setCity(?string $value): self
    {
        $this->set('city', $value);
        return $this;
    }

    public function getState(): ?string
    {
        return $this->get('state');
    }

    public function setState(?string $value): self
    {
        $this->set('state', $value);
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->get('country');
    }

    public function setCountry(?string $value): self
    {
        $this->set('country', $value);
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    public function setPostalCode(?string $value): self
    {
        $this->set('postalCode', $value);
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->get('phoneNumber');
    }

    public function setPhoneNumber(?string $value): self
    {
        $this->set('phoneNumber', $value);
        return $this;
    }

    public function getMobilePhoneNumber(): ?string
    {
        return $this->get('mobilePhoneNumber');
    }

    public function setMobilePhoneNumber(?string $value): self
    {
        $this->set('mobilePhoneNumber', $value);
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->get('website');
    }

    public function setWebsite(?string $value): self
    {
        $this->set('website', $value);
        return $this;
    }

    public function getSearchName(): ?string
    {
        return $this->get('searchName');
    }

    public function setSearchName(?string $value): self
    {
        $this->set('searchName', $value);
        return $this;
    }

    public function getPrivacyBlocked(): ?bool
    {
        return $this->get('privacyBlocked');
    }

    public function setPrivacyBlocked(?bool $value): self
    {
        $this->set('privacyBlocked', $value);
        return $this;
    }

    public function getTaxRegistrationNumber(): ?string
    {
        return $this->get('taxRegistrationNumber');
    }

    public function setTaxRegistrationNumber(?string $value): self
    {
        $this->set('taxRegistrationNumber', $value);
        return $this;
    }

    public function getLastInteractionDate(): ?Carbon
    {
        return $this->getAsDate('lastInteractionDate');
    }

    public function setLastInteractionDate(?\DateTime $value): self
    {
        $this->setAsDate('lastInteractionDate', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getContactInformation(): ?ContactInformation\Record
    {
        return $this->getAsRelation('contactInformation');
    }

    public function getPicture(): ?Picture\Record
    {
        return $this->getAsRelation('picture');
    }
}
