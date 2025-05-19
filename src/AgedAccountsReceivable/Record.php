<?php
namespace Rebel\BCApi2\Entity\AgedAccountsReceivable;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;

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

    public function getCustomerNumber(): ?string
    {
        return $this->get(Properties::customerNumber->name);
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

    public function getPeriod1Label(): ?string
    {
        return $this->get(Properties::period1Label->name);
    }

    public function getPeriod1Amount(): ?float
    {
        return $this->get(Properties::period1Amount->name);
    }

    public function getPeriod2Label(): ?string
    {
        return $this->get(Properties::period2Label->name);
    }

    public function getPeriod2Amount(): ?float
    {
        return $this->get(Properties::period2Amount->name);
    }

    public function getPeriod3Label(): ?string
    {
        return $this->get(Properties::period3Label->name);
    }

    public function getPeriod3Amount(): ?float
    {
        return $this->get(Properties::period3Amount->name);
    }

    public function getAgedAsOfDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::agedAsOfDate->name);
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }
}