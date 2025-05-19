<?php
namespace Rebel\BCApi2\Entity\TrialBalance;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::account->name => Account\Record::class,
        ];
    }

    public function getAccountId(): ?string
    {
        return $this->get(Properties::accountId->name);
    }

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function getAccountType(): ?Enums\GlAccountType
    {
        return $this->getAsEnum(Properties::accountType->name, Enums\GlAccountType::class);
    }

    public function getDisplay(): ?string
    {
        return $this->get(Properties::display->name);
    }

    public function getTotalDebit(): ?string
    {
        return $this->get(Properties::totalDebit->name);
    }

    public function getTotalCredit(): ?string
    {
        return $this->get(Properties::totalCredit->name);
    }

    public function getBalanceAtDateDebit(): ?string
    {
        return $this->get(Properties::balanceAtDateDebit->name);
    }

    public function getBalanceAtDateCredit(): ?string
    {
        return $this->get(Properties::balanceAtDateCredit->name);
    }

    public function getAccount(): ?Account\Record
    {
        return $this->get(Properties::account->name);
    }
}