<?php
namespace Rebel\BCApi2\Entity\CustomerPaymentJournal;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerPayment;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
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

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
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

    /** @var Entity\Collection<CustomerPayment\Record> */
    public Entity\Collection $customerPayments {
        get => $this->getAsCollection('customerPayments');
    }

    protected array $classMap = ['customerPayments' => CustomerPayment\Record::class];
}
