<?php
namespace Rebel\BCApi2\Entity\Opportunity;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'id';

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

    public function getContactNumber(): ?string
    {
        return $this->get('contactNumber');
    }

    public function setContactNumber(?string $value): self
    {
        $this->set('contactNumber', $value);
        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    public function setContactName(?string $value): self
    {
        $this->set('contactName', $value);
        return $this;
    }

    public function getContactCompanyName(): ?string
    {
        return $this->get('contactCompanyName');
    }

    public function setContactCompanyName(?string $value): self
    {
        $this->set('contactCompanyName', $value);
        return $this;
    }

    public function getSalespersonCode(): ?string
    {
        return $this->get('salespersonCode');
    }

    public function setSalespersonCode(?string $value): self
    {
        $this->set('salespersonCode', $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function setDescription(?string $value): self
    {
        $this->set('description', $value);
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

    public function getClosed(): ?bool
    {
        return $this->get('closed');
    }

    public function setClosed(?bool $value): self
    {
        $this->set('closed', $value);
        return $this;
    }

    public function getCreationDate(): ?Carbon
    {
        return $this->getAsDate('creationDate');
    }

    public function setCreationDate(?\DateTime $value): self
    {
        $this->setAsDate('creationDate', $value);
        return $this;
    }

    public function getDateClosed(): ?Carbon
    {
        return $this->getAsDate('dateClosed');
    }

    public function setDateClosed(?\DateTime $value): self
    {
        $this->setAsDate('dateClosed', $value);
        return $this;
    }

    public function getCalculatedCurrentValue(): ?float
    {
        return $this->get('calculatedCurrentValue');
    }

    public function setCalculatedCurrentValue(?float $value): self
    {
        $this->set('calculatedCurrentValue', $value);
        return $this;
    }

    public function getChancesOfSuccessPrc(): ?float
    {
        return $this->get('chancesOfSuccessPrc');
    }

    public function setChancesOfSuccessPrc(?float $value): self
    {
        $this->set('chancesOfSuccessPrc', $value);
        return $this;
    }

    public function getCompletedPrc(): ?float
    {
        return $this->get('completedPrc');
    }

    public function setCompletedPrc(?float $value): self
    {
        $this->set('completedPrc', $value);
        return $this;
    }

    public function getEstimatedClosingDate(): ?Carbon
    {
        return $this->getAsDate('estimatedClosingDate');
    }

    public function setEstimatedClosingDate(?\DateTime $value): self
    {
        $this->setAsDate('estimatedClosingDate', $value);
        return $this;
    }

    public function getEstimatedValue(): ?float
    {
        return $this->get('estimatedValue');
    }

    public function setEstimatedValue(?float $value): self
    {
        $this->set('estimatedValue', $value);
        return $this;
    }

    public function getSystemCreatedAt(): ?Carbon
    {
        return $this->getAsDateTime('systemCreatedAt');
    }

    public function setSystemCreatedAt(?\DateTime $value): self
    {
        $this->setAsDateTime('systemCreatedAt', $value);
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
}
