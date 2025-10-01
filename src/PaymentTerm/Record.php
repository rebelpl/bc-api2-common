<?php
namespace Rebel\BCApi2\Entity\PaymentTerm;

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

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function setCode(?string $value): self
    {
        $this->set('code', $value);
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

    public function getDueDateCalculation(): ?string
    {
        return $this->get('dueDateCalculation');
    }

    public function setDueDateCalculation(?string $value): self
    {
        $this->set('dueDateCalculation', $value);
        return $this;
    }

    public function getDiscountDateCalculation(): ?string
    {
        return $this->get('discountDateCalculation');
    }

    public function setDiscountDateCalculation(?string $value): self
    {
        $this->set('discountDateCalculation', $value);
        return $this;
    }

    public function getDiscountPercent(): ?float
    {
        return $this->get('discountPercent');
    }

    public function setDiscountPercent(?float $value): self
    {
        $this->set('discountPercent', $value);
        return $this;
    }

    public function getCalculateDiscountOnCreditMemos(): ?bool
    {
        return $this->get('calculateDiscountOnCreditMemos');
    }

    public function setCalculateDiscountOnCreditMemos(?bool $value): self
    {
        $this->set('calculateDiscountOnCreditMemos', $value);
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
}
