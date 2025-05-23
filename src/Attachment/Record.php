<?php
namespace Rebel\BCApi2\Entity\Attachment;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\GeneralLedgerEntry;
use Rebel\BCApi2\Entity\JournalLine;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesQuote;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $parentId {
        set { $this->set('parentId', $value); }
        get => $this->get('parentId');
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

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Enums\AttachmentEntityBufferDocumentType $parentType {
        set { $this->set('parentType', $value); }
        get => $this->getAsEnum('parentType', Enums\AttachmentEntityBufferDocumentType::class);
    }

    public ?SalesInvoice\Record $salesInvoice {
        get => $this->get('salesInvoice');
    }

    public ?JournalLine\Record $journalLine {
        get => $this->get('journalLine');
    }

    public ?GeneralLedgerEntry\Record $generalLedgerEntry {
        get => $this->get('generalLedgerEntry');
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

    public ?PurchaseOrder\Record $purchaseOrder {
        get => $this->get('purchaseOrder');
    }

    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->get('purchaseCreditMemo');
    }

    protected array $classMap = [
        'salesInvoice' => SalesInvoice\Record::class,
        'journalLine' => JournalLine\Record::class,
        'generalLedgerEntry' => GeneralLedgerEntry\Record::class,
        'salesOrder' => SalesOrder\Record::class,
        'salesQuote' => SalesQuote\Record::class,
        'salesCreditMemo' => SalesCreditMemo\Record::class,
        'purchaseInvoice' => PurchaseInvoice\Record::class,
        'purchaseOrder' => PurchaseOrder\Record::class,
        'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
    ];
}
