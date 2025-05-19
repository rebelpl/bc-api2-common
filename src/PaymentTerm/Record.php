<?php
namespace Rebel\BCApi2\Entity\PaymentTerm;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->get(Properties::code->name);
    }

    public function setCode(?string $value): self
    {
        $this->set(Properties::code->name, $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getDueDateCalculation(): ?string
    {
        return $this->get(Properties::dueDateCalculation->name);
    }

    public function setDueDateCalculation(?string $value): self
    {
        $this->set(Properties::dueDateCalculation->name, $value);
        return $this;
    }

    public function getDiscountDateCalculation(): ?string
    {
        return $this->get(Properties::discountDateCalculation->name);
    }

    public function setDiscountDateCalculation(?string $value): self
    {
        $this->set(Properties::discountDateCalculation->name, $value);
        return $this;
    }

    public function getDiscountPercent(): ?float
    {
        return $this->get(Properties::discountPercent->name);
    }

    public function setDiscountPercent(?float $value): self
    {
        $this->set(Properties::discountPercent->name, $value);
        return $this;
    }

    public function isCalculateDiscountOnCreditMemos(): ?bool
    {
        return $this->get(Properties::calculateDiscountOnCreditMemos->name);
    }

    public function setCalculateDiscountOnCreditMemos(?bool $value): self
    {
        $this->set(Properties::calculateDiscountOnCreditMemos->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }
}