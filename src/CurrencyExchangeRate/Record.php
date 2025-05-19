<?php
namespace Rebel\BCApi2\Entity\CurrencyExchangeRate;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function getStartingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::startingDate->name);
    }

    public function getExchangeRateAmount(): ?float
    {
        return $this->get(Properties::exchangeRateAmount->name);
    }

    public function getRelationalCurrencyCode(): ?string
    {
        return $this->get(Properties::relationalCurrencyCode->name);
    }

    public function getRelationalExchangeRateAmount(): ?float
    {
        return $this->get(Properties::relationalExchangeRateAmount->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }
}