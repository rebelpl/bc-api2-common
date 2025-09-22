<?php
namespace Rebel\BCApi2\Entity\TrialBalance;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;

class Record extends Entity
{
    protected $classMap = ['account' => Account\Record::class];

    function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function getAccountType(): ?string
    {
        return $this->get('accountType');
    }

    function getDisplay(): ?string
    {
        return $this->get('display');
    }

    function getTotalDebit(): ?string
    {
        return $this->get('totalDebit');
    }

    function getTotalCredit(): ?string
    {
        return $this->get('totalCredit');
    }

    function getBalanceAtDateDebit(): ?string
    {
        return $this->get('balanceAtDateDebit');
    }

    function getBalanceAtDateCredit(): ?string
    {
        return $this->get('balanceAtDateCredit');
    }

    function getAccount(): ?Account\Record
    {
        return $this->get('account');
    }
}
