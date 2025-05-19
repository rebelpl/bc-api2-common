<?php
namespace Rebel\BCApi2\Entity\BankAccount;

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

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function setNumber(?string $value): self
    {
        $this->set(Properties::number->name, $value);
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

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getBankAccountNumber(): ?string
    {
        return $this->get(Properties::bankAccountNumber->name);
    }

    public function setBankAccountNumber(?string $value): self
    {
        $this->set(Properties::bankAccountNumber->name, $value);
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

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set(Properties::currencyCode->name, $value);
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->get(Properties::currencyId->name);
    }

    public function setCurrencyId(?string $value): self
    {
        $this->set(Properties::currencyId->name, $value);
        return $this;
    }

    public function getIban(): ?string
    {
        return $this->get(Properties::iban->name);
    }

    public function setIban(?string $value): self
    {
        $this->set(Properties::iban->name, $value);
        return $this;
    }

    public function isIntercompanyEnabled(): ?bool
    {
        return $this->get(Properties::intercompanyEnabled->name);
    }

    public function setIntercompanyEnabled(?bool $value): self
    {
        $this->set(Properties::intercompanyEnabled->name, $value);
        return $this;
    }
}