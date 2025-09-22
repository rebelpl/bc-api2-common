<?php
namespace Rebel\BCApi2\Entity\BankAccount;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getBankAccountNumber(): ?string
    {
        return $this->get('bankAccountNumber');
    }

    function setBankAccountNumber(?string $value): self
    {
        $this->set('bankAccountNumber', $value);
        return $this;
    }

    function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function setCurrencyCode(?string $value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    function getCurrencyId(): ?string
    {
        return $this->get('currencyId');
    }

    function setCurrencyId(?string $value): self
    {
        $this->set('currencyId', $value);
        return $this;
    }

    function getIban(): ?string
    {
        return $this->get('iban');
    }

    function setIban(?string $value): self
    {
        $this->set('iban', $value);
        return $this;
    }

    function getIntercompanyEnabled(): ?bool
    {
        return $this->get('intercompanyEnabled');
    }

    function setIntercompanyEnabled(?bool $value): self
    {
        $this->set('intercompanyEnabled', $value);
        return $this;
    }
}
