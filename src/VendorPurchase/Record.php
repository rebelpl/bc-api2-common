<?php
namespace Rebel\BCApi2\Entity\VendorPurchase;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
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

    public function getTotalPurchaseAmount(): ?float
    {
        return $this->get(Properties::totalPurchaseAmount->name);
    }

    public function getDateFilter_FilterOnly(): ?\DateTime
    {
        return $this->getAsDate(Properties::dateFilter_FilterOnly->name);
    }
}