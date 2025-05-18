<?php
namespace Microsoft\NAV\Currency;

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

    public function getSymbol(): ?string
    {
        return $this->get(Properties::symbol->name);
    }

    public function setSymbol(?string $value): self
    {
        $this->set(Properties::symbol->name, $value);
        return $this;
    }

    public function getAmountDecimalPlaces(): ?string
    {
        return $this->get(Properties::amountDecimalPlaces->name);
    }

    public function setAmountDecimalPlaces(?string $value): self
    {
        $this->set(Properties::amountDecimalPlaces->name, $value);
        return $this;
    }

    public function getAmountRoundingPrecision(): ?float
    {
        return $this->get(Properties::amountRoundingPrecision->name);
    }

    public function setAmountRoundingPrecision(?float $value): self
    {
        $this->set(Properties::amountRoundingPrecision->name, $value);
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