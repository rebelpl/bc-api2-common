<?php
namespace Rebel\BCApi2\Entity\Item;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\GeneralProductPostingGroup;
use Rebel\BCApi2\Entity\InventoryPostingGroup;
use Rebel\BCApi2\Entity\ItemCategory;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\UnitOfMeasure;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set {
            $this->set('number', $value);
        }
        get => $this->get('number');
    }

    public ?string $displayName {
        set {
            $this->set('displayName', $value);
        }
        get => $this->get('displayName');
    }

    public ?string $displayName2 {
        set {
            $this->set('displayName2', $value);
        }
        get => $this->get('displayName2');
    }

    public ?Enums\ItemType $type {
        set {
            $this->set('type', $value);
        }
        get => $this->getAsEnum('type', Enums\ItemType::class);
    }

    public ?string $itemCategoryId {
        set {
            $this->set('itemCategoryId', $value);
        }
        get => $this->get('itemCategoryId');
    }

    public ?string $itemCategoryCode {
        set {
            $this->set('itemCategoryCode', $value);
        }
        get => $this->get('itemCategoryCode');
    }

    public ?bool $blocked {
        set {
            $this->set('blocked', $value);
        }
        get => $this->get('blocked');
    }

    public ?string $gtin {
        set {
            $this->set('gtin', $value);
        }
        get => $this->get('gtin');
    }

    public ?float $inventory {
        set {
            $this->set('inventory', $value);
        }
        get => $this->get('inventory');
    }

    public ?float $unitPrice {
        set {
            $this->set('unitPrice', $value);
        }
        get => $this->get('unitPrice');
    }

    public ?bool $priceIncludesTax {
        set {
            $this->set('priceIncludesTax', $value);
        }
        get => $this->get('priceIncludesTax');
    }

    public ?float $unitCost {
        set {
            $this->set('unitCost', $value);
        }
        get => $this->get('unitCost');
    }

    public ?string $taxGroupId {
        set {
            $this->set('taxGroupId', $value);
        }
        get => $this->get('taxGroupId');
    }

    public ?string $taxGroupCode {
        set {
            $this->set('taxGroupCode', $value);
        }
        get => $this->get('taxGroupCode');
    }

    public ?string $baseUnitOfMeasureId {
        set {
            $this->set('baseUnitOfMeasureId', $value);
        }
        get => $this->get('baseUnitOfMeasureId');
    }

    public ?string $baseUnitOfMeasureCode {
        set {
            $this->set('baseUnitOfMeasureCode', $value);
        }
        get => $this->get('baseUnitOfMeasureCode');
    }

    public ?string $generalProductPostingGroupId {
        set {
            $this->set('generalProductPostingGroupId', $value);
        }
        get => $this->get('generalProductPostingGroupId');
    }

    public ?string $generalProductPostingGroupCode {
        set {
            $this->set('generalProductPostingGroupCode', $value);
        }
        get => $this->get('generalProductPostingGroupCode');
    }

    public ?string $inventoryPostingGroupId {
        set {
            $this->set('inventoryPostingGroupId', $value);
        }
        get => $this->get('inventoryPostingGroupId');
    }

    public ?string $inventoryPostingGroupCode {
        set {
            $this->set('inventoryPostingGroupCode', $value);
        }
        get => $this->get('inventoryPostingGroupCode');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?ItemCategory\Record $itemCategory {
        get => $this->get('itemCategory');
    }

    public ?InventoryPostingGroup\Record $inventoryPostingGroup {
        get => $this->get('inventoryPostingGroup');
    }

    public ?GeneralProductPostingGroup\Record $generalProductPostingGroup {
        get => $this->get('generalProductPostingGroup');
    }

    public ?UnitOfMeasure\Record $unitOfMeasure {
        get => $this->get('unitOfMeasure');
    }

    public ?Picture\Record $picture {
        get => $this->get('picture');
    }

    /** @var Entity\Collection<DefaultDimension\Record> */
    public Entity\Collection $defaultDimensions {
        get => $this->getAsCollection('defaultDimensions');
    }

    /** @var Entity\Collection<ItemVariant\Record> */
    public Entity\Collection $itemVariants {
        get => $this->getAsCollection('itemVariants');
    }

    /** @var Entity\Collection<DocumentAttachment\Record> */
    public Entity\Collection $documentAttachments {
        get => $this->getAsCollection('documentAttachments');
    }

    protected array $classMap = [
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
