<?php
namespace Rebel\BCApi2\Entity\DimensionValue;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Dimension;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $code {
		get => $this->get('code');
	}

	public ?string $dimensionId {
		get => $this->get('dimensionId');
	}

	public ?string $displayName {
		get => $this->get('displayName');
	}

	public ?string $consolidationCode {
		get => $this->get('consolidationCode');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}

	public ?Dimension\Record $dimension {
		get => $this->get('dimension');
		set => $this->set('dimension', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'dimension' => Dimension\Record::class,
        ];
    }
}