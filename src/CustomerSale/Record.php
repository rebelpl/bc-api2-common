<?php
namespace Rebel\BCApi2\Entity\CustomerSale;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
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

    public ?Carbon $dateFilter_FilterOnly {
        get => $this->getAsDateTime('dateFilter_FilterOnly');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
        ];
    }
}
