<?php
namespace Rebel\BCApi2\Entity\Attachment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\JournalLine;
use Rebel\BCApi2\Entity\GeneralLedgerEntry;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseOrder;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::salesInvoice->name => SalesInvoice\Record::class,
            Properties::journalLine->name => JournalLine\Record::class,
            Properties::generalLedgerEntry->name => GeneralLedgerEntry\Record::class,
            Properties::salesOrder->name => SalesOrder\Record::class,
            Properties::salesQuote->name => SalesQuote\Record::class,
            Properties::salesCreditMemo->name => SalesCreditMemo\Record::class,
            Properties::purchaseInvoice->name => PurchaseInvoice\Record::class,
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

    public function getParentId(): ?string
    {
        return $this->get(Properties::parentId->name);
    }

    public function setParentId(?string $value): self
    {
        $this->set(Properties::parentId->name, $value);
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

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
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

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->get(Properties::salesInvoice->name);
    }

    public function getJournalLine(): ?JournalLine\Record
    {
        return $this->get(Properties::journalLine->name);
    }

    public function getGeneralLedgerEntry(): ?GeneralLedgerEntry\Record
    {
        return $this->get(Properties::generalLedgerEntry->name);
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

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->get(Properties::purchaseOrder->name);
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get(Properties::purchaseCreditMemo->name);
    }
}