<?php
namespace Rebel\BCApi2\Entity\CustomerPaymentJournal;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerPayment;

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

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?string $balancingAccountId {
		get => $this->get('balancingAccountId');
		set => $this->set('balancingAccountId', $value);
	}

	public ?string $balancingAccountNumber {
		get => $this->get('balancingAccountNumber');
		set => $this->set('balancingAccountNumber', $value);
	}

	/** @var Entity\Collection<CustomerPayment\Record> */
	public Entity\Collection $customerPayments {
		get => $this->get('customerPayments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'customerPayments' => CustomerPayment\Record::class,
        ];
    }
}