<?php
namespace Rebel\BCApi2\Entity\PurchaseReceiptLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\PurchaseReceipt;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::purchaseReceipt->name => PurchaseReceipt\Record::class,
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

    public function getSequence(): ?int
    {
        return $this->get(Properties::sequence->name);
    }

    public function getLineType(): ?Enums\PurchaseLineType
    {
        return $this->getAsEnum(Properties::lineType->name, Enums\PurchaseLineType::class);
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

    public function getUnitCost(): ?float
    {
        return $this->get(Properties::unitCost->name);
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

    public function getExpectedReceiptDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::expectedReceiptDate->name);
    }

    public function getPurchaseReceipt(): ?PurchaseReceipt\Record
    {
        return $this->get(Properties::purchaseReceipt->name);
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}