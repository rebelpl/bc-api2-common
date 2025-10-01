<?php
namespace Rebel\BCApi2\Entity\PurchaseInvoice;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\PurchaseInvoiceLine;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'vendor' => Vendor\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'currency' => Currency\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'purchaseInvoiceLines' => PurchaseInvoiceLine\Record::class,
        'pdfDocument' => PdfDocument\Record::class,
        'attachments' => Attachment\Record::class,
        'documentAttachments' => DocumentAttachment\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    public function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    public function setPostingDate(?\DateTime $value): self
    {
        $this->setAsDate('postingDate', $value);
        return $this;
    }

    public function getInvoiceDate(): ?Carbon
    {
        return $this->getAsDate('invoiceDate');
    }

    public function setInvoiceDate(?\DateTime $value): self
    {
        $this->setAsDate('invoiceDate', $value);
        return $this;
    }

    public function getDueDate(): ?Carbon
    {
        return $this->getAsDate('dueDate');
    }

    public function setDueDate(?\DateTime $value): self
    {
        $this->setAsDate('dueDate', $value);
        return $this;
    }

    public function getVendorInvoiceNumber(): ?string
    {
        return $this->get('vendorInvoiceNumber');
    }

    public function setVendorInvoiceNumber(?string $value): self
    {
        $this->set('vendorInvoiceNumber', $value);
        return $this;
    }

    public function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    public function setVendorId(?string $value): self
    {
        $this->set('vendorId', $value);
        return $this;
    }

    public function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    public function setVendorNumber(?string $value): self
    {
        $this->set('vendorNumber', $value);
        return $this;
    }

    public function getVendorName(): ?string
    {
        return $this->get('vendorName');
    }

    public function setVendorName(?string $value): self
    {
        $this->set('vendorName', $value);
        return $this;
    }

    public function getPayToName(): ?string
    {
        return $this->get('payToName');
    }

    public function setPayToName(?string $value): self
    {
        $this->set('payToName', $value);
        return $this;
    }

    public function getPayToContact(): ?string
    {
        return $this->get('payToContact');
    }

    public function setPayToContact(?string $value): self
    {
        $this->set('payToContact', $value);
        return $this;
    }

    public function getPayToVendorId(): ?string
    {
        return $this->get('payToVendorId');
    }

    public function setPayToVendorId(?string $value): self
    {
        $this->set('payToVendorId', $value);
        return $this;
    }

    public function getPayToVendorNumber(): ?string
    {
        return $this->get('payToVendorNumber');
    }

    public function setPayToVendorNumber(?string $value): self
    {
        $this->set('payToVendorNumber', $value);
        return $this;
    }

    public function getShipToName(): ?string
    {
        return $this->get('shipToName');
    }

    public function setShipToName(?string $value): self
    {
        $this->set('shipToName', $value);
        return $this;
    }

    public function getShipToContact(): ?string
    {
        return $this->get('shipToContact');
    }

    public function setShipToContact(?string $value): self
    {
        $this->set('shipToContact', $value);
        return $this;
    }

    public function getBuyFromAddressLine1(): ?string
    {
        return $this->get('buyFromAddressLine1');
    }

    public function setBuyFromAddressLine1(?string $value): self
    {
        $this->set('buyFromAddressLine1', $value);
        return $this;
    }

    public function getBuyFromAddressLine2(): ?string
    {
        return $this->get('buyFromAddressLine2');
    }

    public function setBuyFromAddressLine2(?string $value): self
    {
        $this->set('buyFromAddressLine2', $value);
        return $this;
    }

    public function getBuyFromCity(): ?string
    {
        return $this->get('buyFromCity');
    }

    public function setBuyFromCity(?string $value): self
    {
        $this->set('buyFromCity', $value);
        return $this;
    }

    public function getBuyFromCountry(): ?string
    {
        return $this->get('buyFromCountry');
    }

    public function setBuyFromCountry(?string $value): self
    {
        $this->set('buyFromCountry', $value);
        return $this;
    }

    public function getBuyFromState(): ?string
    {
        return $this->get('buyFromState');
    }

    public function setBuyFromState(?string $value): self
    {
        $this->set('buyFromState', $value);
        return $this;
    }

    public function getBuyFromPostCode(): ?string
    {
        return $this->get('buyFromPostCode');
    }

    public function setBuyFromPostCode(?string $value): self
    {
        $this->set('buyFromPostCode', $value);
        return $this;
    }

    public function getShipToAddressLine1(): ?string
    {
        return $this->get('shipToAddressLine1');
    }

    public function setShipToAddressLine1(?string $value): self
    {
        $this->set('shipToAddressLine1', $value);
        return $this;
    }

    public function getShipToAddressLine2(): ?string
    {
        return $this->get('shipToAddressLine2');
    }

    public function setShipToAddressLine2(?string $value): self
    {
        $this->set('shipToAddressLine2', $value);
        return $this;
    }

    public function getShipToCity(): ?string
    {
        return $this->get('shipToCity');
    }

    public function setShipToCity(?string $value): self
    {
        $this->set('shipToCity', $value);
        return $this;
    }

    public function getShipToCountry(): ?string
    {
        return $this->get('shipToCountry');
    }

    public function setShipToCountry(?string $value): self
    {
        $this->set('shipToCountry', $value);
        return $this;
    }

    public function getShipToState(): ?string
    {
        return $this->get('shipToState');
    }

    public function setShipToState(?string $value): self
    {
        $this->set('shipToState', $value);
        return $this;
    }

    public function getShipToPostCode(): ?string
    {
        return $this->get('shipToPostCode');
    }

    public function setShipToPostCode(?string $value): self
    {
        $this->set('shipToPostCode', $value);
        return $this;
    }

    public function getPayToAddressLine1(): ?string
    {
        return $this->get('payToAddressLine1');
    }

    public function setPayToAddressLine1(?string $value): self
    {
        $this->set('payToAddressLine1', $value);
        return $this;
    }

    public function getPayToAddressLine2(): ?string
    {
        return $this->get('payToAddressLine2');
    }

    public function setPayToAddressLine2(?string $value): self
    {
        $this->set('payToAddressLine2', $value);
        return $this;
    }

    public function getPayToCity(): ?string
    {
        return $this->get('payToCity');
    }

    public function setPayToCity(?string $value): self
    {
        $this->set('payToCity', $value);
        return $this;
    }

    public function getPayToCountry(): ?string
    {
        return $this->get('payToCountry');
    }

    public function setPayToCountry(?string $value): self
    {
        $this->set('payToCountry', $value);
        return $this;
    }

    public function getPayToState(): ?string
    {
        return $this->get('payToState');
    }

    public function setPayToState(?string $value): self
    {
        $this->set('payToState', $value);
        return $this;
    }

    public function getPayToPostCode(): ?string
    {
        return $this->get('payToPostCode');
    }

    public function setPayToPostCode(?string $value): self
    {
        $this->set('payToPostCode', $value);
        return $this;
    }

    public function getShortcutDimension1Code(): ?string
    {
        return $this->get('shortcutDimension1Code');
    }

    public function setShortcutDimension1Code(?string $value): self
    {
        $this->set('shortcutDimension1Code', $value);
        return $this;
    }

    public function getShortcutDimension2Code(): ?string
    {
        return $this->get('shortcutDimension2Code');
    }

    public function setShortcutDimension2Code(?string $value): self
    {
        $this->set('shortcutDimension2Code', $value);
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->get('currencyId');
    }

    public function setCurrencyId(?string $value): self
    {
        $this->set('currencyId', $value);
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set('currencyCode', $value);
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->get('orderId');
    }

    public function setOrderId(?string $value): self
    {
        $this->set('orderId', $value);
        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->get('orderNumber');
    }

    public function setOrderNumber(?string $value): self
    {
        $this->set('orderNumber', $value);
        return $this;
    }

    public function getPurchaser(): ?string
    {
        return $this->get('purchaser');
    }

    public function setPurchaser(?string $value): self
    {
        $this->set('purchaser', $value);
        return $this;
    }

    public function getPricesIncludeTax(): ?bool
    {
        return $this->get('pricesIncludeTax');
    }

    public function setPricesIncludeTax(?bool $value): self
    {
        $this->set('pricesIncludeTax', $value);
        return $this;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->get('discountAmount');
    }

    public function setDiscountAmount(?float $value): self
    {
        $this->set('discountAmount', $value);
        return $this;
    }

    public function getDiscountAppliedBeforeTax(): ?bool
    {
        return $this->get('discountAppliedBeforeTax');
    }

    public function setDiscountAppliedBeforeTax(?bool $value): self
    {
        $this->set('discountAppliedBeforeTax', $value);
        return $this;
    }

    public function getTotalAmountExcludingTax(): ?float
    {
        return $this->get('totalAmountExcludingTax');
    }

    public function setTotalAmountExcludingTax(?float $value): self
    {
        $this->set('totalAmountExcludingTax', $value);
        return $this;
    }

    public function getTotalTaxAmount(): ?float
    {
        return $this->get('totalTaxAmount');
    }

    public function setTotalTaxAmount(?float $value): self
    {
        $this->set('totalTaxAmount', $value);
        return $this;
    }

    public function getTotalAmountIncludingTax(): ?float
    {
        return $this->get('totalAmountIncludingTax');
    }

    public function setTotalAmountIncludingTax(?float $value): self
    {
        $this->set('totalAmountIncludingTax', $value);
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->getAsRelation('vendor');
    }

    public function getDimensionValue(): ?DimensionValue\Record
    {
        return $this->getAsRelation('dimensionValue');
    }

    public function getCurrency(): ?Currency\Record
    {
        return $this->getAsRelation('currency');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    /**
     * @return Entity\Collection|PurchaseInvoiceLine\Record[]
     */
    public function getPurchaseInvoiceLines(): Entity\Collection
    {
        return $this->getAsCollection('purchaseInvoiceLines');
    }

    public function getPdfDocument(): ?PdfDocument\Record
    {
        return $this->getAsRelation('pdfDocument');
    }

    /**
     * @return Entity\Collection|Attachment\Record[]
     */
    public function getAttachments(): Entity\Collection
    {
        return $this->getAsCollection('attachments');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }

    public function doPost(Client $client): void
    {
        $this->doAction('Microsoft.NAV.post', $client);
    }
}
