<?php
namespace Rebel\BCApi2\Entity\TimeRegistrationEntry;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $employeeId {
		get => $this->get('employeeId');
		set => $this->set('employeeId', $value);
	}

	public ?string $employeeNumber {
		get => $this->get('employeeNumber');
		set => $this->set('employeeNumber', $value);
	}

	public ?string $jobId {
		get => $this->get('jobId');
		set => $this->set('jobId', $value);
	}

	public ?string $jobNumber {
		get => $this->get('jobNumber');
		set => $this->set('jobNumber', $value);
	}

	public ?string $jobTaskNumber {
		get => $this->get('jobTaskNumber');
		set => $this->set('jobTaskNumber', $value);
	}

	public ?string $absence {
		get => $this->get('absence');
		set => $this->set('absence', $value);
	}

	public ?int $lineNumber {
		get => $this->get('lineNumber');
		set => $this->set('lineNumber', $value);
	}

	public ?\DateTime $date {
		get => $this->get('date', 'date');
		set => $this->set('date', $value);
	}

	public ?float $quantity {
		get => $this->get('quantity');
		set => $this->set('quantity', $value);
	}

	public ?Enums\EmployeeTimeRegStatus $status {
		get => $this->get('status', Enums\EmployeeTimeRegStatus::class);
		set => $this->set('status', $value);
	}

	public ?string $unitOfMeasureId {
		get => $this->get('unitOfMeasureId');
		set => $this->set('unitOfMeasureId', $value);
	}

	public ?string $unitOfMeasureCode {
		get => $this->get('unitOfMeasureCode');
		set => $this->set('unitOfMeasureCode', $value);
	}

	public ?\DateTime $lastModfiedDateTime {
		get => $this->get('lastModfiedDateTime', 'datetime');
		set => $this->set('lastModfiedDateTime', $value);
	}

	public ?Employee\Record $employee {
		get => $this->get('employee');
		set => $this->set('employee', $value);
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'employee' => Employee\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}