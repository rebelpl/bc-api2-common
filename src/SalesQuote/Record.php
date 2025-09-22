<?php
namespace Rebel\BCApi2\Entity\SalesQuote;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\SalesQuoteLine;
use Rebel\BCApi2\Entity\ShipmentMethod;

class Record extends Entity
{
    protected $classMap = [
        'customer' => Customer\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'shipmentMethod' => ShipmentMethod\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'salesQuoteLines' => SalesQuoteLine\Record::class,
        'pdfDocument' => PdfDocument\Record::class,
        'attachments' => Attachment\Record::class,
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

    function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
    }

    function setExternalDocumentNumber(?string $value): self
    {
        $this->set('externalDocumentNumber', $value);
        return $this;
    }

    function getDocumentDate(): ?Carbon
    {
        return $this->getAsDate('documentDate');
    }

    function setDocumentDate(?\DateTime $value): self
    {
        $this->setAsDate('documentDate', $value);
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

    function getDueDate(): ?Carbon
    {
        return $this->getAsDate('dueDate');
    }

    function setDueDate(?\DateTime $value): self
    {
        $this->setAsDate('dueDate', $value);
        return $this;
    }

    function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    function setCustomerId(?string $value): self
    {
        $this->set('customerId', $value);
        return $this;
    }

    function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    function setCustomerNumber(?string $value): self
    {
        $this->set('customerNumber', $value);
        return $this;
    }

    function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    function setCustomerName(?string $value): self
    {
        $this->set('customerName', $value);
        return $this;
    }

    function getBillToName(): ?string
    {
        return $this->get('billToName');
    }

    function setBillToName(?string $value): self
    {
        $this->set('billToName', $value);
        return $this;
    }

    function getBillToCustomerId(): ?string
    {
        return $this->get('billToCustomerId');
    }

    function setBillToCustomerId(?string $value): self
    {
        $this->set('billToCustomerId', $value);
        return $this;
    }

    function getBillToCustomerNumber(): ?string
    {
        return $this->get('billToCustomerNumber');
    }

    function setBillToCustomerNumber(?string $value): self
    {
        $this->set('billToCustomerNumber', $value);
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

    function getSellToAddressLine1(): ?string
    {
        return $this->get('sellToAddressLine1');
    }

    function setSellToAddressLine1(?string $value): self
    {
        $this->set('sellToAddressLine1', $value);
        return $this;
    }

    function getSellToAddressLine2(): ?string
    {
        return $this->get('sellToAddressLine2');
    }

    function setSellToAddressLine2(?string $value): self
    {
        $this->set('sellToAddressLine2', $value);
        return $this;
    }

    function getSellToCity(): ?string
    {
        return $this->get('sellToCity');
    }

    function setSellToCity(?string $value): self
    {
        $this->set('sellToCity', $value);
        return $this;
    }

    function getSellToCountry(): ?string
    {
        return $this->get('sellToCountry');
    }

    function setSellToCountry(?string $value): self
    {
        $this->set('sellToCountry', $value);
        return $this;
    }

    function getSellToState(): ?string
    {
        return $this->get('sellToState');
    }

    function setSellToState(?string $value): self
    {
        $this->set('sellToState', $value);
        return $this;
    }

    function getSellToPostCode(): ?string
    {
        return $this->get('sellToPostCode');
    }

    function setSellToPostCode(?string $value): self
    {
        $this->set('sellToPostCode', $value);
        return $this;
    }

    function getBillToAddressLine1(): ?string
    {
        return $this->get('billToAddressLine1');
    }

    function setBillToAddressLine1(?string $value): self
    {
        $this->set('billToAddressLine1', $value);
        return $this;
    }

    function getBillToAddressLine2(): ?string
    {
        return $this->get('billToAddressLine2');
    }

    function setBillToAddressLine2(?string $value): self
    {
        $this->set('billToAddressLine2', $value);
        return $this;
    }

    function getBillToCity(): ?string
    {
        return $this->get('billToCity');
    }

    function setBillToCity(?string $value): self
    {
        $this->set('billToCity', $value);
        return $this;
    }

    function getBillToCountry(): ?string
    {
        return $this->get('billToCountry');
    }

    function setBillToCountry(?string $value): self
    {
        $this->set('billToCountry', $value);
        return $this;
    }

    function getBillToState(): ?string
    {
        return $this->get('billToState');
    }

    function setBillToState(?string $value): self
    {
        $this->set('billToState', $value);
        return $this;
    }

    function getBillToPostCode(): ?string
    {
        return $this->get('billToPostCode');
    }

    function setBillToPostCode(?string $value): self
    {
        $this->set('billToPostCode', $value);
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

    function getSalesperson(): ?string
    {
        return $this->get('salesperson');
    }

    function setSalesperson(?string $value): self
    {
        $this->set('salesperson', $value);
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

    function getStatus(): ?string
    {
        return $this->get('status');
    }

    function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    function getSentDate(): ?Carbon
    {
        return $this->getAsDateTime('sentDate');
    }

    function setSentDate(?\DateTime $value): self
    {
        $this->setAsDateTime('sentDate', $value);
        return $this;
    }

    function getValidUntilDate(): ?Carbon
    {
        return $this->getAsDate('validUntilDate');
    }

    function setValidUntilDate(?\DateTime $value): self
    {
        $this->setAsDate('validUntilDate', $value);
        return $this;
    }

    function getAcceptedDate(): ?Carbon
    {
        return $this->getAsDate('acceptedDate');
    }

    function setAcceptedDate(?\DateTime $value): self
    {
        $this->setAsDate('acceptedDate', $value);
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

    function getPhoneNumber(): ?string
    {
        return $this->get('phoneNumber');
    }

    function setPhoneNumber(?string $value): self
    {
        $this->set('phoneNumber', $value);
        return $this;
    }

    function getEmail(): ?string
    {
        return $this->get('email');
    }

    function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
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
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    /**
     * @return Entity\Collection|SalesQuoteLine\Record[]
     */
    function getSalesQuoteLines(): Entity\Collection
    {
        return $this->getAsCollection('salesQuoteLines');
    }

    function getPdfDocument(): ?PdfDocument\Record
    {
        return $this->get('pdfDocument');
    }

    /**
     * @return Entity\Collection|Attachment\Record[]
     */
    function getAttachments(): Entity\Collection
    {
        return $this->getAsCollection('attachments');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }

    function doSend(Client $client): void
    {
        $this->doAction('Microsoft.NAV.send', $client);
    }

    function doMakeInvoice(Client $client): void
    {
        $this->doAction('Microsoft.NAV.makeInvoice', $client);
    }

    function doMakeOrder(Client $client): void
    {
        $this->doAction('Microsoft.NAV.makeOrder', $client);
    }
}
