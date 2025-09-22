<?php
namespace Rebel\BCApi2\Entity\ApplyVendorEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?bool $applied {
        set {
            $this->set('applied', $value);
        }
        get => $this->get('applied');
    }

    public ?string $appliesToId {
        set {
            $this->set('appliesToId', $value);
        }
        get => $this->get('appliesToId');
    }

    public ?Carbon $postingDate {
        set {
            $this->setAsDate('postingDate', $value);
        }
        get => $this->getAsDate('postingDate');
    }

    public ?Enums\GenJournalDocumentType $documentType {
        set {
            $this->set('documentType', $value);
        }
        get => $this->getAsEnum('documentType', Enums\GenJournalDocumentType::class);
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

    public ?string $vendorNumber {
        set {
            $this->set('vendorNumber', $value);
        }
        get => $this->get('vendorNumber');
    }

    public ?string $vendorName {
        set {
            $this->set('vendorName', $value);
        }
        get => $this->get('vendorName');
    }

    public ?string $description {
        set {
            $this->set('description', $value);
        }
        get => $this->get('description');
    }

    public ?float $remainingAmount {
        set {
            $this->set('remainingAmount', $value);
        }
        get => $this->get('remainingAmount');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
