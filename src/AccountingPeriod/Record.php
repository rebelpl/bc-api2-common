<?php
namespace Rebel\BCApi2\Entity\AccountingPeriod;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?Carbon $startingDate {
        get => $this->getAsDate('startingDate');
    }

    public ?string $name {
        get => $this->get('name');
    }

    public ?bool $newFiscalYear {
        get => $this->get('newFiscalYear');
    }

    public ?bool $closed {
        get => $this->get('closed');
    }

    public ?bool $dateLocked {
        get => $this->get('dateLocked');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
