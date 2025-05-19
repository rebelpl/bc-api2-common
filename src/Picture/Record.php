<?php
namespace Rebel\BCApi2\Entity\Picture;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\Employee;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?Enums\PictureEntityParentType $parentType {
		get => $this->get('parentType', Enums\PictureEntityParentType::class);
		set => $this->set('parentType', $value);
	}

	public ?int $width {
		get => $this->get('width');
		set => $this->set('width', $value);
	}

	public ?int $height {
		get => $this->get('height');
		set => $this->set('height', $value);
	}

	public ?string $contentType {
		get => $this->get('contentType');
		set => $this->set('contentType', $value);
	}

	public ?string $pictureContent {
		get => $this->get('pictureContent');
		set => $this->set('pictureContent', $value);
	}

	public ?Item\Record $item {
		get => $this->get('item');
		set => $this->set('item', $value);
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

	public ?Contact\Record $contact {
		get => $this->get('contact');
		set => $this->set('contact', $value);
	}

	public ?Vendor\Record $vendor {
		get => $this->get('vendor');
		set => $this->set('vendor', $value);
	}

	public ?Employee\Record $employee {
		get => $this->get('employee');
		set => $this->set('employee', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'item' => Item\Record::class,
			'customer' => Customer\Record::class,
			'contact' => Contact\Record::class,
			'vendor' => Vendor\Record::class,
			'employee' => Employee\Record::class,
        ];
    }
}