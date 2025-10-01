<?php
namespace Rebel\BCApi2\Entity\CustomerFinancialDetail;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['customer' => Customer\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function getBalance(): ?float
    {
        return $this->get('balance');
    }

    public function getTotalSalesExcludingTax(): ?float
    {
        return $this->get('totalSalesExcludingTax');
    }

    public function getOverdueAmount(): ?float
    {
        return $this->get('overdueAmount');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }
}
