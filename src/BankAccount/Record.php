<?php
namespace Rebel\BCApi2\Entity\BankAccount;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'id';

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getBankAccountNumber(): ?string
    {
        return $this->get('bankAccountNumber');
    }

    public function setBankAccountNumber(?string $value): self
    {
        $this->set('bankAccountNumber', $value);
        return $this;
    }

    public function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    public function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->get('currencyId');
    }

    public function setCurrencyId(?string $value): self
    {
        $this->set('currencyId', $value);
        return $this;
    }

    public function getIban(): ?string
    {
        return $this->get('iban');
    }

    public function setIban(?string $value): self
    {
        $this->set('iban', $value);
        return $this;
    }

    public function getIntercompanyEnabled(): ?bool
    {
        return $this->get('intercompanyEnabled');
    }

    public function setIntercompanyEnabled(?bool $value): self
    {
        $this->set('intercompanyEnabled', $value);
        return $this;
    }
}
