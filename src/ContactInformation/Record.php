<?php
namespace Rebel\BCApi2\Entity\ContactInformation;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    public ?string $contactId {
        get => $this->get('contactId');
    }

    public ?string $contactNumber {
        get => $this->get('contactNumber');
    }

    public ?string $contactName {
        get => $this->get('contactName');
    }

    public ?Enums\ContactType $contactType {
        get => $this->getAsEnum('contactType', Enums\ContactType::class);
    }

    public ?string $relatedId {
        get => $this->get('relatedId');
    }

    public ?Enums\ContactBusinessRelationLinkToTable $relatedType {
        get => $this->getAsEnum('relatedType', Enums\ContactBusinessRelationLinkToTable::class);
    }

    /** @var ?Customer\Record */
    public ?Customer\Record $customer {
        get => $this->get('customer');
    }

    /** @var ?Contact\Record */
    public ?Contact\Record $contact {
        get => $this->get('contact');
    }

    /** @var ?Vendor\Record */
    public ?Vendor\Record $vendor {
        get => $this->get('vendor');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'customer' => Customer\Record::class,
            'contact' => Contact\Record::class,
            'vendor' => Vendor\Record::class,
        ];
    }
}
