<?php
namespace Microsoft\NAV\AccountingPeriod;

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

    public function getStartingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::startingDate->name);
    }

    public function setStartingDate(?\DateTime $value): self
    {
        $this->set(Properties::startingDate->name, $value);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->get(Properties::name->name);
    }

    public function setName(?string $value): self
    {
        $this->set(Properties::name->name, $value);
        return $this;
    }

    public function isNewFiscalYear(): ?bool
    {
        return $this->get(Properties::newFiscalYear->name);
    }

    public function setNewFiscalYear(?bool $value): self
    {
        $this->set(Properties::newFiscalYear->name, $value);
        return $this;
    }

    public function isClosed(): ?bool
    {
        return $this->get(Properties::closed->name);
    }

    public function setClosed(?bool $value): self
    {
        $this->set(Properties::closed->name, $value);
        return $this;
    }

    public function isDateLocked(): ?bool
    {
        return $this->get(Properties::dateLocked->name);
    }

    public function setDateLocked(?bool $value): self
    {
        $this->set(Properties::dateLocked->name, $value);
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