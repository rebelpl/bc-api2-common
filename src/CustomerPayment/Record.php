<?php
namespace Rebel\BCApi2\Entity\CustomerPayment;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'customer' => Customer\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
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

    public function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    public function setCustomerId(?string $value): self
    {
        $this->set('customerId', $value);
        return $this;
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    public function setCustomerNumber(?string $value): self
    {
        $this->set('customerNumber', $value);
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

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
