<?php
namespace Microsoft\NAV\TimeRegistrationEntry;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Employee;
use Microsoft\NAV\DimensionSetLine;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::employee->name => Employee\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
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

    public function getEmployeeId(): ?string
    {
        return $this->get(Properties::employeeId->name);
    }

    public function setEmployeeId(?string $value): self
    {
        $this->set(Properties::employeeId->name, $value);
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

    public function getJobId(): ?string
    {
        return $this->get(Properties::jobId->name);
    }

    public function setJobId(?string $value): self
    {
        $this->set(Properties::jobId->name, $value);
        return $this;
    }

    public function getJobNumber(): ?string
    {
        return $this->get(Properties::jobNumber->name);
    }

    public function setJobNumber(?string $value): self
    {
        $this->set(Properties::jobNumber->name, $value);
        return $this;
    }

    public function getJobTaskNumber(): ?string
    {
        return $this->get(Properties::jobTaskNumber->name);
    }

    public function setJobTaskNumber(?string $value): self
    {
        $this->set(Properties::jobTaskNumber->name, $value);
        return $this;
    }

    public function getAbsence(): ?string
    {
        return $this->get(Properties::absence->name);
    }

    public function setAbsence(?string $value): self
    {
        $this->set(Properties::absence->name, $value);
        return $this;
    }

    public function getLineNumber(): ?int
    {
        return $this->get(Properties::lineNumber->name);
    }

    public function setLineNumber(?int $value): self
    {
        $this->set(Properties::lineNumber->name, $value);
        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::date->name);
    }

    public function setDate(?\DateTime $value): self
    {
        $this->set(Properties::date->name, $value);
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->get(Properties::quantity->name);
    }

    public function setQuantity(?float $value): self
    {
        $this->set(Properties::quantity->name, $value);
        return $this;
    }

    public function getStatus(): ?Enums\EmployeeTimeRegStatus
    {
        return $this->getAsEnum(Properties::status->name, Enums\EmployeeTimeRegStatus::class);
    }

    public function setStatus(?Enums\EmployeeTimeRegStatus $value): self
    {
        $this->set(Properties::status->name, $value);
        return $this;
    }

    public function getUnitOfMeasureId(): ?string
    {
        return $this->get(Properties::unitOfMeasureId->name);
    }

    public function setUnitOfMeasureId(?string $value): self
    {
        $this->set(Properties::unitOfMeasureId->name, $value);
        return $this;
    }

    public function getUnitOfMeasureCode(): ?string
    {
        return $this->get(Properties::unitOfMeasureCode->name);
    }

    public function setUnitOfMeasureCode(?string $value): self
    {
        $this->set(Properties::unitOfMeasureCode->name, $value);
        return $this;
    }

    public function getLastModfiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModfiedDateTime->name);
    }

    public function setLastModfiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModfiedDateTime->name, $value);
        return $this;
    }

    public function getEmployee(): ?Employee\Record
    {
        return $this->get(Properties::employee->name);
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}