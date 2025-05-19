<?php
namespace Rebel\BCApi2\Entity\AccountingPeriod;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getStartingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::startingDate->name);
    }

    public function getName(): ?string
    {
        return $this->get(Properties::name->name);
    }

    public function isNewFiscalYear(): ?bool
    {
        return $this->get(Properties::newFiscalYear->name);
    }

    public function isClosed(): ?bool
    {
        return $this->get(Properties::closed->name);
    }

    public function isDateLocked(): ?bool
    {
        return $this->get(Properties::dateLocked->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }
}