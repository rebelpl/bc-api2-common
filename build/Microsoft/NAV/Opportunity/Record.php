<?php
namespace Microsoft\NAV\Opportunity;

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

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function setNumber(?string $value): self
    {
        $this->set(Properties::number->name, $value);
        return $this;
    }

    public function getContactNumber(): ?string
    {
        return $this->get(Properties::contactNumber->name);
    }

    public function setContactNumber(?string $value): self
    {
        $this->set(Properties::contactNumber->name, $value);
        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->get(Properties::contactName->name);
    }

    public function setContactName(?string $value): self
    {
        $this->set(Properties::contactName->name, $value);
        return $this;
    }

    public function getContactCompanyName(): ?string
    {
        return $this->get(Properties::contactCompanyName->name);
    }

    public function setContactCompanyName(?string $value): self
    {
        $this->set(Properties::contactCompanyName->name, $value);
        return $this;
    }

    public function getSalespersonCode(): ?string
    {
        return $this->get(Properties::salespersonCode->name);
    }

    public function setSalespersonCode(?string $value): self
    {
        $this->set(Properties::salespersonCode->name, $value);
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

    public function getStatus(): ?Enums\OpportunityStatus
    {
        return $this->getAsEnum(Properties::status->name, Enums\OpportunityStatus::class);
    }

    public function setStatus(?Enums\OpportunityStatus $value): self
    {
        $this->set(Properties::status->name, $value);
        return $this;
    }

    public function isClosed(): ?bool
    {
        return $this->get(Properties::closed->name);
    }

    public function setClosed(?bool $value): self
    {
        $this->set(Properties::closed->name, $value);
        return $this;
    }

    public function getCreationDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::creationDate->name);
    }

    public function setCreationDate(?\DateTime $value): self
    {
        $this->set(Properties::creationDate->name, $value);
        return $this;
    }

    public function getDateClosed(): ?\DateTime
    {
        return $this->getAsDate(Properties::dateClosed->name);
    }

    public function setDateClosed(?\DateTime $value): self
    {
        $this->set(Properties::dateClosed->name, $value);
        return $this;
    }

    public function getCalculatedCurrentValue(): ?float
    {
        return $this->get(Properties::calculatedCurrentValue->name);
    }

    public function setCalculatedCurrentValue(?float $value): self
    {
        $this->set(Properties::calculatedCurrentValue->name, $value);
        return $this;
    }

    public function getChancesOfSuccessPrc(): ?float
    {
        return $this->get(Properties::chancesOfSuccessPrc->name);
    }

    public function setChancesOfSuccessPrc(?float $value): self
    {
        $this->set(Properties::chancesOfSuccessPrc->name, $value);
        return $this;
    }

    public function getCompletedPrc(): ?float
    {
        return $this->get(Properties::completedPrc->name);
    }

    public function setCompletedPrc(?float $value): self
    {
        $this->set(Properties::completedPrc->name, $value);
        return $this;
    }

    public function getEstimatedClosingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::estimatedClosingDate->name);
    }

    public function setEstimatedClosingDate(?\DateTime $value): self
    {
        $this->set(Properties::estimatedClosingDate->name, $value);
        return $this;
    }

    public function getEstimatedValue(): ?float
    {
        return $this->get(Properties::estimatedValue->name);
    }

    public function setEstimatedValue(?float $value): self
    {
        $this->set(Properties::estimatedValue->name, $value);
        return $this;
    }

    public function getSystemCreatedAt(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::systemCreatedAt->name);
    }

    public function setSystemCreatedAt(?\DateTime $value): self
    {
        $this->set(Properties::systemCreatedAt->name, $value);
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