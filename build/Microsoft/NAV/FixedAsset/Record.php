<?php
namespace Microsoft\NAV\FixedAsset;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\FixedAssetLocation;
use Microsoft\NAV\Employee;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::fixedAssetLocation->name => FixedAssetLocation\Record::class,
            Properties::employee->name => Employee\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function setNumber(?string $value): self
    {
        $this->set(Properties::number->name, $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getFixedAssetLocationCode(): ?string
    {
        return $this->get(Properties::fixedAssetLocationCode->name);
    }

    public function setFixedAssetLocationCode(?string $value): self
    {
        $this->set(Properties::fixedAssetLocationCode->name, $value);
        return $this;
    }

    public function getFixedAssetLocationId(): ?string
    {
        return $this->get(Properties::fixedAssetLocationId->name);
    }

    public function setFixedAssetLocationId(?string $value): self
    {
        $this->set(Properties::fixedAssetLocationId->name, $value);
        return $this;
    }

    public function getClassCode(): ?string
    {
        return $this->get(Properties::classCode->name);
    }

    public function setClassCode(?string $value): self
    {
        $this->set(Properties::classCode->name, $value);
        return $this;
    }

    public function getSubclassCode(): ?string
    {
        return $this->get(Properties::subclassCode->name);
    }

    public function setSubclassCode(?string $value): self
    {
        $this->set(Properties::subclassCode->name, $value);
        return $this;
    }

    public function isBlocked(): ?bool
    {
        return $this->get(Properties::blocked->name);
    }

    public function setBlocked(?bool $value): self
    {
        $this->set(Properties::blocked->name, $value);
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->get(Properties::serialNumber->name);
    }

    public function setSerialNumber(?string $value): self
    {
        $this->set(Properties::serialNumber->name, $value);
        return $this;
    }

    public function getEmployeeNumber(): ?string
    {
        return $this->get(Properties::employeeNumber->name);
    }

    public function setEmployeeNumber(?string $value): self
    {
        $this->set(Properties::employeeNumber->name, $value);
        return $this;
    }

    public function getEmployeeId(): ?string
    {
        return $this->get(Properties::employeeId->name);
    }

    public function setEmployeeId(?string $value): self
    {
        $this->set(Properties::employeeId->name, $value);
        return $this;
    }

    public function isUnderMaintenance(): ?bool
    {
        return $this->get(Properties::underMaintenance->name);
    }

    public function setUnderMaintenance(?bool $value): self
    {
        $this->set(Properties::underMaintenance->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getFixedAssetLocation(): ?FixedAssetLocation\Record
    {
        return $this->get(Properties::fixedAssetLocation->name);
    }

    public function getEmployee(): ?Employee\Record
    {
        return $this->get(Properties::employee->name);
    }
}