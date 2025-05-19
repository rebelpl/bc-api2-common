<?php
namespace Rebel\BCApi2\Entity\FixedAsset;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\FixedAssetLocation;
use Rebel\BCApi2\Entity\Employee;

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

	public ?string $fixedAssetLocationCode {
		get => $this->get('fixedAssetLocationCode');
		set => $this->set('fixedAssetLocationCode', $value);
	}

	public ?string $fixedAssetLocationId {
		get => $this->get('fixedAssetLocationId');
		set => $this->set('fixedAssetLocationId', $value);
	}

	public ?string $classCode {
		get => $this->get('classCode');
		set => $this->set('classCode', $value);
	}

	public ?string $subclassCode {
		get => $this->get('subclassCode');
		set => $this->set('subclassCode', $value);
	}

	public ?bool $blocked {
		get => $this->get('blocked');
		set => $this->set('blocked', $value);
	}

	public ?string $serialNumber {
		get => $this->get('serialNumber');
		set => $this->set('serialNumber', $value);
	}

	public ?string $employeeNumber {
		get => $this->get('employeeNumber');
		set => $this->set('employeeNumber', $value);
	}

	public ?string $employeeId {
		get => $this->get('employeeId');
		set => $this->set('employeeId', $value);
	}

	public ?bool $underMaintenance {
		get => $this->get('underMaintenance');
		set => $this->set('underMaintenance', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?FixedAssetLocation\Record $fixedAssetLocation {
		get => $this->get('fixedAssetLocation');
		set => $this->set('fixedAssetLocation', $value);
	}

	public ?Employee\Record $employee {
		get => $this->get('employee');
		set => $this->set('employee', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'fixedAssetLocation' => FixedAssetLocation\Record::class,
			'employee' => Employee\Record::class,
        ];
    }
}