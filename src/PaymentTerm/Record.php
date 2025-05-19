<?php
namespace Rebel\BCApi2\Entity\PaymentTerm;

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

	public ?string $dueDateCalculation {
		get => $this->get('dueDateCalculation');
		set => $this->set('dueDateCalculation', $value);
	}

	public ?string $discountDateCalculation {
		get => $this->get('discountDateCalculation');
		set => $this->set('discountDateCalculation', $value);
	}

	public ?float $discountPercent {
		get => $this->get('discountPercent');
		set => $this->set('discountPercent', $value);
	}

	public ?bool $calculateDiscountOnCreditMemos {
		get => $this->get('calculateDiscountOnCreditMemos');
		set => $this->set('calculateDiscountOnCreditMemos', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}