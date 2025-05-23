<?php
namespace Rebel\BCApi2\Entity\DocumentAttachment;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Enums;
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
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $fileName {
        set { $this->set('fileName', $value); }
        get => $this->get('fileName');
    }

    public ?int $byteSize {
        set { $this->set('byteSize', $value); }
        get => $this->get('byteSize');
    }

    public ?string $attachmentContent {
        set { $this->set('attachmentContent', $value); }
        get => $this->get('attachmentContent');
    }

    public ?Enums\AttachmentEntityBufferDocumentType $parentType {
        set { $this->set('parentType', $value); }
        get => $this->getAsEnum('parentType', Enums\AttachmentEntityBufferDocumentType::class);
    }

    public ?string $parentId {
        set { $this->set('parentId', $value); }
        get => $this->get('parentId');
    }

    public ?int $lineNumber {
        set { $this->set('lineNumber', $value); }
        get => $this->get('lineNumber');
    }

    public ?bool $documentFlowSales {
        set { $this->set('documentFlowSales', $value); }
        get => $this->get('documentFlowSales');
    }

    public ?bool $documentFlowPurchase {
        set { $this->set('documentFlowPurchase', $value); }
        get => $this->get('documentFlowPurchase');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Item\Record $item {
        get => $this->get('item');
    }

    public ?Customer\Record $customer {
        get => $this->get('customer');
    }

    public ?Vendor\Record $vendor {
        get => $this->get('vendor');
    }

    public ?SalesInvoice\Record $salesInvoice {
        get => $this->get('salesInvoice');
    }

    public ?Employee\Record $employee {
        get => $this->get('employee');
    }

    public ?SalesOrder\Record $salesOrder {
        get => $this->get('salesOrder');
    }

    public ?SalesQuote\Record $salesQuote {
        get => $this->get('salesQuote');
    }

    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->get('salesCreditMemo');
    }

    public ?PurchaseInvoice\Record $purchaseInvoice {
        get => $this->get('purchaseInvoice');
    }

    public ?Project\Record $project {
        get => $this->get('project');
    }

    public ?PurchaseOrder\Record $purchaseOrder {
        get => $this->get('purchaseOrder');
    }

    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->get('purchaseCreditMemo');
    }

    protected array $classMap = [
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
