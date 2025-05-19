<?php
namespace Rebel\BCApi2\Entity\CurrencyExchangeRate;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $currencyCode {
		get => $this->get('currencyCode');
	}

	public ?\DateTime $startingDate {
		get => $this->get('startingDate', 'date');
	}

	public ?float $exchangeRateAmount {
		get => $this->get('exchangeRateAmount');
	}

	public ?string $relationalCurrencyCode {
		get => $this->get('relationalCurrencyCode');
	}

	public ?float $relationalExchangeRateAmount {
		get => $this->get('relationalExchangeRateAmount');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}


}