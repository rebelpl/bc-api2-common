<?php
namespace Rebel\BCApi2\Entity\TaxArea;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $code {
		get => $this->get('code');
		set => $this->set('code', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?Enums\TaxBufferType $taxType {
		get => $this->get('taxType', Enums\TaxBufferType::class);
		set => $this->set('taxType', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}