<?php
namespace Microsoft\NAV\PurchaseOrderLine;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\PurchaseOrder;
use Microsoft\NAV\Item;
use Microsoft\NAV\Account;
use Microsoft\NAV\UnitOfMeasure;
use Microsoft\NAV\ItemVariant;
use Microsoft\NAV\DimensionSetLine;
use Microsoft\NAV\Location;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::purchaseOrder->name => PurchaseOrder\Record::class,
            Properties::item->name => Item\Record::class,
            Properties::account->name => Account\Record::class,
            Properties::unitOfMeasure->name => UnitOfMeasure\Record::class,
            Properties::itemVariant->name => ItemVariant\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
            Properties::location->name => Location\Record::class,
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

    public function getItemId(): ?string
    {
        return $this->get(Properties::itemId->name);
    }

    public function setItemId(?string $value): self
    {
        $this->set(Properties::itemId->name, $value);
        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->get(Properties::accountId->name);
    }

    public function setAccountId(?string $value): self
    {
        $this->set(Properties::accountId->name, $value);
        return $this;
    }

    public function getLineType(): ?Enums\InvoiceLineAggLineType
    {
        return $this->getAsEnum(Properties::lineType->name, Enums\InvoiceLineAggLineType::class);
    }

    public function setLineType(?Enums\InvoiceLineAggLineType $value): self
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

    public function getUnitOfMeasureId(): ?string
    {
        return $this->get(Properties::unitOfMeasureId->name);
    }

    public function setUnitOfMeasureId(?string $value): self
    {
        $this->set(Properties::unitOfMeasureId->name, $value);
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

    public function getQuantity(): ?float
    {
        return $this->get(Properties::quantity->name);
    }

    public function setQuantity(?float $value): self
    {
        $this->set(Properties::quantity->name, $value);
        return $this;
    }

    public function getDirectUnitCost(): ?float
    {
        return $this->get(Properties::directUnitCost->name);
    }

    public function setDirectUnitCost(?float $value): self
    {
        $this->set(Properties::directUnitCost->name, $value);
        return $this;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->get(Properties::discountAmount->name);
    }

    public function setDiscountAmount(?float $value): self
    {
        $this->set(Properties::discountAmount->name, $value);
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

    public function isDiscountAppliedBeforeTax(): ?bool
    {
        return $this->get(Properties::discountAppliedBeforeTax->name);
    }

    public function setDiscountAppliedBeforeTax(?bool $value): self
    {
        $this->set(Properties::discountAppliedBeforeTax->name, $value);
        return $this;
    }

    public function getAmountExcludingTax(): ?float
    {
        return $this->get(Properties::amountExcludingTax->name);
    }

    public function setAmountExcludingTax(?float $value): self
    {
        $this->set(Properties::amountExcludingTax->name, $value);
        return $this;
    }

    public function getTaxCode(): ?string
    {
        return $this->get(Properties::taxCode->name);
    }

    public function setTaxCode(?string $value): self
    {
        $this->set(Properties::taxCode->name, $value);
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

    public function getTotalTaxAmount(): ?float
    {
        return $this->get(Properties::totalTaxAmount->name);
    }

    public function setTotalTaxAmount(?float $value): self
    {
        $this->set(Properties::totalTaxAmount->name, $value);
        return $this;
    }

    public function getAmountIncludingTax(): ?float
    {
        return $this->get(Properties::amountIncludingTax->name);
    }

    public function setAmountIncludingTax(?float $value): self
    {
        $this->set(Properties::amountIncludingTax->name, $value);
        return $this;
    }

    public function getInvoiceDiscountAllocation(): ?float
    {
        return $this->get(Properties::invoiceDiscountAllocation->name);
    }

    public function setInvoiceDiscountAllocation(?float $value): self
    {
        $this->set(Properties::invoiceDiscountAllocation->name, $value);
        return $this;
    }

    public function getNetAmount(): ?float
    {
        return $this->get(Properties::netAmount->name);
    }

    public function setNetAmount(?float $value): self
    {
        $this->set(Properties::netAmount->name, $value);
        return $this;
    }

    public function getNetTaxAmount(): ?float
    {
        return $this->get(Properties::netTaxAmount->name);
    }

    public function setNetTaxAmount(?float $value): self
    {
        $this->set(Properties::netTaxAmount->name, $value);
        return $this;
    }

    public function getNetAmountIncludingTax(): ?float
    {
        return $this->get(Properties::netAmountIncludingTax->name);
    }

    public function setNetAmountIncludingTax(?float $value): self
    {
        $this->set(Properties::netAmountIncludingTax->name, $value);
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

    public function getReceivedQuantity(): ?float
    {
        return $this->get(Properties::receivedQuantity->name);
    }

    public function setReceivedQuantity(?float $value): self
    {
        $this->set(Properties::receivedQuantity->name, $value);
        return $this;
    }

    public function getInvoicedQuantity(): ?float
    {
        return $this->get(Properties::invoicedQuantity->name);
    }

    public function setInvoicedQuantity(?float $value): self
    {
        $this->set(Properties::invoicedQuantity->name, $value);
        return $this;
    }

    public function getInvoiceQuantity(): ?float
    {
        return $this->get(Properties::invoiceQuantity->name);
    }

    public function setInvoiceQuantity(?float $value): self
    {
        $this->set(Properties::invoiceQuantity->name, $value);
        return $this;
    }

    public function getReceiveQuantity(): ?float
    {
        return $this->get(Properties::receiveQuantity->name);
    }

    public function setReceiveQuantity(?float $value): self
    {
        $this->set(Properties::receiveQuantity->name, $value);
        return $this;
    }

    public function getItemVariantId(): ?string
    {
        return $this->get(Properties::itemVariantId->name);
    }

    public function setItemVariantId(?string $value): self
    {
        $this->set(Properties::itemVariantId->name, $value);
        return $this;
    }

    public function getLocationId(): ?string
    {
        return $this->get(Properties::locationId->name);
    }

    public function setLocationId(?string $value): self
    {
        $this->set(Properties::locationId->name, $value);
        return $this;
    }

    public function getPurchaseOrder(): ?PurchaseOrder\Record
    {
        return $this->get(Properties::purchaseOrder->name);
    }

    public function getItem(): ?Item\Record
    {
        return $this->get(Properties::item->name);
    }

    public function getAccount(): ?Account\Record
    {
        return $this->get(Properties::account->name);
    }

    public function getUnitOfMeasure(): ?UnitOfMeasure\Record
    {
        return $this->get(Properties::unitOfMeasure->name);
    }

    public function getItemVariant(): ?ItemVariant\Record
    {
        return $this->get(Properties::itemVariant->name);
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }

    public function getLocation(): ?Location\Record
    {
        return $this->get(Properties::location->name);
    }
}