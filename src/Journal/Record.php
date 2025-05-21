<?php
namespace Rebel\BCApi2\Entity\Journal;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\JournalLine;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        set => $this->set('code', $value);
        get => $this->get('code');
    }

    public ?string $displayName {
        set => $this->set('displayName', $value);
        get => $this->get('displayName');
    }

    public ?string $templateDisplayName {
        set => $this->set('templateDisplayName', $value);
        get => $this->get('templateDisplayName');
    }

    public ?Carbon $lastModifiedDateTime {
        set => $this->setAsDateTime('lastModifiedDateTime', $value);
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?string $balancingAccountId {
        set => $this->set('balancingAccountId', $value);
        get => $this->get('balancingAccountId');
    }

    public ?string $balancingAccountNumber {
        set => $this->set('balancingAccountNumber', $value);
        get => $this->get('balancingAccountNumber');
    }

    /** @var ?Entity\Collection<JournalLine\Record> */
    public ?Entity\Collection $journalLines {
        get => $this->get('journalLines');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'journalLines' => JournalLine\Record::class,
        ];
    }
}
