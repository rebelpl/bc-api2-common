<?php
namespace Rebel\BCApi2\Entity\PurchaseCreditMemo;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\CustomerReturnReason;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\PurchaseCreditMemoLine;
use Rebel\BCApi2\Entity\ShipmentMethod;
use Rebel\BCApi2\Entity\Vendor;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'vendor' => Vendor\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'shipmentMethod' => ShipmentMethod\Record::class,
        'customerReturnReason' => CustomerReturnReason\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'purchaseCreditMemoLines' => PurchaseCreditMemoLine\Record::class,
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

    public function getCreditMemoDate(): ?Carbon
    {
        return $this->getAsDate('creditMemoDate');
    }

    public function setCreditMemoDate(?\DateTime $value): self
    {
        $this->setAsDate('creditMemoDate', $value);
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

    public function getDueDate(): ?Carbon
    {
        return $this->getAsDate('dueDate');
    }

    public function setDueDate(?\DateTime $value): self
    {
        $this->setAsDate('dueDate', $value);
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

    public function getVendorCreditMemoNumber(): ?string
    {
        return $this->get('vendorCreditMemoNumber');
    }

    public function setVendorCreditMemoNumber(?string $value): self
    {
        $this->set('vendorCreditMemoNumber', $value);
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

    public function getPayToName(): ?string
    {
        return $this->get('payToName');
    }

    public function setPayToName(?string $value): self
    {
        $this->set('payToName', $value);
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

    public function getPaymentTermsId(): ?string
    {
        return $this->get('paymentTermsId');
    }

    public function setPaymentTermsId(?string $value): self
    {
        $this->set('paymentTermsId', $value);
        return $this;
    }

    public function getShipmentMethodId(): ?string
    {
        return $this->get('shipmentMethodId');
    }

    public function setShipmentMethodId(?string $value): self
    {
        $this->set('shipmentMethodId', $value);
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

    public function getInvoiceId(): ?string
    {
        return $this->get('invoiceId');
    }

    public function setInvoiceId(?string $value): self
    {
        $this->set('invoiceId', $value);
        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->get('invoiceNumber');
    }

    public function setInvoiceNumber(?string $value): self
    {
        $this->set('invoiceNumber', $value);
        return $this;
    }

    public function getVendorReturnReasonId(): ?string
    {
        return $this->get('vendorReturnReasonId');
    }

    public function setVendorReturnReasonId(?string $value): self
    {
        $this->set('vendorReturnReasonId', $value);
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

    public function getPaymentTerm(): ?PaymentTerm\Record
    {
        return $this->getAsRelation('paymentTerm');
    }

    public function getShipmentMethod(): ?ShipmentMethod\Record
    {
        return $this->getAsRelation('shipmentMethod');
    }

    public function getCustomerReturnReason(): ?CustomerReturnReason\Record
    {
        return $this->getAsRelation('customerReturnReason');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    /**
     * @return Entity\Collection|PurchaseCreditMemoLine\Record[]
     */
    public function getPurchaseCreditMemoLines(): Entity\Collection
    {
        return $this->getAsCollection('purchaseCreditMemoLines');
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

    public function doCancel(Client $client): void
    {
        $this->doAction('Microsoft.NAV.cancel', $client);
    }

    public function doPost(Client $client): void
    {
        $this->doAction('Microsoft.NAV.post', $client);
    }
}
