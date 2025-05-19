<?php
namespace Rebel\BCApi2\Entity\Account;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\TrialBalance;
use Rebel\BCApi2\Entity\Enums;

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

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function getCategory(): ?Enums\GlAccountCategory
    {
        return $this->getAsEnum(Properties::category->name, Enums\GlAccountCategory::class);
    }

    public function getSubCategory(): ?string
    {
        return $this->get(Properties::subCategory->name);
    }

    public function isBlocked(): ?bool
    {
        return $this->get(Properties::blocked->name);
    }

    public function getAccountType(): ?Enums\GlAccountType
    {
        return $this->getAsEnum(Properties::accountType->name, Enums\GlAccountType::class);
    }

    public function isDirectPosting(): ?bool
    {
        return $this->get(Properties::directPosting->name);
    }

    public function getNetChange(): ?float
    {
        return $this->get(Properties::netChange->name);
    }

    public function getConsolidationTranslationMethod(): ?string
    {
        return $this->get(Properties::consolidationTranslationMethod->name);
    }

    public function getConsolidationDebitAccount(): ?string
    {
        return $this->get(Properties::consolidationDebitAccount->name);
    }

    public function getConsolidationCreditAccount(): ?string
    {
        return $this->get(Properties::consolidationCreditAccount->name);
    }

    public function isExcludeFromConsolidation(): ?bool
    {
        return $this->get(Properties::excludeFromConsolidation->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function getTrialBalance(): ?TrialBalance\Record
    {
        return $this->get(Properties::trialBalance->name);
    }
}