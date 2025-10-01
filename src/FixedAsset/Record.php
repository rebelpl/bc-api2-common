<?php
namespace Rebel\BCApi2\Entity\FixedAsset;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\FixedAssetLocation;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['fixedAssetLocation' => FixedAssetLocation\Record::class, 'employee' => Employee\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getFixedAssetLocationCode(): ?string
    {
        return $this->get('fixedAssetLocationCode');
    }

    public function setFixedAssetLocationCode(?string $value): self
    {
        $this->set('fixedAssetLocationCode', $value);
        return $this;
    }

    public function getFixedAssetLocationId(): ?string
    {
        return $this->get('fixedAssetLocationId');
    }

    public function setFixedAssetLocationId(?string $value): self
    {
        $this->set('fixedAssetLocationId', $value);
        return $this;
    }

    public function getClassCode(): ?string
    {
        return $this->get('classCode');
    }

    public function setClassCode(?string $value): self
    {
        $this->set('classCode', $value);
        return $this;
    }

    public function getSubclassCode(): ?string
    {
        return $this->get('subclassCode');
    }

    public function setSubclassCode(?string $value): self
    {
        $this->set('subclassCode', $value);
        return $this;
    }

    public function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    public function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->get('serialNumber');
    }

    public function setSerialNumber(?string $value): self
    {
        $this->set('serialNumber', $value);
        return $this;
    }

    public function getEmployeeNumber(): ?string
    {
        return $this->get('employeeNumber');
    }

    public function setEmployeeNumber(?string $value): self
    {
        $this->set('employeeNumber', $value);
        return $this;
    }

    public function getEmployeeId(): ?string
    {
        return $this->get('employeeId');
    }

    public function setEmployeeId(?string $value): self
    {
        $this->set('employeeId', $value);
        return $this;
    }

    public function getUnderMaintenance(): ?bool
    {
        return $this->get('underMaintenance');
    }

    public function setUnderMaintenance(?bool $value): self
    {
        $this->set('underMaintenance', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getFixedAssetLocation(): ?FixedAssetLocation\Record
    {
        return $this->getAsRelation('fixedAssetLocation');
    }

    public function getEmployee(): ?Employee\Record
    {
        return $this->getAsRelation('employee');
    }
}
