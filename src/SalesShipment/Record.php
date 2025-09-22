<?php
namespace Rebel\BCApi2\Entity\SalesShipment;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\SalesShipmentLine;

class Record extends Entity
{
    protected $classMap = [
        'customer' => Customer\Record::class,
        'salesShipmentLines' => SalesShipmentLine\Record::class,
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

    function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
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

    function getCustomerPurchaseOrderReference(): ?string
    {
        return $this->get('customerPurchaseOrderReference');
    }

    function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    function getBillToCustomerId(): ?string
    {
        return $this->get('billToCustomerId');
    }

    function getBillToName(): ?string
    {
        return $this->get('billToName');
    }

    function getBillToCustomerNumber(): ?string
    {
        return $this->get('billToCustomerNumber');
    }

    function getShipToName(): ?string
    {
        return $this->get('shipToName');
    }

    function getShipToContact(): ?string
    {
        return $this->get('shipToContact');
    }

    function getSellToAddressLine1(): ?string
    {
        return $this->get('sellToAddressLine1');
    }

    function getSellToAddressLine2(): ?string
    {
        return $this->get('sellToAddressLine2');
    }

    function getSellToCity(): ?string
    {
        return $this->get('sellToCity');
    }

    function getSellToCountry(): ?string
    {
        return $this->get('sellToCountry');
    }

    function getSellToState(): ?string
    {
        return $this->get('sellToState');
    }

    function getSellToPostCode(): ?string
    {
        return $this->get('sellToPostCode');
    }

    function getBillToAddressLine1(): ?string
    {
        return $this->get('billToAddressLine1');
    }

    function getBillToAddressLine2(): ?string
    {
        return $this->get('billToAddressLine2');
    }

    function getBillToCity(): ?string
    {
        return $this->get('billToCity');
    }

    function getBillToCountry(): ?string
    {
        return $this->get('billToCountry');
    }

    function getBillToState(): ?string
    {
        return $this->get('billToState');
    }

    function getBillToPostCode(): ?string
    {
        return $this->get('billToPostCode');
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

    function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    function getOrderNumber(): ?string
    {
        return $this->get('orderNumber');
    }

    function getPaymentTermsCode(): ?string
    {
        return $this->get('paymentTermsCode');
    }

    function getShipmentMethodCode(): ?string
    {
        return $this->get('shipmentMethodCode');
    }

    function getSalesperson(): ?string
    {
        return $this->get('salesperson');
    }

    function getPricesIncludeTax(): ?bool
    {
        return $this->get('pricesIncludeTax');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function getPhoneNumber(): ?string
    {
        return $this->get('phoneNumber');
    }

    function getEmail(): ?string
    {
        return $this->get('email');
    }

    function getCustomer(): ?Customer\Record
    {
        return $this->get('customer');
    }

    /**
     * @return Entity\Collection|SalesShipmentLine\Record[]
     */
    function getSalesShipmentLines(): Entity\Collection
    {
        return $this->getAsCollection('salesShipmentLines');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
