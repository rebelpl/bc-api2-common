<?php
namespace Rebel\BCApi2\Entity\GeneralProductPostingGroup;

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

	public ?string $defaultVATProductPostingGroup {
		get => $this->get('defaultVATProductPostingGroup');
	}

	public ?bool $autoInsertDefault {
		get => $this->get('autoInsertDefault');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}


}