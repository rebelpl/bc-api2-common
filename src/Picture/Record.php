<?php
namespace Rebel\BCApi2\Entity\Picture;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Contact;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?Enums\PictureEntityParentType $parentType {
        set {
            $this->set('parentType', $value);
        }
        get => $this->getAsEnum('parentType', Enums\PictureEntityParentType::class);
    }

    public ?int $width {
        set {
            $this->set('width', $value);
        }
        get => $this->get('width');
    }

    public ?int $height {
        set {
            $this->set('height', $value);
        }
        get => $this->get('height');
    }

    public ?string $contentType {
        set {
            $this->set('contentType', $value);
        }
        get => $this->get('contentType');
    }

    public Entity\DataStream $pictureContent {
        get => $this->get('pictureContent');
    }

    public ?Item\Record $item {
        get => $this->get('item');
    }

    public ?Customer\Record $customer {
        get => $this->get('customer');
    }

    public ?Contact\Record $contact {
        get => $this->get('contact');
    }

    public ?Vendor\Record $vendor {
        get => $this->get('vendor');
    }

    public ?Employee\Record $employee {
        get => $this->get('employee');
    }

    protected array $classMap = [
        'item' => Item\Record::class,
        'customer' => Customer\Record::class,
        'contact' => Contact\Record::class,
        'vendor' => Vendor\Record::class,
        'employee' => Employee\Record::class,
    ];
}
