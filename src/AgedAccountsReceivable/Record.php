<?php
namespace Rebel\BCApi2\Entity\AgedAccountsReceivable;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;

class Record extends Entity
{
    protected $primaryKey = 'customerId';
    protected $classMap = ['customer' => Customer\Record::class];

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

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function getBalanceDue(): ?float
    {
        return $this->get('balanceDue');
    }

    public function getCurrentAmount(): ?float
    {
        return $this->get('currentAmount');
    }

    public function getPeriod1Label(): ?string
    {
        return $this->get('period1Label');
    }

    public function getPeriod1Amount(): ?float
    {
        return $this->get('period1Amount');
    }

    public function getPeriod2Label(): ?string
    {
        return $this->get('period2Label');
    }

    public function getPeriod2Amount(): ?float
    {
        return $this->get('period2Amount');
    }

    public function getPeriod3Label(): ?string
    {
        return $this->get('period3Label');
    }

    public function getPeriod3Amount(): ?float
    {
        return $this->get('period3Amount');
    }

    public function getAgedAsOfDate(): ?Carbon
    {
        return $this->getAsDate('agedAsOfDate');
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }
}
