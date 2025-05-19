<?php
namespace Rebel\BCApi2\Entity\DisputeStatus;

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
}