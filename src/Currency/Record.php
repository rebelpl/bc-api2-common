<?php
namespace Rebel\BCApi2\Entity\Currency;

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

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
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

    public function getSymbol(): ?string
    {
        return $this->get('symbol');
    }

    public function setSymbol(?string $value): self
    {
        $this->set('symbol', $value);
        return $this;
    }

    public function getAmountDecimalPlaces(): ?string
    {
        return $this->get('amountDecimalPlaces');
    }

    public function setAmountDecimalPlaces(?string $value): self
    {
        $this->set('amountDecimalPlaces', $value);
        return $this;
    }

    public function getAmountRoundingPrecision(): ?float
    {
        return $this->get('amountRoundingPrecision');
    }

    public function setAmountRoundingPrecision(?float $value): self
    {
        $this->set('amountRoundingPrecision', $value);
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
