<?php
namespace Rebel\BCApi2\Entity\PurchaseReceipt;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PurchaseReceiptLine;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        get => $this->get('number');
    }

    public ?Carbon $invoiceDate {
        get => $this->getAsDateTime('invoiceDate');
    }

    public ?Carbon $postingDate {
        get => $this->getAsDateTime('postingDate');
    }

    public ?Carbon $dueDate {
        get => $this->getAsDateTime('dueDate');
    }

    public ?string $vendorNumber {
        get => $this->get('vendorNumber');
    }

    public ?string $vendorName {
        get => $this->get('vendorName');
    }

    public ?string $payToName {
        get => $this->get('payToName');
    }

    public ?string $payToContact {
        get => $this->get('payToContact');
    }

    public ?string $payToVendorNumber {
        get => $this->get('payToVendorNumber');
    }

    public ?string $shipToName {
        get => $this->get('shipToName');
    }

    public ?string $shipToContact {
        get => $this->get('shipToContact');
    }

    public ?string $buyFromAddressLine1 {
        get => $this->get('buyFromAddressLine1');
    }

    public ?string $buyFromAddressLine2 {
        get => $this->get('buyFromAddressLine2');
    }

    public ?string $buyFromCity {
        get => $this->get('buyFromCity');
    }

    public ?string $buyFromCountry {
        get => $this->get('buyFromCountry');
    }

    public ?string $buyFromState {
        get => $this->get('buyFromState');
    }

    public ?string $buyFromPostCode {
        get => $this->get('buyFromPostCode');
    }

    public ?string $shipToAddressLine1 {
        get => $this->get('shipToAddressLine1');
    }

    public ?string $shipToAddressLine2 {
        get => $this->get('shipToAddressLine2');
    }

    public ?string $shipToCity {
        get => $this->get('shipToCity');
    }

    public ?string $shipToCountry {
        get => $this->get('shipToCountry');
    }

    public ?string $shipToState {
        get => $this->get('shipToState');
    }

    public ?string $shipToPostCode {
        get => $this->get('shipToPostCode');
    }

    public ?string $payToAddressLine1 {
        get => $this->get('payToAddressLine1');
    }

    public ?string $payToAddressLine2 {
        get => $this->get('payToAddressLine2');
    }

    public ?string $payToCity {
        get => $this->get('payToCity');
    }

    public ?string $payToCountry {
        get => $this->get('payToCountry');
    }

    public ?string $payToState {
        get => $this->get('payToState');
    }

    public ?string $payToPostCode {
        get => $this->get('payToPostCode');
    }

    public ?string $currencyCode {
        get => $this->get('currencyCode');
    }

    public ?string $orderNumber {
        get => $this->get('orderNumber');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    /** @var ?Entity\Collection<PurchaseReceiptLine\Record> */
    public ?Entity\Collection $purchaseReceiptLines {
        get => $this->get('purchaseReceiptLines');
    }

    /** @var ?Entity\Collection<DimensionSetLine\Record> */
    public ?Entity\Collection $dimensionSetLines {
        get => $this->get('dimensionSetLines');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'purchaseReceiptLines' => PurchaseReceiptLine\Record::class,
            'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}
