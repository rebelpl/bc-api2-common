<?php
namespace Rebel\BCApi2\Entity\Employee;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\TimeRegistrationEntry;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set { $this->set('number', $value); }
        get => $this->get('number');
    }

    public ?string $displayName {
        set { $this->set('displayName', $value); }
        get => $this->get('displayName');
    }

    public ?string $givenName {
        set { $this->set('givenName', $value); }
        get => $this->get('givenName');
    }

    public ?string $middleName {
        set { $this->set('middleName', $value); }
        get => $this->get('middleName');
    }

    public ?string $surname {
        set { $this->set('surname', $value); }
        get => $this->get('surname');
    }

    public ?string $jobTitle {
        set { $this->set('jobTitle', $value); }
        get => $this->get('jobTitle');
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

    public ?string $mobilePhone {
        set { $this->set('mobilePhone', $value); }
        get => $this->get('mobilePhone');
    }

    public ?string $email {
        set { $this->set('email', $value); }
        get => $this->get('email');
    }

    public ?string $personalEmail {
        set { $this->set('personalEmail', $value); }
        get => $this->get('personalEmail');
    }

    public ?Carbon $employmentDate {
        set { $this->setAsDate('employmentDate', $value); }
        get => $this->getAsDateTime('employmentDate');
    }

    public ?Carbon $terminationDate {
        set { $this->setAsDate('terminationDate', $value); }
        get => $this->getAsDateTime('terminationDate');
    }

    public ?Enums\EmployeeStatus $status {
        set { $this->set('status', $value); }
        get => $this->getAsEnum('status', Enums\EmployeeStatus::class);
    }

    public ?Carbon $birthDate {
        set { $this->setAsDate('birthDate', $value); }
        get => $this->getAsDateTime('birthDate');
    }

    public ?string $statisticsGroupCode {
        set { $this->set('statisticsGroupCode', $value); }
        get => $this->get('statisticsGroupCode');
    }

    public ?Carbon $lastModifiedDateTime {
        set { $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Picture\Record $picture {
        get => $this->get('picture');
    }

    /** @var ?Entity\Collection<DefaultDimension\Record> */
    public ?Entity\Collection $defaultDimensions {
        get => $this->get('defaultDimensions', 'collection');
    }

    /** @var ?Entity\Collection<TimeRegistrationEntry\Record> */
    public ?Entity\Collection $timeRegistrationEntries {
        get => $this->get('timeRegistrationEntries', 'collection');
    }

    /** @var ?Entity\Collection<DocumentAttachment\Record> */
    public ?Entity\Collection $documentAttachments {
        get => $this->get('documentAttachments', 'collection');
    }

    protected array $classMap = [
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'timeRegistrationEntries' => TimeRegistrationEntry\Record::class,
        'documentAttachments' => DocumentAttachment\Record::class,
    ];
}
