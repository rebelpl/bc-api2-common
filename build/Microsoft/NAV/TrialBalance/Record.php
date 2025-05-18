<?php
namespace Microsoft\NAV\TrialBalance;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Account;
use Microsoft\NAV\Enums;

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

    public function setAccountId(?string $value): self
    {
        $this->set(Properties::accountId->name, $value);
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

    public function getAccountType(): ?Enums\GlAccountType
    {
        return $this->getAsEnum(Properties::accountType->name, Enums\GlAccountType::class);
    }

    public function setAccountType(?Enums\GlAccountType $value): self
    {
        $this->set(Properties::accountType->name, $value);
        return $this;
    }

    public function getDisplay(): ?string
    {
        return $this->get(Properties::display->name);
    }

    public function setDisplay(?string $value): self
    {
        $this->set(Properties::display->name, $value);
        return $this;
    }

    public function getTotalDebit(): ?string
    {
        return $this->get(Properties::totalDebit->name);
    }

    public function setTotalDebit(?string $value): self
    {
        $this->set(Properties::totalDebit->name, $value);
        return $this;
    }

    public function getTotalCredit(): ?string
    {
        return $this->get(Properties::totalCredit->name);
    }

    public function setTotalCredit(?string $value): self
    {
        $this->set(Properties::totalCredit->name, $value);
        return $this;
    }

    public function getBalanceAtDateDebit(): ?string
    {
        return $this->get(Properties::balanceAtDateDebit->name);
    }

    public function setBalanceAtDateDebit(?string $value): self
    {
        $this->set(Properties::balanceAtDateDebit->name, $value);
        return $this;
    }

    public function getBalanceAtDateCredit(): ?string
    {
        return $this->get(Properties::balanceAtDateCredit->name);
    }

    public function setBalanceAtDateCredit(?string $value): self
    {
        $this->set(Properties::balanceAtDateCredit->name, $value);
        return $this;
    }

    public function getAccount(): ?Account\Record
    {
        return $this->get(Properties::account->name);
    }
}