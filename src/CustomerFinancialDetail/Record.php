<?php
namespace Rebel\BCApi2\Entity\CustomerFinancialDetail;

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

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function getBalance(): ?float
    {
        return $this->get(Properties::balance->name);
    }

    public function getTotalSalesExcludingTax(): ?float
    {
        return $this->get(Properties::totalSalesExcludingTax->name);
    }

    public function getOverdueAmount(): ?float
    {
        return $this->get(Properties::overdueAmount->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }
}