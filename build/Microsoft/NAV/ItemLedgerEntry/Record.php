<?php
namespace Microsoft\NAV\ItemLedgerEntry;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Enums;

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

    public function getEntryNumber(): ?int
    {
        return $this->get(Properties::entryNumber->name);
    }

    public function setEntryNumber(?int $value): self
    {
        $this->set(Properties::entryNumber->name, $value);
        return $this;
    }

    public function getItemNumber(): ?string
    {
        return $this->get(Properties::itemNumber->name);
    }

    public function setItemNumber(?string $value): self
    {
        $this->set(Properties::itemNumber->name, $value);
        return $this;
    }

    public function getPostingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::postingDate->name);
    }

    public function setPostingDate(?\DateTime $value): self
    {
        $this->set(Properties::postingDate->name, $value);
        return $this;
    }

    public function getEntryType(): ?Enums\ItemLedgerEntryType
    {
        return $this->getAsEnum(Properties::entryType->name, Enums\ItemLedgerEntryType::class);
    }

    public function setEntryType(?Enums\ItemLedgerEntryType $value): self
    {
        $this->set(Properties::entryType->name, $value);
        return $this;
    }

    public function getSourceNumber(): ?string
    {
        return $this->get(Properties::sourceNumber->name);
    }

    public function setSourceNumber(?string $value): self
    {
        $this->set(Properties::sourceNumber->name, $value);
        return $this;
    }

    public function getSourceType(): ?Enums\AnalysisSourceType
    {
        return $this->getAsEnum(Properties::sourceType->name, Enums\AnalysisSourceType::class);
    }

    public function setSourceType(?Enums\AnalysisSourceType $value): self
    {
        $this->set(Properties::sourceType->name, $value);
        return $this;
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get(Properties::documentNumber->name);
    }

    public function setDocumentNumber(?string $value): self
    {
        $this->set(Properties::documentNumber->name, $value);
        return $this;
    }

    public function getDocumentType(): ?Enums\ItemLedgerDocumentType
    {
        return $this->getAsEnum(Properties::documentType->name, Enums\ItemLedgerDocumentType::class);
    }

    public function setDocumentType(?Enums\ItemLedgerDocumentType $value): self
    {
        $this->set(Properties::documentType->name, $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->get(Properties::quantity->name);
    }

    public function setQuantity(?float $value): self
    {
        $this->set(Properties::quantity->name, $value);
        return $this;
    }

    public function getSalesAmountActual(): ?float
    {
        return $this->get(Properties::salesAmountActual->name);
    }

    public function setSalesAmountActual(?float $value): self
    {
        $this->set(Properties::salesAmountActual->name, $value);
        return $this;
    }

    public function getCostAmountActual(): ?float
    {
        return $this->get(Properties::costAmountActual->name);
    }

    public function setCostAmountActual(?float $value): self
    {
        $this->set(Properties::costAmountActual->name, $value);
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