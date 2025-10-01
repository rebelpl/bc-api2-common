<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?int $entryNumber {
        get => $this->get('entryNumber');
    }

    public ?Carbon $postingDate {
        get => $this->getAsDate('postingDate');
    }

    public ?string $documentNumber {
        get => $this->get('documentNumber');
    }

    public ?Enums\GenJournalDocumentType $documentType {
        get => $this->getAsEnum('documentType', Enums\GenJournalDocumentType::class);
    }

    public ?string $accountId {
        get => $this->get('accountId');
    }

    public ?string $accountNumber {
        get => $this->get('accountNumber');
    }

    public ?string $description {
        get => $this->get('description');
    }

    public ?float $debitAmount {
        get => $this->get('debitAmount');
    }

    public ?float $creditAmount {
        get => $this->get('creditAmount');
    }

    public ?float $additionalCurrencyDebitAmount {
        get => $this->get('additionalCurrencyDebitAmount');
    }

    public ?float $additionalCurrencyCreditAmount {
        get => $this->get('additionalCurrencyCreditAmount');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Account\Record $account {
        get => $this->getAsRelation('account');
    }

    /** @var Entity\Collection<Attachment\Record> */
    public Entity\Collection $attachments {
        get => $this->getAsCollection('attachments');
    }

    /** @var Entity\Collection<DimensionSetLine\Record> */
    public Entity\Collection $dimensionSetLines {
        get => $this->getAsCollection('dimensionSetLines');
    }

    protected array $classMap = [
        'account' => Account\Record::class,
        'attachments' => Attachment\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];
}
