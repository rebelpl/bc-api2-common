<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'account' => Account\Record::class,
        'attachments' => Attachment\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getEntryNumber(): ?int
    {
        return $this->get('entryNumber');
    }

    public function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    public function getDocumentType(): ?string
    {
        return $this->get('documentType');
    }

    public function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    public function getAccountNumber(): ?string
    {
        return $this->get('accountNumber');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getDebitAmount(): ?float
    {
        return $this->get('debitAmount');
    }

    public function getCreditAmount(): ?float
    {
        return $this->get('creditAmount');
    }

    public function getAdditionalCurrencyDebitAmount(): ?float
    {
        return $this->get('additionalCurrencyDebitAmount');
    }

    public function getAdditionalCurrencyCreditAmount(): ?float
    {
        return $this->get('additionalCurrencyCreditAmount');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
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
