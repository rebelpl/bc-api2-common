<?php
namespace Rebel\BCApi2\Entity\Contact;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Picture;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set { $this->set('number', $value); }
        get => $this->get('number');
    }

    public ?Enums\ContactType $type {
        set { $this->set('type', $value); }
        get => $this->getAsEnum('type', Enums\ContactType::class);
    }

    public ?string $displayName {
        set { $this->set('displayName', $value); }
        get => $this->get('displayName');
    }

    public ?string $jobTitle {
        set { $this->set('jobTitle', $value); }
        get => $this->get('jobTitle');
    }

    public ?string $companyNumber {
        set { $this->set('companyNumber', $value); }
        get => $this->get('companyNumber');
    }

    public ?string $companyName {
        set { $this->set('companyName', $value); }
        get => $this->get('companyName');
    }

    public ?Enums\ContactBusinessRelation $contactBusinessRelation {
        set { $this->set('contactBusinessRelation', $value); }
        get => $this->getAsEnum('contactBusinessRelation', Enums\ContactBusinessRelation::class);
    }

    public ?string $addressLine1 {
        set { $this->set('addressLine1', $value); }
        get => $this->get('addressLine1');
    }

    public ?string $addressLine2 {
        set { $this->set('addressLine2', $value); }
        get => $this->get('addressLine2');
    }

    public ?string $city {
        set { $this->set('city', $value); }
        get => $this->get('city');
    }

    public ?string $state {
        set { $this->set('state', $value); }
        get => $this->get('state');
    }

    public ?string $country {
        set { $this->set('country', $value); }
        get => $this->get('country');
    }

    public ?string $postalCode {
        set { $this->set('postalCode', $value); }
        get => $this->get('postalCode');
    }

    public ?string $phoneNumber {
        set { $this->set('phoneNumber', $value); }
        get => $this->get('phoneNumber');
    }

    public ?string $mobilePhoneNumber {
        set { $this->set('mobilePhoneNumber', $value); }
        get => $this->get('mobilePhoneNumber');
    }

    public ?string $email {
        set { $this->set('email', $value); }
        get => $this->get('email');
    }

    public ?string $website {
        set { $this->set('website', $value); }
        get => $this->get('website');
    }

    public ?string $searchName {
        set { $this->set('searchName', $value); }
        get => $this->get('searchName');
    }

    public ?bool $privacyBlocked {
        set { $this->set('privacyBlocked', $value); }
        get => $this->get('privacyBlocked');
    }

    public ?string $taxRegistrationNumber {
        set { $this->set('taxRegistrationNumber', $value); }
        get => $this->get('taxRegistrationNumber');
    }

    public ?Carbon $lastInteractionDate {
        set {
            $this->setAsDateTime('lastInteractionDate', $value); }
        get => $this->getAsDateTime('lastInteractionDate');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?ContactInformation\Record $contactInformation {
        get => $this->get('contactInformation');
    }

    public ?Picture\Record $picture {
        get => $this->get('picture');
    }

    protected array $classMap = [
        'contactInformation' => ContactInformation\Record::class,
        'picture' => Picture\Record::class,
    ];
}
