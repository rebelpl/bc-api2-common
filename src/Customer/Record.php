<?php
namespace Rebel\BCApi2\Entity\Customer;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\AgedAccountsReceivable;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\CustomerFinancialDetail;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PaymentMethod;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\ShipmentMethod;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'shipmentMethod' => ShipmentMethod\Record::class,
        'paymentMethod' => PaymentMethod\Record::class,
        'customerFinancialDetail' => CustomerFinancialDetail\Record::class,
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'agedAccountsReceivable' => AgedAccountsReceivable\Record::class,
        'contactsInformation' => ContactInformation\Record::class,
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

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function setType(?string $value): self
    {
        $this->set('type', $value);
        return $this;
    }

    public function getAddressLine1(): ?string
    {
        return $this->get('addressLine1');
    }

    public function setAddressLine1(?string $value): self
    {
        $this->set('addressLine1', $value);
        return $this;
    }

    public function getAddressLine2(): ?string
    {
        return $this->get('addressLine2');
    }

    public function setAddressLine2(?string $value): self
    {
        $this->set('addressLine2', $value);
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function setCity(?string $value): self
    {
        $this->set('city', $value);
        return $this;
    }

    public function getState(): ?string
    {
        return $this->get('state');
    }

    public function setState(?string $value): self
    {
        $this->set('state', $value);
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->get('country');
    }

    public function setCountry(?string $value): self
    {
        $this->set('country', $value);
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    public function setPostalCode(?string $value): self
    {
        $this->set('postalCode', $value);
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

    public function getWebsite(): ?string
    {
        return $this->get('website');
    }

    public function setWebsite(?string $value): self
    {
        $this->set('website', $value);
        return $this;
    }

    public function getSalespersonCode(): ?string
    {
        return $this->get('salespersonCode');
    }

    public function setSalespersonCode(?string $value): self
    {
        $this->set('salespersonCode', $value);
        return $this;
    }

    public function getBalanceDue(): ?float
    {
        return $this->get('balanceDue');
    }

    public function setBalanceDue(?float $value): self
    {
        $this->set('balanceDue', $value);
        return $this;
    }

    public function getCreditLimit(): ?float
    {
        return $this->get('creditLimit');
    }

    public function setCreditLimit(?float $value): self
    {
        $this->set('creditLimit', $value);
        return $this;
    }

    public function getTaxLiable(): ?bool
    {
        return $this->get('taxLiable');
    }

    public function setTaxLiable(?bool $value): self
    {
        $this->set('taxLiable', $value);
        return $this;
    }

    public function getTaxAreaId(): ?string
    {
        return $this->get('taxAreaId');
    }

    public function setTaxAreaId(?string $value): self
    {
        $this->set('taxAreaId', $value);
        return $this;
    }

    public function getTaxAreaDisplayName(): ?string
    {
        return $this->get('taxAreaDisplayName');
    }

    public function setTaxAreaDisplayName(?string $value): self
    {
        $this->set('taxAreaDisplayName', $value);
        return $this;
    }

    public function getTaxRegistrationNumber(): ?string
    {
        return $this->get('taxRegistrationNumber');
    }

    public function setTaxRegistrationNumber(?string $value): self
    {
        $this->set('taxRegistrationNumber', $value);
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

    public function getPaymentMethodId(): ?string
    {
        return $this->get('paymentMethodId');
    }

    public function setPaymentMethodId(?string $value): self
    {
        $this->set('paymentMethodId', $value);
        return $this;
    }

    public function getBlocked(): ?string
    {
        return $this->get('blocked');
    }

    public function setBlocked(?string $value): self
    {
        $this->set('blocked', $value);
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

    public function getPaymentMethod(): ?PaymentMethod\Record
    {
        return $this->getAsRelation('paymentMethod');
    }

    public function getCustomerFinancialDetail(): ?CustomerFinancialDetail\Record
    {
        return $this->getAsRelation('customerFinancialDetail');
    }

    public function getPicture(): ?Picture\Record
    {
        return $this->getAsRelation('picture');
    }

    /**
     * @return Entity\Collection|DefaultDimension\Record[]
     */
    public function getDefaultDimensions(): Entity\Collection
    {
        return $this->getAsCollection('defaultDimensions');
    }

    public function getAgedAccountsReceivable(): ?AgedAccountsReceivable\Record
    {
        return $this->getAsRelation('agedAccountsReceivable');
    }

    /**
     * @return Entity\Collection|ContactInformation\Record[]
     */
    public function getContactsInformation(): Entity\Collection
    {
        return $this->getAsCollection('contactsInformation');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
