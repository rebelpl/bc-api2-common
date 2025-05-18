<?php
namespace Microsoft\NAV\GeneralLedgerEntry;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Account;
use Microsoft\NAV\Attachment;
use Microsoft\NAV\DimensionSetLine;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::account->name => Account\Record::class,
            Properties::attachments->name => Attachment\Record::class,
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

    public function getEntryNumber(): ?int
    {
        return $this->get(Properties::entryNumber->name);
    }

    public function setEntryNumber(?int $value): self
    {
        $this->set(Properties::entryNumber->name, $value);
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

    public function getDocumentType(): ?Enums\GenJournalDocumentType
    {
        return $this->getAsEnum(Properties::documentType->name, Enums\GenJournalDocumentType::class);
    }

    public function setDocumentType(?Enums\GenJournalDocumentType $value): self
    {
        $this->set(Properties::documentType->name, $value);
        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->get(Properties::accountId->name);
    }

    public function setAccountId(?string $value): self
    {
        $this->set(Properties::accountId->name, $value);
        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->get(Properties::accountNumber->name);
    }

    public function setAccountNumber(?string $value): self
    {
        $this->set(Properties::accountNumber->name, $value);
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

    public function getDebitAmount(): ?float
    {
        return $this->get(Properties::debitAmount->name);
    }

    public function setDebitAmount(?float $value): self
    {
        $this->set(Properties::debitAmount->name, $value);
        return $this;
    }

    public function getCreditAmount(): ?float
    {
        return $this->get(Properties::creditAmount->name);
    }

    public function setCreditAmount(?float $value): self
    {
        $this->set(Properties::creditAmount->name, $value);
        return $this;
    }

    public function getAdditionalCurrencyDebitAmount(): ?float
    {
        return $this->get(Properties::additionalCurrencyDebitAmount->name);
    }

    public function setAdditionalCurrencyDebitAmount(?float $value): self
    {
        $this->set(Properties::additionalCurrencyDebitAmount->name, $value);
        return $this;
    }

    public function getAdditionalCurrencyCreditAmount(): ?float
    {
        return $this->get(Properties::additionalCurrencyCreditAmount->name);
    }

    public function setAdditionalCurrencyCreditAmount(?float $value): self
    {
        $this->set(Properties::additionalCurrencyCreditAmount->name, $value);
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

    public function getAccount(): ?Account\Record
    {
        return $this->get(Properties::account->name);
    }

    /**
     * @return Entity\Collection<Attachment\Record>
     */
    public function getAttachments(): Entity\Collection
    {
        return $this->get(Properties::attachments->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}