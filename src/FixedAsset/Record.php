<?php
namespace Rebel\BCApi2\Entity\FixedAsset;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\FixedAssetLocation;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set {
            $this->set('number', $value);
        }
        get => $this->get('number');
    }

    public ?string $displayName {
        set {
            $this->set('displayName', $value);
        }
        get => $this->get('displayName');
    }

    public ?string $fixedAssetLocationCode {
        set {
            $this->set('fixedAssetLocationCode', $value);
        }
        get => $this->get('fixedAssetLocationCode');
    }

    public ?string $fixedAssetLocationId {
        set {
            $this->set('fixedAssetLocationId', $value);
        }
        get => $this->get('fixedAssetLocationId');
    }

    public ?string $classCode {
        set {
            $this->set('classCode', $value);
        }
        get => $this->get('classCode');
    }

    public ?string $subclassCode {
        set {
            $this->set('subclassCode', $value);
        }
        get => $this->get('subclassCode');
    }

    public ?bool $blocked {
        set {
            $this->set('blocked', $value);
        }
        get => $this->get('blocked');
    }

    public ?string $serialNumber {
        set {
            $this->set('serialNumber', $value);
        }
        get => $this->get('serialNumber');
    }

    public ?string $employeeNumber {
        set {
            $this->set('employeeNumber', $value);
        }
        get => $this->get('employeeNumber');
    }

    public ?string $employeeId {
        set {
            $this->set('employeeId', $value);
        }
        get => $this->get('employeeId');
    }

    public ?bool $underMaintenance {
        set {
            $this->set('underMaintenance', $value);
        }
        get => $this->get('underMaintenance');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?FixedAssetLocation\Record $fixedAssetLocation {
        get => $this->get('fixedAssetLocation');
    }

    public ?Employee\Record $employee {
        get => $this->get('employee');
    }

    protected array $classMap = [
        'fixedAssetLocation' => FixedAssetLocation\Record::class,
        'employee' => Employee\Record::class,
    ];
}
