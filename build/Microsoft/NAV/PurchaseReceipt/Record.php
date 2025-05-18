<?php
namespace Microsoft\NAV\PurchaseReceipt;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\PurchaseReceiptLine;
use Microsoft\NAV\DimensionSetLine;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::purchaseReceiptLines->name => PurchaseReceiptLine\Record::class,
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

    public function getPayToName(): ?string
    {
        return $this->get(Properties::payToName->name);
    }

    public function setPayToName(?string $value): self
    {
        $this->set(Properties::payToName->name, $value);
        return $this;
    }

    public function getPayToContact(): ?string
    {
        return $this->get(Properties::payToContact->name);
    }

    public function setPayToContact(?string $value): self
    {
        $this->set(Properties::payToContact->name, $value);
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

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    /**
     * @return Entity\Collection<PurchaseReceiptLine\Record>
     */
    public function getPurchaseReceiptLines(): Entity\Collection
    {
        return $this->get(Properties::purchaseReceiptLines->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DimensionSetLine\Record>
     */
    public function getDimensionSetLines(): Entity\Collection
    {
        return $this->get(Properties::dimensionSetLines->name) ?? new Entity\Collection();
    }
}