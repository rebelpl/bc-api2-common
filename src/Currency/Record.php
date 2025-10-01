<?php
namespace Rebel\BCApi2\Entity\Currency;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        set {
            $this->set('code', $value);
        }
        get => $this->get('code');
    }

    public ?string $displayName {
        set {
            $this->set('displayName', $value);
        }
        get => $this->get('displayName');
    }

    public ?string $symbol {
        set {
            $this->set('symbol', $value);
        }
        get => $this->get('symbol');
    }

    public ?string $amountDecimalPlaces {
        set {
            $this->set('amountDecimalPlaces', $value);
        }
        get => $this->get('amountDecimalPlaces');
    }

    public ?float $amountRoundingPrecision {
        set {
            $this->set('amountRoundingPrecision', $value);
        }
        get => $this->get('amountRoundingPrecision');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
