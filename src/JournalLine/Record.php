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
    protected $primaryKey = 'id';

    protected $classMap = [
        'journal' => Journal\Record::class,
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'account' => Account\Record::class,
        'attachments' => Attachment\Record::class,
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

    public function getAccountType(): ?string
    {
        return $this->get('accountType');
    }

    public function setAccountType(?string $value): self
    {
        $this->set('accountType', $value);
        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    public function setAccountId(?string $value): self
    {
        $this->set('accountId', $value);
        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->get('accountNumber');
    }

    public function setAccountNumber(?string $value): self
    {
        $this->set('accountNumber', $value);
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

    public function getTaxCode(): ?string
    {
        return $this->get('taxCode');
    }

    public function setTaxCode(?string $value): self
    {
        $this->set('taxCode', $value);
        return $this;
    }

    public function getBalanceAccountType(): ?string
    {
        return $this->get('balanceAccountType');
    }

    public function setBalanceAccountType(?string $value): self
    {
        $this->set('balanceAccountType', $value);
        return $this;
    }

    public function getBalancingAccountId(): ?string
    {
        return $this->get('balancingAccountId');
    }

    public function setBalancingAccountId(?string $value): self
    {
        $this->set('balancingAccountId', $value);
        return $this;
    }

    public function getBalancingAccountNumber(): ?string
    {
        return $this->get('balancingAccountNumber');
    }

    public function setBalancingAccountNumber(?string $value): self
    {
        $this->set('balancingAccountNumber', $value);
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

    public function getJournal(): ?Journal\Record
    {
        return $this->getAsRelation('journal');
    }

    public function getCustomerPaymentJournal(): ?CustomerPaymentJournal\Record
    {
        return $this->getAsRelation('customerPaymentJournal');
    }

    public function getAccount(): ?Account\Record
    {
        return $this->getAsRelation('account');
    }

    /**
     * @return Entity\Collection|Attachment\Record[]
     */
    public function getAttachments(): Entity\Collection
    {
        return $this->getAsCollection('attachments');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
