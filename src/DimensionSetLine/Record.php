<?php
namespace Rebel\BCApi2\Entity\DimensionSetLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesInvoiceLine;
use Rebel\BCApi2\Entity\CustomerPayment;
use Rebel\BCApi2\Entity\JournalLine;
use Rebel\BCApi2\Entity\TimeRegistrationEntry;
use Rebel\BCApi2\Entity\GeneralLedgerEntry;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesOrderLine;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesQuoteLine;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\SalesCreditMemoLine;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseInvoiceLine;
use Rebel\BCApi2\Entity\VendorPayment;
use Rebel\BCApi2\Entity\SalesShipment;
use Rebel\BCApi2\Entity\SalesShipmentLine;
use Rebel\BCApi2\Entity\PurchaseReceipt;
use Rebel\BCApi2\Entity\PurchaseReceiptLine;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\PurchaseOrderLine;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\PurchaseCreditMemoLine;

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

	public ?string $consolidationCode {
		get => $this->get('consolidationCode');
		set => $this->set('consolidationCode', $value);
	}

	public ?string $parentId {
		get => $this->get('parentId');
		set => $this->set('parentId', $value);
	}

	public ?Enums\DimensionSetEntryBufferParentType $parentType {
		get => $this->get('parentType', Enums\DimensionSetEntryBufferParentType::class);
		set => $this->set('parentType', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?string $valueId {
		get => $this->get('valueId');
		set => $this->set('valueId', $value);
	}

	public ?string $valueCode {
		get => $this->get('valueCode');
		set => $this->set('valueCode', $value);
	}

	public ?string $valueConsolidationCode {
		get => $this->get('valueConsolidationCode');
		set => $this->set('valueConsolidationCode', $value);
	}

	public ?string $valueDisplayName {
		get => $this->get('valueDisplayName');
		set => $this->set('valueDisplayName', $value);
	}

	public ?SalesInvoice\Record $salesInvoice {
		get => $this->get('salesInvoice');
		set => $this->set('salesInvoice', $value);
	}

	public ?SalesInvoiceLine\Record $salesInvoiceLine {
		get => $this->get('salesInvoiceLine');
		set => $this->set('salesInvoiceLine', $value);
	}

	public ?CustomerPayment\Record $customerPayment {
		get => $this->get('customerPayment');
		set => $this->set('customerPayment', $value);
	}

	public ?JournalLine\Record $journalLine {
		get => $this->get('journalLine');
		set => $this->set('journalLine', $value);
	}

	public ?TimeRegistrationEntry\Record $timeRegistrationEntry {
		get => $this->get('timeRegistrationEntry');
		set => $this->set('timeRegistrationEntry', $value);
	}

	public ?GeneralLedgerEntry\Record $generalLedgerEntry {
		get => $this->get('generalLedgerEntry');
		set => $this->set('generalLedgerEntry', $value);
	}

	public ?SalesOrder\Record $salesOrder {
		get => $this->get('salesOrder');
		set => $this->set('salesOrder', $value);
	}

	public ?SalesOrderLine\Record $salesOrderLine {
		get => $this->get('salesOrderLine');
		set => $this->set('salesOrderLine', $value);
	}

	public ?SalesQuote\Record $salesQuote {
		get => $this->get('salesQuote');
		set => $this->set('salesQuote', $value);
	}

	public ?SalesQuoteLine\Record $salesQuoteLine {
		get => $this->get('salesQuoteLine');
		set => $this->set('salesQuoteLine', $value);
	}

	public ?SalesCreditMemo\Record $salesCreditMemo {
		get => $this->get('salesCreditMemo');
		set => $this->set('salesCreditMemo', $value);
	}

	public ?SalesCreditMemoLine\Record $salesCreditMemoLine {
		get => $this->get('salesCreditMemoLine');
		set => $this->set('salesCreditMemoLine', $value);
	}

	public ?PurchaseInvoice\Record $purchaseInvoice {
		get => $this->get('purchaseInvoice');
		set => $this->set('purchaseInvoice', $value);
	}

	public ?PurchaseInvoiceLine\Record $purchaseInvoiceLine {
		get => $this->get('purchaseInvoiceLine');
		set => $this->set('purchaseInvoiceLine', $value);
	}

	public ?VendorPayment\Record $vendorPayment {
		get => $this->get('vendorPayment');
		set => $this->set('vendorPayment', $value);
	}

	public ?SalesShipment\Record $salesShipment {
		get => $this->get('salesShipment');
		set => $this->set('salesShipment', $value);
	}

	public ?SalesShipmentLine\Record $salesShipmentLine {
		get => $this->get('salesShipmentLine');
		set => $this->set('salesShipmentLine', $value);
	}

	public ?PurchaseReceipt\Record $purchaseReceipt {
		get => $this->get('purchaseReceipt');
		set => $this->set('purchaseReceipt', $value);
	}

	public ?PurchaseReceiptLine\Record $purchaseReceiptLine {
		get => $this->get('purchaseReceiptLine');
		set => $this->set('purchaseReceiptLine', $value);
	}

	public ?PurchaseOrder\Record $purchaseOrder {
		get => $this->get('purchaseOrder');
		set => $this->set('purchaseOrder', $value);
	}

	public ?PurchaseOrderLine\Record $purchaseOrderLine {
		get => $this->get('purchaseOrderLine');
		set => $this->set('purchaseOrderLine', $value);
	}

	public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
		get => $this->get('purchaseCreditMemo');
		set => $this->set('purchaseCreditMemo', $value);
	}

	public ?PurchaseCreditMemoLine\Record $purchaseCreditMemoLine {
		get => $this->get('purchaseCreditMemoLine');
		set => $this->set('purchaseCreditMemoLine', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'salesInvoice' => SalesInvoice\Record::class,
			'salesInvoiceLine' => SalesInvoiceLine\Record::class,
			'customerPayment' => CustomerPayment\Record::class,
			'journalLine' => JournalLine\Record::class,
			'timeRegistrationEntry' => TimeRegistrationEntry\Record::class,
			'generalLedgerEntry' => GeneralLedgerEntry\Record::class,
			'salesOrder' => SalesOrder\Record::class,
			'salesOrderLine' => SalesOrderLine\Record::class,
			'salesQuote' => SalesQuote\Record::class,
			'salesQuoteLine' => SalesQuoteLine\Record::class,
			'salesCreditMemo' => SalesCreditMemo\Record::class,
			'salesCreditMemoLine' => SalesCreditMemoLine\Record::class,
			'purchaseInvoice' => PurchaseInvoice\Record::class,
			'purchaseInvoiceLine' => PurchaseInvoiceLine\Record::class,
			'vendorPayment' => VendorPayment\Record::class,
			'salesShipment' => SalesShipment\Record::class,
			'salesShipmentLine' => SalesShipmentLine\Record::class,
			'purchaseReceipt' => PurchaseReceipt\Record::class,
			'purchaseReceiptLine' => PurchaseReceiptLine\Record::class,
			'purchaseOrder' => PurchaseOrder\Record::class,
			'purchaseOrderLine' => PurchaseOrderLine\Record::class,
			'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
			'purchaseCreditMemoLine' => PurchaseCreditMemoLine\Record::class,
        ];
    }
}