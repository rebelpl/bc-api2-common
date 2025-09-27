<?php
namespace Rebel\BCApi2\Entity\SalesShipmentLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\SalesShipment;

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
        get => $this->getAsEnum('lineType', Enums\SalesLineType::class);
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

    public ?Carbon $shipmentDate {
        get => $this->getAsDate('shipmentDate');
    }

    public ?SalesShipment\Record $salesShipment {
        get => $this->getAsRelation('salesShipment');
    }

    /** @var Entity\Collection<DimensionSetLine\Record> */
    public Entity\Collection $dimensionSetLines {
        get => $this->getAsCollection('dimensionSetLines');
    }

    protected array $classMap = [
        'salesShipment' => SalesShipment\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];
}
