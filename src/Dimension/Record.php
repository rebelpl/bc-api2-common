<?php
namespace Rebel\BCApi2\Entity\Dimension;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionValue;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $code {
		get => $this->get('code');
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

	/** @var Entity\Collection<DimensionValue\Record> */
	public Entity\Collection $dimensionValues {
		get => $this->get('dimensionValues', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'dimensionValues' => DimensionValue\Record::class,
        ];
    }
}