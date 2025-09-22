<?php
namespace Rebel\BCApi2\Entity\CompanyInformation;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
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

    function getFaxNumber(): ?string
    {
        return $this->get('faxNumber');
    }

    function setFaxNumber(?string $value): self
    {
        $this->set('faxNumber', $value);
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

    function getTaxRegistrationNumber(): ?string
    {
        return $this->get('taxRegistrationNumber');
    }

    function setTaxRegistrationNumber(?string $value): self
    {
        $this->set('taxRegistrationNumber', $value);
        return $this;
    }

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function setCurrencyCode(?string $value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    function getCurrentFiscalYearStartDate(): ?Carbon
    {
        return $this->getAsDate('currentFiscalYearStartDate');
    }

    function setCurrentFiscalYearStartDate(?\DateTime $value): self
    {
        $this->setAsDate('currentFiscalYearStartDate', $value);
        return $this;
    }

    function getIndustry(): ?string
    {
        return $this->get('industry');
    }

    function setIndustry(?string $value): self
    {
        $this->set('industry', $value);
        return $this;
    }

    function getPicture(): Entity\DataStream
    {
        return $this->get('picture');
    }

    function getExperience(): ?string
    {
        return $this->get('experience');
    }

    function setExperience(?string $value): self
    {
        $this->set('experience', $value);
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
}
