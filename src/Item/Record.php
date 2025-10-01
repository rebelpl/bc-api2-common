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
    protected $primaryKey = 'id';

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

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getDisplayName2(): ?string
    {
        return $this->get('displayName2');
    }

    public function setDisplayName2(?string $value): self
    {
        $this->set('displayName2', $value);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function setType(?string $value): self
    {
        $this->set('type', $value);
        return $this;
    }

    public function getItemCategoryId(): ?string
    {
        return $this->get('itemCategoryId');
    }

    public function setItemCategoryId(?string $value): self
    {
        $this->set('itemCategoryId', $value);
        return $this;
    }

    public function getItemCategoryCode(): ?string
    {
        return $this->get('itemCategoryCode');
    }

    public function setItemCategoryCode(?string $value): self
    {
        $this->set('itemCategoryCode', $value);
        return $this;
    }

    public function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    public function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    public function getGtin(): ?string
    {
        return $this->get('gtin');
    }

    public function setGtin(?string $value): self
    {
        $this->set('gtin', $value);
        return $this;
    }

    public function getInventory(): ?float
    {
        return $this->get('inventory');
    }

    public function setInventory(?float $value): self
    {
        $this->set('inventory', $value);
        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->get('unitPrice');
    }

    public function setUnitPrice(?float $value): self
    {
        $this->set('unitPrice', $value);
        return $this;
    }

    public function getPriceIncludesTax(): ?bool
    {
        return $this->get('priceIncludesTax');
    }

    public function setPriceIncludesTax(?bool $value): self
    {
        $this->set('priceIncludesTax', $value);
        return $this;
    }

    public function getUnitCost(): ?float
    {
        return $this->get('unitCost');
    }

    public function setUnitCost(?float $value): self
    {
        $this->set('unitCost', $value);
        return $this;
    }

    public function getTaxGroupId(): ?string
    {
        return $this->get('taxGroupId');
    }

    public function setTaxGroupId(?string $value): self
    {
        $this->set('taxGroupId', $value);
        return $this;
    }

    public function getTaxGroupCode(): ?string
    {
        return $this->get('taxGroupCode');
    }

    public function setTaxGroupCode(?string $value): self
    {
        $this->set('taxGroupCode', $value);
        return $this;
    }

    public function getBaseUnitOfMeasureId(): ?string
    {
        return $this->get('baseUnitOfMeasureId');
    }

    public function setBaseUnitOfMeasureId(?string $value): self
    {
        $this->set('baseUnitOfMeasureId', $value);
        return $this;
    }

    public function getBaseUnitOfMeasureCode(): ?string
    {
        return $this->get('baseUnitOfMeasureCode');
    }

    public function setBaseUnitOfMeasureCode(?string $value): self
    {
        $this->set('baseUnitOfMeasureCode', $value);
        return $this;
    }

    public function getGeneralProductPostingGroupId(): ?string
    {
        return $this->get('generalProductPostingGroupId');
    }

    public function setGeneralProductPostingGroupId(?string $value): self
    {
        $this->set('generalProductPostingGroupId', $value);
        return $this;
    }

    public function getGeneralProductPostingGroupCode(): ?string
    {
        return $this->get('generalProductPostingGroupCode');
    }

    public function setGeneralProductPostingGroupCode(?string $value): self
    {
        $this->set('generalProductPostingGroupCode', $value);
        return $this;
    }

    public function getInventoryPostingGroupId(): ?string
    {
        return $this->get('inventoryPostingGroupId');
    }

    public function setInventoryPostingGroupId(?string $value): self
    {
        $this->set('inventoryPostingGroupId', $value);
        return $this;
    }

    public function getInventoryPostingGroupCode(): ?string
    {
        return $this->get('inventoryPostingGroupCode');
    }

    public function setInventoryPostingGroupCode(?string $value): self
    {
        $this->set('inventoryPostingGroupCode', $value);
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

    public function getItemCategory(): ?ItemCategory\Record
    {
        return $this->getAsRelation('itemCategory');
    }

    public function getInventoryPostingGroup(): ?InventoryPostingGroup\Record
    {
        return $this->getAsRelation('inventoryPostingGroup');
    }

    public function getGeneralProductPostingGroup(): ?GeneralProductPostingGroup\Record
    {
        return $this->getAsRelation('generalProductPostingGroup');
    }

    public function getUnitOfMeasure(): ?UnitOfMeasure\Record
    {
        return $this->getAsRelation('unitOfMeasure');
    }

    public function getPicture(): ?Picture\Record
    {
        return $this->getAsRelation('picture');
    }

    /**
     * @return Entity\Collection|DefaultDimension\Record[]
     */
    public function getDefaultDimensions(): Entity\Collection
    {
        return $this->getAsCollection('defaultDimensions');
    }

    /**
     * @return Entity\Collection|ItemVariant\Record[]
     */
    public function getItemVariants(): Entity\Collection
    {
        return $this->getAsCollection('itemVariants');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
