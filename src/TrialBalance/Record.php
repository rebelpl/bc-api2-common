<?php
namespace Rebel\BCApi2\Entity\TrialBalance;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'accountId';

    public ?string $accountId {
        get => $this->get('accountId');
    }

    public ?string $number {
        get => $this->get('number');
    }

    public ?Enums\GlAccountType $accountType {
        get => $this->getAsEnum('accountType', Enums\GlAccountType::class);
    }

    public ?string $display {
        get => $this->get('display');
    }

    public ?string $totalDebit {
        get => $this->get('totalDebit');
    }

    public ?string $totalCredit {
        get => $this->get('totalCredit');
    }

    public ?string $balanceAtDateDebit {
        get => $this->get('balanceAtDateDebit');
    }

    public ?string $balanceAtDateCredit {
        get => $this->get('balanceAtDateCredit');
    }

    public ?Account\Record $account {
        get => $this->getAsRelation('account');
    }

    protected array $classMap = ['account' => Account\Record::class];
}
