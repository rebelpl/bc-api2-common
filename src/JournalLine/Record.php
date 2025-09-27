<?php
namespace Rebel\BCApi2\Entity\JournalLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Journal;

class Record extends Entity
{
    protected $classMap = [
        'journal' => Journal\Record::class,
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'account' => Account\Record::class,
        'attachments' => Attachment\Record::class,
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

    function getAccountType(): ?string
    {
        return $this->get('accountType');
    }

    function setAccountType(?string $value): self
    {
        $this->set('accountType', $value);
        return $this;
    }

    function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    function setAccountId(?string $value): self
    {
        $this->set('accountId', $value);
        return $this;
    }

    function getAccountNumber(): ?string
    {
        return $this->get('accountNumber');
    }

    function setAccountNumber(?string $value): self
    {
        $this->set('accountNumber', $value);
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

    function getTaxCode(): ?string
    {
        return $this->get('taxCode');
    }

    function setTaxCode(?string $value): self
    {
        $this->set('taxCode', $value);
        return $this;
    }

    function getBalanceAccountType(): ?string
    {
        return $this->get('balanceAccountType');
    }

    function setBalanceAccountType(?string $value): self
    {
        $this->set('balanceAccountType', $value);
        return $this;
    }

    function getBalancingAccountId(): ?string
    {
        return $this->get('balancingAccountId');
    }

    function setBalancingAccountId(?string $value): self
    {
        $this->set('balancingAccountId', $value);
        return $this;
    }

    function getBalancingAccountNumber(): ?string
    {
        return $this->get('balancingAccountNumber');
    }

    function setBalancingAccountNumber(?string $value): self
    {
        $this->set('balancingAccountNumber', $value);
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

    function getJournal(): ?Journal\Record
    {
        return $this->getAsRelation('journal');
    }

    function getCustomerPaymentJournal(): ?CustomerPaymentJournal\Record
    {
        return $this->getAsRelation('customerPaymentJournal');
    }

    function getAccount(): ?Account\Record
    {
        return $this->getAsRelation('account');
    }

    /**
     * @return Entity\Collection|Attachment\Record[]
     */
    function getAttachments(): Entity\Collection
    {
        return $this->getAsCollection('attachments');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
