<?php
namespace Rebel\BCApi2\Entity\CustomerContact;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\PdfDocument;

class Record extends Entity
{
    protected $classMap = ['pdfDocument' => PdfDocument\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getEmail(): ?string
    {
        return $this->get('email');
    }

    function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    function getFirstName(): ?string
    {
        return $this->get('firstName');
    }

    function setFirstName(?string $value): self
    {
        $this->set('firstName', $value);
        return $this;
    }

    function getLastName(): ?string
    {
        return $this->get('lastName');
    }

    function setLastName(?string $value): self
    {
        $this->set('lastName', $value);
        return $this;
    }

    function getProfessionalTitle(): ?string
    {
        return $this->get('professionalTitle');
    }

    function setProfessionalTitle(?string $value): self
    {
        $this->set('professionalTitle', $value);
        return $this;
    }

    function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    function setCustomerId(?string $value): self
    {
        $this->set('customerId', $value);
        return $this;
    }

    function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    function setCustomerName(?string $value): self
    {
        $this->set('customerName', $value);
        return $this;
    }

    function getPrimaryPhoneNumber(): ?string
    {
        return $this->get('primaryPhoneNumber');
    }

    function setPrimaryPhoneNumber(?string $value): self
    {
        $this->set('primaryPhoneNumber', $value);
        return $this;
    }

    function getPdfDocument(): ?PdfDocument\Record
    {
        return $this->get('pdfDocument');
    }
}
