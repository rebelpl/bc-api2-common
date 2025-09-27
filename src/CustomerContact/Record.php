<?php
namespace Rebel\BCApi2\Entity\CustomerContact;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PdfDocument;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $email {
        set {
            $this->set('email', $value);
        }
        get => $this->get('email');
    }

    public ?string $firstName {
        set {
            $this->set('firstName', $value);
        }
        get => $this->get('firstName');
    }

    public ?string $lastName {
        set {
            $this->set('lastName', $value);
        }
        get => $this->get('lastName');
    }

    public ?string $professionalTitle {
        set {
            $this->set('professionalTitle', $value);
        }
        get => $this->get('professionalTitle');
    }

    public ?string $customerId {
        set {
            $this->set('customerId', $value);
        }
        get => $this->get('customerId');
    }

    public ?string $customerName {
        set {
            $this->set('customerName', $value);
        }
        get => $this->get('customerName');
    }

    public ?string $primaryPhoneNumber {
        set {
            $this->set('primaryPhoneNumber', $value);
        }
        get => $this->get('primaryPhoneNumber');
    }

    public ?PdfDocument\Record $pdfDocument {
        get => $this->getAsRelation('pdfDocument');
    }

    protected array $classMap = ['pdfDocument' => PdfDocument\Record::class];
}
