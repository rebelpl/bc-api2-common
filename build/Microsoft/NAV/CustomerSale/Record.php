<?php
namespace Microsoft\NAV\CustomerSale;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getCustomerId(): ?string
    {
        return $this->get(Properties::customerId->name);
    }

    public function setCustomerId(?string $value): self
    {
        $this->set(Properties::customerId->name, $value);
        return $this;
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get(Properties::customerNumber->name);
    }

    public function setCustomerNumber(?string $value): self
    {
        $this->set(Properties::customerNumber->name, $value);
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

    public function getTotalSalesAmount(): ?float
    {
        return $this->get(Properties::totalSalesAmount->name);
    }

    public function setTotalSalesAmount(?float $value): self
    {
        $this->set(Properties::totalSalesAmount->name, $value);
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