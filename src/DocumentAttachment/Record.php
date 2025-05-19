<?php
namespace Rebel\BCApi2\Entity\DocumentAttachment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\Project;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
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

	public ?Enums\AttachmentEntityBufferDocumentType $parentType {
		get => $this->get('parentType', Enums\AttachmentEntityBufferDocumentType::class);
		set => $this->set('parentType', $value);
	}

	public ?string $parentId {
		get => $this->get('parentId');
		set => $this->set('parentId', $value);
	}

	public ?int $lineNumber {
		get => $this->get('lineNumber');
		set => $this->set('lineNumber', $value);
	}

	public ?bool $documentFlowSales {
		get => $this->get('documentFlowSales');
		set => $this->set('documentFlowSales', $value);
	}

	public ?bool $documentFlowPurchase {
		get => $this->get('documentFlowPurchase');
		set => $this->set('documentFlowPurchase', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Item\Record $item {
		get => $this->get('item');
		set => $this->set('item', $value);
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

	public ?Vendor\Record $vendor {
		get => $this->get('vendor');
		set => $this->set('vendor', $value);
	}

	public ?SalesInvoice\Record $salesInvoice {
		get => $this->get('salesInvoice');
		set => $this->set('salesInvoice', $value);
	}

	public ?Employee\Record $employee {
		get => $this->get('employee');
		set => $this->set('employee', $value);
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

	public ?Project\Record $project {
		get => $this->get('project');
		set => $this->set('project', $value);
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
			'item' => Item\Record::class,
			'customer' => Customer\Record::class,
			'vendor' => Vendor\Record::class,
			'salesInvoice' => SalesInvoice\Record::class,
			'employee' => Employee\Record::class,
			'salesOrder' => SalesOrder\Record::class,
			'salesQuote' => SalesQuote\Record::class,
			'salesCreditMemo' => SalesCreditMemo\Record::class,
			'purchaseInvoice' => PurchaseInvoice\Record::class,
			'project' => Project\Record::class,
			'purchaseOrder' => PurchaseOrder\Record::class,
			'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
        ];
    }
}