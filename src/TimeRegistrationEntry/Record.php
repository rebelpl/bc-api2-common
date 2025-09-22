<?php
namespace Rebel\BCApi2\Entity\TimeRegistrationEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Employee;

class Record extends Entity
{
    protected $classMap = ['employee' => Employee\Record::class, 'dimensionSetLines' => DimensionSetLine\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
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

    function getEmployeeNumber(): ?string
    {
        return $this->get('employeeNumber');
    }

    function setEmployeeNumber(?string $value): self
    {
        $this->set('employeeNumber', $value);
        return $this;
    }

    function getJobId(): ?string
    {
        return $this->get('jobId');
    }

    function setJobId(?string $value): self
    {
        $this->set('jobId', $value);
        return $this;
    }

    function getJobNumber(): ?string
    {
        return $this->get('jobNumber');
    }

    function setJobNumber(?string $value): self
    {
        $this->set('jobNumber', $value);
        return $this;
    }

    function getJobTaskNumber(): ?string
    {
        return $this->get('jobTaskNumber');
    }

    function setJobTaskNumber(?string $value): self
    {
        $this->set('jobTaskNumber', $value);
        return $this;
    }

    function getAbsence(): ?string
    {
        return $this->get('absence');
    }

    function setAbsence(?string $value): self
    {
        $this->set('absence', $value);
        return $this;
    }

    function getLineNumber(): ?int
    {
        return $this->get('lineNumber');
    }

    function setLineNumber(?int $value): self
    {
        $this->set('lineNumber', $value);
        return $this;
    }

    function getDate(): ?Carbon
    {
        return $this->getAsDate('date');
    }

    function setDate(?\DateTime $value): self
    {
        $this->setAsDate('date', $value);
        return $this;
    }

    function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    function setQuantity(?float $value): self
    {
        $this->set('quantity', $value);
        return $this;
    }

    function getStatus(): ?string
    {
        return $this->get('status');
    }

    function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    function getUnitOfMeasureId(): ?string
    {
        return $this->get('unitOfMeasureId');
    }

    function setUnitOfMeasureId(?string $value): self
    {
        $this->set('unitOfMeasureId', $value);
        return $this;
    }

    function getUnitOfMeasureCode(): ?string
    {
        return $this->get('unitOfMeasureCode');
    }

    function setUnitOfMeasureCode(?string $value): self
    {
        $this->set('unitOfMeasureCode', $value);
        return $this;
    }

    function getLastModfiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModfiedDateTime');
    }

    function setLastModfiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModfiedDateTime', $value);
        return $this;
    }

    function getEmployee(): ?Employee\Record
    {
        return $this->get('employee');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
