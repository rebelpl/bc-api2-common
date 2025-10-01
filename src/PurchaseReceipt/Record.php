<?php
namespace Rebel\BCApi2\Entity\PurchaseReceipt;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\PurchaseReceiptLine;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'purchaseReceiptLines' => PurchaseReceiptLine\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function getInvoiceDate(): ?Carbon
    {
        return $this->getAsDate('invoiceDate');
    }

    public function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    public function getDueDate(): ?Carbon
    {
        return $this->getAsDate('dueDate');
    }

    public function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    public function getVendorName(): ?string
    {
        return $this->get('vendorName');
    }

    public function getPayToName(): ?string
    {
        return $this->get('payToName');
    }

    public function getPayToContact(): ?string
    {
        return $this->get('payToContact');
    }

    public function getPayToVendorNumber(): ?string
    {
        return $this->get('payToVendorNumber');
    }

    public function getShipToName(): ?string
    {
        return $this->get('shipToName');
    }

    public function getShipToContact(): ?string
    {
        return $this->get('shipToContact');
    }

    public function getBuyFromAddressLine1(): ?string
    {
        return $this->get('buyFromAddressLine1');
    }

    public function getBuyFromAddressLine2(): ?string
    {
        return $this->get('buyFromAddressLine2');
    }

    public function getBuyFromCity(): ?string
    {
        return $this->get('buyFromCity');
    }

    public function getBuyFromCountry(): ?string
    {
        return $this->get('buyFromCountry');
    }

    public function getBuyFromState(): ?string
    {
        return $this->get('buyFromState');
    }

    public function getBuyFromPostCode(): ?string
    {
        return $this->get('buyFromPostCode');
    }

    public function getShipToAddressLine1(): ?string
    {
        return $this->get('shipToAddressLine1');
    }

    public function getShipToAddressLine2(): ?string
    {
        return $this->get('shipToAddressLine2');
    }

    public function getShipToCity(): ?string
    {
        return $this->get('shipToCity');
    }

    public function getShipToCountry(): ?string
    {
        return $this->get('shipToCountry');
    }

    public function getShipToState(): ?string
    {
        return $this->get('shipToState');
    }

    public function getShipToPostCode(): ?string
    {
        return $this->get('shipToPostCode');
    }

    public function getPayToAddressLine1(): ?string
    {
        return $this->get('payToAddressLine1');
    }

    public function getPayToAddressLine2(): ?string
    {
        return $this->get('payToAddressLine2');
    }

    public function getPayToCity(): ?string
    {
        return $this->get('payToCity');
    }

    public function getPayToCountry(): ?string
    {
        return $this->get('payToCountry');
    }

    public function getPayToState(): ?string
    {
        return $this->get('payToState');
    }

    public function getPayToPostCode(): ?string
    {
        return $this->get('payToPostCode');
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function getOrderNumber(): ?string
    {
        return $this->get('orderNumber');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    /**
     * @return Entity\Collection|PurchaseReceiptLine\Record[]
     */
    public function getPurchaseReceiptLines(): Entity\Collection
    {
        return $this->getAsCollection('purchaseReceiptLines');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
