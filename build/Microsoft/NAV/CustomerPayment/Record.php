<?php
namespace Microsoft\NAV\CustomerPayment;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\CustomerPaymentJournal;
use Microsoft\NAV\Customer;
use Microsoft\NAV\DimensionSetLine;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::customerPaymentJournal->name => CustomerPaymentJournal\Record::class,
            Properties::customer->name => Customer\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
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

    public function getJournalId(): ?string
    {
        return $this->get(Properties::journalId->name);
    }

    public function setJournalId(?string $value): self
    {
        $this->set(Properties::journalId->name, $value);
        return $this;
    }

    public function getJournalDisplayName(): ?string
    {
        return $this->get(Properties::journalDisplayName->name);
    }

    public function setJournalDisplayName(?string $value): self
    {
        $this->set(Properties::journalDisplayName->name, $value);
        return $this;
    }

    public function getLineNumber(): ?int
    {
        return $this->get(Properties::lineNumber->name);
    }

    public function setLineNumber(?int $value): self
    {
        $this->set(Properties::lineNumber->name, $value);
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->get(Properties::customerId->name);
    }

    public function setCustomerId(?string $value): self
    {
        $this->set(Properties::customerId->name, $value);
        return $this;
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get(Properties::customerNumber->name);
    }

    public function setCustomerNumber(?string $value): self
    {
        $this->set(Properties::customerNumber->name, $value);
        return $this;
    }

    public function getPostingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::postingDate->name);
    }

    public function setPostingDate(?\DateTime $value): self
    {
        $this->set(Properties::postingDate->name, $value);
        return $this;
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get(Properties::documentNumber->name);
    }

    public function setDocumentNumber(?string $value): self
    {
        $this->set(Properties::documentNumber->name, $value);
        return $this;
    }

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get(Properties::externalDocumentNumber->name);
    }

    public function setExternalDocumentNumber(?string $value): self
    {
        $this->set(Properties::externalDocumentNumber->name, $value);
        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->get(Properties::amount->name);
    }

    public function setAmount(?float $value): self
    {
        $this->set(Properties::amount->name, $value);
        return $this;
    }

    public function getAppliesToInvoiceId(): ?string
    {
        return $this->get(Properties::appliesToInvoiceId->name);
    }

    public function setAppliesToInvoiceId(?string $value): self
    {
        $this->set(Properties::appliesToInvoiceId->name, $value);
        return $this;
    }

    public function getAppliesToInvoiceNumber(): ?string
    {
        return $this->get(Properties::appliesToInvoiceNumber->name);
    }

    public function setAppliesToInvoiceNumber(?string $value): self
    {
        $this->set(Properties::appliesToInvoiceNumber->name, $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->get(Properties::comment->name);
    }

    public function setComment(?string $value): self
    {
        $this->set(Properties::comment->name, $value);
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

    public function getCustomerPaymentJournal(): ?CustomerPaymentJournal\Record
    {
        return $this->get(Properties::customerPaymentJournal->name);
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}