<?php
namespace Rebel\BCApi2\Entity\VendorPayment;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\ApplyVendorEntry;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\VendorPaymentJournal;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'vendor' => Vendor\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'applyVendorEntries' => ApplyVendorEntry\Record::class,
        'vendorPaymentJournal' => VendorPaymentJournal\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getJournalId(): ?string
    {
        return $this->get('journalId');
    }

    public function setJournalId(?string $value): self
    {
        $this->set('journalId', $value);
        return $this;
    }

    public function getJournalDisplayName(): ?string
    {
        return $this->get('journalDisplayName');
    }

    public function setJournalDisplayName(?string $value): self
    {
        $this->set('journalDisplayName', $value);
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

    public function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    public function setVendorId(?string $value): self
    {
        $this->set('vendorId', $value);
        return $this;
    }

    public function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    public function setVendorNumber(?string $value): self
    {
        $this->set('vendorNumber', $value);
        return $this;
    }

    public function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    public function setPostingDate(?\DateTime $value): self
    {
        $this->setAsDate('postingDate', $value);
        return $this;
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    public function setDocumentNumber(?string $value): self
    {
        $this->set('documentNumber', $value);
        return $this;
    }

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
    }

    public function setExternalDocumentNumber(?string $value): self
    {
        $this->set('externalDocumentNumber', $value);
        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->get('amount');
    }

    public function setAmount(?float $value): self
    {
        $this->set('amount', $value);
        return $this;
    }

    public function getAppliesToInvoiceId(): ?string
    {
        return $this->get('appliesToInvoiceId');
    }

    public function setAppliesToInvoiceId(?string $value): self
    {
        $this->set('appliesToInvoiceId', $value);
        return $this;
    }

    public function getAppliesToInvoiceNumber(): ?string
    {
        return $this->get('appliesToInvoiceNumber');
    }

    public function setAppliesToInvoiceNumber(?string $value): self
    {
        $this->set('appliesToInvoiceNumber', $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function setDescription(?string $value): self
    {
        $this->set('description', $value);
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->get('comment');
    }

    public function setComment(?string $value): self
    {
        $this->set('comment', $value);
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

    public function getCustomerPaymentJournal(): ?CustomerPaymentJournal\Record
    {
        return $this->getAsRelation('customerPaymentJournal');
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->getAsRelation('vendor');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    /**
     * @return Entity\Collection|ApplyVendorEntry\Record[]
     */
    public function getApplyVendorEntries(): Entity\Collection
    {
        return $this->getAsCollection('applyVendorEntries');
    }

    public function getVendorPaymentJournal(): ?VendorPaymentJournal\Record
    {
        return $this->getAsRelation('vendorPaymentJournal');
    }
}
