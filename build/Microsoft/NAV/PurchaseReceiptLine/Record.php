<?php
namespace Microsoft\NAV\PurchaseReceiptLine;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\PurchaseReceipt;
use Microsoft\NAV\DimensionSetLine;
use Microsoft\NAV\Enums;

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

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getDocumentId(): ?string
    {
        return $this->get(Properties::documentId->name);
    }

    public function setDocumentId(?string $value): self
    {
        $this->set(Properties::documentId->name, $value);
        return $this;
    }

    public function getSequence(): ?int
    {
        return $this->get(Properties::sequence->name);
    }

    public function setSequence(?int $value): self
    {
        $this->set(Properties::sequence->name, $value);
        return $this;
    }

    public function getLineType(): ?Enums\PurchaseLineType
    {
        return $this->getAsEnum(Properties::lineType->name, Enums\PurchaseLineType::class);
    }

    public function setLineType(?Enums\PurchaseLineType $value): self
    {
        $this->set(Properties::lineType->name, $value);
        return $this;
    }

    public function getLineObjectNumber(): ?string
    {
        return $this->get(Properties::lineObjectNumber->name);
    }

    public function setLineObjectNumber(?string $value): self
    {
        $this->set(Properties::lineObjectNumber->name, $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->get(Properties::description2->name);
    }

    public function setDescription2(?string $value): self
    {
        $this->set(Properties::description2->name, $value);
        return $this;
    }

    public function getUnitOfMeasureCode(): ?string
    {
        return $this->get(Properties::unitOfMeasureCode->name);
    }

    public function setUnitOfMeasureCode(?string $value): self
    {
        $this->set(Properties::unitOfMeasureCode->name, $value);
        return $this;
    }

    public function getUnitCost(): ?float
    {
        return $this->get(Properties::unitCost->name);
    }

    public function setUnitCost(?float $value): self
    {
        $this->set(Properties::unitCost->name, $value);
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->get(Properties::quantity->name);
    }

    public function setQuantity(?float $value): self
    {
        $this->set(Properties::quantity->name, $value);
        return $this;
    }

    public function getDiscountPercent(): ?float
    {
        return $this->get(Properties::discountPercent->name);
    }

    public function setDiscountPercent(?float $value): self
    {
        $this->set(Properties::discountPercent->name, $value);
        return $this;
    }

    public function getTaxPercent(): ?float
    {
        return $this->get(Properties::taxPercent->name);
    }

    public function setTaxPercent(?float $value): self
    {
        $this->set(Properties::taxPercent->name, $value);
        return $this;
    }

    public function getExpectedReceiptDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::expectedReceiptDate->name);
    }

    public function setExpectedReceiptDate(?\DateTime $value): self
    {
        $this->set(Properties::expectedReceiptDate->name, $value);
        return $this;
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