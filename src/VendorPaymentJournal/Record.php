<?php
namespace Rebel\BCApi2\Entity\VendorPaymentJournal;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\VendorPayment;

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

	public ?string $balancingAccountId {
		get => $this->get('balancingAccountId');
		set => $this->set('balancingAccountId', $value);
	}

	public ?string $balancingAccountNumber {
		get => $this->get('balancingAccountNumber');
		set => $this->set('balancingAccountNumber', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	/** @var Entity\Collection<VendorPayment\Record> */
	public Entity\Collection $vendorPayments {
		get => $this->get('vendorPayments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'vendorPayments' => VendorPayment\Record::class,
        ];
    }
}