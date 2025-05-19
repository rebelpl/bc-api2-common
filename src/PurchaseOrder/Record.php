<?php
namespace Rebel\BCApi2\Entity\PurchaseOrder;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\ShipmentMethod;
use Rebel\BCApi2\Entity\PurchaseOrderLine;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DocumentAttachment;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $number {
		get => $this->get('number');
		set => $this->set('number', $value);
	}

	public ?\DateTime $orderDate {
		get => $this->get('orderDate', 'date');
		set => $this->set('orderDate', $value);
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
		set => $this->set('postingDate', $value);
	}

	public ?string $vendorId {
		get => $this->get('vendorId');
		set => $this->set('vendorId', $value);
	}

	public ?string $vendorNumber {
		get => $this->get('vendorNumber');
		set => $this->set('vendorNumber', $value);
	}

	public ?string $vendorName {
		get => $this->get('vendorName');
		set => $this->set('vendorName', $value);
	}

	public ?string $payToName {
		get => $this->get('payToName');
		set => $this->set('payToName', $value);
	}

	public ?string $payToVendorId {
		get => $this->get('payToVendorId');
		set => $this->set('payToVendorId', $value);
	}

	public ?string $payToVendorNumber {
		get => $this->get('payToVendorNumber');
		set => $this->set('payToVendorNumber', $value);
	}

	public ?string $shipToName {
		get => $this->get('shipToName');
		set => $this->set('shipToName', $value);
	}

	public ?string $shipToContact {
		get => $this->get('shipToContact');
		set => $this->set('shipToContact', $value);
	}

	public ?string $buyFromAddressLine1 {
		get => $this->get('buyFromAddressLine1');
		set => $this->set('buyFromAddressLine1', $value);
	}

	public ?string $buyFromAddressLine2 {
		get => $this->get('buyFromAddressLine2');
		set => $this->set('buyFromAddressLine2', $value);
	}

	public ?string $buyFromCity {
		get => $this->get('buyFromCity');
		set => $this->set('buyFromCity', $value);
	}

	public ?string $buyFromCountry {
		get => $this->get('buyFromCountry');
		set => $this->set('buyFromCountry', $value);
	}

	public ?string $buyFromState {
		get => $this->get('buyFromState');
		set => $this->set('buyFromState', $value);
	}

	public ?string $buyFromPostCode {
		get => $this->get('buyFromPostCode');
		set => $this->set('buyFromPostCode', $value);
	}

	public ?string $payToAddressLine1 {
		get => $this->get('payToAddressLine1');
		set => $this->set('payToAddressLine1', $value);
	}

	public ?string $payToAddressLine2 {
		get => $this->get('payToAddressLine2');
		set => $this->set('payToAddressLine2', $value);
	}

	public ?string $payToCity {
		get => $this->get('payToCity');
		set => $this->set('payToCity', $value);
	}

	public ?string $payToCountry {
		get => $this->get('payToCountry');
		set => $this->set('payToCountry', $value);
	}

	public ?string $payToState {
		get => $this->get('payToState');
		set => $this->set('payToState', $value);
	}

	public ?string $payToPostCode {
		get => $this->get('payToPostCode');
		set => $this->set('payToPostCode', $value);
	}

	public ?string $shipToAddressLine1 {
		get => $this->get('shipToAddressLine1');
		set => $this->set('shipToAddressLine1', $value);
	}

	public ?string $shipToAddressLine2 {
		get => $this->get('shipToAddressLine2');
		set => $this->set('shipToAddressLine2', $value);
	}

	public ?string $shipToCity {
		get => $this->get('shipToCity');
		set => $this->set('shipToCity', $value);
	}

	public ?string $shipToCountry {
		get => $this->get('shipToCountry');
		set => $this->set('shipToCountry', $value);
	}

	public ?string $shipToState {
		get => $this->get('shipToState');
		set => $this->set('shipToState', $value);
	}

	public ?string $shipToPostCode {
		get => $this->get('shipToPostCode');
		set => $this->set('shipToPostCode', $value);
	}

	public ?string $shortcutDimension1Code {
		get => $this->get('shortcutDimension1Code');
		set => $this->set('shortcutDimension1Code', $value);
	}

	public ?string $shortcutDimension2Code {
		get => $this->get('shortcutDimension2Code');
		set => $this->set('shortcutDimension2Code', $value);
	}

	public ?string $currencyId {
		get => $this->get('currencyId');
		set => $this->set('currencyId', $value);
	}

	public ?string $currencyCode {
		get => $this->get('currencyCode');
		set => $this->set('currencyCode', $value);
	}

	public ?bool $pricesIncludeTax {
		get => $this->get('pricesIncludeTax');
		set => $this->set('pricesIncludeTax', $value);
	}

	public ?string $paymentTermsId {
		get => $this->get('paymentTermsId');
		set => $this->set('paymentTermsId', $value);
	}

	public ?string $shipmentMethodId {
		get => $this->get('shipmentMethodId');
		set => $this->set('shipmentMethodId', $value);
	}

	public ?string $purchaser {
		get => $this->get('purchaser');
		set => $this->set('purchaser', $value);
	}

	public ?\DateTime $requestedReceiptDate {
		get => $this->get('requestedReceiptDate', 'date');
		set => $this->set('requestedReceiptDate', $value);
	}

	public ?float $discountAmount {
		get => $this->get('discountAmount');
		set => $this->set('discountAmount', $value);
	}

	public ?bool $discountAppliedBeforeTax {
		get => $this->get('discountAppliedBeforeTax');
		set => $this->set('discountAppliedBeforeTax', $value);
	}

	public ?float $totalAmountExcludingTax {
		get => $this->get('totalAmountExcludingTax');
		set => $this->set('totalAmountExcludingTax', $value);
	}

	public ?float $totalTaxAmount {
		get => $this->get('totalTaxAmount');
		set => $this->set('totalTaxAmount', $value);
	}

	public ?float $totalAmountIncludingTax {
		get => $this->get('totalAmountIncludingTax');
		set => $this->set('totalAmountIncludingTax', $value);
	}

	public ?bool $fullyReceived {
		get => $this->get('fullyReceived');
		set => $this->set('fullyReceived', $value);
	}

	public ?Enums\PurchaseOrderEntityBufferStatus $status {
		get => $this->get('status', Enums\PurchaseOrderEntityBufferStatus::class);
		set => $this->set('status', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Vendor\Record $vendor {
		get => $this->get('vendor');
		set => $this->set('vendor', $value);
	}

	public ?DimensionValue\Record $dimensionValue {
		get => $this->get('dimensionValue');
		set => $this->set('dimensionValue', $value);
	}

	public ?Currency\Record $currency {
		get => $this->get('currency');
		set => $this->set('currency', $value);
	}

	public ?PaymentTerm\Record $paymentTerm {
		get => $this->get('paymentTerm');
		set => $this->set('paymentTerm', $value);
	}

	public ?ShipmentMethod\Record $shipmentMethod {
		get => $this->get('shipmentMethod');
		set => $this->set('shipmentMethod', $value);
	}

	/** @var Entity\Collection<PurchaseOrderLine\Record> */
	public Entity\Collection $purchaseOrderLines {
		get => $this->get('purchaseOrderLines', 'collection');
	}

	/** @var Entity\Collection<Attachment\Record> */
	public Entity\Collection $attachments {
		get => $this->get('attachments', 'collection');
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

	/** @var Entity\Collection<DocumentAttachment\Record> */
	public Entity\Collection $documentAttachments {
		get => $this->get('documentAttachments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'vendor' => Vendor\Record::class,
			'dimensionValue' => DimensionValue\Record::class,
			'currency' => Currency\Record::class,
			'paymentTerm' => PaymentTerm\Record::class,
			'shipmentMethod' => ShipmentMethod\Record::class,
			'purchaseOrderLines' => PurchaseOrderLine\Record::class,
			'attachments' => Attachment\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
			'documentAttachments' => DocumentAttachment\Record::class,
        ];
    }
}