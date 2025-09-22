<?php
namespace Rebel\BCApi2\Entity\CurrencyExchangeRate;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function getStartingDate(): ?Carbon
    {
        return $this->getAsDate('startingDate');
    }

    function getExchangeRateAmount(): ?float
    {
        return $this->get('exchangeRateAmount');
    }

    function getRelationalCurrencyCode(): ?string
    {
        return $this->get('relationalCurrencyCode');
    }

    function getRelationalExchangeRateAmount(): ?float
    {
        return $this->get('relationalExchangeRateAmount');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
