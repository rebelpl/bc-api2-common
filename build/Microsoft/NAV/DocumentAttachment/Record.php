<?php
namespace Microsoft\NAV\DocumentAttachment;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Item;
use Microsoft\NAV\Customer;
use Microsoft\NAV\Vendor;
use Microsoft\NAV\SalesInvoice;
use Microsoft\NAV\Employee;
use Microsoft\NAV\SalesOrder;
use Microsoft\NAV\SalesQuote;
use Microsoft\NAV\SalesCreditMemo;
use Microsoft\NAV\PurchaseInvoice;
use Microsoft\NAV\Project;
use Microsoft\NAV\PurchaseOrder;
use Microsoft\NAV\PurchaseCreditMemo;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::item->name => Item\Record::class,
            Properties::customer->name => Customer\Record::class,
            Properties::vendor->name => Vendor\Record::class,
            Properties::salesInvoice->name => SalesInvoice\Record::class,
            Properties::employee->name => Employee\Record::class,
            Properties::salesOrder->name => SalesOrder\Record::class,
            Properties::salesQuote->name => SalesQuote\Record::class,
            Properties::salesCreditMemo->name => SalesCreditMemo\Record::class,
            Properties::purchaseInvoice->name => PurchaseInvoice\Record::class,
            Properties::project->name => Project\Record::class,
            Properties::purchaseOrder->name => PurchaseOrder\Record::class,
            Properties::purchaseCreditMemo->name => PurchaseCreditMemo\Record::class,
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

    public function getFileName(): ?string
    {
        return $this->get(Properties::fileName->name);
    }

    public function setFileName(?string $value): self
    {
        $this->set(Properties::fileName->name, $value);
        return $this;
    }

    public function getByteSize(): ?int
    {
        return $this->get(Properties::byteSize->name);
    }

    public function setByteSize(?int $value): self
    {
        $this->set(Properties::byteSize->name, $value);
        return $this;
    }

    public function getAttachmentContent(): ?string
    {
        return $this->get(Properties::attachmentContent->name);
    }

    public function setAttachmentContent(?string $value): self
    {
        $this->set(Properties::attachmentContent->name, $value);
        return $this;
    }

    public function getParentType(): ?Enums\AttachmentEntityBufferDocumentType
    {
        return $this->getAsEnum(Properties::parentType->name, Enums\AttachmentEntityBufferDocumentType::class);
    }

    public function setParentType(?Enums\AttachmentEntityBufferDocumentType $value): self
    {
        $this->set(Properties::parentType->name, $value);
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

    public function getLineNumber(): ?int
    {
        return $this->get(Properties::lineNumber->name);
    }

    public function setLineNumber(?int $value): self
    {
        $this->set(Properties::lineNumber->name, $value);
        return $this;
    }

    public function isDocumentFlowSales(): ?bool
    {
        return $this->get(Properties::documentFlowSales->name);
    }

    public function setDocumentFlowSales(?bool $value): self
    {
        $this->set(Properties::documentFlowSales->name, $value);
        return $this;
    }

    public function isDocumentFlowPurchase(): ?bool
    {
        return $this->get(Properties::documentFlowPurchase->name);
    }

    public function setDocumentFlowPurchase(?bool $value): self
    {
        $this->set(Properties::documentFlowPurchase->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getItem(): ?Item\Record
    {
        return $this->get(Properties::item->name);
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->get(Properties::vendor->name);
    }

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->get(Properties::salesInvoice->name);
    }

    public function getEmployee(): ?Employee\Record
    {
        return $this->get(Properties::employee->name);
    }

    public function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->get(Properties::salesOrder->name);
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->get(Properties::salesQuote->name);
    }

    public function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->get(Properties::salesCreditMemo->name);
    }

    public function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->get(Properties::purchaseInvoice->name);
    }

    public function getProject(): ?Project\Record
    {
        return $this->get(Properties::project->name);
    }

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->get(Properties::purchaseOrder->name);
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get(Properties::purchaseCreditMemo->name);
    }
}