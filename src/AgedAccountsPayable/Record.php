<?php
namespace Rebel\BCApi2\Entity\AgedAccountsPayable;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::vendor->name => Vendor\Record::class,
        ];
    }

    public function getVendorId(): ?string
    {
        return $this->get(Properties::vendorId->name);
    }

    public function getVendorNumber(): ?string
    {
        return $this->get(Properties::vendorNumber->name);
    }

    public function getName(): ?string
    {
        return $this->get(Properties::name->name);
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function getBalanceDue(): ?float
    {
        return $this->get(Properties::balanceDue->name);
    }

    public function getCurrentAmount(): ?float
    {
        return $this->get(Properties::currentAmount->name);
    }

    public function getPeriod1Amount(): ?float
    {
        return $this->get(Properties::period1Amount->name);
    }

    public function getPeriod2Amount(): ?float
    {
        return $this->get(Properties::period2Amount->name);
    }

    public function getPeriod3Amount(): ?float
    {
        return $this->get(Properties::period3Amount->name);
    }

    public function getAgedAsOfDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::agedAsOfDate->name);
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->get(Properties::vendor->name);
    }
}