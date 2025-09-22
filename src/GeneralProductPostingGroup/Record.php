<?php
namespace Rebel\BCApi2\Entity\GeneralProductPostingGroup;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        get => $this->get('code');
    }

    public ?string $description {
        get => $this->get('description');
    }

    public ?string $defaultVATProductPostingGroup {
        get => $this->get('defaultVATProductPostingGroup');
    }

    public ?bool $autoInsertDefault {
        get => $this->get('autoInsertDefault');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
