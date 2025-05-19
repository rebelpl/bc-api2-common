<?php
namespace Rebel\BCApi2\Entity\SalesShipmentLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\SalesShipment;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $documentId {
		get => $this->get('documentId');
	}

	public ?string $documentNo {
		get => $this->get('documentNo');
	}

	public ?int $sequence {
		get => $this->get('sequence');
	}

	public ?Enums\SalesLineType $lineType {
		get => $this->get('lineType', Enums\SalesLineType::class);
	}

	public ?string $lineObjectNumber {
		get => $this->get('lineObjectNumber');
	}

	public ?string $description {
		get => $this->get('description');
	}

	public ?string $description2 {
		get => $this->get('description2');
	}

	public ?string $unitOfMeasureCode {
		get => $this->get('unitOfMeasureCode');
	}

	public ?float $unitPrice {
		get => $this->get('unitPrice');
	}

	public ?float $quantity {
		get => $this->get('quantity');
	}

	public ?float $discountPercent {
		get => $this->get('discountPercent');
	}

	public ?float $taxPercent {
		get => $this->get('taxPercent');
	}

	public ?\DateTime $shipmentDate {
		get => $this->get('shipmentDate', 'date');
	}

	public ?SalesShipment\Record $salesShipment {
		get => $this->get('salesShipment');
		set => $this->set('salesShipment', $value);
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'salesShipment' => SalesShipment\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}