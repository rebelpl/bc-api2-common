<?php
namespace Rebel\BCApi2\Entity\Picture;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $classMap = [
        'item' => Item\Record::class,
        'customer' => Customer\Record::class,
        'contact' => Contact\Record::class,
        'vendor' => Vendor\Record::class,
        'employee' => Employee\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getParentType(): ?string
    {
        return $this->get('parentType');
    }

    function setParentType(?string $value): self
    {
        $this->set('parentType', $value);
        return $this;
    }

    function getWidth(): ?int
    {
        return $this->get('width');
    }

    function setWidth(?int $value): self
    {
        $this->set('width', $value);
        return $this;
    }

    function getHeight(): ?int
    {
        return $this->get('height');
    }

    function setHeight(?int $value): self
    {
        $this->set('height', $value);
        return $this;
    }

    function getContentType(): ?string
    {
        return $this->get('contentType');
    }

    function setContentType(?string $value): self
    {
        $this->set('contentType', $value);
        return $this;
    }

    function getPictureContent(): Entity\DataStream
    {
        return $this->get('pictureContent');
    }

    function getItem(): ?Item\Record
    {
        return $this->get('item');
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

    function getEmployee(): ?Employee\Record
    {
        return $this->get('employee');
    }
}
