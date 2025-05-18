<?php
namespace Microsoft\NAV\ContactInformation;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Customer;
use Microsoft\NAV\Contact;
use Microsoft\NAV\Vendor;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::customer->name => Customer\Record::class,
            Properties::contact->name => Contact\Record::class,
            Properties::vendor->name => Vendor\Record::class,
        ];
    }

    public function getContactId(): ?string
    {
        return $this->get(Properties::contactId->name);
    }

    public function setContactId(?string $value): self
    {
        $this->set(Properties::contactId->name, $value);
        return $this;
    }

    public function getContactNumber(): ?string
    {
        return $this->get(Properties::contactNumber->name);
    }

    public function setContactNumber(?string $value): self
    {
        $this->set(Properties::contactNumber->name, $value);
        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->get(Properties::contactName->name);
    }

    public function setContactName(?string $value): self
    {
        $this->set(Properties::contactName->name, $value);
        return $this;
    }

    public function getContactType(): ?Enums\ContactType
    {
        return $this->getAsEnum(Properties::contactType->name, Enums\ContactType::class);
    }

    public function setContactType(?Enums\ContactType $value): self
    {
        $this->set(Properties::contactType->name, $value);
        return $this;
    }

    public function getRelatedId(): ?string
    {
        return $this->get(Properties::relatedId->name);
    }

    public function setRelatedId(?string $value): self
    {
        $this->set(Properties::relatedId->name, $value);
        return $this;
    }

    public function getRelatedType(): ?Enums\ContactBusinessRelationLinkToTable
    {
        return $this->getAsEnum(Properties::relatedType->name, Enums\ContactBusinessRelationLinkToTable::class);
    }

    public function setRelatedType(?Enums\ContactBusinessRelationLinkToTable $value): self
    {
        $this->set(Properties::relatedType->name, $value);
        return $this;
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }

    public function getContact(): ?Contact\Record
    {
        return $this->get(Properties::contact->name);
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->get(Properties::vendor->name);
    }
}