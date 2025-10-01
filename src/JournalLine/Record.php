<?php
namespace Rebel\BCApi2\Entity\JournalLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Journal;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $journalId {
        set {
            $this->set('journalId', $value);
        }
        get => $this->get('journalId');
    }

    public ?string $journalDisplayName {
        set {
            $this->set('journalDisplayName', $value);
        }
        get => $this->get('journalDisplayName');
    }

    public ?int $lineNumber {
        set {
            $this->set('lineNumber', $value);
        }
        get => $this->get('lineNumber');
    }

    public ?Enums\GenJournalAccountType $accountType {
        set {
            $this->set('accountType', $value);
        }
        get => $this->getAsEnum('accountType', Enums\GenJournalAccountType::class);
    }

    public ?string $accountId {
        set {
            $this->set('accountId', $value);
        }
        get => $this->get('accountId');
    }

    public ?string $accountNumber {
        set {
            $this->set('accountNumber', $value);
        }
        get => $this->get('accountNumber');
    }

    public ?Carbon $postingDate {
        set {
            $this->setAsDate('postingDate', $value);
        }
        get => $this->getAsDate('postingDate');
    }

    public ?string $documentNumber {
        set {
            $this->set('documentNumber', $value);
        }
        get => $this->get('documentNumber');
    }

    public ?string $externalDocumentNumber {
        set {
            $this->set('externalDocumentNumber', $value);
        }
        get => $this->get('externalDocumentNumber');
    }

    public ?float $amount {
        set {
            $this->set('amount', $value);
        }
        get => $this->get('amount');
    }

    public ?string $description {
        set {
            $this->set('description', $value);
        }
        get => $this->get('description');
    }

    public ?string $comment {
        set {
            $this->set('comment', $value);
        }
        get => $this->get('comment');
    }

    public ?string $taxCode {
        set {
            $this->set('taxCode', $value);
        }
        get => $this->get('taxCode');
    }

    public ?Enums\GenJournalAccountType $balanceAccountType {
        set {
            $this->set('balanceAccountType', $value);
        }
        get => $this->getAsEnum('balanceAccountType', Enums\GenJournalAccountType::class);
    }

    public ?string $balancingAccountId {
        set {
            $this->set('balancingAccountId', $value);
        }
        get => $this->get('balancingAccountId');
    }

    public ?string $balancingAccountNumber {
        set {
            $this->set('balancingAccountNumber', $value);
        }
        get => $this->get('balancingAccountNumber');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Journal\Record $journal {
        get => $this->getAsRelation('journal');
    }

    public ?CustomerPaymentJournal\Record $customerPaymentJournal {
        get => $this->getAsRelation('customerPaymentJournal');
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
        'journal' => Journal\Record::class,
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'account' => Account\Record::class,
        'attachments' => Attachment\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];
}
