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
    protected $classMap = [
        'account' => Account\Record::class,
        'attachments' => Attachment\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getEntryNumber(): ?int
    {
        return $this->get('entryNumber');
    }

    function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    function getDocumentType(): ?string
    {
        return $this->get('documentType');
    }

    function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    function getAccountNumber(): ?string
    {
        return $this->get('accountNumber');
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function getDebitAmount(): ?float
    {
        return $this->get('debitAmount');
    }

    function getCreditAmount(): ?float
    {
        return $this->get('creditAmount');
    }

    function getAdditionalCurrencyDebitAmount(): ?float
    {
        return $this->get('additionalCurrencyDebitAmount');
    }

    function getAdditionalCurrencyCreditAmount(): ?float
    {
        return $this->get('additionalCurrencyCreditAmount');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
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
