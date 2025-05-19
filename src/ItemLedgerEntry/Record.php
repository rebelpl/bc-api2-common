<?php
namespace Rebel\BCApi2\Entity\ItemLedgerEntry;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getEntryNumber(): ?int
    {
        return $this->get(Properties::entryNumber->name);
    }

    public function getItemNumber(): ?string
    {
        return $this->get(Properties::itemNumber->name);
    }

    public function getPostingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::postingDate->name);
    }

    public function getEntryType(): ?Enums\ItemLedgerEntryType
    {
        return $this->getAsEnum(Properties::entryType->name, Enums\ItemLedgerEntryType::class);
    }

    public function getSourceNumber(): ?string
    {
        return $this->get(Properties::sourceNumber->name);
    }

    public function getSourceType(): ?Enums\AnalysisSourceType
    {
        return $this->getAsEnum(Properties::sourceType->name, Enums\AnalysisSourceType::class);
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get(Properties::documentNumber->name);
    }

    public function getDocumentType(): ?Enums\ItemLedgerDocumentType
    {
        return $this->getAsEnum(Properties::documentType->name, Enums\ItemLedgerDocumentType::class);
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function getQuantity(): ?float
    {
        return $this->get(Properties::quantity->name);
    }

    public function getSalesAmountActual(): ?float
    {
        return $this->get(Properties::salesAmountActual->name);
    }

    public function getCostAmountActual(): ?float
    {
        return $this->get(Properties::costAmountActual->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }
}