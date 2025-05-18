<?php
namespace Microsoft\NAV\GeneralProductPostingGroup;

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

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
        return $this;
    }

    public function getDefaultVATProductPostingGroup(): ?string
    {
        return $this->get(Properties::defaultVATProductPostingGroup->name);
    }

    public function setDefaultVATProductPostingGroup(?string $value): self
    {
        $this->set(Properties::defaultVATProductPostingGroup->name, $value);
        return $this;
    }

    public function isAutoInsertDefault(): ?bool
    {
        return $this->get(Properties::autoInsertDefault->name);
    }

    public function setAutoInsertDefault(?bool $value): self
    {
        $this->set(Properties::autoInsertDefault->name, $value);
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