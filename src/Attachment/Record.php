<?php
namespace Rebel\BCApi2\Entity\Attachment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\JournalLine;
use Rebel\BCApi2\Entity\GeneralLedgerEntry;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $parentId {
		get => $this->get('parentId');
		set => $this->set('parentId', $value);
	}

	public ?string $fileName {
		get => $this->get('fileName');
		set => $this->set('fileName', $value);
	}

	public ?int $byteSize {
		get => $this->get('byteSize');
		set => $this->set('byteSize', $value);
	}

	public ?string $attachmentContent {
		get => $this->get('attachmentContent');
		set => $this->set('attachmentContent', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Enums\AttachmentEntityBufferDocumentType $parentType {
		get => $this->get('parentType', Enums\AttachmentEntityBufferDocumentType::class);
		set => $this->set('parentType', $value);
	}

	public ?SalesInvoice\Record $salesInvoice {
		get => $this->get('salesInvoice');
		set => $this->set('salesInvoice', $value);
	}

	public ?JournalLine\Record $journalLine {
		get => $this->get('journalLine');
		set => $this->set('journalLine', $value);
	}

	public ?GeneralLedgerEntry\Record $generalLedgerEntry {
		get => $this->get('generalLedgerEntry');
		set => $this->set('generalLedgerEntry', $value);
	}

	public ?SalesOrder\Record $salesOrder {
		get => $this->get('salesOrder');
		set => $this->set('salesOrder', $value);
	}

	public ?SalesQuote\Record $salesQuote {
		get => $this->get('salesQuote');
		set => $this->set('salesQuote', $value);
	}

	public ?SalesCreditMemo\Record $salesCreditMemo {
		get => $this->get('salesCreditMemo');
		set => $this->set('salesCreditMemo', $value);
	}

	public ?PurchaseInvoice\Record $purchaseInvoice {
		get => $this->get('purchaseInvoice');
		set => $this->set('purchaseInvoice', $value);
	}

	public ?PurchaseOrder\Record $purchaseOrder {
		get => $this->get('purchaseOrder');
		set => $this->set('purchaseOrder', $value);
	}

	public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
		get => $this->get('purchaseCreditMemo');
		set => $this->set('purchaseCreditMemo', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'salesInvoice' => SalesInvoice\Record::class,
			'journalLine' => JournalLine\Record::class,
			'generalLedgerEntry' => GeneralLedgerEntry\Record::class,
			'salesOrder' => SalesOrder\Record::class,
			'salesQuote' => SalesQuote\Record::class,
			'salesCreditMemo' => SalesCreditMemo\Record::class,
			'purchaseInvoice' => PurchaseInvoice\Record::class,
			'purchaseOrder' => PurchaseOrder\Record::class,
			'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
        ];
    }
}