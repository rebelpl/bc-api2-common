<?php
namespace Rebel\BCApi2\Entity\Picture;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::item->name => Item\Record::class,
            Properties::customer->name => Customer\Record::class,
            Properties::contact->name => Contact\Record::class,
            Properties::vendor->name => Vendor\Record::class,
            Properties::employee->name => Employee\Record::class,
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

    public function getParentType(): ?Enums\PictureEntityParentType
    {
        return $this->getAsEnum(Properties::parentType->name, Enums\PictureEntityParentType::class);
    }

    public function setParentType(?Enums\PictureEntityParentType $value): self
    {
        $this->set(Properties::parentType->name, $value);
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->get(Properties::width->name);
    }

    public function setWidth(?int $value): self
    {
        $this->set(Properties::width->name, $value);
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->get(Properties::height->name);
    }

    public function setHeight(?int $value): self
    {
        $this->set(Properties::height->name, $value);
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->get(Properties::contentType->name);
    }

    public function setContentType(?string $value): self
    {
        $this->set(Properties::contentType->name, $value);
        return $this;
    }

    public function getPictureContent(): ?string
    {
        return $this->get(Properties::pictureContent->name);
    }

    public function setPictureContent(?string $value): self
    {
        $this->set(Properties::pictureContent->name, $value);
        return $this;
    }

    public function getItem(): ?Item\Record
    {
        return $this->get(Properties::item->name);
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

    public function getEmployee(): ?Employee\Record
    {
        return $this->get(Properties::employee->name);
    }
}