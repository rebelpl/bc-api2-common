<?php
namespace Rebel\BCApi2\Entity\PaymentTerm;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function setCode(?string $value): self
    {
        $this->set('code', $value);
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

    function getDueDateCalculation(): ?string
    {
        return $this->get('dueDateCalculation');
    }

    function setDueDateCalculation(?string $value): self
    {
        $this->set('dueDateCalculation', $value);
        return $this;
    }

    function getDiscountDateCalculation(): ?string
    {
        return $this->get('discountDateCalculation');
    }

    function setDiscountDateCalculation(?string $value): self
    {
        $this->set('discountDateCalculation', $value);
        return $this;
    }

    function getDiscountPercent(): ?float
    {
        return $this->get('discountPercent');
    }

    function setDiscountPercent(?float $value): self
    {
        $this->set('discountPercent', $value);
        return $this;
    }

    function getCalculateDiscountOnCreditMemos(): ?bool
    {
        return $this->get('calculateDiscountOnCreditMemos');
    }

    function setCalculateDiscountOnCreditMemos(?bool $value): self
    {
        $this->set('calculateDiscountOnCreditMemos', $value);
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
}
