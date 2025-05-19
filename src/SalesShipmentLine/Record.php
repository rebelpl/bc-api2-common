<?php
namespace Rebel\BCApi2\Entity\SalesShipmentLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\SalesShipment;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::salesShipment->name => SalesShipment\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getDocumentId(): ?string
    {
        return $this->get(Properties::documentId->name);
    }

    public function getDocumentNo(): ?string
    {
        return $this->get(Properties::documentNo->name);
    }

    public function getSequence(): ?int
    {
        return $this->get(Properties::sequence->name);
    }

    public function getLineType(): ?Enums\SalesLineType
    {
        return $this->getAsEnum(Properties::lineType->name, Enums\SalesLineType::class);
    }

    public function getLineObjectNumber(): ?string
    {
        return $this->get(Properties::lineObjectNumber->name);
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function getDescription2(): ?string
    {
        return $this->get(Properties::description2->name);
    }

    public function getUnitOfMeasureCode(): ?string
    {
        return $this->get(Properties::unitOfMeasureCode->name);
    }

    public function getUnitPrice(): ?float
    {
        return $this->get(Properties::unitPrice->name);
    }

    public function getQuantity(): ?float
    {
        return $this->get(Properties::quantity->name);
    }

    public function getDiscountPercent(): ?float
    {
        return $this->get(Properties::discountPercent->name);
    }

    public function getTaxPercent(): ?float
    {
        return $this->get(Properties::taxPercent->name);
    }

    public function getShipmentDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::shipmentDate->name);
    }

    public function getSalesShipment(): ?SalesShipment\Record
    {
        return $this->get(Properties::salesShipment->name);
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}