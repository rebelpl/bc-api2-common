<?php
namespace Rebel\BCApi2\Entity\TrialBalance;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;

class Record extends Entity
{
    protected $primaryKey = 'accountId';
    protected $classMap = ['account' => Account\Record::class];

    public function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function getAccountType(): ?string
    {
        return $this->get('accountType');
    }

    public function getDisplay(): ?string
    {
        return $this->get('display');
    }

    public function getTotalDebit(): ?string
    {
        return $this->get('totalDebit');
    }

    public function getTotalCredit(): ?string
    {
        return $this->get('totalCredit');
    }

    public function getBalanceAtDateDebit(): ?string
    {
        return $this->get('balanceAtDateDebit');
    }

    public function getBalanceAtDateCredit(): ?string
    {
        return $this->get('balanceAtDateCredit');
    }

    public function getAccount(): ?Account\Record
    {
        return $this->getAsRelation('account');
    }
}
