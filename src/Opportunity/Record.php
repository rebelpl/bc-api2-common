<?php
namespace Rebel\BCApi2\Entity\Opportunity;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

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

	public ?string $contactNumber {
		get => $this->get('contactNumber');
		set => $this->set('contactNumber', $value);
	}

	public ?string $contactName {
		get => $this->get('contactName');
		set => $this->set('contactName', $value);
	}

	public ?string $contactCompanyName {
		get => $this->get('contactCompanyName');
		set => $this->set('contactCompanyName', $value);
	}

	public ?string $salespersonCode {
		get => $this->get('salespersonCode');
		set => $this->set('salespersonCode', $value);
	}

	public ?string $description {
		get => $this->get('description');
		set => $this->set('description', $value);
	}

	public ?Enums\OpportunityStatus $status {
		get => $this->get('status', Enums\OpportunityStatus::class);
		set => $this->set('status', $value);
	}

	public ?bool $closed {
		get => $this->get('closed');
		set => $this->set('closed', $value);
	}

	public ?\DateTime $creationDate {
		get => $this->get('creationDate', 'date');
		set => $this->set('creationDate', $value);
	}

	public ?\DateTime $dateClosed {
		get => $this->get('dateClosed', 'date');
		set => $this->set('dateClosed', $value);
	}

	public ?float $calculatedCurrentValue {
		get => $this->get('calculatedCurrentValue');
		set => $this->set('calculatedCurrentValue', $value);
	}

	public ?float $chancesOfSuccessPrc {
		get => $this->get('chancesOfSuccessPrc');
		set => $this->set('chancesOfSuccessPrc', $value);
	}

	public ?float $completedPrc {
		get => $this->get('completedPrc');
		set => $this->set('completedPrc', $value);
	}

	public ?\DateTime $estimatedClosingDate {
		get => $this->get('estimatedClosingDate', 'date');
		set => $this->set('estimatedClosingDate', $value);
	}

	public ?float $estimatedValue {
		get => $this->get('estimatedValue');
		set => $this->set('estimatedValue', $value);
	}

	public ?\DateTime $systemCreatedAt {
		get => $this->get('systemCreatedAt', 'datetime');
		set => $this->set('systemCreatedAt', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}