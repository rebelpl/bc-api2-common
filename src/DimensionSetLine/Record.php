<?php
namespace Rebel\BCApi2\Entity\DimensionSetLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerPayment;
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
    protected $primaryKey = 'id';

    protected $classMap = [
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

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
    }

    public function getConsolidationCode(): ?string
    {
        return $this->get('consolidationCode');
    }

    public function setConsolidationCode(?string $value): self
    {
        $this->set('consolidationCode', $value);
        return $this;
    }

    public function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    public function setParentId(?string $value): self
    {
        $this->set('parentId', $value);
        return $this;
    }

    public function getParentType(): ?string
    {
        return $this->get('parentType');
    }

    public function setParentType(?string $value): self
    {
        $this->set('parentType', $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getValueId(): ?string
    {
        return $this->get('valueId');
    }

    public function setValueId(?string $value): self
    {
        $this->set('valueId', $value);
        return $this;
    }

    public function getValueCode(): ?string
    {
        return $this->get('valueCode');
    }

    public function setValueCode(?string $value): self
    {
        $this->set('valueCode', $value);
        return $this;
    }

    public function getValueConsolidationCode(): ?string
    {
        return $this->get('valueConsolidationCode');
    }

    public function setValueConsolidationCode(?string $value): self
    {
        $this->set('valueConsolidationCode', $value);
        return $this;
    }

    public function getValueDisplayName(): ?string
    {
        return $this->get('valueDisplayName');
    }

    public function setValueDisplayName(?string $value): self
    {
        $this->set('valueDisplayName', $value);
        return $this;
    }

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->getAsRelation('salesInvoice');
    }

    public function getSalesInvoiceLine(): ?SalesInvoiceLine\Record
    {
        return $this->getAsRelation('salesInvoiceLine');
    }

    public function getCustomerPayment(): ?CustomerPayment\Record
    {
        return $this->getAsRelation('customerPayment');
    }

    public function getJournalLine(): ?JournalLine\Record
    {
        return $this->getAsRelation('journalLine');
    }

    public function getTimeRegistrationEntry(): ?TimeRegistrationEntry\Record
    {
        return $this->getAsRelation('timeRegistrationEntry');
    }

    public function getGeneralLedgerEntry(): ?GeneralLedgerEntry\Record
    {
        return $this->getAsRelation('generalLedgerEntry');
    }

    public function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->getAsRelation('salesOrder');
    }

    public function getSalesOrderLine(): ?SalesOrderLine\Record
    {
        return $this->getAsRelation('salesOrderLine');
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->getAsRelation('salesQuote');
    }

    public function getSalesQuoteLine(): ?SalesQuoteLine\Record
    {
        return $this->getAsRelation('salesQuoteLine');
    }

    public function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->getAsRelation('salesCreditMemo');
    }

    public function getSalesCreditMemoLine(): ?SalesCreditMemoLine\Record
    {
        return $this->getAsRelation('salesCreditMemoLine');
    }

    public function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->getAsRelation('purchaseInvoice');
    }

    public function getPurchaseInvoiceLine(): ?PurchaseInvoiceLine\Record
    {
        return $this->getAsRelation('purchaseInvoiceLine');
    }

    public function getVendorPayment(): ?VendorPayment\Record
    {
        return $this->getAsRelation('vendorPayment');
    }

    public function getSalesShipment(): ?SalesShipment\Record
    {
        return $this->getAsRelation('salesShipment');
    }

    public function getSalesShipmentLine(): ?SalesShipmentLine\Record
    {
        return $this->getAsRelation('salesShipmentLine');
    }

    public function getPurchaseReceipt(): ?PurchaseReceipt\Record
    {
        return $this->getAsRelation('purchaseReceipt');
    }

    public function getPurchaseReceiptLine(): ?PurchaseReceiptLine\Record
    {
        return $this->getAsRelation('purchaseReceiptLine');
    }

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->getAsRelation('purchaseOrder');
    }

    public function getPurchaseOrderLine(): ?PurchaseOrderLine\Record
    {
        return $this->getAsRelation('purchaseOrderLine');
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->getAsRelation('purchaseCreditMemo');
    }

    public function getPurchaseCreditMemoLine(): ?PurchaseCreditMemoLine\Record
    {
        return $this->getAsRelation('purchaseCreditMemoLine');
    }
}
