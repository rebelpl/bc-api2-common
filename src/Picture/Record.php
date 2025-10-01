<?php
namespace Rebel\BCApi2\Entity\Picture;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'item' => Item\Record::class,
        'customer' => Customer\Record::class,
        'contact' => Contact\Record::class,
        'vendor' => Vendor\Record::class,
        'employee' => Employee\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getParentType(): ?string
    {
        return $this->get('parentType');
    }

    public function setParentType(?string $value): self
    {
        $this->set('parentType', $value);
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->get('width');
    }

    public function setWidth(?int $value): self
    {
        $this->set('width', $value);
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->get('height');
    }

    public function setHeight(?int $value): self
    {
        $this->set('height', $value);
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->get('contentType');
    }

    public function setContentType(?string $value): self
    {
        $this->set('contentType', $value);
        return $this;
    }

    public function getPictureContent(): Entity\DataStream
    {
        return $this->get('pictureContent');
    }

    public function getItem(): ?Item\Record
    {
        return $this->getAsRelation('item');
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

    public function getEmployee(): ?Employee\Record
    {
        return $this->getAsRelation('employee');
    }
}
