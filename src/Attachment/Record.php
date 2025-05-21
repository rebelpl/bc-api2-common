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
        set => $this->set('parentId', $value);
        get => $this->get('parentId');
    }

    public ?string $fileName {
        set => $this->set('fileName', $value);
        get => $this->get('fileName');
    }

    public ?int $byteSize {
        set => $this->set('byteSize', $value);
        get => $this->get('byteSize');
    }

    public ?string $attachmentContent {
        set => $this->set('attachmentContent', $value);
        get => $this->get('attachmentContent');
    }

    public ?Carbon $lastModifiedDateTime {
        set => $this->setAsDateTime('lastModifiedDateTime', $value);
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Enums\AttachmentEntityBufferDocumentType $parentType {
        set => $this->set('parentType', $value);
        get => $this->getAsEnum('parentType', Enums\AttachmentEntityBufferDocumentType::class);
    }

    /** @var ?SalesInvoice\Record */
    public ?SalesInvoice\Record $salesInvoice {
        get => $this->get('salesInvoice');
    }

    /** @var ?JournalLine\Record */
    public ?JournalLine\Record $journalLine {
        get => $this->get('journalLine');
    }

    /** @var ?GeneralLedgerEntry\Record */
    public ?GeneralLedgerEntry\Record $generalLedgerEntry {
        get => $this->get('generalLedgerEntry');
    }

    /** @var ?SalesOrder\Record */
    public ?SalesOrder\Record $salesOrder {
        get => $this->get('salesOrder');
    }

    /** @var ?SalesQuote\Record */
    public ?SalesQuote\Record $salesQuote {
        get => $this->get('salesQuote');
    }

    /** @var ?SalesCreditMemo\Record */
    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->get('salesCreditMemo');
    }

    /** @var ?PurchaseInvoice\Record */
    public ?PurchaseInvoice\Record $purchaseInvoice {
        get => $this->get('purchaseInvoice');
    }

    /** @var ?PurchaseOrder\Record */
    public ?PurchaseOrder\Record $purchaseOrder {
        get => $this->get('purchaseOrder');
    }

    /** @var ?PurchaseCreditMemo\Record */
    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->get('purchaseCreditMemo');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
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
}
