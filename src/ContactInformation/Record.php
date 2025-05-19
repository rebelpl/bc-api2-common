<?php
namespace Rebel\BCApi2\Entity\ContactInformation;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Contact;
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
		get => $this->get('contactType', Enums\ContactType::class);
	}

	public ?string $relatedId {
		get => $this->get('relatedId');
	}

	public ?Enums\ContactBusinessRelationLinkToTable $relatedType {
		get => $this->get('relatedType', Enums\ContactBusinessRelationLinkToTable::class);
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

	public ?Contact\Record $contact {
		get => $this->get('contact');
		set => $this->set('contact', $value);
	}

	public ?Vendor\Record $vendor {
		get => $this->get('vendor');
		set => $this->set('vendor', $value);
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