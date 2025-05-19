<?php
namespace Rebel\BCApi2\Entity\Contact;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Picture;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $number {
		get => $this->get('number');
		set => $this->set('number', $value);
	}

	public ?Enums\ContactType $type {
		get => $this->get('type', Enums\ContactType::class);
		set => $this->set('type', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?string $jobTitle {
		get => $this->get('jobTitle');
		set => $this->set('jobTitle', $value);
	}

	public ?string $companyNumber {
		get => $this->get('companyNumber');
		set => $this->set('companyNumber', $value);
	}

	public ?string $companyName {
		get => $this->get('companyName');
		set => $this->set('companyName', $value);
	}

	public ?Enums\ContactBusinessRelation $contactBusinessRelation {
		get => $this->get('contactBusinessRelation', Enums\ContactBusinessRelation::class);
		set => $this->set('contactBusinessRelation', $value);
	}

	public ?string $addressLine1 {
		get => $this->get('addressLine1');
		set => $this->set('addressLine1', $value);
	}

	public ?string $addressLine2 {
		get => $this->get('addressLine2');
		set => $this->set('addressLine2', $value);
	}

	public ?string $city {
		get => $this->get('city');
		set => $this->set('city', $value);
	}

	public ?string $state {
		get => $this->get('state');
		set => $this->set('state', $value);
	}

	public ?string $country {
		get => $this->get('country');
		set => $this->set('country', $value);
	}

	public ?string $postalCode {
		get => $this->get('postalCode');
		set => $this->set('postalCode', $value);
	}

	public ?string $phoneNumber {
		get => $this->get('phoneNumber');
		set => $this->set('phoneNumber', $value);
	}

	public ?string $mobilePhoneNumber {
		get => $this->get('mobilePhoneNumber');
		set => $this->set('mobilePhoneNumber', $value);
	}

	public ?string $email {
		get => $this->get('email');
		set => $this->set('email', $value);
	}

	public ?string $website {
		get => $this->get('website');
		set => $this->set('website', $value);
	}

	public ?string $searchName {
		get => $this->get('searchName');
		set => $this->set('searchName', $value);
	}

	public ?bool $privacyBlocked {
		get => $this->get('privacyBlocked');
		set => $this->set('privacyBlocked', $value);
	}

	public ?string $taxRegistrationNumber {
		get => $this->get('taxRegistrationNumber');
		set => $this->set('taxRegistrationNumber', $value);
	}

	public ?\DateTime $lastInteractionDate {
		get => $this->get('lastInteractionDate', 'date');
		set => $this->set('lastInteractionDate', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?ContactInformation\Record $contactInformation {
		get => $this->get('contactInformation');
		set => $this->set('contactInformation', $value);
	}

	public ?Picture\Record $picture {
		get => $this->get('picture');
		set => $this->set('picture', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'contactInformation' => ContactInformation\Record::class,
			'picture' => Picture\Record::class,
        ];
    }
}