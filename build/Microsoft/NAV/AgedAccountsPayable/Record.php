<?php
namespace Microsoft\NAV\AgedAccountsPayable;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Vendor;

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

    public function setVendorId(?string $value): self
    {
        $this->set(Properties::vendorId->name, $value);
        return $this;
    }

    public function getVendorNumber(): ?string
    {
        return $this->get(Properties::vendorNumber->name);
    }

    public function setVendorNumber(?string $value): self
    {
        $this->set(Properties::vendorNumber->name, $value);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->get(Properties::name->name);
    }

    public function setName(?string $value): self
    {
        $this->set(Properties::name->name, $value);
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set(Properties::currencyCode->name, $value);
        return $this;
    }

    public function getBalanceDue(): ?float
    {
        return $this->get(Properties::balanceDue->name);
    }

    public function setBalanceDue(?float $value): self
    {
        $this->set(Properties::balanceDue->name, $value);
        return $this;
    }

    public function getCurrentAmount(): ?float
    {
        return $this->get(Properties::currentAmount->name);
    }

    public function setCurrentAmount(?float $value): self
    {
        $this->set(Properties::currentAmount->name, $value);
        return $this;
    }

    public function getPeriod1Amount(): ?float
    {
        return $this->get(Properties::period1Amount->name);
    }

    public function setPeriod1Amount(?float $value): self
    {
        $this->set(Properties::period1Amount->name, $value);
        return $this;
    }

    public function getPeriod2Amount(): ?float
    {
        return $this->get(Properties::period2Amount->name);
    }

    public function setPeriod2Amount(?float $value): self
    {
        $this->set(Properties::period2Amount->name, $value);
        return $this;
    }

    public function getPeriod3Amount(): ?float
    {
        return $this->get(Properties::period3Amount->name);
    }

    public function setPeriod3Amount(?float $value): self
    {
        $this->set(Properties::period3Amount->name, $value);
        return $this;
    }

    public function getAgedAsOfDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::agedAsOfDate->name);
    }

    public function setAgedAsOfDate(?\DateTime $value): self
    {
        $this->set(Properties::agedAsOfDate->name, $value);
        return $this;
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->get(Properties::vendor->name);
    }
}