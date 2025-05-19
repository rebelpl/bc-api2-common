<?php
namespace Rebel\BCApi2\Entity\SalespersonPurchaser;

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

    public function getCode(): ?string
    {
        return $this->get(Properties::code->name);
    }

    public function setCode(?string $value): self
    {
        $this->set(Properties::code->name, $value);
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

    public function getEmail(): ?string
    {
        return $this->get(Properties::email->name);
    }

    public function setEmail(?string $value): self
    {
        $this->set(Properties::email->name, $value);
        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->get(Properties::email2->name);
    }

    public function setEmail2(?string $value): self
    {
        $this->set(Properties::email2->name, $value);
        return $this;
    }

    public function getPhoneNo(): ?string
    {
        return $this->get(Properties::phoneNo->name);
    }

    public function setPhoneNo(?string $value): self
    {
        $this->set(Properties::phoneNo->name, $value);
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->get(Properties::jobTitle->name);
    }

    public function setJobTitle(?string $value): self
    {
        $this->set(Properties::jobTitle->name, $value);
        return $this;
    }

    public function getCommisionPercent(): ?float
    {
        return $this->get(Properties::commisionPercent->name);
    }

    public function setCommisionPercent(?float $value): self
    {
        $this->set(Properties::commisionPercent->name, $value);
        return $this;
    }

    public function isPrivacyBlocked(): ?bool
    {
        return $this->get(Properties::privacyBlocked->name);
    }

    public function setPrivacyBlocked(?bool $value): self
    {
        $this->set(Properties::privacyBlocked->name, $value);
        return $this;
    }

    public function isBlocked(): ?bool
    {
        return $this->get(Properties::blocked->name);
    }

    public function setBlocked(?bool $value): self
    {
        $this->set(Properties::blocked->name, $value);
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