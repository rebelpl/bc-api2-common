<?php
namespace Rebel\BCApi2\Entity\PaymentTerm;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

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

    public ?string $dueDateCalculation {
        set {
            $this->set('dueDateCalculation', $value);
        }
        get => $this->get('dueDateCalculation');
    }

    public ?string $discountDateCalculation {
        set {
            $this->set('discountDateCalculation', $value);
        }
        get => $this->get('discountDateCalculation');
    }

    public ?float $discountPercent {
        set {
            $this->set('discountPercent', $value);
        }
        get => $this->get('discountPercent');
    }

    public ?bool $calculateDiscountOnCreditMemos {
        set {
            $this->set('calculateDiscountOnCreditMemos', $value);
        }
        get => $this->get('calculateDiscountOnCreditMemos');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
