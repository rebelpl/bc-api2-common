<?php
namespace Rebel\BCApi2\Entity\CurrencyExchangeRate;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $currencyCode {
        get => $this->get('currencyCode');
    }

    public ?Carbon $startingDate {
        get => $this->getAsDateTime('startingDate');
    }

    public ?float $exchangeRateAmount {
        get => $this->get('exchangeRateAmount');
    }

    public ?string $relationalCurrencyCode {
        get => $this->get('relationalCurrencyCode');
    }

    public ?float $relationalExchangeRateAmount {
        get => $this->get('relationalExchangeRateAmount');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
