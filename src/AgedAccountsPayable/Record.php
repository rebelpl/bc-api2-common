<?php
namespace Rebel\BCApi2\Entity\AgedAccountsPayable;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $classMap = ['vendor' => Vendor\Record::class];

    function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
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

    function getPeriod1Amount(): ?float
    {
        return $this->get('period1Amount');
    }

    function getPeriod2Amount(): ?float
    {
        return $this->get('period2Amount');
    }

    function getPeriod3Amount(): ?float
    {
        return $this->get('period3Amount');
    }

    function getAgedAsOfDate(): ?Carbon
    {
        return $this->getAsDate('agedAsOfDate');
    }

    function getVendor(): ?Vendor\Record
    {
        return $this->get('vendor');
    }
}
