<?php
namespace Rebel\BCApi2\Entity\SalesQuoteLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\Location;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\UnitOfMeasure;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'salesQuote' => SalesQuote\Record::class,
        'item' => Item\Record::class,
        'account' => Account\Record::class,
        'unitOfMeasure' => UnitOfMeasure\Record::class,
        'itemVariant' => ItemVariant\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'location' => Location\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getDocumentId(): ?string
    {
        return $this->get('documentId');
    }

    public function setDocumentId(?string $value): self
    {
        $this->set('documentId', $value);
        return $this;
    }

    public function getSequence(): ?int
    {
        return $this->get('sequence');
    }

    public function setSequence(?int $value): self
    {
        $this->set('sequence', $value);
        return $this;
    }

    public function getItemId(): ?string
    {
        return $this->get('itemId');
    }

    public function setItemId(?string $value): self
    {
        $this->set('itemId', $value);
        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    public function setAccountId(?string $value): self
    {
        $this->set('accountId', $value);
        return $this;
    }

    public function getLineType(): ?string
    {
        return $this->get('lineType');
    }

    public function setLineType(?string $value): self
    {
        $this->set('lineType', $value);
        return $this;
    }

    public function getLineObjectNumber(): ?string
    {
        return $this->get('lineObjectNumber');
    }

    public function setLineObjectNumber(?string $value): self
    {
        $this->set('lineObjectNumber', $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function setDescription(?string $value): self
    {
        $this->set('description', $value);
        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->get('description2');
    }

    public function setDescription2(?string $value): self
    {
        $this->set('description2', $value);
        return $this;
    }

    public function getUnitOfMeasureId(): ?string
    {
        return $this->get('unitOfMeasureId');
    }

    public function setUnitOfMeasureId(?string $value): self
    {
        $this->set('unitOfMeasureId', $value);
        return $this;
    }

    public function getUnitOfMeasureCode(): ?string
    {
        return $this->get('unitOfMeasureCode');
    }

    public function setUnitOfMeasureCode(?string $value): self
    {
        $this->set('unitOfMeasureCode', $value);
        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->get('unitPrice');
    }

    public function setUnitPrice(?float $value): self
    {
        $this->set('unitPrice', $value);
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    public function setQuantity(?float $value): self
    {
        $this->set('quantity', $value);
        return $this;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->get('discountAmount');
    }

    public function setDiscountAmount(?float $value): self
    {
        $this->set('discountAmount', $value);
        return $this;
    }

    public function getDiscountPercent(): ?float
    {
        return $this->get('discountPercent');
    }

    public function setDiscountPercent(?float $value): self
    {
        $this->set('discountPercent', $value);
        return $this;
    }

    public function getDiscountAppliedBeforeTax(): ?bool
    {
        return $this->get('discountAppliedBeforeTax');
    }

    public function setDiscountAppliedBeforeTax(?bool $value): self
    {
        $this->set('discountAppliedBeforeTax', $value);
        return $this;
    }

    public function getAmountExcludingTax(): ?float
    {
        return $this->get('amountExcludingTax');
    }

    public function setAmountExcludingTax(?float $value): self
    {
        $this->set('amountExcludingTax', $value);
        return $this;
    }

    public function getTaxCode(): ?string
    {
        return $this->get('taxCode');
    }

    public function setTaxCode(?string $value): self
    {
        $this->set('taxCode', $value);
        return $this;
    }

    public function getTaxPercent(): ?float
    {
        return $this->get('taxPercent');
    }

    public function setTaxPercent(?float $value): self
    {
        $this->set('taxPercent', $value);
        return $this;
    }

    public function getTotalTaxAmount(): ?float
    {
        return $this->get('totalTaxAmount');
    }

    public function setTotalTaxAmount(?float $value): self
    {
        $this->set('totalTaxAmount', $value);
        return $this;
    }

    public function getAmountIncludingTax(): ?float
    {
        return $this->get('amountIncludingTax');
    }

    public function setAmountIncludingTax(?float $value): self
    {
        $this->set('amountIncludingTax', $value);
        return $this;
    }

    public function getNetAmount(): ?float
    {
        return $this->get('netAmount');
    }

    public function setNetAmount(?float $value): self
    {
        $this->set('netAmount', $value);
        return $this;
    }

    public function getNetTaxAmount(): ?float
    {
        return $this->get('netTaxAmount');
    }

    public function setNetTaxAmount(?float $value): self
    {
        $this->set('netTaxAmount', $value);
        return $this;
    }

    public function getNetAmountIncludingTax(): ?float
    {
        return $this->get('netAmountIncludingTax');
    }

    public function setNetAmountIncludingTax(?float $value): self
    {
        $this->set('netAmountIncludingTax', $value);
        return $this;
    }

    public function getItemVariantId(): ?string
    {
        return $this->get('itemVariantId');
    }

    public function setItemVariantId(?string $value): self
    {
        $this->set('itemVariantId', $value);
        return $this;
    }

    public function getLocationId(): ?string
    {
        return $this->get('locationId');
    }

    public function setLocationId(?string $value): self
    {
        $this->set('locationId', $value);
        return $this;
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->getAsRelation('salesQuote');
    }

    public function getItem(): ?Item\Record
    {
        return $this->getAsRelation('item');
    }

    public function getAccount(): ?Account\Record
    {
        return $this->getAsRelation('account');
    }

    public function getUnitOfMeasure(): ?UnitOfMeasure\Record
    {
        return $this->getAsRelation('unitOfMeasure');
    }

    public function getItemVariant(): ?ItemVariant\Record
    {
        return $this->getAsRelation('itemVariant');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    public function getLocation(): ?Location\Record
    {
        return $this->getAsRelation('location');
    }
}
