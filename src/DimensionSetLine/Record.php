<?php
namespace Rebel\BCApi2\Entity\DimensionSetLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
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
    protected string $primaryKey = 'id';

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
        get => $this->getAsRelation('salesInvoice');
    }

    public ?SalesInvoiceLine\Record $salesInvoiceLine {
        get => $this->getAsRelation('salesInvoiceLine');
    }

    public ?CustomerPayment\Record $customerPayment {
        get => $this->getAsRelation('customerPayment');
    }

    public ?JournalLine\Record $journalLine {
        get => $this->getAsRelation('journalLine');
    }

    public ?TimeRegistrationEntry\Record $timeRegistrationEntry {
        get => $this->getAsRelation('timeRegistrationEntry');
    }

    public ?GeneralLedgerEntry\Record $generalLedgerEntry {
        get => $this->getAsRelation('generalLedgerEntry');
    }

    public ?SalesOrder\Record $salesOrder {
        get => $this->getAsRelation('salesOrder');
    }

    public ?SalesOrderLine\Record $salesOrderLine {
        get => $this->getAsRelation('salesOrderLine');
    }

    public ?SalesQuote\Record $salesQuote {
        get => $this->getAsRelation('salesQuote');
    }

    public ?SalesQuoteLine\Record $salesQuoteLine {
        get => $this->getAsRelation('salesQuoteLine');
    }

    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->getAsRelation('salesCreditMemo');
    }

    public ?SalesCreditMemoLine\Record $salesCreditMemoLine {
        get => $this->getAsRelation('salesCreditMemoLine');
    }

    public ?PurchaseInvoice\Record $purchaseInvoice {
        get => $this->getAsRelation('purchaseInvoice');
    }

    public ?PurchaseInvoiceLine\Record $purchaseInvoiceLine {
        get => $this->getAsRelation('purchaseInvoiceLine');
    }

    public ?VendorPayment\Record $vendorPayment {
        get => $this->getAsRelation('vendorPayment');
    }

    public ?SalesShipment\Record $salesShipment {
        get => $this->getAsRelation('salesShipment');
    }

    public ?SalesShipmentLine\Record $salesShipmentLine {
        get => $this->getAsRelation('salesShipmentLine');
    }

    public ?PurchaseReceipt\Record $purchaseReceipt {
        get => $this->getAsRelation('purchaseReceipt');
    }

    public ?PurchaseReceiptLine\Record $purchaseReceiptLine {
        get => $this->getAsRelation('purchaseReceiptLine');
    }

    public ?PurchaseOrder\Record $purchaseOrder {
        get => $this->getAsRelation('purchaseOrder');
    }

    public ?PurchaseOrderLine\Record $purchaseOrderLine {
        get => $this->getAsRelation('purchaseOrderLine');
    }

    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->getAsRelation('purchaseCreditMemo');
    }

    public ?PurchaseCreditMemoLine\Record $purchaseCreditMemoLine {
        get => $this->getAsRelation('purchaseCreditMemoLine');
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
