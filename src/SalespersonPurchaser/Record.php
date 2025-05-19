<?php
namespace Rebel\BCApi2\Entity\SalespersonPurchaser;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $code {
		get => $this->get('code');
		set => $this->set('code', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?string $email {
		get => $this->get('email');
		set => $this->set('email', $value);
	}

	public ?string $email2 {
		get => $this->get('email2');
		set => $this->set('email2', $value);
	}

	public ?string $phoneNo {
		get => $this->get('phoneNo');
		set => $this->set('phoneNo', $value);
	}

	public ?string $jobTitle {
		get => $this->get('jobTitle');
		set => $this->set('jobTitle', $value);
	}

	public ?float $commisionPercent {
		get => $this->get('commisionPercent');
		set => $this->set('commisionPercent', $value);
	}

	public ?bool $privacyBlocked {
		get => $this->get('privacyBlocked');
		set => $this->set('privacyBlocked', $value);
	}

	public ?bool $blocked {
		get => $this->get('blocked');
		set => $this->set('blocked', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}