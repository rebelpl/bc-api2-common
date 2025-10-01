<?php
namespace Rebel\BCApi2\Entity\AgedAccountsPayable;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $primaryKey = 'vendorId';
    protected $classMap = ['vendor' => Vendor\Record::class];

    public function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    public function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
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

    public function getPeriod1Amount(): ?float
    {
        return $this->get('period1Amount');
    }

    public function getPeriod2Amount(): ?float
    {
        return $this->get('period2Amount');
    }

    public function getPeriod3Amount(): ?float
    {
        return $this->get('period3Amount');
    }

    public function getAgedAsOfDate(): ?Carbon
    {
        return $this->getAsDate('agedAsOfDate');
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->getAsRelation('vendor');
    }
}
