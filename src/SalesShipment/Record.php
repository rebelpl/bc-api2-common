<?php
namespace Rebel\BCApi2\Entity\SalesShipment;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\SalesShipmentLine;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'customer' => Customer\Record::class,
        'salesShipmentLines' => SalesShipmentLine\Record::class,
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

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get('externalDocumentNumber');
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

    public function getCustomerPurchaseOrderReference(): ?string
    {
        return $this->get('customerPurchaseOrderReference');
    }

    public function getCustomerId(): ?string
    {
        return $this->get('customerId');
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get('customerNumber');
    }

    public function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    public function getBillToCustomerId(): ?string
    {
        return $this->get('billToCustomerId');
    }

    public function getBillToName(): ?string
    {
        return $this->get('billToName');
    }

    public function getBillToCustomerNumber(): ?string
    {
        return $this->get('billToCustomerNumber');
    }

    public function getShipToName(): ?string
    {
        return $this->get('shipToName');
    }

    public function getShipToContact(): ?string
    {
        return $this->get('shipToContact');
    }

    public function getSellToAddressLine1(): ?string
    {
        return $this->get('sellToAddressLine1');
    }

    public function getSellToAddressLine2(): ?string
    {
        return $this->get('sellToAddressLine2');
    }

    public function getSellToCity(): ?string
    {
        return $this->get('sellToCity');
    }

    public function getSellToCountry(): ?string
    {
        return $this->get('sellToCountry');
    }

    public function getSellToState(): ?string
    {
        return $this->get('sellToState');
    }

    public function getSellToPostCode(): ?string
    {
        return $this->get('sellToPostCode');
    }

    public function getBillToAddressLine1(): ?string
    {
        return $this->get('billToAddressLine1');
    }

    public function getBillToAddressLine2(): ?string
    {
        return $this->get('billToAddressLine2');
    }

    public function getBillToCity(): ?string
    {
        return $this->get('billToCity');
    }

    public function getBillToCountry(): ?string
    {
        return $this->get('billToCountry');
    }

    public function getBillToState(): ?string
    {
        return $this->get('billToState');
    }

    public function getBillToPostCode(): ?string
    {
        return $this->get('billToPostCode');
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

    public function getCurrencyCode(): ?string
    {
        return $this->get('currencyCode');
    }

    public function getOrderNumber(): ?string
    {
        return $this->get('orderNumber');
    }

    public function getPaymentTermsCode(): ?string
    {
        return $this->get('paymentTermsCode');
    }

    public function getShipmentMethodCode(): ?string
    {
        return $this->get('shipmentMethodCode');
    }

    public function getSalesperson(): ?string
    {
        return $this->get('salesperson');
    }

    public function getPricesIncludeTax(): ?bool
    {
        return $this->get('pricesIncludeTax');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function getPhoneNumber(): ?string
    {
        return $this->get('phoneNumber');
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->getAsRelation('customer');
    }

    /**
     * @return Entity\Collection|SalesShipmentLine\Record[]
     */
    public function getSalesShipmentLines(): Entity\Collection
    {
        return $this->getAsCollection('salesShipmentLines');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
