<?php
namespace Rebel\BCApi2\Entity\ContactInformation;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $classMap = [
        'customer' => Customer\Record::class,
        'contact' => Contact\Record::class,
        'vendor' => Vendor\Record::class,
    ];

    function getContactId(): ?string
    {
        return $this->get('contactId');
    }

    function getContactNumber(): ?string
    {
        return $this->get('contactNumber');
    }

    function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    function getContactType(): ?string
    {
        return $this->get('contactType');
    }

    function getRelatedId(): ?string
    {
        return $this->get('relatedId');
    }

    function getRelatedType(): ?string
    {
        return $this->get('relatedType');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
    }

    function getContact(): ?Contact\Record
    {
        return $this->get('contact');
    }

    function getVendor(): ?Vendor\Record
    {
        return $this->get('vendor');
    }
}
