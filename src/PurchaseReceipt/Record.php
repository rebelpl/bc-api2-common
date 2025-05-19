<?php
namespace Rebel\BCApi2\Entity\PurchaseReceipt;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\PurchaseReceiptLine;
use Rebel\BCApi2\Entity\DimensionSetLine;

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

    public function getNumber(): ?string
    {
        return $this->get(Properties::number->name);
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

    public function getVendorNumber(): ?string
    {
        return $this->get(Properties::vendorNumber->name);
    }

    public function getVendorName(): ?string
    {
        return $this->get(Properties::vendorName->name);
    }

    public function getPayToName(): ?string
    {
        return $this->get(Properties::payToName->name);
    }

    public function getPayToContact(): ?string
    {
        return $this->get(Properties::payToContact->name);
    }

    public function getPayToVendorNumber(): ?string
    {
        return $this->get(Properties::payToVendorNumber->name);
    }

    public function getShipToName(): ?string
    {
        return $this->get(Properties::shipToName->name);
    }

    public function getShipToContact(): ?string
    {
        return $this->get(Properties::shipToContact->name);
    }

    public function getBuyFromAddressLine1(): ?string
    {
        return $this->get(Properties::buyFromAddressLine1->name);
    }

    public function getBuyFromAddressLine2(): ?string
    {
        return $this->get(Properties::buyFromAddressLine2->name);
    }

    public function getBuyFromCity(): ?string
    {
        return $this->get(Properties::buyFromCity->name);
    }

    public function getBuyFromCountry(): ?string
    {
        return $this->get(Properties::buyFromCountry->name);
    }

    public function getBuyFromState(): ?string
    {
        return $this->get(Properties::buyFromState->name);
    }

    public function getBuyFromPostCode(): ?string
    {
        return $this->get(Properties::buyFromPostCode->name);
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

    public function getPayToAddressLine1(): ?string
    {
        return $this->get(Properties::payToAddressLine1->name);
    }

    public function getPayToAddressLine2(): ?string
    {
        return $this->get(Properties::payToAddressLine2->name);
    }

    public function getPayToCity(): ?string
    {
        return $this->get(Properties::payToCity->name);
    }

    public function getPayToCountry(): ?string
    {
        return $this->get(Properties::payToCountry->name);
    }

    public function getPayToState(): ?string
    {
        return $this->get(Properties::payToState->name);
    }

    public function getPayToPostCode(): ?string
    {
        return $this->get(Properties::payToPostCode->name);
    }

    public function getCurrencyCode(): ?string
    {
        return $this->get(Properties::currencyCode->name);
    }

    public function getOrderNumber(): ?string
    {
        return $this->get(Properties::orderNumber->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
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