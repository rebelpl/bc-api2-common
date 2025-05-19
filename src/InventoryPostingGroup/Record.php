<?php
namespace Rebel\BCApi2\Entity\InventoryPostingGroup;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $code {
		get => $this->get('code');
	}

	public ?string $description {
		get => $this->get('description');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}


}