<?php
namespace Rebel\BCApi2\Entity\AgedAccountsReceivable;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'customerId';

    public ?string $customerId {
        get => $this->get('customerId');
    }

    public ?string $customerNumber {
        get => $this->get('customerNumber');
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

    public ?string $period1Label {
        get => $this->get('period1Label');
    }

    public ?float $period1Amount {
        get => $this->get('period1Amount');
    }

    public ?string $period2Label {
        get => $this->get('period2Label');
    }

    public ?float $period2Amount {
        get => $this->get('period2Amount');
    }

    public ?string $period3Label {
        get => $this->get('period3Label');
    }

    public ?float $period3Amount {
        get => $this->get('period3Amount');
    }

    public ?Carbon $agedAsOfDate {
        get => $this->getAsDate('agedAsOfDate');
    }

    public ?Customer\Record $customer {
        get => $this->getAsRelation('customer');
    }

    protected array $classMap = ['customer' => Customer\Record::class];
}
