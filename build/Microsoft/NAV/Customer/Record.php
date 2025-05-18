<?php
namespace Microsoft\NAV\Customer;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Currency;
use Microsoft\NAV\PaymentTerm;
use Microsoft\NAV\ShipmentMethod;
use Microsoft\NAV\PaymentMethod;
use Microsoft\NAV\CustomerFinancialDetail;
use Microsoft\NAV\Picture;
use Microsoft\NAV\DefaultDimension;
use Microsoft\NAV\AgedAccountsReceivable;
use Microsoft\NAV\ContactInformation;
use Microsoft\NAV\DocumentAttachment;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::currency->name => Currency\Record::class,
            Properties::paymentTerm->name => PaymentTerm\Record::class,
            Properties::shipmentMethod->name => ShipmentMethod\Record::class,
            Properties::paymentMethod->name => PaymentMethod\Record::class,
            Properties::customerFinancialDetail->name => CustomerFinancialDetail\Record::class,
            Properties::picture->name => Picture\Record::class,
            Properties::defaultDimensions->name => DefaultDimension\Record::class,
            Properties::agedAccountsReceivable->name => AgedAccountsReceivable\Record::class,
            Properties::contactsInformation->name => ContactInformation\Record::class,
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

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getType(): ?Enums\ContactType
    {
        return $this->getAsEnum(Properties::type->name, Enums\ContactType::class);
    }

    public function setType(?Enums\ContactType $value): self
    {
        $this->set(Properties::type->name, $value);
        return $this;
    }

    public function getAddressLine1(): ?string
    {
        return $this->get(Properties::addressLine1->name);
    }

    public function setAddressLine1(?string $value): self
    {
        $this->set(Properties::addressLine1->name, $value);
        return $this;
    }

    public function getAddressLine2(): ?string
    {
        return $this->get(Properties::addressLine2->name);
    }

    public function setAddressLine2(?string $value): self
    {
        $this->set(Properties::addressLine2->name, $value);
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->get(Properties::city->name);
    }

    public function setCity(?string $value): self
    {
        $this->set(Properties::city->name, $value);
        return $this;
    }

    public function getState(): ?string
    {
        return $this->get(Properties::state->name);
    }

    public function setState(?string $value): self
    {
        $this->set(Properties::state->name, $value);
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->get(Properties::country->name);
    }

    public function setCountry(?string $value): self
    {
        $this->set(Properties::country->name, $value);
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->get(Properties::postalCode->name);
    }

    public function setPostalCode(?string $value): self
    {
        $this->set(Properties::postalCode->name, $value);
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

    public function getWebsite(): ?string
    {
        return $this->get(Properties::website->name);
    }

    public function setWebsite(?string $value): self
    {
        $this->set(Properties::website->name, $value);
        return $this;
    }

    public function getSalespersonCode(): ?string
    {
        return $this->get(Properties::salespersonCode->name);
    }

    public function setSalespersonCode(?string $value): self
    {
        $this->set(Properties::salespersonCode->name, $value);
        return $this;
    }

    public function getBalanceDue(): ?float
    {
        return $this->get(Properties::balanceDue->name);
    }

    public function setBalanceDue(?float $value): self
    {
        $this->set(Properties::balanceDue->name, $value);
        return $this;
    }

    public function getCreditLimit(): ?float
    {
        return $this->get(Properties::creditLimit->name);
    }

    public function setCreditLimit(?float $value): self
    {
        $this->set(Properties::creditLimit->name, $value);
        return $this;
    }

    public function isTaxLiable(): ?bool
    {
        return $this->get(Properties::taxLiable->name);
    }

    public function setTaxLiable(?bool $value): self
    {
        $this->set(Properties::taxLiable->name, $value);
        return $this;
    }

    public function getTaxAreaId(): ?string
    {
        return $this->get(Properties::taxAreaId->name);
    }

    public function setTaxAreaId(?string $value): self
    {
        $this->set(Properties::taxAreaId->name, $value);
        return $this;
    }

    public function getTaxAreaDisplayName(): ?string
    {
        return $this->get(Properties::taxAreaDisplayName->name);
    }

    public function setTaxAreaDisplayName(?string $value): self
    {
        $this->set(Properties::taxAreaDisplayName->name, $value);
        return $this;
    }

    public function getTaxRegistrationNumber(): ?string
    {
        return $this->get(Properties::taxRegistrationNumber->name);
    }

    public function setTaxRegistrationNumber(?string $value): self
    {
        $this->set(Properties::taxRegistrationNumber->name, $value);
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

    public function getPaymentMethodId(): ?string
    {
        return $this->get(Properties::paymentMethodId->name);
    }

    public function setPaymentMethodId(?string $value): self
    {
        $this->set(Properties::paymentMethodId->name, $value);
        return $this;
    }

    public function getBlocked(): ?Enums\CustomerBlocked
    {
        return $this->getAsEnum(Properties::blocked->name, Enums\CustomerBlocked::class);
    }

    public function setBlocked(?Enums\CustomerBlocked $value): self
    {
        $this->set(Properties::blocked->name, $value);
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

    public function getPaymentMethod(): ?PaymentMethod\Record
    {
        return $this->get(Properties::paymentMethod->name);
    }

    public function getCustomerFinancialDetail(): ?CustomerFinancialDetail\Record
    {
        return $this->get(Properties::customerFinancialDetail->name);
    }

    public function getPicture(): ?Picture\Record
    {
        return $this->get(Properties::picture->name);
    }

    /**
     * @return Entity\Collection<DefaultDimension\Record>
     */
    public function getDefaultDimensions(): Entity\Collection
    {
        return $this->get(Properties::defaultDimensions->name) ?? new Entity\Collection();
    }

    public function getAgedAccountsReceivable(): ?AgedAccountsReceivable\Record
    {
        return $this->get(Properties::agedAccountsReceivable->name);
    }

    /**
     * @return Entity\Collection<ContactInformation\Record>
     */
    public function getContactsInformation(): Entity\Collection
    {
        return $this->get(Properties::contactsInformation->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DocumentAttachment\Record>
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->get(Properties::documentAttachments->name) ?? new Entity\Collection();
    }
}