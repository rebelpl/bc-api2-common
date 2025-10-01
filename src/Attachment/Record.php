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
    protected $primaryKey = 'id';

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

    public function getId(): ?string
    {
        return $this->get('id');
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

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
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

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->getAsRelation('salesInvoice');
    }

    public function getJournalLine(): ?JournalLine\Record
    {
        return $this->getAsRelation('journalLine');
    }

    public function getGeneralLedgerEntry(): ?GeneralLedgerEntry\Record
    {
        return $this->getAsRelation('generalLedgerEntry');
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

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->getAsRelation('purchaseOrder');
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->getAsRelation('purchaseCreditMemo');
    }
}
