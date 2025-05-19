<?php
namespace Rebel\BCApi2\Entity\CustomerPayment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $journalId {
		get => $this->get('journalId');
		set => $this->set('journalId', $value);
	}

	public ?string $journalDisplayName {
		get => $this->get('journalDisplayName');
		set => $this->set('journalDisplayName', $value);
	}

	public ?int $lineNumber {
		get => $this->get('lineNumber');
		set => $this->set('lineNumber', $value);
	}

	public ?string $customerId {
		get => $this->get('customerId');
		set => $this->set('customerId', $value);
	}

	public ?string $customerNumber {
		get => $this->get('customerNumber');
		set => $this->set('customerNumber', $value);
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
		set => $this->set('postingDate', $value);
	}

	public ?string $documentNumber {
		get => $this->get('documentNumber');
		set => $this->set('documentNumber', $value);
	}

	public ?string $externalDocumentNumber {
		get => $this->get('externalDocumentNumber');
		set => $this->set('externalDocumentNumber', $value);
	}

	public ?float $amount {
		get => $this->get('amount');
		set => $this->set('amount', $value);
	}

	public ?string $appliesToInvoiceId {
		get => $this->get('appliesToInvoiceId');
		set => $this->set('appliesToInvoiceId', $value);
	}

	public ?string $appliesToInvoiceNumber {
		get => $this->get('appliesToInvoiceNumber');
		set => $this->set('appliesToInvoiceNumber', $value);
	}

	public ?string $description {
		get => $this->get('description');
		set => $this->set('description', $value);
	}

	public ?string $comment {
		get => $this->get('comment');
		set => $this->set('comment', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?CustomerPaymentJournal\Record $customerPaymentJournal {
		get => $this->get('customerPaymentJournal');
		set => $this->set('customerPaymentJournal', $value);
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
			'customer' => Customer\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}