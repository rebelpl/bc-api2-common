<?php
namespace Rebel\BCApi2\Entity\UnitOfMeasure;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
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

    public ?string $internationalStandardCode {
        set {
            $this->set('internationalStandardCode', $value);
        }
        get => $this->get('internationalStandardCode');
    }

    public ?string $symbol {
        set {
            $this->set('symbol', $value);
        }
        get => $this->get('symbol');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
