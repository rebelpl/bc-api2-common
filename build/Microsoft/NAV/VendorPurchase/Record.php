<?php
namespace Microsoft\NAV\VendorPurchase;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
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

    public function getTotalPurchaseAmount(): ?float
    {
        return $this->get(Properties::totalPurchaseAmount->name);
    }

    public function setTotalPurchaseAmount(?float $value): self
    {
        $this->set(Properties::totalPurchaseAmount->name, $value);
        return $this;
    }

    public function getDateFilter_FilterOnly(): ?\DateTime
    {
        return $this->getAsDate(Properties::dateFilter_FilterOnly->name);
    }

    public function setDateFilter_FilterOnly(?\DateTime $value): self
    {
        $this->set(Properties::dateFilter_FilterOnly->name, $value);
        return $this;
    }
}