<?php
namespace Rebel\BCApi2\Entity\CustomerSale;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    function getName(): ?string
    {
        return $this->get('name');
    }

    function getTotalSalesAmount(): ?float
    {
        return $this->get('totalSalesAmount');
    }
}
