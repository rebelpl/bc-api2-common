<?php
namespace Rebel\BCApi2\Entity\Attachment;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
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
    protected $classMap = [
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

    function getId(): ?string
    {
        return $this->get('id');
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

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
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

    function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->get('salesInvoice');
    }

    function getJournalLine(): ?JournalLine\Record
    {
        return $this->get('journalLine');
    }

    function getGeneralLedgerEntry(): ?GeneralLedgerEntry\Record
    {
        return $this->get('generalLedgerEntry');
    }

    function getSalesOrder(): ?SalesOrder\Record
    {
        return $this->get('salesOrder');
    }

    function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->get('salesQuote');
    }

    function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->get('salesCreditMemo');
    }

    function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->get('purchaseInvoice');
    }

    function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->get('purchaseOrder');
    }

    function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get('purchaseCreditMemo');
    }
}
