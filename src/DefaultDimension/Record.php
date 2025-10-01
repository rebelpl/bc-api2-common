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
    protected $primaryKey = 'id';

    protected $classMap = [
        'item' => Item\Record::class,
        'account' => Account\Record::class,
        'dimension' => Dimension\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'customer' => Customer\Record::class,
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

    public function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    public function setParentId(?string $value): self
    {
        $this->set('parentId', $value);
        return $this;
    }

    public function getDimensionId(): ?string
    {
        return $this->get('dimensionId');
    }

    public function setDimensionId(?string $value): self
    {
        $this->set('dimensionId', $value);
        return $this;
    }

    public function getDimensionCode(): ?string
    {
        return $this->get('dimensionCode');
    }

    public function setDimensionCode(?string $value): self
    {
        $this->set('dimensionCode', $value);
        return $this;
    }

    public function getDimensionValueId(): ?string
    {
        return $this->get('dimensionValueId');
    }

    public function setDimensionValueId(?string $value): self
    {
        $this->set('dimensionValueId', $value);
        return $this;
    }

    public function getDimensionValueCode(): ?string
    {
        return $this->get('dimensionValueCode');
    }

    public function setDimensionValueCode(?string $value): self
    {
        $this->set('dimensionValueCode', $value);
        return $this;
    }

    public function getPostingValidation(): ?string
    {
        return $this->get('postingValidation');
    }

    public function setPostingValidation(?string $value): self
    {
        $this->set('postingValidation', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getItem(): ?Item\Record
    {
        return $this->getAsRelation('item');
    }

    public function getAccount(): ?Account\Record
    {
        return $this->getAsRelation('account');
    }

    public function getDimension(): ?Dimension\Record
    {
        return $this->getAsRelation('dimension');
    }

    public function getDimensionValue(): ?DimensionValue\Record
    {
        return $this->getAsRelation('dimensionValue');
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
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
