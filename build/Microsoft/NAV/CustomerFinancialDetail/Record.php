<?php
namespace Microsoft\NAV\CustomerFinancialDetail;

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

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function setNumber(?string $value): self
    {
        $this->set(Properties::number->name, $value);
        return $this;
    }

    public function getBalance(): ?float
    {
        return $this->get(Properties::balance->name);
    }

    public function setBalance(?float $value): self
    {
        $this->set(Properties::balance->name, $value);
        return $this;
    }

    public function getTotalSalesExcludingTax(): ?float
    {
        return $this->get(Properties::totalSalesExcludingTax->name);
    }

    public function setTotalSalesExcludingTax(?float $value): self
    {
        $this->set(Properties::totalSalesExcludingTax->name, $value);
        return $this;
    }

    public function getOverdueAmount(): ?float
    {
        return $this->get(Properties::overdueAmount->name);
    }

    public function setOverdueAmount(?float $value): self
    {
        $this->set(Properties::overdueAmount->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }
}