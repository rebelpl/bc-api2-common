<?php
namespace Rebel\BCApi2\Entity\PurchaseReceipt;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\PurchaseReceiptLine;

class Record extends Entity
{
    protected $classMap = [
        'purchaseReceiptLines' => PurchaseReceiptLine\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function getInvoiceDate(): ?Carbon
    {
        return $this->getAsDate('invoiceDate');
    }

    function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    function getDueDate(): ?Carbon
    {
        return $this->getAsDate('dueDate');
    }

    function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    function getVendorName(): ?string
    {
        return $this->get('vendorName');
    }

    function getPayToName(): ?string
    {
        return $this->get('payToName');
    }

    function getPayToContact(): ?string
    {
        return $this->get('payToContact');
    }

    function getPayToVendorNumber(): ?string
    {
        return $this->get('payToVendorNumber');
    }

    function getShipToName(): ?string
    {
        return $this->get('shipToName');
    }

    function getShipToContact(): ?string
    {
        return $this->get('shipToContact');
    }

    function getBuyFromAddressLine1(): ?string
    {
        return $this->get('buyFromAddressLine1');
    }

    function getBuyFromAddressLine2(): ?string
    {
        return $this->get('buyFromAddressLine2');
    }

    function getBuyFromCity(): ?string
    {
        return $this->get('buyFromCity');
    }

    function getBuyFromCountry(): ?string
    {
        return $this->get('buyFromCountry');
    }

    function getBuyFromState(): ?string
    {
        return $this->get('buyFromState');
    }

    function getBuyFromPostCode(): ?string
    {
        return $this->get('buyFromPostCode');
    }

    function getShipToAddressLine1(): ?string
    {
        return $this->get('shipToAddressLine1');
    }

    function getShipToAddressLine2(): ?string
    {
        return $this->get('shipToAddressLine2');
    }

    function getShipToCity(): ?string
    {
        return $this->get('shipToCity');
    }

    function getShipToCountry(): ?string
    {
        return $this->get('shipToCountry');
    }

    function getShipToState(): ?string
    {
        return $this->get('shipToState');
    }

    function getShipToPostCode(): ?string
    {
        return $this->get('shipToPostCode');
    }

    function getPayToAddressLine1(): ?string
    {
        return $this->get('payToAddressLine1');
    }

    function getPayToAddressLine2(): ?string
    {
        return $this->get('payToAddressLine2');
    }

    function getPayToCity(): ?string
    {
        return $this->get('payToCity');
    }

    function getPayToCountry(): ?string
    {
        return $this->get('payToCountry');
    }

    function getPayToState(): ?string
    {
        return $this->get('payToState');
    }

    function getPayToPostCode(): ?string
    {
        return $this->get('payToPostCode');
    }

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function getOrderNumber(): ?string
    {
        return $this->get('orderNumber');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    /**
     * @return Entity\Collection|PurchaseReceiptLine\Record[]
     */
    function getPurchaseReceiptLines(): Entity\Collection
    {
        return $this->getAsCollection('purchaseReceiptLines');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
