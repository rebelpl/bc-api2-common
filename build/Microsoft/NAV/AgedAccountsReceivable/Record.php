<?php
namespace Microsoft\NAV\AgedAccountsReceivable;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Customer;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::customer->name => Customer\Record::class,
        ];
    }

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

    public function getPeriod1Label(): ?string
    {
        return $this->get(Properties::period1Label->name);
    }

    public function setPeriod1Label(?string $value): self
    {
        $this->set(Properties::period1Label->name, $value);
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

    public function getPeriod2Label(): ?string
    {
        return $this->get(Properties::period2Label->name);
    }

    public function setPeriod2Label(?string $value): self
    {
        $this->set(Properties::period2Label->name, $value);
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

    public function getPeriod3Label(): ?string
    {
        return $this->get(Properties::period3Label->name);
    }

    public function setPeriod3Label(?string $value): self
    {
        $this->set(Properties::period3Label->name, $value);
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

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }
}