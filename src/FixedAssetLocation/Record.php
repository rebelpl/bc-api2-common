<?php
namespace Rebel\BCApi2\Entity\FixedAssetLocation;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        set { $this->set('code', $value); }
        get => $this->get('code');
    }

    public ?string $displayName {
        set { $this->set('displayName', $value); }
        get => $this->get('displayName');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
