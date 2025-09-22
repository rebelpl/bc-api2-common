<?php
namespace Rebel\BCApi2\Entity\Currency;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
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

    function getSymbol(): ?string
    {
        return $this->get('symbol');
    }

    function setSymbol(?string $value): self
    {
        $this->set('symbol', $value);
        return $this;
    }

    function getAmountDecimalPlaces(): ?string
    {
        return $this->get('amountDecimalPlaces');
    }

    function setAmountDecimalPlaces(?string $value): self
    {
        $this->set('amountDecimalPlaces', $value);
        return $this;
    }

    function getAmountRoundingPrecision(): ?float
    {
        return $this->get('amountRoundingPrecision');
    }

    function setAmountRoundingPrecision(?float $value): self
    {
        $this->set('amountRoundingPrecision', $value);
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
