<?php
namespace Rebel\BCApi2\Entity\ItemVariant;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Item;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $itemId {
		get => $this->get('itemId');
		set => $this->set('itemId', $value);
	}

	public ?string $itemNumber {
		get => $this->get('itemNumber');
		set => $this->set('itemNumber', $value);
	}

	public ?string $code {
		get => $this->get('code');
		set => $this->set('code', $value);
	}

	public ?string $description {
		get => $this->get('description');
		set => $this->set('description', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Item\Record $item {
		get => $this->get('item');
		set => $this->set('item', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'item' => Item\Record::class,
        ];
    }
}