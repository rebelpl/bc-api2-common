<?php
namespace Microsoft\NAV\Account;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\TrialBalance;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::trialBalance->name => TrialBalance\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
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

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getCategory(): ?Enums\GlAccountCategory
    {
        return $this->getAsEnum(Properties::category->name, Enums\GlAccountCategory::class);
    }

    public function setCategory(?Enums\GlAccountCategory $value): self
    {
        $this->set(Properties::category->name, $value);
        return $this;
    }

    public function getSubCategory(): ?string
    {
        return $this->get(Properties::subCategory->name);
    }

    public function setSubCategory(?string $value): self
    {
        $this->set(Properties::subCategory->name, $value);
        return $this;
    }

    public function isBlocked(): ?bool
    {
        return $this->get(Properties::blocked->name);
    }

    public function setBlocked(?bool $value): self
    {
        $this->set(Properties::blocked->name, $value);
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

    public function isDirectPosting(): ?bool
    {
        return $this->get(Properties::directPosting->name);
    }

    public function setDirectPosting(?bool $value): self
    {
        $this->set(Properties::directPosting->name, $value);
        return $this;
    }

    public function getNetChange(): ?float
    {
        return $this->get(Properties::netChange->name);
    }

    public function setNetChange(?float $value): self
    {
        $this->set(Properties::netChange->name, $value);
        return $this;
    }

    public function getConsolidationTranslationMethod(): ?string
    {
        return $this->get(Properties::consolidationTranslationMethod->name);
    }

    public function setConsolidationTranslationMethod(?string $value): self
    {
        $this->set(Properties::consolidationTranslationMethod->name, $value);
        return $this;
    }

    public function getConsolidationDebitAccount(): ?string
    {
        return $this->get(Properties::consolidationDebitAccount->name);
    }

    public function setConsolidationDebitAccount(?string $value): self
    {
        $this->set(Properties::consolidationDebitAccount->name, $value);
        return $this;
    }

    public function getConsolidationCreditAccount(): ?string
    {
        return $this->get(Properties::consolidationCreditAccount->name);
    }

    public function setConsolidationCreditAccount(?string $value): self
    {
        $this->set(Properties::consolidationCreditAccount->name, $value);
        return $this;
    }

    public function isExcludeFromConsolidation(): ?bool
    {
        return $this->get(Properties::excludeFromConsolidation->name);
    }

    public function setExcludeFromConsolidation(?bool $value): self
    {
        $this->set(Properties::excludeFromConsolidation->name, $value);
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

    public function getTrialBalance(): ?TrialBalance\Record
    {
        return $this->get(Properties::trialBalance->name);
    }
}