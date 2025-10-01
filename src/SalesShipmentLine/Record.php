<?php
namespace Rebel\BCApi2\Entity\SalesShipmentLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\SalesShipment;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'salesShipment' => SalesShipment\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getDocumentId(): ?string
    {
        return $this->get('documentId');
    }

    public function getDocumentNo(): ?string
    {
        return $this->get('documentNo');
    }

    public function getSequence(): ?int
    {
        return $this->get('sequence');
    }

    public function getLineType(): ?string
    {
        return $this->get('lineType');
    }

    public function getLineObjectNumber(): ?string
    {
        return $this->get('lineObjectNumber');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getDescription2(): ?string
    {
        return $this->get('description2');
    }

    public function getUnitOfMeasureCode(): ?string
    {
        return $this->get('unitOfMeasureCode');
    }

    public function getUnitPrice(): ?float
    {
        return $this->get('unitPrice');
    }

    public function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    public function getDiscountPercent(): ?float
    {
        return $this->get('discountPercent');
    }

    public function getTaxPercent(): ?float
    {
        return $this->get('taxPercent');
    }

    public function getShipmentDate(): ?Carbon
    {
        return $this->getAsDate('shipmentDate');
    }

    public function getSalesShipment(): ?SalesShipment\Record
    {
        return $this->getAsRelation('salesShipment');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
