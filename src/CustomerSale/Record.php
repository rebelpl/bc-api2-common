<?php
namespace Rebel\BCApi2\Entity\CustomerSale;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $customerId {
		get => $this->get('customerId');
	}

	public ?string $customerNumber {
		get => $this->get('customerNumber');
	}

	public ?string $name {
		get => $this->get('name');
	}

	public ?float $totalSalesAmount {
		get => $this->get('totalSalesAmount');
	}

	public ?\DateTime $dateFilter_FilterOnly {
		get => $this->get('dateFilter_FilterOnly', 'date');
	}


}