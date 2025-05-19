<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerEntry;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?int $entryNumber {
		get => $this->get('entryNumber');
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
	}

	public ?string $documentNumber {
		get => $this->get('documentNumber');
	}

	public ?Enums\GenJournalDocumentType $documentType {
		get => $this->get('documentType', Enums\GenJournalDocumentType::class);
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

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
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
			'account' => Account\Record::class,
			'attachments' => Attachment\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}