<?php
namespace Rebel\BCApi2\Entity\Opportunity;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
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

    function getContactNumber(): ?string
    {
        return $this->get('contactNumber');
    }

    function setContactNumber(?string $value): self
    {
        $this->set('contactNumber', $value);
        return $this;
    }

    function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    function setContactName(?string $value): self
    {
        $this->set('contactName', $value);
        return $this;
    }

    function getContactCompanyName(): ?string
    {
        return $this->get('contactCompanyName');
    }

    function setContactCompanyName(?string $value): self
    {
        $this->set('contactCompanyName', $value);
        return $this;
    }

    function getSalespersonCode(): ?string
    {
        return $this->get('salespersonCode');
    }

    function setSalespersonCode(?string $value): self
    {
        $this->set('salespersonCode', $value);
        return $this;
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function setDescription(?string $value): self
    {
        $this->set('description', $value);
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

    function getClosed(): ?bool
    {
        return $this->get('closed');
    }

    function setClosed(?bool $value): self
    {
        $this->set('closed', $value);
        return $this;
    }

    function getCreationDate(): ?Carbon
    {
        return $this->getAsDate('creationDate');
    }

    function setCreationDate(?\DateTime $value): self
    {
        $this->setAsDate('creationDate', $value);
        return $this;
    }

    function getDateClosed(): ?Carbon
    {
        return $this->getAsDate('dateClosed');
    }

    function setDateClosed(?\DateTime $value): self
    {
        $this->setAsDate('dateClosed', $value);
        return $this;
    }

    function getCalculatedCurrentValue(): ?float
    {
        return $this->get('calculatedCurrentValue');
    }

    function setCalculatedCurrentValue(?float $value): self
    {
        $this->set('calculatedCurrentValue', $value);
        return $this;
    }

    function getChancesOfSuccessPrc(): ?float
    {
        return $this->get('chancesOfSuccessPrc');
    }

    function setChancesOfSuccessPrc(?float $value): self
    {
        $this->set('chancesOfSuccessPrc', $value);
        return $this;
    }

    function getCompletedPrc(): ?float
    {
        return $this->get('completedPrc');
    }

    function setCompletedPrc(?float $value): self
    {
        $this->set('completedPrc', $value);
        return $this;
    }

    function getEstimatedClosingDate(): ?Carbon
    {
        return $this->getAsDate('estimatedClosingDate');
    }

    function setEstimatedClosingDate(?\DateTime $value): self
    {
        $this->setAsDate('estimatedClosingDate', $value);
        return $this;
    }

    function getEstimatedValue(): ?float
    {
        return $this->get('estimatedValue');
    }

    function setEstimatedValue(?float $value): self
    {
        $this->set('estimatedValue', $value);
        return $this;
    }

    function getSystemCreatedAt(): ?Carbon
    {
        return $this->getAsDateTime('systemCreatedAt');
    }

    function setSystemCreatedAt(?\DateTime $value): self
    {
        $this->setAsDateTime('systemCreatedAt', $value);
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
}
