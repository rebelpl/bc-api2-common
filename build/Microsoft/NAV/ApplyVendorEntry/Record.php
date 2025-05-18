<?php
namespace Microsoft\NAV\ApplyVendorEntry;

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

    public function isApplied(): ?bool
    {
        return $this->get(Properties::applied->name);
    }

    public function setApplied(?bool $value): self
    {
        $this->set(Properties::applied->name, $value);
        return $this;
    }

    public function getAppliesToId(): ?string
    {
        return $this->get(Properties::appliesToId->name);
    }

    public function setAppliesToId(?string $value): self
    {
        $this->set(Properties::appliesToId->name, $value);
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

    public function getDocumentType(): ?Enums\GenJournalDocumentType
    {
        return $this->getAsEnum(Properties::documentType->name, Enums\GenJournalDocumentType::class);
    }

    public function setDocumentType(?Enums\GenJournalDocumentType $value): self
    {
        $this->set(Properties::documentType->name, $value);
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

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get(Properties::externalDocumentNumber->name);
    }

    public function setExternalDocumentNumber(?string $value): self
    {
        $this->set(Properties::externalDocumentNumber->name, $value);
        return $this;
    }

    public function getVendorNumber(): ?string
    {
        return $this->get(Properties::vendorNumber->name);
    }

    public function setVendorNumber(?string $value): self
    {
        $this->set(Properties::vendorNumber->name, $value);
        return $this;
    }

    public function getVendorName(): ?string
    {
        return $this->get(Properties::vendorName->name);
    }

    public function setVendorName(?string $value): self
    {
        $this->set(Properties::vendorName->name, $value);
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

    public function getRemainingAmount(): ?float
    {
        return $this->get(Properties::remainingAmount->name);
    }

    public function setRemainingAmount(?float $value): self
    {
        $this->set(Properties::remainingAmount->name, $value);
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