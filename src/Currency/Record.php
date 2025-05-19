<?php
namespace Rebel\BCApi2\Entity\Currency;

use Rebel\BCApi2\Entity;

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

	public ?string $symbol {
		get => $this->get('symbol');
		set => $this->set('symbol', $value);
	}

	public ?string $amountDecimalPlaces {
		get => $this->get('amountDecimalPlaces');
		set => $this->set('amountDecimalPlaces', $value);
	}

	public ?float $amountRoundingPrecision {
		get => $this->get('amountRoundingPrecision');
		set => $this->set('amountRoundingPrecision', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}