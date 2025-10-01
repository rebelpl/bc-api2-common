<?php
namespace Rebel\BCApi2\Entity\ContactInformation;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $primaryKey = 'contactId';

    protected $classMap = [
        'customer' => Customer\Record::class,
        'contact' => Contact\Record::class,
        'vendor' => Vendor\Record::class,
    ];

    public function getContactId(): ?string
    {
        return $this->get('contactId');
    }

    public function getContactNumber(): ?string
    {
        return $this->get('contactNumber');
    }

    public function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    public function getContactType(): ?string
    {
        return $this->get('contactType');
    }

    public function getRelatedId(): ?string
    {
        return $this->get('relatedId');
    }

    public function getRelatedType(): ?string
    {
        return $this->get('relatedType');
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }

    public function getContact(): ?Contact\Record
    {
        return $this->getAsRelation('contact');
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->getAsRelation('vendor');
    }
}
