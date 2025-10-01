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
    protected $primaryKey = 'id';

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

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getFileName(): ?string
    {
        return $this->get('fileName');
    }

    public function setFileName(?string $value): self
    {
        $this->set('fileName', $value);
        return $this;
    }

    public function getByteSize(): ?int
    {
        return $this->get('byteSize');
    }

    public function setByteSize(?int $value): self
    {
        $this->set('byteSize', $value);
        return $this;
    }

    public function getAttachmentContent(): Entity\DataStream
    {
        return $this->get('attachmentContent');
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

    public function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    public function setParentId(?string $value): self
    {
        $this->set('parentId', $value);
        return $this;
    }

    public function getLineNumber(): ?int
    {
        return $this->get('lineNumber');
    }

    public function setLineNumber(?int $value): self
    {
        $this->set('lineNumber', $value);
        return $this;
    }

    public function getDocumentFlowSales(): ?bool
    {
        return $this->get('documentFlowSales');
    }

    public function setDocumentFlowSales(?bool $value): self
    {
        $this->set('documentFlowSales', $value);
        return $this;
    }

    public function getDocumentFlowPurchase(): ?bool
    {
        return $this->get('documentFlowPurchase');
    }

    public function setDocumentFlowPurchase(?bool $value): self
    {
        $this->set('documentFlowPurchase', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getItem(): ?Item\Record
    {
        return $this->getAsRelation('item');
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->getAsRelation('vendor');
    }

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->getAsRelation('salesInvoice');
    }

    public function getEmployee(): ?Employee\Record
    {
        return $this->getAsRelation('employee');
    }

    public function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->getAsRelation('salesOrder');
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->getAsRelation('salesQuote');
    }

    public function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->getAsRelation('salesCreditMemo');
    }

    public function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->getAsRelation('purchaseInvoice');
    }

    public function getProject(): ?Project\Record
    {
        return $this->getAsRelation('project');
    }

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->getAsRelation('purchaseOrder');
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->getAsRelation('purchaseCreditMemo');
    }
}
