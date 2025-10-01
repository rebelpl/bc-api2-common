<?php
namespace Rebel\BCApi2\Entity\GeneralProductPostingGroup;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'id';

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getDefaultVATProductPostingGroup(): ?string
    {
        return $this->get('defaultVATProductPostingGroup');
    }

    public function getAutoInsertDefault(): ?bool
    {
        return $this->get('autoInsertDefault');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
