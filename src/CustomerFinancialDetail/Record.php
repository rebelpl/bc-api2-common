<?php
namespace Rebel\BCApi2\Entity\CustomerFinancialDetail;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $number {
		get => $this->get('number');
	}

	public ?float $balance {
		get => $this->get('balance');
	}

	public ?float $totalSalesExcludingTax {
		get => $this->get('totalSalesExcludingTax');
	}

	public ?float $overdueAmount {
		get => $this->get('overdueAmount');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'customer' => Customer\Record::class,
        ];
    }
}