<?php
namespace Rebel\BCApi2\Entity\DimensionSetLine;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerPayment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\GeneralLedgerEntry;
use Rebel\BCApi2\Entity\JournalLine;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\PurchaseCreditMemoLine;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseInvoiceLine;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\PurchaseOrderLine;
use Rebel\BCApi2\Entity\PurchaseReceipt;
use Rebel\BCApi2\Entity\PurchaseReceiptLine;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\SalesCreditMemoLine;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesInvoiceLine;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesOrderLine;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesQuoteLine;
use Rebel\BCApi2\Entity\SalesShipment;
use Rebel\BCApi2\Entity\SalesShipmentLine;
use Rebel\BCApi2\Entity\TimeRegistrationEntry;
use Rebel\BCApi2\Entity\VendorPayment;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        set {
            $this->set('code', $value);
        }
        get => $this->get('code');
    }

    public ?string $consolidationCode {
        set {
            $this->set('consolidationCode', $value);
        }
        get => $this->get('consolidationCode');
    }

    public ?string $parentId {
        set {
            $this->set('parentId', $value);
        }
        get => $this->get('parentId');
    }

    public ?Enums\DimensionSetEntryBufferParentType $parentType {
        set {
            $this->set('parentType', $value);
        }
        get => $this->getAsEnum('parentType', Enums\DimensionSetEntryBufferParentType::class);
    }

    public ?string $displayName {
        set {
            $this->set('displayName', $value);
        }
        get => $this->get('displayName');
    }

    public ?string $valueId {
        set {
            $this->set('valueId', $value);
        }
        get => $this->get('valueId');
    }

    public ?string $valueCode {
        set {
            $this->set('valueCode', $value);
        }
        get => $this->get('valueCode');
    }

    public ?string $valueConsolidationCode {
        set {
            $this->set('valueConsolidationCode', $value);
        }
        get => $this->get('valueConsolidationCode');
    }

    public ?string $valueDisplayName {
        set {
            $this->set('valueDisplayName', $value);
        }
        get => $this->get('valueDisplayName');
    }

    public ?SalesInvoice\Record $salesInvoice {
        get => $this->get('salesInvoice');
    }

    public ?SalesInvoiceLine\Record $salesInvoiceLine {
        get => $this->get('salesInvoiceLine');
    }

    public ?CustomerPayment\Record $customerPayment {
        get => $this->get('customerPayment');
    }

    public ?JournalLine\Record $journalLine {
        get => $this->get('journalLine');
    }

    public ?TimeRegistrationEntry\Record $timeRegistrationEntry {
        get => $this->get('timeRegistrationEntry');
    }

    public ?GeneralLedgerEntry\Record $generalLedgerEntry {
        get => $this->get('generalLedgerEntry');
    }

    public ?SalesOrder\Record $salesOrder {
        get => $this->get('salesOrder');
    }

    public ?SalesOrderLine\Record $salesOrderLine {
        get => $this->get('salesOrderLine');
    }

    public ?SalesQuote\Record $salesQuote {
        get => $this->get('salesQuote');
    }

    public ?SalesQuoteLine\Record $salesQuoteLine {
        get => $this->get('salesQuoteLine');
    }

    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->get('salesCreditMemo');
    }

    public ?SalesCreditMemoLine\Record $salesCreditMemoLine {
        get => $this->get('salesCreditMemoLine');
    }

    public ?PurchaseInvoice\Record $purchaseInvoice {
        get => $this->get('purchaseInvoice');
    }

    public ?PurchaseInvoiceLine\Record $purchaseInvoiceLine {
        get => $this->get('purchaseInvoiceLine');
    }

    public ?VendorPayment\Record $vendorPayment {
        get => $this->get('vendorPayment');
    }

    public ?SalesShipment\Record $salesShipment {
        get => $this->get('salesShipment');
    }

    public ?SalesShipmentLine\Record $salesShipmentLine {
        get => $this->get('salesShipmentLine');
    }

    public ?PurchaseReceipt\Record $purchaseReceipt {
        get => $this->get('purchaseReceipt');
    }

    public ?PurchaseReceiptLine\Record $purchaseReceiptLine {
        get => $this->get('purchaseReceiptLine');
    }

    public ?PurchaseOrder\Record $purchaseOrder {
        get => $this->get('purchaseOrder');
    }

    public ?PurchaseOrderLine\Record $purchaseOrderLine {
        get => $this->get('purchaseOrderLine');
    }

    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->get('purchaseCreditMemo');
    }

    public ?PurchaseCreditMemoLine\Record $purchaseCreditMemoLine {
        get => $this->get('purchaseCreditMemoLine');
    }

    protected array $classMap = [
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
