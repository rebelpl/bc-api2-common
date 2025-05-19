<?php
namespace Rebel\BCApi2\Entity\TrialBalance;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Account;

class Record extends Entity
{
	public ?string $accountId {
		get => $this->get('accountId');
	}

	public ?string $number {
		get => $this->get('number');
	}

	public ?Enums\GlAccountType $accountType {
		get => $this->get('accountType', Enums\GlAccountType::class);
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
		get => $this->get('account');
		set => $this->set('account', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'account' => Account\Record::class,
        ];
    }
}