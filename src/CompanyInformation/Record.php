<?php
namespace Rebel\BCApi2\Entity\CompanyInformation;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getAddressLine1(): ?string
    {
        return $this->get(Properties::addressLine1->name);
    }

    public function setAddressLine1(?string $value): self
    {
        $this->set(Properties::addressLine1->name, $value);
        return $this;
    }

    public function getAddressLine2(): ?string
    {
        return $this->get(Properties::addressLine2->name);
    }

    public function setAddressLine2(?string $value): self
    {
        $this->set(Properties::addressLine2->name, $value);
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->get(Properties::city->name);
    }

    public function setCity(?string $value): self
    {
        $this->set(Properties::city->name, $value);
        return $this;
    }

    public function getState(): ?string
    {
        return $this->get(Properties::state->name);
    }

    public function setState(?string $value): self
    {
        $this->set(Properties::state->name, $value);
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->get(Properties::country->name);
    }

    public function setCountry(?string $value): self
    {
        $this->set(Properties::country->name, $value);
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->get(Properties::postalCode->name);
    }

    public function setPostalCode(?string $value): self
    {
        $this->set(Properties::postalCode->name, $value);
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->get(Properties::phoneNumber->name);
    }

    public function setPhoneNumber(?string $value): self
    {
        $this->set(Properties::phoneNumber->name, $value);
        return $this;
    }

    public function getFaxNumber(): ?string
    {
        return $this->get(Properties::faxNumber->name);
    }

    public function setFaxNumber(?string $value): self
    {
        $this->set(Properties::faxNumber->name, $value);
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->get(Properties::email->name);
    }

    public function setEmail(?string $value): self
    {
        $this->set(Properties::email->name, $value);
        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->get(Properties::website->name);
    }

    public function setWebsite(?string $value): self
    {
        $this->set(Properties::website->name, $value);
        return $this;
    }

    public function getTaxRegistrationNumber(): ?string
    {
        return $this->get(Properties::taxRegistrationNumber->name);
    }

    public function setTaxRegistrationNumber(?string $value): self
    {
        $this->set(Properties::taxRegistrationNumber->name, $value);
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set(Properties::currencyCode->name, $value);
        return $this;
    }

    public function getCurrentFiscalYearStartDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::currentFiscalYearStartDate->name);
    }

    public function setCurrentFiscalYearStartDate(?\DateTime $value): self
    {
        $this->set(Properties::currentFiscalYearStartDate->name, $value);
        return $this;
    }

    public function getIndustry(): ?string
    {
        return $this->get(Properties::industry->name);
    }

    public function setIndustry(?string $value): self
    {
        $this->set(Properties::industry->name, $value);
        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->get(Properties::picture->name);
    }

    public function setPicture(?string $value): self
    {
        $this->set(Properties::picture->name, $value);
        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->get(Properties::experience->name);
    }

    public function setExperience(?string $value): self
    {
        $this->set(Properties::experience->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }
}