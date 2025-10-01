<?php
namespace Rebel\BCApi2\Entity\CustomerContact;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\PdfDocument;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['pdfDocument' => PdfDocument\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->get('firstName');
    }

    public function setFirstName(?string $value): self
    {
        $this->set('firstName', $value);
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->get('lastName');
    }

    public function setLastName(?string $value): self
    {
        $this->set('lastName', $value);
        return $this;
    }

    public function getProfessionalTitle(): ?string
    {
        return $this->get('professionalTitle');
    }

    public function setProfessionalTitle(?string $value): self
    {
        $this->set('professionalTitle', $value);
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    public function setCustomerId(?string $value): self
    {
        $this->set('customerId', $value);
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    public function setCustomerName(?string $value): self
    {
        $this->set('customerName', $value);
        return $this;
    }

    public function getPrimaryPhoneNumber(): ?string
    {
        return $this->get('primaryPhoneNumber');
    }

    public function setPrimaryPhoneNumber(?string $value): self
    {
        $this->set('primaryPhoneNumber', $value);
        return $this;
    }

    public function getPdfDocument(): ?PdfDocument\Record
    {
        return $this->getAsRelation('pdfDocument');
    }
}
