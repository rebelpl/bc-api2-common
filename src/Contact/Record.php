<?php
namespace Rebel\BCApi2\Entity\Contact;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Picture;

class Record extends Entity
{
    protected $classMap = ['contactInformation' => ContactInformation\Record::class, 'picture' => Picture\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    function getType(): ?string
    {
        return $this->get('type');
    }

    function setType(?string $value): self
    {
        $this->set('type', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getJobTitle(): ?string
    {
        return $this->get('jobTitle');
    }

    function setJobTitle(?string $value): self
    {
        $this->set('jobTitle', $value);
        return $this;
    }

    function getCompanyNumber(): ?string
    {
        return $this->get('companyNumber');
    }

    function setCompanyNumber(?string $value): self
    {
        $this->set('companyNumber', $value);
        return $this;
    }

    function getCompanyName(): ?string
    {
        return $this->get('companyName');
    }

    function setCompanyName(?string $value): self
    {
        $this->set('companyName', $value);
        return $this;
    }

    function getContactBusinessRelation(): ?string
    {
        return $this->get('contactBusinessRelation');
    }

    function setContactBusinessRelation(?string $value): self
    {
        $this->set('contactBusinessRelation', $value);
        return $this;
    }

    function getAddressLine1(): ?string
    {
        return $this->get('addressLine1');
    }

    function setAddressLine1(?string $value): self
    {
        $this->set('addressLine1', $value);
        return $this;
    }

    function getAddressLine2(): ?string
    {
        return $this->get('addressLine2');
    }

    function setAddressLine2(?string $value): self
    {
        $this->set('addressLine2', $value);
        return $this;
    }

    function getCity(): ?string
    {
        return $this->get('city');
    }

    function setCity(?string $value): self
    {
        $this->set('city', $value);
        return $this;
    }

    function getState(): ?string
    {
        return $this->get('state');
    }

    function setState(?string $value): self
    {
        $this->set('state', $value);
        return $this;
    }

    function getCountry(): ?string
    {
        return $this->get('country');
    }

    function setCountry(?string $value): self
    {
        $this->set('country', $value);
        return $this;
    }

    function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    function setPostalCode(?string $value): self
    {
        $this->set('postalCode', $value);
        return $this;
    }

    function getPhoneNumber(): ?string
    {
        return $this->get('phoneNumber');
    }

    function setPhoneNumber(?string $value): self
    {
        $this->set('phoneNumber', $value);
        return $this;
    }

    function getMobilePhoneNumber(): ?string
    {
        return $this->get('mobilePhoneNumber');
    }

    function setMobilePhoneNumber(?string $value): self
    {
        $this->set('mobilePhoneNumber', $value);
        return $this;
    }

    function getEmail(): ?string
    {
        return $this->get('email');
    }

    function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    function getWebsite(): ?string
    {
        return $this->get('website');
    }

    function setWebsite(?string $value): self
    {
        $this->set('website', $value);
        return $this;
    }

    function getSearchName(): ?string
    {
        return $this->get('searchName');
    }

    function setSearchName(?string $value): self
    {
        $this->set('searchName', $value);
        return $this;
    }

    function getPrivacyBlocked(): ?bool
    {
        return $this->get('privacyBlocked');
    }

    function setPrivacyBlocked(?bool $value): self
    {
        $this->set('privacyBlocked', $value);
        return $this;
    }

    function getTaxRegistrationNumber(): ?string
    {
        return $this->get('taxRegistrationNumber');
    }

    function setTaxRegistrationNumber(?string $value): self
    {
        $this->set('taxRegistrationNumber', $value);
        return $this;
    }

    function getLastInteractionDate(): ?Carbon
    {
        return $this->getAsDate('lastInteractionDate');
    }

    function setLastInteractionDate(?\DateTime $value): self
    {
        $this->setAsDate('lastInteractionDate', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getContactInformation(): ?ContactInformation\Record
    {
        return $this->get('contactInformation');
    }

    function getPicture(): ?Picture\Record
    {
        return $this->get('picture');
    }
}
