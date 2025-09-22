<?php
namespace Rebel\BCApi2\Entity\DefaultDimension;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Dimension;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $classMap = [
        'item' => Item\Record::class,
        'account' => Account\Record::class,
        'dimension' => Dimension\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'customer' => Customer\Record::class,
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

    function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    function setParentId(?string $value): self
    {
        $this->set('parentId', $value);
        return $this;
    }

    function getDimensionId(): ?string
    {
        return $this->get('dimensionId');
    }

    function setDimensionId(?string $value): self
    {
        $this->set('dimensionId', $value);
        return $this;
    }

    function getDimensionCode(): ?string
    {
        return $this->get('dimensionCode');
    }

    function setDimensionCode(?string $value): self
    {
        $this->set('dimensionCode', $value);
        return $this;
    }

    function getDimensionValueId(): ?string
    {
        return $this->get('dimensionValueId');
    }

    function setDimensionValueId(?string $value): self
    {
        $this->set('dimensionValueId', $value);
        return $this;
    }

    function getDimensionValueCode(): ?string
    {
        return $this->get('dimensionValueCode');
    }

    function setDimensionValueCode(?string $value): self
    {
        $this->set('dimensionValueCode', $value);
        return $this;
    }

    function getPostingValidation(): ?string
    {
        return $this->get('postingValidation');
    }

    function setPostingValidation(?string $value): self
    {
        $this->set('postingValidation', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getItem(): ?Item\Record
    {
        return $this->get('item');
    }

    function getAccount(): ?Account\Record
    {
        return $this->get('account');
    }

    function getDimension(): ?Dimension\Record
    {
        return $this->get('dimension');
    }

    function getDimensionValue(): ?DimensionValue\Record
    {
        return $this->get('dimensionValue');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
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
