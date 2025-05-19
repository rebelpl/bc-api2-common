<?php
namespace Rebel\BCApi2\Entity\CustomerContact;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\PdfDocument;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::pdfDocument->name => PdfDocument\Record::class,
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

    public function getEmail(): ?string
    {
        return $this->get(Properties::email->name);
    }

    public function setEmail(?string $value): self
    {
        $this->set(Properties::email->name, $value);
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->get(Properties::firstName->name);
    }

    public function setFirstName(?string $value): self
    {
        $this->set(Properties::firstName->name, $value);
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->get(Properties::lastName->name);
    }

    public function setLastName(?string $value): self
    {
        $this->set(Properties::lastName->name, $value);
        return $this;
    }

    public function getProfessionalTitle(): ?string
    {
        return $this->get(Properties::professionalTitle->name);
    }

    public function setProfessionalTitle(?string $value): self
    {
        $this->set(Properties::professionalTitle->name, $value);
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->get(Properties::customerId->name);
    }

    public function setCustomerId(?string $value): self
    {
        $this->set(Properties::customerId->name, $value);
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->get(Properties::customerName->name);
    }

    public function setCustomerName(?string $value): self
    {
        $this->set(Properties::customerName->name, $value);
        return $this;
    }

    public function getPrimaryPhoneNumber(): ?string
    {
        return $this->get(Properties::primaryPhoneNumber->name);
    }

    public function setPrimaryPhoneNumber(?string $value): self
    {
        $this->set(Properties::primaryPhoneNumber->name, $value);
        return $this;
    }

    public function getPdfDocument(): ?PdfDocument\Record
    {
        return $this->get(Properties::pdfDocument->name);
    }
}