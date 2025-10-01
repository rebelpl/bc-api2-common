<?php
namespace Rebel\BCApi2\Entity\VendorPaymentJournal;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\VendorPayment;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        set {
            $this->set('code', $value);
        }
        get => $this->get('code');
    }

    public ?string $displayName {
        set {
            $this->set('displayName', $value);
        }
        get => $this->get('displayName');
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

    /** @var Entity\Collection<VendorPayment\Record> */
    public Entity\Collection $vendorPayments {
        get => $this->getAsCollection('vendorPayments');
    }

    protected array $classMap = ['vendorPayments' => VendorPayment\Record::class];
}
