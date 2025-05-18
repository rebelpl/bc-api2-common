<?php
namespace Microsoft\NAV\DimensionSetLine;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\SalesInvoice;
use Microsoft\NAV\SalesInvoiceLine;
use Microsoft\NAV\CustomerPayment;
use Microsoft\NAV\JournalLine;
use Microsoft\NAV\TimeRegistrationEntry;
use Microsoft\NAV\GeneralLedgerEntry;
use Microsoft\NAV\SalesOrder;
use Microsoft\NAV\SalesOrderLine;
use Microsoft\NAV\SalesQuote;
use Microsoft\NAV\SalesQuoteLine;
use Microsoft\NAV\SalesCreditMemo;
use Microsoft\NAV\SalesCreditMemoLine;
use Microsoft\NAV\PurchaseInvoice;
use Microsoft\NAV\PurchaseInvoiceLine;
use Microsoft\NAV\VendorPayment;
use Microsoft\NAV\SalesShipment;
use Microsoft\NAV\SalesShipmentLine;
use Microsoft\NAV\PurchaseReceipt;
use Microsoft\NAV\PurchaseReceiptLine;
use Microsoft\NAV\PurchaseOrder;
use Microsoft\NAV\PurchaseOrderLine;
use Microsoft\NAV\PurchaseCreditMemo;
use Microsoft\NAV\PurchaseCreditMemoLine;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::salesInvoice->name => SalesInvoice\Record::class,
            Properties::salesInvoiceLine->name => SalesInvoiceLine\Record::class,
            Properties::customerPayment->name => CustomerPayment\Record::class,
            Properties::journalLine->name => JournalLine\Record::class,
            Properties::timeRegistrationEntry->name => TimeRegistrationEntry\Record::class,
            Properties::generalLedgerEntry->name => GeneralLedgerEntry\Record::class,
            Properties::salesOrder->name => SalesOrder\Record::class,
            Properties::salesOrderLine->name => SalesOrderLine\Record::class,
            Properties::salesQuote->name => SalesQuote\Record::class,
            Properties::salesQuoteLine->name => SalesQuoteLine\Record::class,
            Properties::salesCreditMemo->name => SalesCreditMemo\Record::class,
            Properties::salesCreditMemoLine->name => SalesCreditMemoLine\Record::class,
            Properties::purchaseInvoice->name => PurchaseInvoice\Record::class,
            Properties::purchaseInvoiceLine->name => PurchaseInvoiceLine\Record::class,
            Properties::vendorPayment->name => VendorPayment\Record::class,
            Properties::salesShipment->name => SalesShipment\Record::class,
            Properties::salesShipmentLine->name => SalesShipmentLine\Record::class,
            Properties::purchaseReceipt->name => PurchaseReceipt\Record::class,
            Properties::purchaseReceiptLine->name => PurchaseReceiptLine\Record::class,
            Properties::purchaseOrder->name => PurchaseOrder\Record::class,
            Properties::purchaseOrderLine->name => PurchaseOrderLine\Record::class,
            Properties::purchaseCreditMemo->name => PurchaseCreditMemo\Record::class,
            Properties::purchaseCreditMemoLine->name => PurchaseCreditMemoLine\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->get(Properties::code->name);
    }

    public function setCode(?string $value): self
    {
        $this->set(Properties::code->name, $value);
        return $this;
    }

    public function getConsolidationCode(): ?string
    {
        return $this->get(Properties::consolidationCode->name);
    }

    public function setConsolidationCode(?string $value): self
    {
        $this->set(Properties::consolidationCode->name, $value);
        return $this;
    }

    public function getParentId(): ?string
    {
        return $this->get(Properties::parentId->name);
    }

    public function setParentId(?string $value): self
    {
        $this->set(Properties::parentId->name, $value);
        return $this;
    }

    public function getParentType(): ?Enums\DimensionSetEntryBufferParentType
    {
        return $this->getAsEnum(Properties::parentType->name, Enums\DimensionSetEntryBufferParentType::class);
    }

    public function setParentType(?Enums\DimensionSetEntryBufferParentType $value): self
    {
        $this->set(Properties::parentType->name, $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getValueId(): ?string
    {
        return $this->get(Properties::valueId->name);
    }

    public function setValueId(?string $value): self
    {
        $this->set(Properties::valueId->name, $value);
        return $this;
    }

    public function getValueCode(): ?string
    {
        return $this->get(Properties::valueCode->name);
    }

    public function setValueCode(?string $value): self
    {
        $this->set(Properties::valueCode->name, $value);
        return $this;
    }

    public function getValueConsolidationCode(): ?string
    {
        return $this->get(Properties::valueConsolidationCode->name);
    }

    public function setValueConsolidationCode(?string $value): self
    {
        $this->set(Properties::valueConsolidationCode->name, $value);
        return $this;
    }

    public function getValueDisplayName(): ?string
    {
        return $this->get(Properties::valueDisplayName->name);
    }

    public function setValueDisplayName(?string $value): self
    {
        $this->set(Properties::valueDisplayName->name, $value);
        return $this;
    }

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->get(Properties::salesInvoice->name);
    }

    public function getSalesInvoiceLine(): ?SalesInvoiceLine\Record
    {
        return $this->get(Properties::salesInvoiceLine->name);
    }

    public function getCustomerPayment(): ?CustomerPayment\Record
    {
        return $this->get(Properties::customerPayment->name);
    }

    public function getJournalLine(): ?JournalLine\Record
    {
        return $this->get(Properties::journalLine->name);
    }

    public function getTimeRegistrationEntry(): ?TimeRegistrationEntry\Record
    {
        return $this->get(Properties::timeRegistrationEntry->name);
    }

    public function getGeneralLedgerEntry(): ?GeneralLedgerEntry\Record
    {
        return $this->get(Properties::generalLedgerEntry->name);
    }

    public function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->get(Properties::salesOrder->name);
    }

    public function getSalesOrderLine(): ?SalesOrderLine\Record
    {
        return $this->get(Properties::salesOrderLine->name);
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->get(Properties::salesQuote->name);
    }

    public function getSalesQuoteLine(): ?SalesQuoteLine\Record
    {
        return $this->get(Properties::salesQuoteLine->name);
    }

    public function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->get(Properties::salesCreditMemo->name);
    }

    public function getSalesCreditMemoLine(): ?SalesCreditMemoLine\Record
    {
        return $this->get(Properties::salesCreditMemoLine->name);
    }

    public function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->get(Properties::purchaseInvoice->name);
    }

    public function getPurchaseInvoiceLine(): ?PurchaseInvoiceLine\Record
    {
        return $this->get(Properties::purchaseInvoiceLine->name);
    }

    public function getVendorPayment(): ?VendorPayment\Record
    {
        return $this->get(Properties::vendorPayment->name);
    }

    public function getSalesShipment(): ?SalesShipment\Record
    {
        return $this->get(Properties::salesShipment->name);
    }

    public function getSalesShipmentLine(): ?SalesShipmentLine\Record
    {
        return $this->get(Properties::salesShipmentLine->name);
    }

    public function getPurchaseReceipt(): ?PurchaseReceipt\Record
    {
        return $this->get(Properties::purchaseReceipt->name);
    }

    public function getPurchaseReceiptLine(): ?PurchaseReceiptLine\Record
    {
        return $this->get(Properties::purchaseReceiptLine->name);
    }

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->get(Properties::purchaseOrder->name);
    }

    public function getPurchaseOrderLine(): ?PurchaseOrderLine\Record
    {
        return $this->get(Properties::purchaseOrderLine->name);
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get(Properties::purchaseCreditMemo->name);
    }

    public function getPurchaseCreditMemoLine(): ?PurchaseCreditMemoLine\Record
    {
        return $this->get(Properties::purchaseCreditMemoLine->name);
    }
}