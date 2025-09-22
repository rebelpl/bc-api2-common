<?php
namespace Rebel\BCApi2\Entity\GeneralProductPostingGroup;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function getDefaultVATProductPostingGroup(): ?string
    {
        return $this->get('defaultVATProductPostingGroup');
    }

    function getAutoInsertDefault(): ?bool
    {
        return $this->get('autoInsertDefault');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
