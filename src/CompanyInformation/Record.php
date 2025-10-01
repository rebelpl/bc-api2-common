<?php
namespace Rebel\BCApi2\Entity\CompanyInformation;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'id';

    public function getId(): ?string
    {
        return $this->get('id');
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

    public function getFaxNumber(): ?string
    {
        return $this->get('faxNumber');
    }

    public function setFaxNumber(?string $value): self
    {
        $this->set('faxNumber', $value);
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

    public function getTaxRegistrationNumber(): ?string
    {
        return $this->get('taxRegistrationNumber');
    }

    public function setTaxRegistrationNumber(?string $value): self
    {
        $this->set('taxRegistrationNumber', $value);
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    public function getCurrentFiscalYearStartDate(): ?Carbon
    {
        return $this->getAsDate('currentFiscalYearStartDate');
    }

    public function setCurrentFiscalYearStartDate(?\DateTime $value): self
    {
        $this->setAsDate('currentFiscalYearStartDate', $value);
        return $this;
    }

    public function getIndustry(): ?string
    {
        return $this->get('industry');
    }

    public function setIndustry(?string $value): self
    {
        $this->set('industry', $value);
        return $this;
    }

    public function getPicture(): Entity\DataStream
    {
        return $this->get('picture');
    }

    public function getExperience(): ?string
    {
        return $this->get('experience');
    }

    public function setExperience(?string $value): self
    {
        $this->set('experience', $value);
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
}
