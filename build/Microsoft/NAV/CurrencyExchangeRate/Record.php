<?php
namespace Microsoft\NAV\CurrencyExchangeRate;

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

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set(Properties::currencyCode->name, $value);
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

    public function getExchangeRateAmount(): ?float
    {
        return $this->get(Properties::exchangeRateAmount->name);
    }

    public function setExchangeRateAmount(?float $value): self
    {
        $this->set(Properties::exchangeRateAmount->name, $value);
        return $this;
    }

    public function getRelationalCurrencyCode(): ?string
    {
        return $this->get(Properties::relationalCurrencyCode->name);
    }

    public function setRelationalCurrencyCode(?string $value): self
    {
        $this->set(Properties::relationalCurrencyCode->name, $value);
        return $this;
    }

    public function getRelationalExchangeRateAmount(): ?float
    {
        return $this->get(Properties::relationalExchangeRateAmount->name);
    }

    public function setRelationalExchangeRateAmount(?float $value): self
    {
        $this->set(Properties::relationalExchangeRateAmount->name, $value);
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