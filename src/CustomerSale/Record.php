<?php
namespace Rebel\BCApi2\Entity\CustomerSale;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
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

    public ?float $totalSalesAmount {
        get => $this->get('totalSalesAmount');
    }
}
