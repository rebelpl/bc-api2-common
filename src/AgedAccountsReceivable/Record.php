<?php
namespace Rebel\BCApi2\Entity\AgedAccountsReceivable;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;

class Record extends Entity
{
    protected $classMap = ['customer' => Customer\Record::class];

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

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function getBalanceDue(): ?float
    {
        return $this->get('balanceDue');
    }

    function getCurrentAmount(): ?float
    {
        return $this->get('currentAmount');
    }

    function getPeriod1Label(): ?string
    {
        return $this->get('period1Label');
    }

    function getPeriod1Amount(): ?float
    {
        return $this->get('period1Amount');
    }

    function getPeriod2Label(): ?string
    {
        return $this->get('period2Label');
    }

    function getPeriod2Amount(): ?float
    {
        return $this->get('period2Amount');
    }

    function getPeriod3Label(): ?string
    {
        return $this->get('period3Label');
    }

    function getPeriod3Amount(): ?float
    {
        return $this->get('period3Amount');
    }

    function getAgedAsOfDate(): ?Carbon
    {
        return $this->getAsDate('agedAsOfDate');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
    }
}
