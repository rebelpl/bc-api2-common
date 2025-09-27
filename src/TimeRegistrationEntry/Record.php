<?php
namespace Rebel\BCApi2\Entity\TimeRegistrationEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $employeeId {
        set {
            $this->set('employeeId', $value);
        }
        get => $this->get('employeeId');
    }

    public ?string $employeeNumber {
        set {
            $this->set('employeeNumber', $value);
        }
        get => $this->get('employeeNumber');
    }

    public ?string $jobId {
        set {
            $this->set('jobId', $value);
        }
        get => $this->get('jobId');
    }

    public ?string $jobNumber {
        set {
            $this->set('jobNumber', $value);
        }
        get => $this->get('jobNumber');
    }

    public ?string $jobTaskNumber {
        set {
            $this->set('jobTaskNumber', $value);
        }
        get => $this->get('jobTaskNumber');
    }

    public ?string $absence {
        set {
            $this->set('absence', $value);
        }
        get => $this->get('absence');
    }

    public ?int $lineNumber {
        set {
            $this->set('lineNumber', $value);
        }
        get => $this->get('lineNumber');
    }

    public ?Carbon $date {
        set {
            $this->setAsDate('date', $value);
        }
        get => $this->getAsDate('date');
    }

    public ?float $quantity {
        set {
            $this->set('quantity', $value);
        }
        get => $this->get('quantity');
    }

    public ?Enums\EmployeeTimeRegStatus $status {
        set {
            $this->set('status', $value);
        }
        get => $this->getAsEnum('status', Enums\EmployeeTimeRegStatus::class);
    }

    public ?string $unitOfMeasureId {
        set {
            $this->set('unitOfMeasureId', $value);
        }
        get => $this->get('unitOfMeasureId');
    }

    public ?string $unitOfMeasureCode {
        set {
            $this->set('unitOfMeasureCode', $value);
        }
        get => $this->get('unitOfMeasureCode');
    }

    public ?Carbon $lastModfiedDateTime {
        set {
            $this->setAsDateTime('lastModfiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModfiedDateTime');
    }

    public ?Employee\Record $employee {
        get => $this->getAsRelation('employee');
    }

    /** @var Entity\Collection<DimensionSetLine\Record> */
    public Entity\Collection $dimensionSetLines {
        get => $this->getAsCollection('dimensionSetLines');
    }

    protected array $classMap = [
        'employee' => Employee\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];
}
