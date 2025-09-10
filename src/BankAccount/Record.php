<?php
namespace Rebel\BCApi2\Entity\BankAccount;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set { $this->set('number', $value); }
        get => $this->get('number');
    }

    public ?string $displayName {
        set { $this->set('displayName', $value); }
        get => $this->get('displayName');
    }

    public ?Carbon $lastModifiedDateTime {
        set { $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?string $bankAccountNumber {
        set { $this->set('bankAccountNumber', $value); }
        get => $this->get('bankAccountNumber');
    }

    public ?bool $blocked {
        set { $this->set('blocked', $value); }
        get => $this->get('blocked');
    }

    public ?string $currencyCode {
        set { $this->set('currencyCode', $value); }
        get => $this->get('currencyCode');
    }

    public ?string $currencyId {
        set { $this->set('currencyId', $value); }
        get => $this->get('currencyId');
    }

    public ?string $iban {
        set { $this->set('iban', $value); }
        get => $this->get('iban');
    }

    public ?bool $intercompanyEnabled {
        set { $this->set('intercompanyEnabled', $value); }
        get => $this->get('intercompanyEnabled');
    }
}
