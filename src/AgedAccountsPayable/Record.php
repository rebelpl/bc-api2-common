<?php
namespace Rebel\BCApi2\Entity\AgedAccountsPayable;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    public ?string $vendorId {
        get => $this->get('vendorId');
    }

    public ?string $vendorNumber {
        get => $this->get('vendorNumber');
    }

    public ?string $name {
        get => $this->get('name');
    }

    public ?string $currencyCode {
        get => $this->get('currencyCode');
    }

    public ?float $balanceDue {
        get => $this->get('balanceDue');
    }

    public ?float $currentAmount {
        get => $this->get('currentAmount');
    }

    public ?float $period1Amount {
        get => $this->get('period1Amount');
    }

    public ?float $period2Amount {
        get => $this->get('period2Amount');
    }

    public ?float $period3Amount {
        get => $this->get('period3Amount');
    }

    public ?Carbon $agedAsOfDate {
        get => $this->getAsDateTime('agedAsOfDate');
    }

    public ?Vendor\Record $vendor {
        get => $this->get('vendor');
    }

    protected array $classMap = ['vendor' => Vendor\Record::class];
}
