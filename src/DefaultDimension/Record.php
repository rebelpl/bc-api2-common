<?php
namespace Rebel\BCApi2\Entity\DefaultDimension;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Dimension;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\Employee;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?Enums\DefaultDimensionParentType $parentType {
        set { $this->set('parentType', $value); }
        get => $this->getAsEnum('parentType', Enums\DefaultDimensionParentType::class);
    }

    public ?string $parentId {
        set { $this->set('parentId', $value); }
        get => $this->get('parentId');
    }

    public ?string $dimensionId {
        set { $this->set('dimensionId', $value); }
        get => $this->get('dimensionId');
    }

    public ?string $dimensionCode {
        set { $this->set('dimensionCode', $value); }
        get => $this->get('dimensionCode');
    }

    public ?string $dimensionValueId {
        set { $this->set('dimensionValueId', $value); }
        get => $this->get('dimensionValueId');
    }

    public ?string $dimensionValueCode {
        set { $this->set('dimensionValueCode', $value); }
        get => $this->get('dimensionValueCode');
    }

    public ?Enums\DefaultDimensionValuePostingType $postingValidation {
        set { $this->set('postingValidation', $value); }
        get => $this->getAsEnum('postingValidation', Enums\DefaultDimensionValuePostingType::class);
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Item\Record $item {
        get => $this->get('item');
    }

    public ?Account\Record $account {
        get => $this->get('account');
    }

    public ?Dimension\Record $dimension {
        get => $this->get('dimension');
    }

    public ?DimensionValue\Record $dimensionValue {
        get => $this->get('dimensionValue');
    }

    public ?Customer\Record $customer {
        get => $this->get('customer');
    }

    public ?Vendor\Record $vendor {
        get => $this->get('vendor');
    }

    public ?Employee\Record $employee {
        get => $this->get('employee');
    }

    protected array $classMap = [
        'item' => Item\Record::class,
        'account' => Account\Record::class,
        'dimension' => Dimension\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'customer' => Customer\Record::class,
        'vendor' => Vendor\Record::class,
        'employee' => Employee\Record::class,
    ];
}
