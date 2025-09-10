<?php
namespace Rebel\BCApi2\Entity\SalespersonPurchaser;

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

    public ?string $email {
        set { $this->set('email', $value); }
        get => $this->get('email');
    }

    public ?string $email2 {
        set { $this->set('email2', $value); }
        get => $this->get('email2');
    }

    public ?string $phoneNo {
        set { $this->set('phoneNo', $value); }
        get => $this->get('phoneNo');
    }

    public ?string $jobTitle {
        set { $this->set('jobTitle', $value); }
        get => $this->get('jobTitle');
    }

    public ?float $commisionPercent {
        set { $this->set('commisionPercent', $value); }
        get => $this->get('commisionPercent');
    }

    public ?bool $privacyBlocked {
        set { $this->set('privacyBlocked', $value); }
        get => $this->get('privacyBlocked');
    }

    public ?bool $blocked {
        set { $this->set('blocked', $value); }
        get => $this->get('blocked');
    }

    public ?Carbon $lastModifiedDateTime {
        set { $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
