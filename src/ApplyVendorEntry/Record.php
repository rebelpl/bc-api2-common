<?php
namespace Rebel\BCApi2\Entity\ApplyVendorEntry;

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

    public function getApplied(): ?bool
    {
        return $this->get('applied');
    }

    public function setApplied(?bool $value): self
    {
        $this->set('applied', $value);
        return $this;
    }

    public function getAppliesToId(): ?string
    {
        return $this->get('appliesToId');
    }

    public function setAppliesToId(?string $value): self
    {
        $this->set('appliesToId', $value);
        return $this;
    }

    public function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    public function setPostingDate(?\DateTime $value): self
    {
        $this->setAsDate('postingDate', $value);
        return $this;
    }

    public function getDocumentType(): ?string
    {
        return $this->get('documentType');
    }

    public function setDocumentType(?string $value): self
    {
        $this->set('documentType', $value);
        return $this;
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    public function setDocumentNumber(?string $value): self
    {
        $this->set('documentNumber', $value);
        return $this;
    }

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
    }

    public function setExternalDocumentNumber(?string $value): self
    {
        $this->set('externalDocumentNumber', $value);
        return $this;
    }

    public function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    public function setVendorNumber(?string $value): self
    {
        $this->set('vendorNumber', $value);
        return $this;
    }

    public function getVendorName(): ?string
    {
        return $this->get('vendorName');
    }

    public function setVendorName(?string $value): self
    {
        $this->set('vendorName', $value);
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

    public function getRemainingAmount(): ?float
    {
        return $this->get('remainingAmount');
    }

    public function setRemainingAmount(?float $value): self
    {
        $this->set('remainingAmount', $value);
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
