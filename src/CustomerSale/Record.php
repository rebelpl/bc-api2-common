<?php
namespace Rebel\BCApi2\Entity\CustomerSale;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'customerId';

    public function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getTotalSalesAmount(): ?float
    {
        return $this->get('totalSalesAmount');
    }
}
