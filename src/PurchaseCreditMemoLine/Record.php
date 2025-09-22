<?php
namespace Rebel\BCApi2\Entity\PurchaseCreditMemoLine;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\Location;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\UnitOfMeasure;

class Record extends Entity
{
    protected $classMap = [
        'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
        'item' => Item\Record::class,
        'account' => Account\Record::class,
        'unitOfMeasure' => UnitOfMeasure\Record::class,
        'itemVariant' => ItemVariant\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'location' => Location\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getDocumentId(): ?string
    {
        return $this->get('documentId');
    }

    function setDocumentId(?string $value): self
    {
        $this->set('documentId', $value);
        return $this;
    }

    function getSequence(): ?int
    {
        return $this->get('sequence');
    }

    function setSequence(?int $value): self
    {
        $this->set('sequence', $value);
        return $this;
    }

    function getItemId(): ?string
    {
        return $this->get('itemId');
    }

    function setItemId(?string $value): self
    {
        $this->set('itemId', $value);
        return $this;
    }

    function getAccountId(): ?string
    {
        return $this->get('accountId');
    }

    function setAccountId(?string $value): self
    {
        $this->set('accountId', $value);
        return $this;
    }

    function getLineType(): ?string
    {
        return $this->get('lineType');
    }

    function setLineType(?string $value): self
    {
        $this->set('lineType', $value);
        return $this;
    }

    function getLineObjectNumber(): ?string
    {
        return $this->get('lineObjectNumber');
    }

    function setLineObjectNumber(?string $value): self
    {
        $this->set('lineObjectNumber', $value);
        return $this;
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function setDescription(?string $value): self
    {
        $this->set('description', $value);
        return $this;
    }

    function getUnitOfMeasureId(): ?string
    {
        return $this->get('unitOfMeasureId');
    }

    function setUnitOfMeasureId(?string $value): self
    {
        $this->set('unitOfMeasureId', $value);
        return $this;
    }

    function getUnitOfMeasureCode(): ?string
    {
        return $this->get('unitOfMeasureCode');
    }

    function setUnitOfMeasureCode(?string $value): self
    {
        $this->set('unitOfMeasureCode', $value);
        return $this;
    }

    function getUnitCost(): ?float
    {
        return $this->get('unitCost');
    }

    function setUnitCost(?float $value): self
    {
        $this->set('unitCost', $value);
        return $this;
    }

    function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    function setQuantity(?float $value): self
    {
        $this->set('quantity', $value);
        return $this;
    }

    function getDiscountAmount(): ?float
    {
        return $this->get('discountAmount');
    }

    function setDiscountAmount(?float $value): self
    {
        $this->set('discountAmount', $value);
        return $this;
    }

    function getDiscountPercent(): ?float
    {
        return $this->get('discountPercent');
    }

    function setDiscountPercent(?float $value): self
    {
        $this->set('discountPercent', $value);
        return $this;
    }

    function getDiscountAppliedBeforeTax(): ?bool
    {
        return $this->get('discountAppliedBeforeTax');
    }

    function setDiscountAppliedBeforeTax(?bool $value): self
    {
        $this->set('discountAppliedBeforeTax', $value);
        return $this;
    }

    function getAmountExcludingTax(): ?float
    {
        return $this->get('amountExcludingTax');
    }

    function setAmountExcludingTax(?float $value): self
    {
        $this->set('amountExcludingTax', $value);
        return $this;
    }

    function getTaxCode(): ?string
    {
        return $this->get('taxCode');
    }

    function setTaxCode(?string $value): self
    {
        $this->set('taxCode', $value);
        return $this;
    }

    function getTaxPercent(): ?float
    {
        return $this->get('taxPercent');
    }

    function setTaxPercent(?float $value): self
    {
        $this->set('taxPercent', $value);
        return $this;
    }

    function getTotalTaxAmount(): ?float
    {
        return $this->get('totalTaxAmount');
    }

    function setTotalTaxAmount(?float $value): self
    {
        $this->set('totalTaxAmount', $value);
        return $this;
    }

    function getAmountIncludingTax(): ?float
    {
        return $this->get('amountIncludingTax');
    }

    function setAmountIncludingTax(?float $value): self
    {
        $this->set('amountIncludingTax', $value);
        return $this;
    }

    function getInvoiceDiscountAllocation(): ?float
    {
        return $this->get('invoiceDiscountAllocation');
    }

    function setInvoiceDiscountAllocation(?float $value): self
    {
        $this->set('invoiceDiscountAllocation', $value);
        return $this;
    }

    function getNetAmount(): ?float
    {
        return $this->get('netAmount');
    }

    function setNetAmount(?float $value): self
    {
        $this->set('netAmount', $value);
        return $this;
    }

    function getNetTaxAmount(): ?float
    {
        return $this->get('netTaxAmount');
    }

    function setNetTaxAmount(?float $value): self
    {
        $this->set('netTaxAmount', $value);
        return $this;
    }

    function getNetAmountIncludingTax(): ?float
    {
        return $this->get('netAmountIncludingTax');
    }

    function setNetAmountIncludingTax(?float $value): self
    {
        $this->set('netAmountIncludingTax', $value);
        return $this;
    }

    function getItemVariantId(): ?string
    {
        return $this->get('itemVariantId');
    }

    function setItemVariantId(?string $value): self
    {
        $this->set('itemVariantId', $value);
        return $this;
    }

    function getLocationId(): ?string
    {
        return $this->get('locationId');
    }

    function setLocationId(?string $value): self
    {
        $this->set('locationId', $value);
        return $this;
    }

    function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get('purchaseCreditMemo');
    }

    function getItem(): ?Item\Record
    {
        return $this->get('item');
    }

    function getAccount(): ?Account\Record
    {
        return $this->get('account');
    }

    function getUnitOfMeasure(): ?UnitOfMeasure\Record
    {
        return $this->get('unitOfMeasure');
    }

    function getItemVariant(): ?ItemVariant\Record
    {
        return $this->get('itemVariant');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    function getLocation(): ?Location\Record
    {
        return $this->get('location');
    }
}
