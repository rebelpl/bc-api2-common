<?php
namespace Rebel\BCApi2\Entity\DimensionSetLine;

use Carbon\Carbon;
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

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
    }

    function getConsolidationCode(): ?string
    {
        return $this->get('consolidationCode');
    }

    function setConsolidationCode(?string $value): self
    {
        $this->set('consolidationCode', $value);
        return $this;
    }

    function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    function setParentId(?string $value): self
    {
        $this->set('parentId', $value);
        return $this;
    }

    function getParentType(): ?string
    {
        return $this->get('parentType');
    }

    function setParentType(?string $value): self
    {
        $this->set('parentType', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getValueId(): ?string
    {
        return $this->get('valueId');
    }

    function setValueId(?string $value): self
    {
        $this->set('valueId', $value);
        return $this;
    }

    function getValueCode(): ?string
    {
        return $this->get('valueCode');
    }

    function setValueCode(?string $value): self
    {
        $this->set('valueCode', $value);
        return $this;
    }

    function getValueConsolidationCode(): ?string
    {
        return $this->get('valueConsolidationCode');
    }

    function setValueConsolidationCode(?string $value): self
    {
        $this->set('valueConsolidationCode', $value);
        return $this;
    }

    function getValueDisplayName(): ?string
    {
        return $this->get('valueDisplayName');
    }

    function setValueDisplayName(?string $value): self
    {
        $this->set('valueDisplayName', $value);
        return $this;
    }

    function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->get('salesInvoice');
    }

    function getSalesInvoiceLine(): ?SalesInvoiceLine\Record
    {
        return $this->get('salesInvoiceLine');
    }

    function getCustomerPayment(): ?CustomerPayment\Record
    {
        return $this->get('customerPayment');
    }

    function getJournalLine(): ?JournalLine\Record
    {
        return $this->get('journalLine');
    }

    function getTimeRegistrationEntry(): ?TimeRegistrationEntry\Record
    {
        return $this->get('timeRegistrationEntry');
    }

    function getGeneralLedgerEntry(): ?GeneralLedgerEntry\Record
    {
        return $this->get('generalLedgerEntry');
    }

    function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->get('salesOrder');
    }

    function getSalesOrderLine(): ?SalesOrderLine\Record
    {
        return $this->get('salesOrderLine');
    }

    function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->get('salesQuote');
    }

    function getSalesQuoteLine(): ?SalesQuoteLine\Record
    {
        return $this->get('salesQuoteLine');
    }

    function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->get('salesCreditMemo');
    }

    function getSalesCreditMemoLine(): ?SalesCreditMemoLine\Record
    {
        return $this->get('salesCreditMemoLine');
    }

    function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->get('purchaseInvoice');
    }

    function getPurchaseInvoiceLine(): ?PurchaseInvoiceLine\Record
    {
        return $this->get('purchaseInvoiceLine');
    }

    function getVendorPayment(): ?VendorPayment\Record
    {
        return $this->get('vendorPayment');
    }

    function getSalesShipment(): ?SalesShipment\Record
    {
        return $this->get('salesShipment');
    }

    function getSalesShipmentLine(): ?SalesShipmentLine\Record
    {
        return $this->get('salesShipmentLine');
    }

    function getPurchaseReceipt(): ?PurchaseReceipt\Record
    {
        return $this->get('purchaseReceipt');
    }

    function getPurchaseReceiptLine(): ?PurchaseReceiptLine\Record
    {
        return $this->get('purchaseReceiptLine');
    }

    function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->get('purchaseOrder');
    }

    function getPurchaseOrderLine(): ?PurchaseOrderLine\Record
    {
        return $this->get('purchaseOrderLine');
    }

    function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get('purchaseCreditMemo');
    }

    function getPurchaseCreditMemoLine(): ?PurchaseCreditMemoLine\Record
    {
        return $this->get('purchaseCreditMemoLine');
    }
}
