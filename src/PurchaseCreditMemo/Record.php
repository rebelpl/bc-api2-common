<?php
namespace Rebel\BCApi2\Entity\PurchaseCreditMemo;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Vendor;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\ShipmentMethod;
use Rebel\BCApi2\Entity\CustomerReturnReason;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\PurchaseCreditMemoLine;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::vendor->name => Vendor\Record::class,
            Properties::dimensionValue->name => DimensionValue\Record::class,
            Properties::currency->name => Currency\Record::class,
            Properties::paymentTerm->name => PaymentTerm\Record::class,
            Properties::shipmentMethod->name => ShipmentMethod\Record::class,
            Properties::customerReturnReason->name => CustomerReturnReason\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
            Properties::purchaseCreditMemoLines->name => PurchaseCreditMemoLine\Record::class,
            Properties::pdfDocument->name => PdfDocument\Record::class,
            Properties::attachments->name => Attachment\Record::class,
            Properties::documentAttachments->name => DocumentAttachment\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function setNumber(?string $value): self
    {
        $this->set(Properties::number->name, $value);
        return $this;
    }

    public function getCreditMemoDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::creditMemoDate->name);
    }

    public function setCreditMemoDate(?\DateTime $value): self
    {
        $this->set(Properties::creditMemoDate->name, $value);
        return $this;
    }

    public function getPostingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::postingDate->name);
    }

    public function setPostingDate(?\DateTime $value): self
    {
        $this->set(Properties::postingDate->name, $value);
        return $this;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::dueDate->name);
    }

    public function setDueDate(?\DateTime $value): self
    {
        $this->set(Properties::dueDate->name, $value);
        return $this;
    }

    public function getVendorId(): ?string
    {
        return $this->get(Properties::vendorId->name);
    }

    public function setVendorId(?string $value): self
    {
        $this->set(Properties::vendorId->name, $value);
        return $this;
    }

    public function getVendorNumber(): ?string
    {
        return $this->get(Properties::vendorNumber->name);
    }

    public function setVendorNumber(?string $value): self
    {
        $this->set(Properties::vendorNumber->name, $value);
        return $this;
    }

    public function getVendorName(): ?string
    {
        return $this->get(Properties::vendorName->name);
    }

    public function setVendorName(?string $value): self
    {
        $this->set(Properties::vendorName->name, $value);
        return $this;
    }

    public function getVendorCreditMemoNumber(): ?string
    {
        return $this->get(Properties::vendorCreditMemoNumber->name);
    }

    public function setVendorCreditMemoNumber(?string $value): self
    {
        $this->set(Properties::vendorCreditMemoNumber->name, $value);
        return $this;
    }

    public function getPayToVendorId(): ?string
    {
        return $this->get(Properties::payToVendorId->name);
    }

    public function setPayToVendorId(?string $value): self
    {
        $this->set(Properties::payToVendorId->name, $value);
        return $this;
    }

    public function getPayToVendorNumber(): ?string
    {
        return $this->get(Properties::payToVendorNumber->name);
    }

    public function setPayToVendorNumber(?string $value): self
    {
        $this->set(Properties::payToVendorNumber->name, $value);
        return $this;
    }

    public function getPayToName(): ?string
    {
        return $this->get(Properties::payToName->name);
    }

    public function setPayToName(?string $value): self
    {
        $this->set(Properties::payToName->name, $value);
        return $this;
    }

    public function getBuyFromAddressLine1(): ?string
    {
        return $this->get(Properties::buyFromAddressLine1->name);
    }

    public function setBuyFromAddressLine1(?string $value): self
    {
        $this->set(Properties::buyFromAddressLine1->name, $value);
        return $this;
    }

    public function getBuyFromAddressLine2(): ?string
    {
        return $this->get(Properties::buyFromAddressLine2->name);
    }

    public function setBuyFromAddressLine2(?string $value): self
    {
        $this->set(Properties::buyFromAddressLine2->name, $value);
        return $this;
    }

    public function getBuyFromCity(): ?string
    {
        return $this->get(Properties::buyFromCity->name);
    }

    public function setBuyFromCity(?string $value): self
    {
        $this->set(Properties::buyFromCity->name, $value);
        return $this;
    }

    public function getBuyFromCountry(): ?string
    {
        return $this->get(Properties::buyFromCountry->name);
    }

    public function setBuyFromCountry(?string $value): self
    {
        $this->set(Properties::buyFromCountry->name, $value);
        return $this;
    }

    public function getBuyFromState(): ?string
    {
        return $this->get(Properties::buyFromState->name);
    }

    public function setBuyFromState(?string $value): self
    {
        $this->set(Properties::buyFromState->name, $value);
        return $this;
    }

    public function getBuyFromPostCode(): ?string
    {
        return $this->get(Properties::buyFromPostCode->name);
    }

    public function setBuyFromPostCode(?string $value): self
    {
        $this->set(Properties::buyFromPostCode->name, $value);
        return $this;
    }

    public function getPayToAddressLine1(): ?string
    {
        return $this->get(Properties::payToAddressLine1->name);
    }

    public function setPayToAddressLine1(?string $value): self
    {
        $this->set(Properties::payToAddressLine1->name, $value);
        return $this;
    }

    public function getPayToAddressLine2(): ?string
    {
        return $this->get(Properties::payToAddressLine2->name);
    }

    public function setPayToAddressLine2(?string $value): self
    {
        $this->set(Properties::payToAddressLine2->name, $value);
        return $this;
    }

    public function getPayToCity(): ?string
    {
        return $this->get(Properties::payToCity->name);
    }

    public function setPayToCity(?string $value): self
    {
        $this->set(Properties::payToCity->name, $value);
        return $this;
    }

    public function getPayToCountry(): ?string
    {
        return $this->get(Properties::payToCountry->name);
    }

    public function setPayToCountry(?string $value): self
    {
        $this->set(Properties::payToCountry->name, $value);
        return $this;
    }

    public function getPayToState(): ?string
    {
        return $this->get(Properties::payToState->name);
    }

    public function setPayToState(?string $value): self
    {
        $this->set(Properties::payToState->name, $value);
        return $this;
    }

    public function getPayToPostCode(): ?string
    {
        return $this->get(Properties::payToPostCode->name);
    }

    public function setPayToPostCode(?string $value): self
    {
        $this->set(Properties::payToPostCode->name, $value);
        return $this;
    }

    public function getShortcutDimension1Code(): ?string
    {
        return $this->get(Properties::shortcutDimension1Code->name);
    }

    public function setShortcutDimension1Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension1Code->name, $value);
        return $this;
    }

    public function getShortcutDimension2Code(): ?string
    {
        return $this->get(Properties::shortcutDimension2Code->name);
    }

    public function setShortcutDimension2Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension2Code->name, $value);
        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->get(Properties::currencyId->name);
    }

    public function setCurrencyId(?string $value): self
    {
        $this->set(Properties::currencyId->name, $value);
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function setCurrencyCode(?string $value): self
    {
        $this->set(Properties::currencyCode->name, $value);
        return $this;
    }

    public function getPaymentTermsId(): ?string
    {
        return $this->get(Properties::paymentTermsId->name);
    }

    public function setPaymentTermsId(?string $value): self
    {
        $this->set(Properties::paymentTermsId->name, $value);
        return $this;
    }

    public function getShipmentMethodId(): ?string
    {
        return $this->get(Properties::shipmentMethodId->name);
    }

    public function setShipmentMethodId(?string $value): self
    {
        $this->set(Properties::shipmentMethodId->name, $value);
        return $this;
    }

    public function getPurchaser(): ?string
    {
        return $this->get(Properties::purchaser->name);
    }

    public function setPurchaser(?string $value): self
    {
        $this->set(Properties::purchaser->name, $value);
        return $this;
    }

    public function isPricesIncludeTax(): ?bool
    {
        return $this->get(Properties::pricesIncludeTax->name);
    }

    public function setPricesIncludeTax(?bool $value): self
    {
        $this->set(Properties::pricesIncludeTax->name, $value);
        return $this;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->get(Properties::discountAmount->name);
    }

    public function setDiscountAmount(?float $value): self
    {
        $this->set(Properties::discountAmount->name, $value);
        return $this;
    }

    public function isDiscountAppliedBeforeTax(): ?bool
    {
        return $this->get(Properties::discountAppliedBeforeTax->name);
    }

    public function setDiscountAppliedBeforeTax(?bool $value): self
    {
        $this->set(Properties::discountAppliedBeforeTax->name, $value);
        return $this;
    }

    public function getTotalAmountExcludingTax(): ?float
    {
        return $this->get(Properties::totalAmountExcludingTax->name);
    }

    public function setTotalAmountExcludingTax(?float $value): self
    {
        $this->set(Properties::totalAmountExcludingTax->name, $value);
        return $this;
    }

    public function getTotalTaxAmount(): ?float
    {
        return $this->get(Properties::totalTaxAmount->name);
    }

    public function setTotalTaxAmount(?float $value): self
    {
        $this->set(Properties::totalTaxAmount->name, $value);
        return $this;
    }

    public function getTotalAmountIncludingTax(): ?float
    {
        return $this->get(Properties::totalAmountIncludingTax->name);
    }

    public function setTotalAmountIncludingTax(?float $value): self
    {
        $this->set(Properties::totalAmountIncludingTax->name, $value);
        return $this;
    }

    public function getStatus(): ?Enums\PurchCrMemoEntityStatus
    {
        return $this->getAsEnum(Properties::status->name, Enums\PurchCrMemoEntityStatus::class);
    }

    public function setStatus(?Enums\PurchCrMemoEntityStatus $value): self
    {
        $this->set(Properties::status->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getInvoiceId(): ?string
    {
        return $this->get(Properties::invoiceId->name);
    }

    public function setInvoiceId(?string $value): self
    {
        $this->set(Properties::invoiceId->name, $value);
        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->get(Properties::invoiceNumber->name);
    }

    public function setInvoiceNumber(?string $value): self
    {
        $this->set(Properties::invoiceNumber->name, $value);
        return $this;
    }

    public function getVendorReturnReasonId(): ?string
    {
        return $this->get(Properties::vendorReturnReasonId->name);
    }

    public function setVendorReturnReasonId(?string $value): self
    {
        $this->set(Properties::vendorReturnReasonId->name, $value);
        return $this;
    }

    public function getVendor(): ?Vendor\Record
    {
        return $this->get(Properties::vendor->name);
    }

    public function getDimensionValue(): ?DimensionValue\Record
    {
        return $this->get(Properties::dimensionValue->name);
    }

    public function getCurrency(): ?Currency\Record
    {
        return $this->get(Properties::currency->name);
    }

    public function getPaymentTerm(): ?PaymentTerm\Record
    {
        return $this->get(Properties::paymentTerm->name);
    }

    public function getShipmentMethod(): ?ShipmentMethod\Record
    {
        return $this->get(Properties::shipmentMethod->name);
    }

    public function getCustomerReturnReason(): ?CustomerReturnReason\Record
    {
        return $this->get(Properties::customerReturnReason->name);
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<PurchaseCreditMemoLine\Record>
     */
    public function getPurchaseCreditMemoLines(): Entity\Collection
    {
        return $this->get(Properties::purchaseCreditMemoLines->name) ?? new Entity\Collection();
    }

    public function getPdfDocument(): ?PdfDocument\Record
    {
        return $this->get(Properties::pdfDocument->name);
    }

    /**
     * @return Entity\Collection<Attachment\Record>
     */
    public function getAttachments(): Entity\Collection
    {
        return $this->get(Properties::attachments->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DocumentAttachment\Record>
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->get(Properties::documentAttachments->name) ?? new Entity\Collection();
    }
}