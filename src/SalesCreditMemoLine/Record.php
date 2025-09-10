<?php
namespace Rebel\BCApi2\Entity\SalesCreditMemoLine;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\Location;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\UnitOfMeasure;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $documentId {
        set { $this->set('documentId', $value); }
        get => $this->get('documentId');
    }

    public ?int $sequence {
        set { $this->set('sequence', $value); }
        get => $this->get('sequence');
    }

    public ?string $itemId {
        set { $this->set('itemId', $value); }
        get => $this->get('itemId');
    }

    public ?string $accountId {
        set { $this->set('accountId', $value); }
        get => $this->get('accountId');
    }

    public ?Enums\InvoiceLineAggLineType $lineType {
        set { $this->set('lineType', $value); }
        get => $this->getAsEnum('lineType', Enums\InvoiceLineAggLineType::class);
    }

    public ?string $lineObjectNumber {
        set { $this->set('lineObjectNumber', $value); }
        get => $this->get('lineObjectNumber');
    }

    public ?string $description {
        set { $this->set('description', $value); }
        get => $this->get('description');
    }

    public ?string $description2 {
        set { $this->set('description2', $value); }
        get => $this->get('description2');
    }

    public ?string $unitOfMeasureId {
        set { $this->set('unitOfMeasureId', $value); }
        get => $this->get('unitOfMeasureId');
    }

    public ?string $unitOfMeasureCode {
        set { $this->set('unitOfMeasureCode', $value); }
        get => $this->get('unitOfMeasureCode');
    }

    public ?float $unitPrice {
        set { $this->set('unitPrice', $value); }
        get => $this->get('unitPrice');
    }

    public ?float $quantity {
        set { $this->set('quantity', $value); }
        get => $this->get('quantity');
    }

    public ?float $discountAmount {
        set { $this->set('discountAmount', $value); }
        get => $this->get('discountAmount');
    }

    public ?float $discountPercent {
        set { $this->set('discountPercent', $value); }
        get => $this->get('discountPercent');
    }

    public ?bool $discountAppliedBeforeTax {
        set { $this->set('discountAppliedBeforeTax', $value); }
        get => $this->get('discountAppliedBeforeTax');
    }

    public ?float $amountExcludingTax {
        set { $this->set('amountExcludingTax', $value); }
        get => $this->get('amountExcludingTax');
    }

    public ?string $taxCode {
        set { $this->set('taxCode', $value); }
        get => $this->get('taxCode');
    }

    public ?float $taxPercent {
        set { $this->set('taxPercent', $value); }
        get => $this->get('taxPercent');
    }

    public ?float $totalTaxAmount {
        set { $this->set('totalTaxAmount', $value); }
        get => $this->get('totalTaxAmount');
    }

    public ?float $amountIncludingTax {
        set { $this->set('amountIncludingTax', $value); }
        get => $this->get('amountIncludingTax');
    }

    public ?float $invoiceDiscountAllocation {
        set { $this->set('invoiceDiscountAllocation', $value); }
        get => $this->get('invoiceDiscountAllocation');
    }

    public ?float $netAmount {
        set { $this->set('netAmount', $value); }
        get => $this->get('netAmount');
    }

    public ?float $netTaxAmount {
        set { $this->set('netTaxAmount', $value); }
        get => $this->get('netTaxAmount');
    }

    public ?float $netAmountIncludingTax {
        set { $this->set('netAmountIncludingTax', $value); }
        get => $this->get('netAmountIncludingTax');
    }

    public ?Carbon $shipmentDate {
        set { $this->setAsDate('shipmentDate', $value); }
        get => $this->getAsDateTime('shipmentDate');
    }

    public ?string $itemVariantId {
        set { $this->set('itemVariantId', $value); }
        get => $this->get('itemVariantId');
    }

    public ?string $locationId {
        set { $this->set('locationId', $value); }
        get => $this->get('locationId');
    }

    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->get('salesCreditMemo');
    }

    public ?Item\Record $item {
        get => $this->get('item');
    }

    public ?Account\Record $account {
        get => $this->get('account');
    }

    public ?UnitOfMeasure\Record $unitOfMeasure {
        get => $this->get('unitOfMeasure');
    }

    public ?ItemVariant\Record $itemVariant {
        get => $this->get('itemVariant');
    }

    /** @var ?Entity\Collection<DimensionSetLine\Record> */
    public ?Entity\Collection $dimensionSetLines {
        get => $this->get('dimensionSetLines', 'collection');
    }

    public ?Location\Record $location {
        get => $this->get('location');
    }

    protected array $classMap = [
        'salesCreditMemo' => SalesCreditMemo\Record::class,
        'item' => Item\Record::class,
        'account' => Account\Record::class,
        'unitOfMeasure' => UnitOfMeasure\Record::class,
        'itemVariant' => ItemVariant\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'location' => Location\Record::class,
    ];
}
