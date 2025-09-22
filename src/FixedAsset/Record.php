<?php
namespace Rebel\BCApi2\Entity\FixedAsset;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\FixedAssetLocation;

class Record extends Entity
{
    protected $classMap = ['fixedAssetLocation' => FixedAssetLocation\Record::class, 'employee' => Employee\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getFixedAssetLocationCode(): ?string
    {
        return $this->get('fixedAssetLocationCode');
    }

    function setFixedAssetLocationCode(?string $value): self
    {
        $this->set('fixedAssetLocationCode', $value);
        return $this;
    }

    function getFixedAssetLocationId(): ?string
    {
        return $this->get('fixedAssetLocationId');
    }

    function setFixedAssetLocationId(?string $value): self
    {
        $this->set('fixedAssetLocationId', $value);
        return $this;
    }

    function getClassCode(): ?string
    {
        return $this->get('classCode');
    }

    function setClassCode(?string $value): self
    {
        $this->set('classCode', $value);
        return $this;
    }

    function getSubclassCode(): ?string
    {
        return $this->get('subclassCode');
    }

    function setSubclassCode(?string $value): self
    {
        $this->set('subclassCode', $value);
        return $this;
    }

    function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    function getSerialNumber(): ?string
    {
        return $this->get('serialNumber');
    }

    function setSerialNumber(?string $value): self
    {
        $this->set('serialNumber', $value);
        return $this;
    }

    function getEmployeeNumber(): ?string
    {
        return $this->get('employeeNumber');
    }

    function setEmployeeNumber(?string $value): self
    {
        $this->set('employeeNumber', $value);
        return $this;
    }

    function getEmployeeId(): ?string
    {
        return $this->get('employeeId');
    }

    function setEmployeeId(?string $value): self
    {
        $this->set('employeeId', $value);
        return $this;
    }

    function getUnderMaintenance(): ?bool
    {
        return $this->get('underMaintenance');
    }

    function setUnderMaintenance(?bool $value): self
    {
        $this->set('underMaintenance', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getFixedAssetLocation(): ?FixedAssetLocation\Record
    {
        return $this->get('fixedAssetLocation');
    }

    function getEmployee(): ?Employee\Record
    {
        return $this->get('employee');
    }
}
