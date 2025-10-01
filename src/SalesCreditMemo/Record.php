<?php
namespace Rebel\BCApi2\Entity\SalesCreditMemo;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\CustomerReturnReason;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\SalesCreditMemoLine;
use Rebel\BCApi2\Entity\ShipmentMethod;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'customer' => Customer\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'shipmentMethod' => ShipmentMethod\Record::class,
        'customerReturnReason' => CustomerReturnReason\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'salesCreditMemoLines' => SalesCreditMemoLine\Record::class,
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

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
    }

    public function setExternalDocumentNumber(?string $value): self
    {
        $this->set('externalDocumentNumber', $value);
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

    public function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    public function setCustomerId(?string $value): self
    {
        $this->set('customerId', $value);
        return $this;
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    public function setCustomerNumber(?string $value): self
    {
        $this->set('customerNumber', $value);
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    public function setCustomerName(?string $value): self
    {
        $this->set('customerName', $value);
        return $this;
    }

    public function getBillToName(): ?string
    {
        return $this->get('billToName');
    }

    public function setBillToName(?string $value): self
    {
        $this->set('billToName', $value);
        return $this;
    }

    public function getBillToCustomerId(): ?string
    {
        return $this->get('billToCustomerId');
    }

    public function setBillToCustomerId(?string $value): self
    {
        $this->set('billToCustomerId', $value);
        return $this;
    }

    public function getBillToCustomerNumber(): ?string
    {
        return $this->get('billToCustomerNumber');
    }

    public function setBillToCustomerNumber(?string $value): self
    {
        $this->set('billToCustomerNumber', $value);
        return $this;
    }

    public function getSellToAddressLine1(): ?string
    {
        return $this->get('sellToAddressLine1');
    }

    public function setSellToAddressLine1(?string $value): self
    {
        $this->set('sellToAddressLine1', $value);
        return $this;
    }

    public function getSellToAddressLine2(): ?string
    {
        return $this->get('sellToAddressLine2');
    }

    public function setSellToAddressLine2(?string $value): self
    {
        $this->set('sellToAddressLine2', $value);
        return $this;
    }

    public function getSellToCity(): ?string
    {
        return $this->get('sellToCity');
    }

    public function setSellToCity(?string $value): self
    {
        $this->set('sellToCity', $value);
        return $this;
    }

    public function getSellToCountry(): ?string
    {
        return $this->get('sellToCountry');
    }

    public function setSellToCountry(?string $value): self
    {
        $this->set('sellToCountry', $value);
        return $this;
    }

    public function getSellToState(): ?string
    {
        return $this->get('sellToState');
    }

    public function setSellToState(?string $value): self
    {
        $this->set('sellToState', $value);
        return $this;
    }

    public function getSellToPostCode(): ?string
    {
        return $this->get('sellToPostCode');
    }

    public function setSellToPostCode(?string $value): self
    {
        $this->set('sellToPostCode', $value);
        return $this;
    }

    public function getBillToAddressLine1(): ?string
    {
        return $this->get('billToAddressLine1');
    }

    public function setBillToAddressLine1(?string $value): self
    {
        $this->set('billToAddressLine1', $value);
        return $this;
    }

    public function getBillToAddressLine2(): ?string
    {
        return $this->get('billToAddressLine2');
    }

    public function setBillToAddressLine2(?string $value): self
    {
        $this->set('billToAddressLine2', $value);
        return $this;
    }

    public function getBillToCity(): ?string
    {
        return $this->get('billToCity');
    }

    public function setBillToCity(?string $value): self
    {
        $this->set('billToCity', $value);
        return $this;
    }

    public function getBillToCountry(): ?string
    {
        return $this->get('billToCountry');
    }

    public function setBillToCountry(?string $value): self
    {
        $this->set('billToCountry', $value);
        return $this;
    }

    public function getBillToState(): ?string
    {
        return $this->get('billToState');
    }

    public function setBillToState(?string $value): self
    {
        $this->set('billToState', $value);
        return $this;
    }

    public function getBillToPostCode(): ?string
    {
        return $this->get('billToPostCode');
    }

    public function setBillToPostCode(?string $value): self
    {
        $this->set('billToPostCode', $value);
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

    public function getSalesperson(): ?string
    {
        return $this->get('salesperson');
    }

    public function setSalesperson(?string $value): self
    {
        $this->set('salesperson', $value);
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

    public function getPhoneNumber(): ?string
    {
        return $this->get('phoneNumber');
    }

    public function setPhoneNumber(?string $value): self
    {
        $this->set('phoneNumber', $value);
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    public function getCustomerReturnReasonId(): ?string
    {
        return $this->get('customerReturnReasonId');
    }

    public function setCustomerReturnReasonId(?string $value): self
    {
        $this->set('customerReturnReasonId', $value);
        return $this;
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
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
     * @return Entity\Collection|SalesCreditMemoLine\Record[]
     */
    public function getSalesCreditMemoLines(): Entity\Collection
    {
        return $this->getAsCollection('salesCreditMemoLines');
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

    public function doCancelAndSend(Client $client): void
    {
        $this->doAction('Microsoft.NAV.cancelAndSend', $client);
    }

    public function doPost(Client $client): void
    {
        $this->doAction('Microsoft.NAV.post', $client);
    }

    public function doPostAndSend(Client $client): void
    {
        $this->doAction('Microsoft.NAV.postAndSend', $client);
    }

    public function doSend(Client $client): void
    {
        $this->doAction('Microsoft.NAV.send', $client);
    }
}
