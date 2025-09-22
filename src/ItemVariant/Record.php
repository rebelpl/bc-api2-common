<?php
namespace Rebel\BCApi2\Entity\ItemVariant;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $itemId {
        set {
            $this->set('itemId', $value);
        }
        get => $this->get('itemId');
    }

    public ?string $itemNumber {
        set {
            $this->set('itemNumber', $value);
        }
        get => $this->get('itemNumber');
    }

    public ?string $code {
        set {
            $this->set('code', $value);
        }
        get => $this->get('code');
    }

    public ?string $description {
        set {
            $this->set('description', $value);
        }
        get => $this->get('description');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Item\Record $item {
        get => $this->get('item');
    }

    protected array $classMap = ['item' => Item\Record::class];
}
