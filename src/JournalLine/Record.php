<?php
namespace Rebel\BCApi2\Entity\JournalLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Journal;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $journalId {
		get => $this->get('journalId');
		set => $this->set('journalId', $value);
	}

	public ?string $journalDisplayName {
		get => $this->get('journalDisplayName');
		set => $this->set('journalDisplayName', $value);
	}

	public ?int $lineNumber {
		get => $this->get('lineNumber');
		set => $this->set('lineNumber', $value);
	}

	public ?Enums\GenJournalAccountType $accountType {
		get => $this->get('accountType', Enums\GenJournalAccountType::class);
		set => $this->set('accountType', $value);
	}

	public ?string $accountId {
		get => $this->get('accountId');
		set => $this->set('accountId', $value);
	}

	public ?string $accountNumber {
		get => $this->get('accountNumber');
		set => $this->set('accountNumber', $value);
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
		set => $this->set('postingDate', $value);
	}

	public ?string $documentNumber {
		get => $this->get('documentNumber');
		set => $this->set('documentNumber', $value);
	}

	public ?string $externalDocumentNumber {
		get => $this->get('externalDocumentNumber');
		set => $this->set('externalDocumentNumber', $value);
	}

	public ?float $amount {
		get => $this->get('amount');
		set => $this->set('amount', $value);
	}

	public ?string $description {
		get => $this->get('description');
		set => $this->set('description', $value);
	}

	public ?string $comment {
		get => $this->get('comment');
		set => $this->set('comment', $value);
	}

	public ?string $taxCode {
		get => $this->get('taxCode');
		set => $this->set('taxCode', $value);
	}

	public ?Enums\GenJournalAccountType $balanceAccountType {
		get => $this->get('balanceAccountType', Enums\GenJournalAccountType::class);
		set => $this->set('balanceAccountType', $value);
	}

	public ?string $balancingAccountId {
		get => $this->get('balancingAccountId');
		set => $this->set('balancingAccountId', $value);
	}

	public ?string $balancingAccountNumber {
		get => $this->get('balancingAccountNumber');
		set => $this->set('balancingAccountNumber', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Journal\Record $journal {
		get => $this->get('journal');
		set => $this->set('journal', $value);
	}

	public ?CustomerPaymentJournal\Record $customerPaymentJournal {
		get => $this->get('customerPaymentJournal');
		set => $this->set('customerPaymentJournal', $value);
	}

	public ?Account\Record $account {
		get => $this->get('account');
		set => $this->set('account', $value);
	}

	/** @var Entity\Collection<Attachment\Record> */
	public Entity\Collection $attachments {
		get => $this->get('attachments', 'collection');
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'journal' => Journal\Record::class,
			'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
			'account' => Account\Record::class,
			'attachments' => Attachment\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}