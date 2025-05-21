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
        set => $this->set('parentType', $value);
        get => $this->getAsEnum('parentType', Enums\PictureEntityParentType::class);
    }

    public ?int $width {
        set => $this->set('width', $value);
        get => $this->get('width');
    }

    public ?int $height {
        set => $this->set('height', $value);
        get => $this->get('height');
    }

    public ?string $contentType {
        set => $this->set('contentType', $value);
        get => $this->get('contentType');
    }

    public ?string $pictureContent {
        set => $this->set('pictureContent', $value);
        get => $this->get('pictureContent');
    }

    /** @var ?Item\Record */
    public ?Item\Record $item {
        get => $this->get('item');
    }

    /** @var ?Customer\Record */
    public ?Customer\Record $customer {
        get => $this->get('customer');
    }

    /** @var ?Contact\Record */
    public ?Contact\Record $contact {
        get => $this->get('contact');
    }

    /** @var ?Vendor\Record */
    public ?Vendor\Record $vendor {
        get => $this->get('vendor');
    }

    /** @var ?Employee\Record */
    public ?Employee\Record $employee {
        get => $this->get('employee');
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
