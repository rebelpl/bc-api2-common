<?php
namespace Rebel\BCApi2\Entity\SalesOrderLine;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\Location;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\UnitOfMeasure;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $documentId {
        set => $this->set('documentId', $value);
        get => $this->get('documentId');
    }

    public ?int $sequence {
        set => $this->set('sequence', $value);
        get => $this->get('sequence');
    }

    public ?string $itemId {
        set => $this->set('itemId', $value);
        get => $this->get('itemId');
    }

    public ?string $accountId {
        set => $this->set('accountId', $value);
        get => $this->get('accountId');
    }

    public ?Enums\InvoiceLineAggLineType $lineType {
        set => $this->set('lineType', $value);
        get => $this->getAsEnum('lineType', Enums\InvoiceLineAggLineType::class);
    }

    public ?string $lineObjectNumber {
        set => $this->set('lineObjectNumber', $value);
        get => $this->get('lineObjectNumber');
    }

    public ?string $description {
        set => $this->set('description', $value);
        get => $this->get('description');
    }

    public ?string $description2 {
        set => $this->set('description2', $value);
        get => $this->get('description2');
    }

    public ?string $unitOfMeasureId {
        set => $this->set('unitOfMeasureId', $value);
        get => $this->get('unitOfMeasureId');
    }

    public ?string $unitOfMeasureCode {
        set => $this->set('unitOfMeasureCode', $value);
        get => $this->get('unitOfMeasureCode');
    }

    public ?float $quantity {
        set => $this->set('quantity', $value);
        get => $this->get('quantity');
    }

    public ?float $unitPrice {
        set => $this->set('unitPrice', $value);
        get => $this->get('unitPrice');
    }

    public ?float $discountAmount {
        set => $this->set('discountAmount', $value);
        get => $this->get('discountAmount');
    }

    public ?float $discountPercent {
        set => $this->set('discountPercent', $value);
        get => $this->get('discountPercent');
    }

    /* read-only property */
    public ?bool $discountAppliedBeforeTax {
        get => $this->get('discountAppliedBeforeTax');
    }

    /* read-only property */
    public ?float $amountExcludingTax {
        get => $this->get('amountExcludingTax');
    }

    /* when inserted: VAT Prod. Posting Group */
    public ?string $taxCode {
        set => $this->set('taxCode', $value);
        get => $this->get('taxCode');
    }

    /* read-only property */
    public ?float $taxPercent {
        get => $this->get('taxPercent');
    }

    /* read-only property */
    public ?float $totalTaxAmount {
        get => $this->get('totalTaxAmount');
    }

    /* read-only property */
    public ?float $amountIncludingTax {
        get => $this->get('amountIncludingTax');
    }

    /* read-only property */
    public ?float $invoiceDiscountAllocation {
        get => $this->get('invoiceDiscountAllocation');
    }

    /* read-only property */
    public ?float $netAmount {
        get => $this->get('netAmount');
    }

    /* read-only property */
    public ?float $netTaxAmount {
        get => $this->get('netTaxAmount');
    }

    /* read-only property */
    public ?float $netAmountIncludingTax {
        get => $this->get('netAmountIncludingTax');
    }

    public ?Carbon $shipmentDate {
        set => $this->setAsDateTime('shipmentDate', $value);
        get => $this->getAsDateTime('shipmentDate');
    }

    /* read-only property */
    public ?float $shippedQuantity {
        get => $this->get('shippedQuantity');
    }

    /* read-only property */
    public ?float $invoicedQuantity {
        get => $this->get('invoicedQuantity');
    }

    public ?float $invoiceQuantity {
        set => $this->set('invoiceQuantity', $value);
        get => $this->get('invoiceQuantity');
    }

    public ?float $shipQuantity {
        set => $this->set('shipQuantity', $value);
        get => $this->get('shipQuantity');
    }

    public ?string $itemVariantId {
        set => $this->set('itemVariantId', $value);
        get => $this->get('itemVariantId');
    }

    public ?string $locationId {
        set => $this->set('locationId', $value);
        get => $this->get('locationId');
    }

    /** @var ?SalesOrder\Record */
    public ?SalesOrder\Record $salesOrder {
        get => $this->get('salesOrder');
    }

    /** @var ?Item\Record */
    public ?Item\Record $item {
        get => $this->get('item');
    }

    /** @var ?Account\Record */
    public ?Account\Record $account {
        get => $this->get('account');
    }

    /** @var ?UnitOfMeasure\Record */
    public ?UnitOfMeasure\Record $unitOfMeasure {
        get => $this->get('unitOfMeasure');
    }

    /** @var ?ItemVariant\Record */
    public ?ItemVariant\Record $itemVariant {
        get => $this->get('itemVariant');
    }

    /** @var ?Entity\Collection<DimensionSetLine\Record> */
    public ?Entity\Collection $dimensionSetLines {
        get => $this->get('dimensionSetLines');
    }

    /** @var ?Location\Record */
    public ?Location\Record $location {
        get => $this->get('location');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'salesOrder' => SalesOrder\Record::class,
            'item' => Item\Record::class,
            'account' => Account\Record::class,
            'unitOfMeasure' => UnitOfMeasure\Record::class,
            'itemVariant' => ItemVariant\Record::class,
            'dimensionSetLines' => DimensionSetLine\Record::class,
            'location' => Location\Record::class,
        ];
    }
}
