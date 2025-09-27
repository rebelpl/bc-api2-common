<?php
namespace Rebel\BCApi2\Entity\CustomerFinancialDetail;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        get => $this->get('number');
    }

    public ?float $balance {
        get => $this->get('balance');
    }

    public ?float $totalSalesExcludingTax {
        get => $this->get('totalSalesExcludingTax');
    }

    public ?float $overdueAmount {
        get => $this->get('overdueAmount');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Customer\Record $customer {
        get => $this->getAsRelation('customer');
    }

    protected array $classMap = ['customer' => Customer\Record::class];
}
