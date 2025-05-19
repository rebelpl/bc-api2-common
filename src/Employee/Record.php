<?php
namespace Rebel\BCApi2\Entity\Employee;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\TimeRegistrationEntry;
use Rebel\BCApi2\Entity\DocumentAttachment;

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

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?string $givenName {
		get => $this->get('givenName');
		set => $this->set('givenName', $value);
	}

	public ?string $middleName {
		get => $this->get('middleName');
		set => $this->set('middleName', $value);
	}

	public ?string $surname {
		get => $this->get('surname');
		set => $this->set('surname', $value);
	}

	public ?string $jobTitle {
		get => $this->get('jobTitle');
		set => $this->set('jobTitle', $value);
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

	public ?string $mobilePhone {
		get => $this->get('mobilePhone');
		set => $this->set('mobilePhone', $value);
	}

	public ?string $email {
		get => $this->get('email');
		set => $this->set('email', $value);
	}

	public ?string $personalEmail {
		get => $this->get('personalEmail');
		set => $this->set('personalEmail', $value);
	}

	public ?\DateTime $employmentDate {
		get => $this->get('employmentDate', 'date');
		set => $this->set('employmentDate', $value);
	}

	public ?\DateTime $terminationDate {
		get => $this->get('terminationDate', 'date');
		set => $this->set('terminationDate', $value);
	}

	public ?Enums\EmployeeStatus $status {
		get => $this->get('status', Enums\EmployeeStatus::class);
		set => $this->set('status', $value);
	}

	public ?\DateTime $birthDate {
		get => $this->get('birthDate', 'date');
		set => $this->set('birthDate', $value);
	}

	public ?string $statisticsGroupCode {
		get => $this->get('statisticsGroupCode');
		set => $this->set('statisticsGroupCode', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Picture\Record $picture {
		get => $this->get('picture');
		set => $this->set('picture', $value);
	}

	/** @var Entity\Collection<DefaultDimension\Record> */
	public Entity\Collection $defaultDimensions {
		get => $this->get('defaultDimensions', 'collection');
	}

	/** @var Entity\Collection<TimeRegistrationEntry\Record> */
	public Entity\Collection $timeRegistrationEntries {
		get => $this->get('timeRegistrationEntries', 'collection');
	}

	/** @var Entity\Collection<DocumentAttachment\Record> */
	public Entity\Collection $documentAttachments {
		get => $this->get('documentAttachments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'picture' => Picture\Record::class,
			'defaultDimensions' => DefaultDimension\Record::class,
			'timeRegistrationEntries' => TimeRegistrationEntry\Record::class,
			'documentAttachments' => DocumentAttachment\Record::class,
        ];
    }
}