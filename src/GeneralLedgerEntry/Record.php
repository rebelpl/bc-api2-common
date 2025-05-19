<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerEntry;

use Rebel\BCApi2\Entity;
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
            Properties::account->name => Account\Record::class,
            Properties::attachments->name => Attachment\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getEntryNumber(): ?int
    {
        return $this->get(Properties::entryNumber->name);
    }

    public function getPostingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::postingDate->name);
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get(Properties::documentNumber->name);
    }

    public function getDocumentType(): ?Enums\GenJournalDocumentType
    {
        return $this->getAsEnum(Properties::documentType->name, Enums\GenJournalDocumentType::class);
    }

    public function getAccountId(): ?string
    {
        return $this->get(Properties::accountId->name);
    }

    public function getAccountNumber(): ?string
    {
        return $this->get(Properties::accountNumber->name);
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function getDebitAmount(): ?float
    {
        return $this->get(Properties::debitAmount->name);
    }

    public function getCreditAmount(): ?float
    {
        return $this->get(Properties::creditAmount->name);
    }

    public function getAdditionalCurrencyDebitAmount(): ?float
    {
        return $this->get(Properties::additionalCurrencyDebitAmount->name);
    }

    public function getAdditionalCurrencyCreditAmount(): ?float
    {
        return $this->get(Properties::additionalCurrencyCreditAmount->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
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