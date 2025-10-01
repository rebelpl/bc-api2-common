<?php
namespace Rebel\BCApi2\Entity\SalesOrder;

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
use Rebel\BCApi2\Entity\SalesOrderLine;
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
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'salesOrderLines' => SalesOrderLine\Record::class,
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

    public function getOrderDate(): ?Carbon
    {
        return $this->getAsDate('orderDate');
    }

    public function setOrderDate(?\DateTime $value): self
    {
        $this->setAsDate('orderDate', $value);
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

    public function getPricesIncludeTax(): ?bool
    {
        return $this->get('pricesIncludeTax');
    }

    public function setPricesIncludeTax(?bool $value): self
    {
        $this->set('pricesIncludeTax', $value);
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

    public function getPartialShipping(): ?bool
    {
        return $this->get('partialShipping');
    }

    public function setPartialShipping(?bool $value): self
    {
        $this->set('partialShipping', $value);
        return $this;
    }

    public function getRequestedDeliveryDate(): ?Carbon
    {
        return $this->getAsDate('requestedDeliveryDate');
    }

    public function setRequestedDeliveryDate(?\DateTime $value): self
    {
        $this->setAsDate('requestedDeliveryDate', $value);
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

    public function getFullyShipped(): ?bool
    {
        return $this->get('fullyShipped');
    }

    public function setFullyShipped(?bool $value): self
    {
        $this->set('fullyShipped', $value);
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

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }

    /**
     * @return Entity\Collection|SalesOrderLine\Record[]
     */
    public function getSalesOrderLines(): Entity\Collection
    {
        return $this->getAsCollection('salesOrderLines');
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

    public function doShipAndInvoice(Client $client): void
    {
        $this->doAction('Microsoft.NAV.shipAndInvoice', $client);
    }
}
