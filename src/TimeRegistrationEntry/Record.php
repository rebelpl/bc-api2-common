<?php
namespace Rebel\BCApi2\Entity\TimeRegistrationEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Employee;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['employee' => Employee\Record::class, 'dimensionSetLines' => DimensionSetLine\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
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

    public function getEmployeeNumber(): ?string
    {
        return $this->get('employeeNumber');
    }

    public function setEmployeeNumber(?string $value): self
    {
        $this->set('employeeNumber', $value);
        return $this;
    }

    public function getJobId(): ?string
    {
        return $this->get('jobId');
    }

    public function setJobId(?string $value): self
    {
        $this->set('jobId', $value);
        return $this;
    }

    public function getJobNumber(): ?string
    {
        return $this->get('jobNumber');
    }

    public function setJobNumber(?string $value): self
    {
        $this->set('jobNumber', $value);
        return $this;
    }

    public function getJobTaskNumber(): ?string
    {
        return $this->get('jobTaskNumber');
    }

    public function setJobTaskNumber(?string $value): self
    {
        $this->set('jobTaskNumber', $value);
        return $this;
    }

    public function getAbsence(): ?string
    {
        return $this->get('absence');
    }

    public function setAbsence(?string $value): self
    {
        $this->set('absence', $value);
        return $this;
    }

    public function getLineNumber(): ?int
    {
        return $this->get('lineNumber');
    }

    public function setLineNumber(?int $value): self
    {
        $this->set('lineNumber', $value);
        return $this;
    }

    public function getDate(): ?Carbon
    {
        return $this->getAsDate('date');
    }

    public function setDate(?\DateTime $value): self
    {
        $this->setAsDate('date', $value);
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    public function setQuantity(?float $value): self
    {
        $this->set('quantity', $value);
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    public function getUnitOfMeasureId(): ?string
    {
        return $this->get('unitOfMeasureId');
    }

    public function setUnitOfMeasureId(?string $value): self
    {
        $this->set('unitOfMeasureId', $value);
        return $this;
    }

    public function getUnitOfMeasureCode(): ?string
    {
        return $this->get('unitOfMeasureCode');
    }

    public function setUnitOfMeasureCode(?string $value): self
    {
        $this->set('unitOfMeasureCode', $value);
        return $this;
    }

    public function getLastModfiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModfiedDateTime');
    }

    public function setLastModfiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModfiedDateTime', $value);
        return $this;
    }

    public function getEmployee(): ?Employee\Record
    {
        return $this->getAsRelation('employee');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
