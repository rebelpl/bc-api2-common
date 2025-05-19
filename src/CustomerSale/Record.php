<?php
namespace Rebel\BCApi2\Entity\CustomerSale;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getCustomerId(): ?string
    {
        return $this->get(Properties::customerId->name);
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get(Properties::customerNumber->name);
    }

    public function getName(): ?string
    {
        return $this->get(Properties::name->name);
    }

    public function getTotalSalesAmount(): ?float
    {
        return $this->get(Properties::totalSalesAmount->name);
    }

    public function getDateFilter_FilterOnly(): ?\DateTime
    {
        return $this->getAsDate(Properties::dateFilter_FilterOnly->name);
    }
}