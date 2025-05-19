<?php
namespace Rebel\BCApi2\Entity\BankAccount;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $number {
		get => $this->get('number');
		set => $this->set('number', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?string $bankAccountNumber {
		get => $this->get('bankAccountNumber');
		set => $this->set('bankAccountNumber', $value);
	}

	public ?bool $blocked {
		get => $this->get('blocked');
		set => $this->set('blocked', $value);
	}

	public ?string $currencyCode {
		get => $this->get('currencyCode');
		set => $this->set('currencyCode', $value);
	}

	public ?string $currencyId {
		get => $this->get('currencyId');
		set => $this->set('currencyId', $value);
	}

	public ?string $iban {
		get => $this->get('iban');
		set => $this->set('iban', $value);
	}

	public ?bool $intercompanyEnabled {
		get => $this->get('intercompanyEnabled');
		set => $this->set('intercompanyEnabled', $value);
	}


}