<?php
namespace Rebel\BCApi2\Entity\TaxArea;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

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

    public function getTaxType(): ?Enums\TaxBufferType
    {
        return $this->getAsEnum(Properties::taxType->name, Enums\TaxBufferType::class);
    }

    public function setTaxType(?Enums\TaxBufferType $value): self
    {
        $this->set(Properties::taxType->name, $value);
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