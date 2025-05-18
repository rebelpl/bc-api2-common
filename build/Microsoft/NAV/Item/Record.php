<?php
namespace Microsoft\NAV\Item;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\ItemCategory;
use Microsoft\NAV\InventoryPostingGroup;
use Microsoft\NAV\GeneralProductPostingGroup;
use Microsoft\NAV\UnitOfMeasure;
use Microsoft\NAV\Picture;
use Microsoft\NAV\DefaultDimension;
use Microsoft\NAV\ItemVariant;
use Microsoft\NAV\DocumentAttachment;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::itemCategory->name => ItemCategory\Record::class,
            Properties::inventoryPostingGroup->name => InventoryPostingGroup\Record::class,
            Properties::generalProductPostingGroup->name => GeneralProductPostingGroup\Record::class,
            Properties::unitOfMeasure->name => UnitOfMeasure\Record::class,
            Properties::picture->name => Picture\Record::class,
            Properties::defaultDimensions->name => DefaultDimension\Record::class,
            Properties::itemVariants->name => ItemVariant\Record::class,
            Properties::documentAttachments->name => DocumentAttachment\Record::class,
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

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function setNumber(?string $value): self
    {
        $this->set(Properties::number->name, $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getDisplayName2(): ?string
    {
        return $this->get(Properties::displayName2->name);
    }

    public function setDisplayName2(?string $value): self
    {
        $this->set(Properties::displayName2->name, $value);
        return $this;
    }

    public function getType(): ?Enums\ItemType
    {
        return $this->getAsEnum(Properties::type->name, Enums\ItemType::class);
    }

    public function setType(?Enums\ItemType $value): self
    {
        $this->set(Properties::type->name, $value);
        return $this;
    }

    public function getItemCategoryId(): ?string
    {
        return $this->get(Properties::itemCategoryId->name);
    }

    public function setItemCategoryId(?string $value): self
    {
        $this->set(Properties::itemCategoryId->name, $value);
        return $this;
    }

    public function getItemCategoryCode(): ?string
    {
        return $this->get(Properties::itemCategoryCode->name);
    }

    public function setItemCategoryCode(?string $value): self
    {
        $this->set(Properties::itemCategoryCode->name, $value);
        return $this;
    }

    public function isBlocked(): ?bool
    {
        return $this->get(Properties::blocked->name);
    }

    public function setBlocked(?bool $value): self
    {
        $this->set(Properties::blocked->name, $value);
        return $this;
    }

    public function getGtin(): ?string
    {
        return $this->get(Properties::gtin->name);
    }

    public function setGtin(?string $value): self
    {
        $this->set(Properties::gtin->name, $value);
        return $this;
    }

    public function getInventory(): ?float
    {
        return $this->get(Properties::inventory->name);
    }

    public function setInventory(?float $value): self
    {
        $this->set(Properties::inventory->name, $value);
        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->get(Properties::unitPrice->name);
    }

    public function setUnitPrice(?float $value): self
    {
        $this->set(Properties::unitPrice->name, $value);
        return $this;
    }

    public function isPriceIncludesTax(): ?bool
    {
        return $this->get(Properties::priceIncludesTax->name);
    }

    public function setPriceIncludesTax(?bool $value): self
    {
        $this->set(Properties::priceIncludesTax->name, $value);
        return $this;
    }

    public function getUnitCost(): ?float
    {
        return $this->get(Properties::unitCost->name);
    }

    public function setUnitCost(?float $value): self
    {
        $this->set(Properties::unitCost->name, $value);
        return $this;
    }

    public function getTaxGroupId(): ?string
    {
        return $this->get(Properties::taxGroupId->name);
    }

    public function setTaxGroupId(?string $value): self
    {
        $this->set(Properties::taxGroupId->name, $value);
        return $this;
    }

    public function getTaxGroupCode(): ?string
    {
        return $this->get(Properties::taxGroupCode->name);
    }

    public function setTaxGroupCode(?string $value): self
    {
        $this->set(Properties::taxGroupCode->name, $value);
        return $this;
    }

    public function getBaseUnitOfMeasureId(): ?string
    {
        return $this->get(Properties::baseUnitOfMeasureId->name);
    }

    public function setBaseUnitOfMeasureId(?string $value): self
    {
        $this->set(Properties::baseUnitOfMeasureId->name, $value);
        return $this;
    }

    public function getBaseUnitOfMeasureCode(): ?string
    {
        return $this->get(Properties::baseUnitOfMeasureCode->name);
    }

    public function setBaseUnitOfMeasureCode(?string $value): self
    {
        $this->set(Properties::baseUnitOfMeasureCode->name, $value);
        return $this;
    }

    public function getGeneralProductPostingGroupId(): ?string
    {
        return $this->get(Properties::generalProductPostingGroupId->name);
    }

    public function setGeneralProductPostingGroupId(?string $value): self
    {
        $this->set(Properties::generalProductPostingGroupId->name, $value);
        return $this;
    }

    public function getGeneralProductPostingGroupCode(): ?string
    {
        return $this->get(Properties::generalProductPostingGroupCode->name);
    }

    public function setGeneralProductPostingGroupCode(?string $value): self
    {
        $this->set(Properties::generalProductPostingGroupCode->name, $value);
        return $this;
    }

    public function getInventoryPostingGroupId(): ?string
    {
        return $this->get(Properties::inventoryPostingGroupId->name);
    }

    public function setInventoryPostingGroupId(?string $value): self
    {
        $this->set(Properties::inventoryPostingGroupId->name, $value);
        return $this;
    }

    public function getInventoryPostingGroupCode(): ?string
    {
        return $this->get(Properties::inventoryPostingGroupCode->name);
    }

    public function setInventoryPostingGroupCode(?string $value): self
    {
        $this->set(Properties::inventoryPostingGroupCode->name, $value);
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

    public function getItemCategory(): ?ItemCategory\Record
    {
        return $this->get(Properties::itemCategory->name);
    }

    public function getInventoryPostingGroup(): ?InventoryPostingGroup\Record
    {
        return $this->get(Properties::inventoryPostingGroup->name);
    }

    public function getGeneralProductPostingGroup(): ?GeneralProductPostingGroup\Record
    {
        return $this->get(Properties::generalProductPostingGroup->name);
    }

    public function getUnitOfMeasure(): ?UnitOfMeasure\Record
    {
        return $this->get(Properties::unitOfMeasure->name);
    }

    public function getPicture(): ?Picture\Record
    {
        return $this->get(Properties::picture->name);
    }

    /**
     * @return Entity\Collection<DefaultDimension\Record>
     */
    public function getDefaultDimensions(): Entity\Collection
    {
        return $this->get(Properties::defaultDimensions->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<ItemVariant\Record>
     */
    public function getItemVariants(): Entity\Collection
    {
        return $this->get(Properties::itemVariants->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DocumentAttachment\Record>
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->get(Properties::documentAttachments->name) ?? new Entity\Collection();
    }
}