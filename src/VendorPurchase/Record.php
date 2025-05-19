<?php
namespace Rebel\BCApi2\Entity\VendorPurchase;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $vendorId {
		get => $this->get('vendorId');
	}

	public ?string $vendorNumber {
		get => $this->get('vendorNumber');
	}

	public ?string $name {
		get => $this->get('name');
	}

	public ?float $totalPurchaseAmount {
		get => $this->get('totalPurchaseAmount');
	}

	public ?\DateTime $dateFilter_FilterOnly {
		get => $this->get('dateFilter_FilterOnly', 'date');
	}


}