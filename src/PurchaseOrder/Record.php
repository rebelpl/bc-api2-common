<?php
namespace Rebel\BCApi2\Entity\PurchaseOrder;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\PurchaseOrderLine;
use Rebel\BCApi2\Entity\ShipmentMethod;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $classMap = [
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

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    function getOrderDate(): ?Carbon
    {
        return $this->getAsDate('orderDate');
    }

    function setOrderDate(?\DateTime $value): self
    {
        $this->setAsDate('orderDate', $value);
        return $this;
    }

    function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    function setPostingDate(?\DateTime $value): self
    {
        $this->setAsDate('postingDate', $value);
        return $this;
    }

    function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    function setVendorId(?string $value): self
    {
        $this->set('vendorId', $value);
        return $this;
    }

    function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    function setVendorNumber(?string $value): self
    {
        $this->set('vendorNumber', $value);
        return $this;
    }

    function getVendorName(): ?string
    {
        return $this->get('vendorName');
    }

    function setVendorName(?string $value): self
    {
        $this->set('vendorName', $value);
        return $this;
    }

    function getPayToName(): ?string
    {
        return $this->get('payToName');
    }

    function setPayToName(?string $value): self
    {
        $this->set('payToName', $value);
        return $this;
    }

    function getPayToVendorId(): ?string
    {
        return $this->get('payToVendorId');
    }

    function setPayToVendorId(?string $value): self
    {
        $this->set('payToVendorId', $value);
        return $this;
    }

    function getPayToVendorNumber(): ?string
    {
        return $this->get('payToVendorNumber');
    }

    function setPayToVendorNumber(?string $value): self
    {
        $this->set('payToVendorNumber', $value);
        return $this;
    }

    function getShipToName(): ?string
    {
        return $this->get('shipToName');
    }

    function setShipToName(?string $value): self
    {
        $this->set('shipToName', $value);
        return $this;
    }

    function getShipToContact(): ?string
    {
        return $this->get('shipToContact');
    }

    function setShipToContact(?string $value): self
    {
        $this->set('shipToContact', $value);
        return $this;
    }

    function getBuyFromAddressLine1(): ?string
    {
        return $this->get('buyFromAddressLine1');
    }

    function setBuyFromAddressLine1(?string $value): self
    {
        $this->set('buyFromAddressLine1', $value);
        return $this;
    }

    function getBuyFromAddressLine2(): ?string
    {
        return $this->get('buyFromAddressLine2');
    }

    function setBuyFromAddressLine2(?string $value): self
    {
        $this->set('buyFromAddressLine2', $value);
        return $this;
    }

    function getBuyFromCity(): ?string
    {
        return $this->get('buyFromCity');
    }

    function setBuyFromCity(?string $value): self
    {
        $this->set('buyFromCity', $value);
        return $this;
    }

    function getBuyFromCountry(): ?string
    {
        return $this->get('buyFromCountry');
    }

    function setBuyFromCountry(?string $value): self
    {
        $this->set('buyFromCountry', $value);
        return $this;
    }

    function getBuyFromState(): ?string
    {
        return $this->get('buyFromState');
    }

    function setBuyFromState(?string $value): self
    {
        $this->set('buyFromState', $value);
        return $this;
    }

    function getBuyFromPostCode(): ?string
    {
        return $this->get('buyFromPostCode');
    }

    function setBuyFromPostCode(?string $value): self
    {
        $this->set('buyFromPostCode', $value);
        return $this;
    }

    function getPayToAddressLine1(): ?string
    {
        return $this->get('payToAddressLine1');
    }

    function setPayToAddressLine1(?string $value): self
    {
        $this->set('payToAddressLine1', $value);
        return $this;
    }

    function getPayToAddressLine2(): ?string
    {
        return $this->get('payToAddressLine2');
    }

    function setPayToAddressLine2(?string $value): self
    {
        $this->set('payToAddressLine2', $value);
        return $this;
    }

    function getPayToCity(): ?string
    {
        return $this->get('payToCity');
    }

    function setPayToCity(?string $value): self
    {
        $this->set('payToCity', $value);
        return $this;
    }

    function getPayToCountry(): ?string
    {
        return $this->get('payToCountry');
    }

    function setPayToCountry(?string $value): self
    {
        $this->set('payToCountry', $value);
        return $this;
    }

    function getPayToState(): ?string
    {
        return $this->get('payToState');
    }

    function setPayToState(?string $value): self
    {
        $this->set('payToState', $value);
        return $this;
    }

    function getPayToPostCode(): ?string
    {
        return $this->get('payToPostCode');
    }

    function setPayToPostCode(?string $value): self
    {
        $this->set('payToPostCode', $value);
        return $this;
    }

    function getShipToAddressLine1(): ?string
    {
        return $this->get('shipToAddressLine1');
    }

    function setShipToAddressLine1(?string $value): self
    {
        $this->set('shipToAddressLine1', $value);
        return $this;
    }

    function getShipToAddressLine2(): ?string
    {
        return $this->get('shipToAddressLine2');
    }

    function setShipToAddressLine2(?string $value): self
    {
        $this->set('shipToAddressLine2', $value);
        return $this;
    }

    function getShipToCity(): ?string
    {
        return $this->get('shipToCity');
    }

    function setShipToCity(?string $value): self
    {
        $this->set('shipToCity', $value);
        return $this;
    }

    function getShipToCountry(): ?string
    {
        return $this->get('shipToCountry');
    }

    function setShipToCountry(?string $value): self
    {
        $this->set('shipToCountry', $value);
        return $this;
    }

    function getShipToState(): ?string
    {
        return $this->get('shipToState');
    }

    function setShipToState(?string $value): self
    {
        $this->set('shipToState', $value);
        return $this;
    }

    function getShipToPostCode(): ?string
    {
        return $this->get('shipToPostCode');
    }

    function setShipToPostCode(?string $value): self
    {
        $this->set('shipToPostCode', $value);
        return $this;
    }

    function getShortcutDimension1Code(): ?string
    {
        return $this->get('shortcutDimension1Code');
    }

    function setShortcutDimension1Code(?string $value): self
    {
        $this->set('shortcutDimension1Code', $value);
        return $this;
    }

    function getShortcutDimension2Code(): ?string
    {
        return $this->get('shortcutDimension2Code');
    }

    function setShortcutDimension2Code(?string $value): self
    {
        $this->set('shortcutDimension2Code', $value);
        return $this;
    }

    function getCurrencyId(): ?string
    {
        return $this->get('currencyId');
    }

    function setCurrencyId(?string $value): self
    {
        $this->set('currencyId', $value);
        return $this;
    }

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function setCurrencyCode(?string $value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    function getPricesIncludeTax(): ?bool
    {
        return $this->get('pricesIncludeTax');
    }

    function setPricesIncludeTax(?bool $value): self
    {
        $this->set('pricesIncludeTax', $value);
        return $this;
    }

    function getPaymentTermsId(): ?string
    {
        return $this->get('paymentTermsId');
    }

    function setPaymentTermsId(?string $value): self
    {
        $this->set('paymentTermsId', $value);
        return $this;
    }

    function getShipmentMethodId(): ?string
    {
        return $this->get('shipmentMethodId');
    }

    function setShipmentMethodId(?string $value): self
    {
        $this->set('shipmentMethodId', $value);
        return $this;
    }

    function getPurchaser(): ?string
    {
        return $this->get('purchaser');
    }

    function setPurchaser(?string $value): self
    {
        $this->set('purchaser', $value);
        return $this;
    }

    function getRequestedReceiptDate(): ?Carbon
    {
        return $this->getAsDate('requestedReceiptDate');
    }

    function setRequestedReceiptDate(?\DateTime $value): self
    {
        $this->setAsDate('requestedReceiptDate', $value);
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

    function getDiscountAppliedBeforeTax(): ?bool
    {
        return $this->get('discountAppliedBeforeTax');
    }

    function setDiscountAppliedBeforeTax(?bool $value): self
    {
        $this->set('discountAppliedBeforeTax', $value);
        return $this;
    }

    function getTotalAmountExcludingTax(): ?float
    {
        return $this->get('totalAmountExcludingTax');
    }

    function setTotalAmountExcludingTax(?float $value): self
    {
        $this->set('totalAmountExcludingTax', $value);
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

    function getTotalAmountIncludingTax(): ?float
    {
        return $this->get('totalAmountIncludingTax');
    }

    function setTotalAmountIncludingTax(?float $value): self
    {
        $this->set('totalAmountIncludingTax', $value);
        return $this;
    }

    function getFullyReceived(): ?bool
    {
        return $this->get('fullyReceived');
    }

    function setFullyReceived(?bool $value): self
    {
        $this->set('fullyReceived', $value);
        return $this;
    }

    function getStatus(): ?string
    {
        return $this->get('status');
    }

    function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getVendor(): ?Vendor\Record
    {
        return $this->get('vendor');
    }

    function getDimensionValue(): ?DimensionValue\Record
    {
        return $this->get('dimensionValue');
    }

    function getCurrency(): ?Currency\Record
    {
        return $this->get('currency');
    }

    function getPaymentTerm(): ?PaymentTerm\Record
    {
        return $this->get('paymentTerm');
    }

    function getShipmentMethod(): ?ShipmentMethod\Record
    {
        return $this->get('shipmentMethod');
    }

    /**
     * @return Entity\Collection|PurchaseOrderLine\Record[]
     */
    function getPurchaseOrderLines(): Entity\Collection
    {
        return $this->getAsCollection('purchaseOrderLines');
    }

    /**
     * @return Entity\Collection|Attachment\Record[]
     */
    function getAttachments(): Entity\Collection
    {
        return $this->getAsCollection('attachments');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }

    function doReceiveAndInvoice(Client $client): void
    {
        $this->doAction('Microsoft.NAV.receiveAndInvoice', $client);
    }
}
