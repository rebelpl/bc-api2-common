<?php
namespace Rebel\BCApi2\Entity\CurrencyExchangeRate;

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

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function getStartingDate(): ?Carbon
    {
        return $this->getAsDate('startingDate');
    }

    public function getExchangeRateAmount(): ?float
    {
        return $this->get('exchangeRateAmount');
    }

    public function getRelationalCurrencyCode(): ?string
    {
        return $this->get('relationalCurrencyCode');
    }

    public function getRelationalExchangeRateAmount(): ?float
    {
        return $this->get('relationalExchangeRateAmount');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
