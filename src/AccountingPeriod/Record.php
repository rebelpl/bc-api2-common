<?php
namespace Rebel\BCApi2\Entity\AccountingPeriod;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?\DateTime $startingDate {
		get => $this->get('startingDate', 'date');
	}

	public ?string $name {
		get => $this->get('name');
	}

	public ?bool $newFiscalYear {
		get => $this->get('newFiscalYear');
	}

	public ?bool $closed {
		get => $this->get('closed');
	}

	public ?bool $dateLocked {
		get => $this->get('dateLocked');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}


}