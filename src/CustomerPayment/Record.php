<?php
namespace Rebel\BCApi2\Entity\CustomerPayment;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
    protected $classMap = [
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'customer' => Customer\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getJournalId(): ?string
    {
        return $this->get('journalId');
    }

    function setJournalId(?string $value): self
    {
        $this->set('journalId', $value);
        return $this;
    }

    function getJournalDisplayName(): ?string
    {
        return $this->get('journalDisplayName');
    }

    function setJournalDisplayName(?string $value): self
    {
        $this->set('journalDisplayName', $value);
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

    function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    function setCustomerId(?string $value): self
    {
        $this->set('customerId', $value);
        return $this;
    }

    function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    function setCustomerNumber(?string $value): self
    {
        $this->set('customerNumber', $value);
        return $this;
    }

    function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    function setPostingDate(?\DateTime $value): self
    {
        $this->setAsDate('postingDate', $value);
        return $this;
    }

    function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    function setDocumentNumber(?string $value): self
    {
        $this->set('documentNumber', $value);
        return $this;
    }

    function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
    }

    function setExternalDocumentNumber(?string $value): self
    {
        $this->set('externalDocumentNumber', $value);
        return $this;
    }

    function getAmount(): ?float
    {
        return $this->get('amount');
    }

    function setAmount(?float $value): self
    {
        $this->set('amount', $value);
        return $this;
    }

    function getAppliesToInvoiceId(): ?string
    {
        return $this->get('appliesToInvoiceId');
    }

    function setAppliesToInvoiceId(?string $value): self
    {
        $this->set('appliesToInvoiceId', $value);
        return $this;
    }

    function getAppliesToInvoiceNumber(): ?string
    {
        return $this->get('appliesToInvoiceNumber');
    }

    function setAppliesToInvoiceNumber(?string $value): self
    {
        $this->set('appliesToInvoiceNumber', $value);
        return $this;
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function setDescription(?string $value): self
    {
        $this->set('description', $value);
        return $this;
    }

    function getComment(): ?string
    {
        return $this->get('comment');
    }

    function setComment(?string $value): self
    {
        $this->set('comment', $value);
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

    function getCustomerPaymentJournal(): ?CustomerPaymentJournal\Record
    {
        return $this->get('customerPaymentJournal');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
