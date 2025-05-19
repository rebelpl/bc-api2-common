<?php
namespace Rebel\BCApi2\Entity\GeneralProductPostingGroup;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getCode(): ?string
    {
        return $this->get(Properties::code->name);
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function getDefaultVATProductPostingGroup(): ?string
    {
        return $this->get(Properties::defaultVATProductPostingGroup->name);
    }

    public function isAutoInsertDefault(): ?bool
    {
        return $this->get(Properties::autoInsertDefault->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }
}