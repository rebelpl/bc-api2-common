<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerSetup;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?\DateTime $allowPostingFrom {
		get => $this->get('allowPostingFrom', 'date');
	}

	public ?\DateTime $allowPostingTo {
		get => $this->get('allowPostingTo', 'date');
	}

	public ?string $additionalReportingCurrency {
		get => $this->get('additionalReportingCurrency');
	}

	public ?string $localCurrencyCode {
		get => $this->get('localCurrencyCode');
	}

	public ?string $localCurrencySymbol {
		get => $this->get('localCurrencySymbol');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}

	public ?bool $allowQueryFromConsolidation {
		get => $this->get('allowQueryFromConsolidation');
	}

	public ?string $shortcutDimension1Code {
		get => $this->get('shortcutDimension1Code');
	}

	public ?string $shortcutDimension2Code {
		get => $this->get('shortcutDimension2Code');
	}

	public ?string $shortcutDimension3Code {
		get => $this->get('shortcutDimension3Code');
	}

	public ?string $shortcutDimension4Code {
		get => $this->get('shortcutDimension4Code');
	}

	public ?string $shortcutDimension5Code {
		get => $this->get('shortcutDimension5Code');
	}

	public ?string $shortcutDimension6Code {
		get => $this->get('shortcutDimension6Code');
	}

	public ?string $shortcutDimension7Code {
		get => $this->get('shortcutDimension7Code');
	}

	public ?string $shortcutDimension8Code {
		get => $this->get('shortcutDimension8Code');
	}


}