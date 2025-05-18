<?php
namespace Microsoft\NAV\DefaultDimension;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Item;
use Microsoft\NAV\Account;
use Microsoft\NAV\Dimension;
use Microsoft\NAV\DimensionValue;
use Microsoft\NAV\Customer;
use Microsoft\NAV\Vendor;
use Microsoft\NAV\Employee;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::item->name => Item\Record::class,
            Properties::account->name => Account\Record::class,
            Properties::dimension->name => Dimension\Record::class,
            Properties::dimensionValue->name => DimensionValue\Record::class,
            Properties::customer->name => Customer\Record::class,
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

    public function getParentType(): ?Enums\DefaultDimensionParentType
    {
        return $this->getAsEnum(Properties::parentType->name, Enums\DefaultDimensionParentType::class);
    }

    public function setParentType(?Enums\DefaultDimensionParentType $value): self
    {
        $this->set(Properties::parentType->name, $value);
        return $this;
    }

    public function getParentId(): ?string
    {
        return $this->get(Properties::parentId->name);
    }

    public function setParentId(?string $value): self
    {
        $this->set(Properties::parentId->name, $value);
        return $this;
    }

    public function getDimensionId(): ?string
    {
        return $this->get(Properties::dimensionId->name);
    }

    public function setDimensionId(?string $value): self
    {
        $this->set(Properties::dimensionId->name, $value);
        return $this;
    }

    public function getDimensionCode(): ?string
    {
        return $this->get(Properties::dimensionCode->name);
    }

    public function setDimensionCode(?string $value): self
    {
        $this->set(Properties::dimensionCode->name, $value);
        return $this;
    }

    public function getDimensionValueId(): ?string
    {
        return $this->get(Properties::dimensionValueId->name);
    }

    public function setDimensionValueId(?string $value): self
    {
        $this->set(Properties::dimensionValueId->name, $value);
        return $this;
    }

    public function getDimensionValueCode(): ?string
    {
        return $this->get(Properties::dimensionValueCode->name);
    }

    public function setDimensionValueCode(?string $value): self
    {
        $this->set(Properties::dimensionValueCode->name, $value);
        return $this;
    }

    public function getPostingValidation(): ?Enums\DefaultDimensionValuePostingType
    {
        return $this->getAsEnum(Properties::postingValidation->name, Enums\DefaultDimensionValuePostingType::class);
    }

    public function setPostingValidation(?Enums\DefaultDimensionValuePostingType $value): self
    {
        $this->set(Properties::postingValidation->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getItem(): ?Item\Record
    {
        return $this->get(Properties::item->name);
    }

    public function getAccount(): ?Account\Record
    {
        return $this->get(Properties::account->name);
    }

    public function getDimension(): ?Dimension\Record
    {
        return $this->get(Properties::dimension->name);
    }

    public function getDimensionValue(): ?DimensionValue\Record
    {
        return $this->get(Properties::dimensionValue->name);
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
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