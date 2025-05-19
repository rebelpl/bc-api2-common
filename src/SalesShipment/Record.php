<?php
namespace Rebel\BCApi2\Entity\SalesShipment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\SalesShipmentLine;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::customer->name => Customer\Record::class,
            Properties::salesShipmentLines->name => SalesShipmentLine\Record::class,
            Properties::dimensionSetLines->name => DimensionSetLine\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
    }

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get(Properties::externalDocumentNumber->name);
    }

    public function getInvoiceDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::invoiceDate->name);
    }

    public function getPostingDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::postingDate->name);
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::dueDate->name);
    }

    public function getCustomerPurchaseOrderReference(): ?string
    {
        return $this->get(Properties::customerPurchaseOrderReference->name);
    }

    public function getCustomerId(): ?string
    {
        return $this->get(Properties::customerId->name);
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get(Properties::customerNumber->name);
    }

    public function getCustomerName(): ?string
    {
        return $this->get(Properties::customerName->name);
    }

    public function getBillToCustomerId(): ?string
    {
        return $this->get(Properties::billToCustomerId->name);
    }

    public function getBillToName(): ?string
    {
        return $this->get(Properties::billToName->name);
    }

    public function getBillToCustomerNumber(): ?string
    {
        return $this->get(Properties::billToCustomerNumber->name);
    }

    public function getShipToName(): ?string
    {
        return $this->get(Properties::shipToName->name);
    }

    public function getShipToContact(): ?string
    {
        return $this->get(Properties::shipToContact->name);
    }

    public function getSellToAddressLine1(): ?string
    {
        return $this->get(Properties::sellToAddressLine1->name);
    }

    public function getSellToAddressLine2(): ?string
    {
        return $this->get(Properties::sellToAddressLine2->name);
    }

    public function getSellToCity(): ?string
    {
        return $this->get(Properties::sellToCity->name);
    }

    public function getSellToCountry(): ?string
    {
        return $this->get(Properties::sellToCountry->name);
    }

    public function getSellToState(): ?string
    {
        return $this->get(Properties::sellToState->name);
    }

    public function getSellToPostCode(): ?string
    {
        return $this->get(Properties::sellToPostCode->name);
    }

    public function getBillToAddressLine1(): ?string
    {
        return $this->get(Properties::billToAddressLine1->name);
    }

    public function getBillToAddressLine2(): ?string
    {
        return $this->get(Properties::billToAddressLine2->name);
    }

    public function getBillToCity(): ?string
    {
        return $this->get(Properties::billToCity->name);
    }

    public function getBillToCountry(): ?string
    {
        return $this->get(Properties::billToCountry->name);
    }

    public function getBillToState(): ?string
    {
        return $this->get(Properties::billToState->name);
    }

    public function getBillToPostCode(): ?string
    {
        return $this->get(Properties::billToPostCode->name);
    }

    public function getShipToAddressLine1(): ?string
    {
        return $this->get(Properties::shipToAddressLine1->name);
    }

    public function getShipToAddressLine2(): ?string
    {
        return $this->get(Properties::shipToAddressLine2->name);
    }

    public function getShipToCity(): ?string
    {
        return $this->get(Properties::shipToCity->name);
    }

    public function getShipToCountry(): ?string
    {
        return $this->get(Properties::shipToCountry->name);
    }

    public function getShipToState(): ?string
    {
        return $this->get(Properties::shipToState->name);
    }

    public function getShipToPostCode(): ?string
    {
        return $this->get(Properties::shipToPostCode->name);
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function getOrderNumber(): ?string
    {
        return $this->get(Properties::orderNumber->name);
    }

    public function getPaymentTermsCode(): ?string
    {
        return $this->get(Properties::paymentTermsCode->name);
    }

    public function getShipmentMethodCode(): ?string
    {
        return $this->get(Properties::shipmentMethodCode->name);
    }

    public function getSalesperson(): ?string
    {
        return $this->get(Properties::salesperson->name);
    }

    public function isPricesIncludeTax(): ?bool
    {
        return $this->get(Properties::pricesIncludeTax->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function getPhoneNumber(): ?string
    {
        return $this->get(Properties::phoneNumber->name);
    }

    public function getEmail(): ?string
    {
        return $this->get(Properties::email->name);
    }

    public function getCustomer(): ?Customer\Record
    {
        return $this->get(Properties::customer->name);
    }

    /**
     * @return Entity\Collection<SalesShipmentLine\Record>
     */
    public function getSalesShipmentLines(): Entity\Collection
    {
        return $this->get(Properties::salesShipmentLines->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}