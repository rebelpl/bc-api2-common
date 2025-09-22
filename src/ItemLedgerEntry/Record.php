<?php
namespace Rebel\BCApi2\Entity\ItemLedgerEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?int $entryNumber {
        get => $this->get('entryNumber');
    }

    public ?string $itemNumber {
        get => $this->get('itemNumber');
    }

    public ?Carbon $postingDate {
        get => $this->getAsDate('postingDate');
    }

    public ?Enums\ItemLedgerEntryType $entryType {
        get => $this->getAsEnum('entryType', Enums\ItemLedgerEntryType::class);
    }

    public ?string $sourceNumber {
        get => $this->get('sourceNumber');
    }

    public ?Enums\AnalysisSourceType $sourceType {
        get => $this->getAsEnum('sourceType', Enums\AnalysisSourceType::class);
    }

    public ?string $documentNumber {
        get => $this->get('documentNumber');
    }

    public ?Enums\ItemLedgerDocumentType $documentType {
        get => $this->getAsEnum('documentType', Enums\ItemLedgerDocumentType::class);
    }

    public ?string $description {
        get => $this->get('description');
    }

    public ?float $quantity {
        get => $this->get('quantity');
    }

    public ?float $salesAmountActual {
        get => $this->get('salesAmountActual');
    }

    public ?float $costAmountActual {
        get => $this->get('costAmountActual');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
