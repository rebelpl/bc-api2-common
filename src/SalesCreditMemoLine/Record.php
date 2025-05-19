<?php
namespace Rebel\BCApi2\Entity\SalesCreditMemoLine;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\Account;
use Rebel\BCApi2\Entity\UnitOfMeasure;
use Rebel\BCApi2\Entity\ItemVariant;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Location;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $documentId {
		get => $this->get('documentId');
		set => $this->set('documentId', $value);
	}

	public ?int $sequence {
		get => $this->get('sequence');
		set => $this->set('sequence', $value);
	}

	public ?string $itemId {
		get => $this->get('itemId');
		set => $this->set('itemId', $value);
	}

	public ?string $accountId {
		get => $this->get('accountId');
		set => $this->set('accountId', $value);
	}

	public ?Enums\InvoiceLineAggLineType $lineType {
		get => $this->get('lineType', Enums\InvoiceLineAggLineType::class);
		set => $this->set('lineType', $value);
	}

	public ?string $lineObjectNumber {
		get => $this->get('lineObjectNumber');
		set => $this->set('lineObjectNumber', $value);
	}

	public ?string $description {
		get => $this->get('description');
		set => $this->set('description', $value);
	}

	public ?string $description2 {
		get => $this->get('description2');
		set => $this->set('description2', $value);
	}

	public ?string $unitOfMeasureId {
		get => $this->get('unitOfMeasureId');
		set => $this->set('unitOfMeasureId', $value);
	}

	public ?string $unitOfMeasureCode {
		get => $this->get('unitOfMeasureCode');
		set => $this->set('unitOfMeasureCode', $value);
	}

	public ?float $unitPrice {
		get => $this->get('unitPrice');
		set => $this->set('unitPrice', $value);
	}

	public ?float $quantity {
		get => $this->get('quantity');
		set => $this->set('quantity', $value);
	}

	public ?float $discountAmount {
		get => $this->get('discountAmount');
		set => $this->set('discountAmount', $value);
	}

	public ?float $discountPercent {
		get => $this->get('discountPercent');
		set => $this->set('discountPercent', $value);
	}

	public ?bool $discountAppliedBeforeTax {
		get => $this->get('discountAppliedBeforeTax');
		set => $this->set('discountAppliedBeforeTax', $value);
	}

	public ?float $amountExcludingTax {
		get => $this->get('amountExcludingTax');
		set => $this->set('amountExcludingTax', $value);
	}

	public ?string $taxCode {
		get => $this->get('taxCode');
		set => $this->set('taxCode', $value);
	}

	public ?float $taxPercent {
		get => $this->get('taxPercent');
		set => $this->set('taxPercent', $value);
	}

	public ?float $totalTaxAmount {
		get => $this->get('totalTaxAmount');
		set => $this->set('totalTaxAmount', $value);
	}

	public ?float $amountIncludingTax {
		get => $this->get('amountIncludingTax');
		set => $this->set('amountIncludingTax', $value);
	}

	public ?float $invoiceDiscountAllocation {
		get => $this->get('invoiceDiscountAllocation');
		set => $this->set('invoiceDiscountAllocation', $value);
	}

	public ?float $netAmount {
		get => $this->get('netAmount');
		set => $this->set('netAmount', $value);
	}

	public ?float $netTaxAmount {
		get => $this->get('netTaxAmount');
		set => $this->set('netTaxAmount', $value);
	}

	public ?float $netAmountIncludingTax {
		get => $this->get('netAmountIncludingTax');
		set => $this->set('netAmountIncludingTax', $value);
	}

	public ?\DateTime $shipmentDate {
		get => $this->get('shipmentDate', 'date');
		set => $this->set('shipmentDate', $value);
	}

	public ?string $itemVariantId {
		get => $this->get('itemVariantId');
		set => $this->set('itemVariantId', $value);
	}

	public ?string $locationId {
		get => $this->get('locationId');
		set => $this->set('locationId', $value);
	}

	public ?SalesCreditMemo\Record $salesCreditMemo {
		get => $this->get('salesCreditMemo');
		set => $this->set('salesCreditMemo', $value);
	}

	public ?Item\Record $item {
		get => $this->get('item');
		set => $this->set('item', $value);
	}

	public ?Account\Record $account {
		get => $this->get('account');
		set => $this->set('account', $value);
	}

	public ?UnitOfMeasure\Record $unitOfMeasure {
		get => $this->get('unitOfMeasure');
		set => $this->set('unitOfMeasure', $value);
	}

	public ?ItemVariant\Record $itemVariant {
		get => $this->get('itemVariant');
		set => $this->set('itemVariant', $value);
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

	public ?Location\Record $location {
		get => $this->get('location');
		set => $this->set('location', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'salesCreditMemo' => SalesCreditMemo\Record::class,
			'item' => Item\Record::class,
			'account' => Account\Record::class,
			'unitOfMeasure' => UnitOfMeasure\Record::class,
			'itemVariant' => ItemVariant\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
			'location' => Location\Record::class,
        ];
    }
}