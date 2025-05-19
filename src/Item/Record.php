<?php
namespace Rebel\BCApi2\Entity\Item;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\ItemCategory;
use Rebel\BCApi2\Entity\InventoryPostingGroup;
use Rebel\BCApi2\Entity\GeneralProductPostingGroup;
use Rebel\BCApi2\Entity\UnitOfMeasure;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\DocumentAttachment;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $number {
		get => $this->get('number');
		set => $this->set('number', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?string $displayName2 {
		get => $this->get('displayName2');
		set => $this->set('displayName2', $value);
	}

	public ?Enums\ItemType $type {
		get => $this->get('type', Enums\ItemType::class);
		set => $this->set('type', $value);
	}

	public ?string $itemCategoryId {
		get => $this->get('itemCategoryId');
		set => $this->set('itemCategoryId', $value);
	}

	public ?string $itemCategoryCode {
		get => $this->get('itemCategoryCode');
		set => $this->set('itemCategoryCode', $value);
	}

	public ?bool $blocked {
		get => $this->get('blocked');
		set => $this->set('blocked', $value);
	}

	public ?string $gtin {
		get => $this->get('gtin');
		set => $this->set('gtin', $value);
	}

	public ?float $inventory {
		get => $this->get('inventory');
		set => $this->set('inventory', $value);
	}

	public ?float $unitPrice {
		get => $this->get('unitPrice');
		set => $this->set('unitPrice', $value);
	}

	public ?bool $priceIncludesTax {
		get => $this->get('priceIncludesTax');
		set => $this->set('priceIncludesTax', $value);
	}

	public ?float $unitCost {
		get => $this->get('unitCost');
		set => $this->set('unitCost', $value);
	}

	public ?string $taxGroupId {
		get => $this->get('taxGroupId');
		set => $this->set('taxGroupId', $value);
	}

	public ?string $taxGroupCode {
		get => $this->get('taxGroupCode');
		set => $this->set('taxGroupCode', $value);
	}

	public ?string $baseUnitOfMeasureId {
		get => $this->get('baseUnitOfMeasureId');
		set => $this->set('baseUnitOfMeasureId', $value);
	}

	public ?string $baseUnitOfMeasureCode {
		get => $this->get('baseUnitOfMeasureCode');
		set => $this->set('baseUnitOfMeasureCode', $value);
	}

	public ?string $generalProductPostingGroupId {
		get => $this->get('generalProductPostingGroupId');
		set => $this->set('generalProductPostingGroupId', $value);
	}

	public ?string $generalProductPostingGroupCode {
		get => $this->get('generalProductPostingGroupCode');
		set => $this->set('generalProductPostingGroupCode', $value);
	}

	public ?string $inventoryPostingGroupId {
		get => $this->get('inventoryPostingGroupId');
		set => $this->set('inventoryPostingGroupId', $value);
	}

	public ?string $inventoryPostingGroupCode {
		get => $this->get('inventoryPostingGroupCode');
		set => $this->set('inventoryPostingGroupCode', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?ItemCategory\Record $itemCategory {
		get => $this->get('itemCategory');
		set => $this->set('itemCategory', $value);
	}

	public ?InventoryPostingGroup\Record $inventoryPostingGroup {
		get => $this->get('inventoryPostingGroup');
		set => $this->set('inventoryPostingGroup', $value);
	}

	public ?GeneralProductPostingGroup\Record $generalProductPostingGroup {
		get => $this->get('generalProductPostingGroup');
		set => $this->set('generalProductPostingGroup', $value);
	}

	public ?UnitOfMeasure\Record $unitOfMeasure {
		get => $this->get('unitOfMeasure');
		set => $this->set('unitOfMeasure', $value);
	}

	public ?Picture\Record $picture {
		get => $this->get('picture');
		set => $this->set('picture', $value);
	}

	/** @var Entity\Collection<DefaultDimension\Record> */
	public Entity\Collection $defaultDimensions {
		get => $this->get('defaultDimensions', 'collection');
	}

	/** @var Entity\Collection<ItemVariant\Record> */
	public Entity\Collection $itemVariants {
		get => $this->get('itemVariants', 'collection');
	}

	/** @var Entity\Collection<DocumentAttachment\Record> */
	public Entity\Collection $documentAttachments {
		get => $this->get('documentAttachments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'itemCategory' => ItemCategory\Record::class,
			'inventoryPostingGroup' => InventoryPostingGroup\Record::class,
			'generalProductPostingGroup' => GeneralProductPostingGroup\Record::class,
			'unitOfMeasure' => UnitOfMeasure\Record::class,
			'picture' => Picture\Record::class,
			'defaultDimensions' => DefaultDimension\Record::class,
			'itemVariants' => ItemVariant\Record::class,
			'documentAttachments' => DocumentAttachment\Record::class,
        ];
    }
}