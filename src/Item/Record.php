<?php
namespace Rebel\BCApi2\Entity\Item;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\GeneralProductPostingGroup;
use Rebel\BCApi2\Entity\InventoryPostingGroup;
use Rebel\BCApi2\Entity\ItemCategory;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\UnitOfMeasure;

class Record extends Entity
{
    protected $classMap = [
        'itemCategory' => ItemCategory\Record::class,
        'inventoryPostingGroup' => InventoryPostingGroup\Record::class,
        'generalProductPostingGroup' => GeneralProductPostingGroup\Record::class,
        'unitOfMeasure' => UnitOfMeasure\Record::class,
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'itemVariants' => ItemVariant\Record::class,
        'documentAttachments' => DocumentAttachment\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getDisplayName2(): ?string
    {
        return $this->get('displayName2');
    }

    function setDisplayName2(?string $value): self
    {
        $this->set('displayName2', $value);
        return $this;
    }

    function getType(): ?string
    {
        return $this->get('type');
    }

    function setType(?string $value): self
    {
        $this->set('type', $value);
        return $this;
    }

    function getItemCategoryId(): ?string
    {
        return $this->get('itemCategoryId');
    }

    function setItemCategoryId(?string $value): self
    {
        $this->set('itemCategoryId', $value);
        return $this;
    }

    function getItemCategoryCode(): ?string
    {
        return $this->get('itemCategoryCode');
    }

    function setItemCategoryCode(?string $value): self
    {
        $this->set('itemCategoryCode', $value);
        return $this;
    }

    function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    function getGtin(): ?string
    {
        return $this->get('gtin');
    }

    function setGtin(?string $value): self
    {
        $this->set('gtin', $value);
        return $this;
    }

    function getInventory(): ?float
    {
        return $this->get('inventory');
    }

    function setInventory(?float $value): self
    {
        $this->set('inventory', $value);
        return $this;
    }

    function getUnitPrice(): ?float
    {
        return $this->get('unitPrice');
    }

    function setUnitPrice(?float $value): self
    {
        $this->set('unitPrice', $value);
        return $this;
    }

    function getPriceIncludesTax(): ?bool
    {
        return $this->get('priceIncludesTax');
    }

    function setPriceIncludesTax(?bool $value): self
    {
        $this->set('priceIncludesTax', $value);
        return $this;
    }

    function getUnitCost(): ?float
    {
        return $this->get('unitCost');
    }

    function setUnitCost(?float $value): self
    {
        $this->set('unitCost', $value);
        return $this;
    }

    function getTaxGroupId(): ?string
    {
        return $this->get('taxGroupId');
    }

    function setTaxGroupId(?string $value): self
    {
        $this->set('taxGroupId', $value);
        return $this;
    }

    function getTaxGroupCode(): ?string
    {
        return $this->get('taxGroupCode');
    }

    function setTaxGroupCode(?string $value): self
    {
        $this->set('taxGroupCode', $value);
        return $this;
    }

    function getBaseUnitOfMeasureId(): ?string
    {
        return $this->get('baseUnitOfMeasureId');
    }

    function setBaseUnitOfMeasureId(?string $value): self
    {
        $this->set('baseUnitOfMeasureId', $value);
        return $this;
    }

    function getBaseUnitOfMeasureCode(): ?string
    {
        return $this->get('baseUnitOfMeasureCode');
    }

    function setBaseUnitOfMeasureCode(?string $value): self
    {
        $this->set('baseUnitOfMeasureCode', $value);
        return $this;
    }

    function getGeneralProductPostingGroupId(): ?string
    {
        return $this->get('generalProductPostingGroupId');
    }

    function setGeneralProductPostingGroupId(?string $value): self
    {
        $this->set('generalProductPostingGroupId', $value);
        return $this;
    }

    function getGeneralProductPostingGroupCode(): ?string
    {
        return $this->get('generalProductPostingGroupCode');
    }

    function setGeneralProductPostingGroupCode(?string $value): self
    {
        $this->set('generalProductPostingGroupCode', $value);
        return $this;
    }

    function getInventoryPostingGroupId(): ?string
    {
        return $this->get('inventoryPostingGroupId');
    }

    function setInventoryPostingGroupId(?string $value): self
    {
        $this->set('inventoryPostingGroupId', $value);
        return $this;
    }

    function getInventoryPostingGroupCode(): ?string
    {
        return $this->get('inventoryPostingGroupCode');
    }

    function setInventoryPostingGroupCode(?string $value): self
    {
        $this->set('inventoryPostingGroupCode', $value);
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

    function getItemCategory(): ?ItemCategory\Record
    {
        return $this->getAsRelation('itemCategory');
    }

    function getInventoryPostingGroup(): ?InventoryPostingGroup\Record
    {
        return $this->getAsRelation('inventoryPostingGroup');
    }

    function getGeneralProductPostingGroup(): ?GeneralProductPostingGroup\Record
    {
        return $this->getAsRelation('generalProductPostingGroup');
    }

    function getUnitOfMeasure(): ?UnitOfMeasure\Record
    {
        return $this->getAsRelation('unitOfMeasure');
    }

    function getPicture(): ?Picture\Record
    {
        return $this->getAsRelation('picture');
    }

    /**
     * @return Entity\Collection|DefaultDimension\Record[]
     */
    function getDefaultDimensions(): Entity\Collection
    {
        return $this->getAsCollection('defaultDimensions');
    }

    /**
     * @return Entity\Collection|ItemVariant\Record[]
     */
    function getItemVariants(): Entity\Collection
    {
        return $this->getAsCollection('itemVariants');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
