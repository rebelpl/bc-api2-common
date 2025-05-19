<?php
namespace Rebel\BCApi2\Entity\ApplyVendorEntry;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?bool $applied {
		get => $this->get('applied');
		set => $this->set('applied', $value);
	}

	public ?string $appliesToId {
		get => $this->get('appliesToId');
		set => $this->set('appliesToId', $value);
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
		set => $this->set('postingDate', $value);
	}

	public ?Enums\GenJournalDocumentType $documentType {
		get => $this->get('documentType', Enums\GenJournalDocumentType::class);
		set => $this->set('documentType', $value);
	}

	public ?string $documentNumber {
		get => $this->get('documentNumber');
		set => $this->set('documentNumber', $value);
	}

	public ?string $externalDocumentNumber {
		get => $this->get('externalDocumentNumber');
		set => $this->set('externalDocumentNumber', $value);
	}

	public ?string $vendorNumber {
		get => $this->get('vendorNumber');
		set => $this->set('vendorNumber', $value);
	}

	public ?string $vendorName {
		get => $this->get('vendorName');
		set => $this->set('vendorName', $value);
	}

	public ?string $description {
		get => $this->get('description');
		set => $this->set('description', $value);
	}

	public ?float $remainingAmount {
		get => $this->get('remainingAmount');
		set => $this->set('remainingAmount', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}