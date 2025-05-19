<?php
namespace Rebel\BCApi2\Entity\JournalLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Journal;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::journal->name => Journal\Record::class,
            Properties::customerPaymentJournal->name => CustomerPaymentJournal\Record::class,
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

    public function getAccountType(): ?Enums\GenJournalAccountType
    {
        return $this->getAsEnum(Properties::accountType->name, Enums\GenJournalAccountType::class);
    }

    public function setAccountType(?Enums\GenJournalAccountType $value): self
    {
        $this->set(Properties::accountType->name, $value);
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

    public function getTaxCode(): ?string
    {
        return $this->get(Properties::taxCode->name);
    }

    public function setTaxCode(?string $value): self
    {
        $this->set(Properties::taxCode->name, $value);
        return $this;
    }

    public function getBalanceAccountType(): ?Enums\GenJournalAccountType
    {
        return $this->getAsEnum(Properties::balanceAccountType->name, Enums\GenJournalAccountType::class);
    }

    public function setBalanceAccountType(?Enums\GenJournalAccountType $value): self
    {
        $this->set(Properties::balanceAccountType->name, $value);
        return $this;
    }

    public function getBalancingAccountId(): ?string
    {
        return $this->get(Properties::balancingAccountId->name);
    }

    public function setBalancingAccountId(?string $value): self
    {
        $this->set(Properties::balancingAccountId->name, $value);
        return $this;
    }

    public function getBalancingAccountNumber(): ?string
    {
        return $this->get(Properties::balancingAccountNumber->name);
    }

    public function setBalancingAccountNumber(?string $value): self
    {
        $this->set(Properties::balancingAccountNumber->name, $value);
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

    public function getJournal(): ?Journal\Record
    {
        return $this->get(Properties::journal->name);
    }

    public function getCustomerPaymentJournal(): ?CustomerPaymentJournal\Record
    {
        return $this->get(Properties::customerPaymentJournal->name);
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