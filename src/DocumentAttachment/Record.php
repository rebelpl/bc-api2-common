<?php
namespace Rebel\BCApi2\Entity\DocumentAttachment;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Project;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $classMap = [
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

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getFileName(): ?string
    {
        return $this->get('fileName');
    }

    function setFileName(?string $value): self
    {
        $this->set('fileName', $value);
        return $this;
    }

    function getByteSize(): ?int
    {
        return $this->get('byteSize');
    }

    function setByteSize(?int $value): self
    {
        $this->set('byteSize', $value);
        return $this;
    }

    function getAttachmentContent(): Entity\DataStream
    {
        return $this->get('attachmentContent');
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

    function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    function setParentId(?string $value): self
    {
        $this->set('parentId', $value);
        return $this;
    }

    function getLineNumber(): ?int
    {
        return $this->get('lineNumber');
    }

    function setLineNumber(?int $value): self
    {
        $this->set('lineNumber', $value);
        return $this;
    }

    function getDocumentFlowSales(): ?bool
    {
        return $this->get('documentFlowSales');
    }

    function setDocumentFlowSales(?bool $value): self
    {
        $this->set('documentFlowSales', $value);
        return $this;
    }

    function getDocumentFlowPurchase(): ?bool
    {
        return $this->get('documentFlowPurchase');
    }

    function setDocumentFlowPurchase(?bool $value): self
    {
        $this->set('documentFlowPurchase', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getItem(): ?Item\Record
    {
        return $this->getAsRelation('item');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }

    function getVendor(): ?Vendor\Record
    {
        return $this->getAsRelation('vendor');
    }

    function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->getAsRelation('salesInvoice');
    }

    function getEmployee(): ?Employee\Record
    {
        return $this->getAsRelation('employee');
    }

    function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->getAsRelation('salesOrder');
    }

    function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->getAsRelation('salesQuote');
    }

    function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->getAsRelation('salesCreditMemo');
    }

    function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->getAsRelation('purchaseInvoice');
    }

    function getProject(): ?Project\Record
    {
        return $this->getAsRelation('project');
    }

    function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->getAsRelation('purchaseOrder');
    }

    function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->getAsRelation('purchaseCreditMemo');
    }
}
