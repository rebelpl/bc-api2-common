<?php
namespace Rebel\BCApi2\Entity\VendorPayment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\ApplyVendorEntry;
use Rebel\BCApi2\Entity\VendorPaymentJournal;

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

	public ?string $vendorId {
		get => $this->get('vendorId');
		set => $this->set('vendorId', $value);
	}

	public ?string $vendorNumber {
		get => $this->get('vendorNumber');
		set => $this->set('vendorNumber', $value);
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

	public ?Vendor\Record $vendor {
		get => $this->get('vendor');
		set => $this->set('vendor', $value);
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

	/** @var Entity\Collection<ApplyVendorEntry\Record> */
	public Entity\Collection $applyVendorEntries {
		get => $this->get('applyVendorEntries', 'collection');
	}

	public ?VendorPaymentJournal\Record $vendorPaymentJournal {
		get => $this->get('vendorPaymentJournal');
		set => $this->set('vendorPaymentJournal', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
			'vendor' => Vendor\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
			'applyVendorEntries' => ApplyVendorEntry\Record::class,
			'vendorPaymentJournal' => VendorPaymentJournal\Record::class,
        ];
    }
}