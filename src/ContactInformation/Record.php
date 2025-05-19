<?php
namespace Rebel\BCApi2\Entity\ContactInformation;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\Enums;

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

    public function getContactNumber(): ?string
    {
        return $this->get(Properties::contactNumber->name);
    }

    public function getContactName(): ?string
    {
        return $this->get(Properties::contactName->name);
    }

    public function getContactType(): ?Enums\ContactType
    {
        return $this->getAsEnum(Properties::contactType->name, Enums\ContactType::class);
    }

    public function getRelatedId(): ?string
    {
        return $this->get(Properties::relatedId->name);
    }

    public function getRelatedType(): ?Enums\ContactBusinessRelationLinkToTable
    {
        return $this->getAsEnum(Properties::relatedType->name, Enums\ContactBusinessRelationLinkToTable::class);
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