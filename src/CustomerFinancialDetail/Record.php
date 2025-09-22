<?php
namespace Rebel\BCApi2\Entity\CustomerFinancialDetail;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;

class Record extends Entity
{
    protected $classMap = ['customer' => Customer\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function getBalance(): ?float
    {
        return $this->get('balance');
    }

    function getTotalSalesExcludingTax(): ?float
    {
        return $this->get('totalSalesExcludingTax');
    }

    function getOverdueAmount(): ?float
    {
        return $this->get('overdueAmount');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
    }
}
