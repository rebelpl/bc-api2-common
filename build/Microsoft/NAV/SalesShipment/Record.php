<?php
namespace Microsoft\NAV\SalesShipment;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Customer;
use Microsoft\NAV\SalesShipmentLine;
use Microsoft\NAV\DimensionSetLine;

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

    public function getExternalDocumentNumber(): ?string
    {
        return $this->get(Properties::externalDocumentNumber->name);
    }

    public function setExternalDocumentNumber(?string $value): self
    {
        $this->set(Properties::externalDocumentNumber->name, $value);
        return $this;
    }

    public function getInvoiceDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::invoiceDate->name);
    }

    public function setInvoiceDate(?\DateTime $value): self
    {
        $this->set(Properties::invoiceDate->name, $value);
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

    public function getCustomerPurchaseOrderReference(): ?string
    {
        return $this->get(Properties::customerPurchaseOrderReference->name);
    }

    public function setCustomerPurchaseOrderReference(?string $value): self
    {
        $this->set(Properties::customerPurchaseOrderReference->name, $value);
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->get(Properties::customerId->name);
    }

    public function setCustomerId(?string $value): self
    {
        $this->set(Properties::customerId->name, $value);
        return $this;
    }

    public function getCustomerNumber(): ?string
    {
        return $this->get(Properties::customerNumber->name);
    }

    public function setCustomerNumber(?string $value): self
    {
        $this->set(Properties::customerNumber->name, $value);
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->get(Properties::customerName->name);
    }

    public function setCustomerName(?string $value): self
    {
        $this->set(Properties::customerName->name, $value);
        return $this;
    }

    public function getBillToCustomerId(): ?string
    {
        return $this->get(Properties::billToCustomerId->name);
    }

    public function setBillToCustomerId(?string $value): self
    {
        $this->set(Properties::billToCustomerId->name, $value);
        return $this;
    }

    public function getBillToName(): ?string
    {
        return $this->get(Properties::billToName->name);
    }

    public function setBillToName(?string $value): self
    {
        $this->set(Properties::billToName->name, $value);
        return $this;
    }

    public function getBillToCustomerNumber(): ?string
    {
        return $this->get(Properties::billToCustomerNumber->name);
    }

    public function setBillToCustomerNumber(?string $value): self
    {
        $this->set(Properties::billToCustomerNumber->name, $value);
        return $this;
    }

    public function getShipToName(): ?string
    {
        return $this->get(Properties::shipToName->name);
    }

    public function setShipToName(?string $value): self
    {
        $this->set(Properties::shipToName->name, $value);
        return $this;
    }

    public function getShipToContact(): ?string
    {
        return $this->get(Properties::shipToContact->name);
    }

    public function setShipToContact(?string $value): self
    {
        $this->set(Properties::shipToContact->name, $value);
        return $this;
    }

    public function getSellToAddressLine1(): ?string
    {
        return $this->get(Properties::sellToAddressLine1->name);
    }

    public function setSellToAddressLine1(?string $value): self
    {
        $this->set(Properties::sellToAddressLine1->name, $value);
        return $this;
    }

    public function getSellToAddressLine2(): ?string
    {
        return $this->get(Properties::sellToAddressLine2->name);
    }

    public function setSellToAddressLine2(?string $value): self
    {
        $this->set(Properties::sellToAddressLine2->name, $value);
        return $this;
    }

    public function getSellToCity(): ?string
    {
        return $this->get(Properties::sellToCity->name);
    }

    public function setSellToCity(?string $value): self
    {
        $this->set(Properties::sellToCity->name, $value);
        return $this;
    }

    public function getSellToCountry(): ?string
    {
        return $this->get(Properties::sellToCountry->name);
    }

    public function setSellToCountry(?string $value): self
    {
        $this->set(Properties::sellToCountry->name, $value);
        return $this;
    }

    public function getSellToState(): ?string
    {
        return $this->get(Properties::sellToState->name);
    }

    public function setSellToState(?string $value): self
    {
        $this->set(Properties::sellToState->name, $value);
        return $this;
    }

    public function getSellToPostCode(): ?string
    {
        return $this->get(Properties::sellToPostCode->name);
    }

    public function setSellToPostCode(?string $value): self
    {
        $this->set(Properties::sellToPostCode->name, $value);
        return $this;
    }

    public function getBillToAddressLine1(): ?string
    {
        return $this->get(Properties::billToAddressLine1->name);
    }

    public function setBillToAddressLine1(?string $value): self
    {
        $this->set(Properties::billToAddressLine1->name, $value);
        return $this;
    }

    public function getBillToAddressLine2(): ?string
    {
        return $this->get(Properties::billToAddressLine2->name);
    }

    public function setBillToAddressLine2(?string $value): self
    {
        $this->set(Properties::billToAddressLine2->name, $value);
        return $this;
    }

    public function getBillToCity(): ?string
    {
        return $this->get(Properties::billToCity->name);
    }

    public function setBillToCity(?string $value): self
    {
        $this->set(Properties::billToCity->name, $value);
        return $this;
    }

    public function getBillToCountry(): ?string
    {
        return $this->get(Properties::billToCountry->name);
    }

    public function setBillToCountry(?string $value): self
    {
        $this->set(Properties::billToCountry->name, $value);
        return $this;
    }

    public function getBillToState(): ?string
    {
        return $this->get(Properties::billToState->name);
    }

    public function setBillToState(?string $value): self
    {
        $this->set(Properties::billToState->name, $value);
        return $this;
    }

    public function getBillToPostCode(): ?string
    {
        return $this->get(Properties::billToPostCode->name);
    }

    public function setBillToPostCode(?string $value): self
    {
        $this->set(Properties::billToPostCode->name, $value);
        return $this;
    }

    public function getShipToAddressLine1(): ?string
    {
        return $this->get(Properties::shipToAddressLine1->name);
    }

    public function setShipToAddressLine1(?string $value): self
    {
        $this->set(Properties::shipToAddressLine1->name, $value);
        return $this;
    }

    public function getShipToAddressLine2(): ?string
    {
        return $this->get(Properties::shipToAddressLine2->name);
    }

    public function setShipToAddressLine2(?string $value): self
    {
        $this->set(Properties::shipToAddressLine2->name, $value);
        return $this;
    }

    public function getShipToCity(): ?string
    {
        return $this->get(Properties::shipToCity->name);
    }

    public function setShipToCity(?string $value): self
    {
        $this->set(Properties::shipToCity->name, $value);
        return $this;
    }

    public function getShipToCountry(): ?string
    {
        return $this->get(Properties::shipToCountry->name);
    }

    public function setShipToCountry(?string $value): self
    {
        $this->set(Properties::shipToCountry->name, $value);
        return $this;
    }

    public function getShipToState(): ?string
    {
        return $this->get(Properties::shipToState->name);
    }

    public function setShipToState(?string $value): self
    {
        $this->set(Properties::shipToState->name, $value);
        return $this;
    }

    public function getShipToPostCode(): ?string
    {
        return $this->get(Properties::shipToPostCode->name);
    }

    public function setShipToPostCode(?string $value): self
    {
        $this->set(Properties::shipToPostCode->name, $value);
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

    public function getOrderNumber(): ?string
    {
        return $this->get(Properties::orderNumber->name);
    }

    public function setOrderNumber(?string $value): self
    {
        $this->set(Properties::orderNumber->name, $value);
        return $this;
    }

    public function getPaymentTermsCode(): ?string
    {
        return $this->get(Properties::paymentTermsCode->name);
    }

    public function setPaymentTermsCode(?string $value): self
    {
        $this->set(Properties::paymentTermsCode->name, $value);
        return $this;
    }

    public function getShipmentMethodCode(): ?string
    {
        return $this->get(Properties::shipmentMethodCode->name);
    }

    public function setShipmentMethodCode(?string $value): self
    {
        $this->set(Properties::shipmentMethodCode->name, $value);
        return $this;
    }

    public function getSalesperson(): ?string
    {
        return $this->get(Properties::salesperson->name);
    }

    public function setSalesperson(?string $value): self
    {
        $this->set(Properties::salesperson->name, $value);
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

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->get(Properties::phoneNumber->name);
    }

    public function setPhoneNumber(?string $value): self
    {
        $this->set(Properties::phoneNumber->name, $value);
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->get(Properties::email->name);
    }

    public function setEmail(?string $value): self
    {
        $this->set(Properties::email->name, $value);
        return $this;
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