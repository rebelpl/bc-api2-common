<?php
namespace Rebel\BCApi2\Entity\ApplyVendorEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getApplied(): ?bool
    {
        return $this->get('applied');
    }

    function setApplied(?bool $value): self
    {
        $this->set('applied', $value);
        return $this;
    }

    function getAppliesToId(): ?string
    {
        return $this->get('appliesToId');
    }

    function setAppliesToId(?string $value): self
    {
        $this->set('appliesToId', $value);
        return $this;
    }

    function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    function setPostingDate(?\DateTime $value): self
    {
        $this->setAsDate('postingDate', $value);
        return $this;
    }

    function getDocumentType(): ?string
    {
        return $this->get('documentType');
    }

    function setDocumentType(?string $value): self
    {
        $this->set('documentType', $value);
        return $this;
    }

    function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    function setDocumentNumber(?string $value): self
    {
        $this->set('documentNumber', $value);
        return $this;
    }

    function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
    }

    function setExternalDocumentNumber(?string $value): self
    {
        $this->set('externalDocumentNumber', $value);
        return $this;
    }

    function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    function setVendorNumber(?string $value): self
    {
        $this->set('vendorNumber', $value);
        return $this;
    }

    function getVendorName(): ?string
    {
        return $this->get('vendorName');
    }

    function setVendorName(?string $value): self
    {
        $this->set('vendorName', $value);
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

    function getRemainingAmount(): ?float
    {
        return $this->get('remainingAmount');
    }

    function setRemainingAmount(?float $value): self
    {
        $this->set('remainingAmount', $value);
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
