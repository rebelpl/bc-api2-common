<?php
namespace Rebel\BCApi2\Entity\VendorPayment;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\ApplyVendorEntry;
use Rebel\BCApi2\Entity\CustomerPaymentJournal;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\VendorPaymentJournal;

class Record extends Entity
{
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

    public ?string $vendorId {
        set {
            $this->set('vendorId', $value);
        }
        get => $this->get('vendorId');
    }

    public ?string $vendorNumber {
        set {
            $this->set('vendorNumber', $value);
        }
        get => $this->get('vendorNumber');
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

    public ?string $appliesToInvoiceId {
        set {
            $this->set('appliesToInvoiceId', $value);
        }
        get => $this->get('appliesToInvoiceId');
    }

    public ?string $appliesToInvoiceNumber {
        set {
            $this->set('appliesToInvoiceNumber', $value);
        }
        get => $this->get('appliesToInvoiceNumber');
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

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?CustomerPaymentJournal\Record $customerPaymentJournal {
        get => $this->getAsRelation('customerPaymentJournal');
    }

    public ?Vendor\Record $vendor {
        get => $this->getAsRelation('vendor');
    }

    /** @var Entity\Collection<DimensionSetLine\Record> */
    public Entity\Collection $dimensionSetLines {
        get => $this->getAsCollection('dimensionSetLines');
    }

    /** @var Entity\Collection<ApplyVendorEntry\Record> */
    public Entity\Collection $applyVendorEntries {
        get => $this->getAsCollection('applyVendorEntries');
    }

    public ?VendorPaymentJournal\Record $vendorPaymentJournal {
        get => $this->getAsRelation('vendorPaymentJournal');
    }

    protected array $classMap = [
        'customerPaymentJournal' => CustomerPaymentJournal\Record::class,
        'vendor' => Vendor\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'applyVendorEntries' => ApplyVendorEntry\Record::class,
        'vendorPaymentJournal' => VendorPaymentJournal\Record::class,
    ];
}
