<?php
namespace Rebel\BCApi2\Entity\DefaultDimension;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\Dimension;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\Employee;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?Enums\DefaultDimensionParentType $parentType {
		get => $this->get('parentType', Enums\DefaultDimensionParentType::class);
		set => $this->set('parentType', $value);
	}

	public ?string $parentId {
		get => $this->get('parentId');
		set => $this->set('parentId', $value);
	}

	public ?string $dimensionId {
		get => $this->get('dimensionId');
		set => $this->set('dimensionId', $value);
	}

	public ?string $dimensionCode {
		get => $this->get('dimensionCode');
		set => $this->set('dimensionCode', $value);
	}

	public ?string $dimensionValueId {
		get => $this->get('dimensionValueId');
		set => $this->set('dimensionValueId', $value);
	}

	public ?string $dimensionValueCode {
		get => $this->get('dimensionValueCode');
		set => $this->set('dimensionValueCode', $value);
	}

	public ?Enums\DefaultDimensionValuePostingType $postingValidation {
		get => $this->get('postingValidation', Enums\DefaultDimensionValuePostingType::class);
		set => $this->set('postingValidation', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Item\Record $item {
		get => $this->get('item');
		set => $this->set('item', $value);
	}

	public ?Account\Record $account {
		get => $this->get('account');
		set => $this->set('account', $value);
	}

	public ?Dimension\Record $dimension {
		get => $this->get('dimension');
		set => $this->set('dimension', $value);
	}

	public ?DimensionValue\Record $dimensionValue {
		get => $this->get('dimensionValue');
		set => $this->set('dimensionValue', $value);
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
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
			'account' => Account\Record::class,
			'dimension' => Dimension\Record::class,
			'dimensionValue' => DimensionValue\Record::class,
			'customer' => Customer\Record::class,
			'vendor' => Vendor\Record::class,
			'employee' => Employee\Record::class,
        ];
    }
}