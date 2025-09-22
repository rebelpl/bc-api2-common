<?php
namespace Rebel\BCApi2\Entity\Vendor;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\AgedAccountsPayable;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\PaymentMethod;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\Picture;

class Record extends Entity
{
    protected $classMap = [
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'paymentMethod' => PaymentMethod\Record::class,
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'agedAccountsPayable' => AgedAccountsPayable\Record::class,
        'contactsInformation' => ContactInformation\Record::class,
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

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getAddressLine1(): ?string
    {
        return $this->get('addressLine1');
    }

    function setAddressLine1(?string $value): self
    {
        $this->set('addressLine1', $value);
        return $this;
    }

    function getAddressLine2(): ?string
    {
        return $this->get('addressLine2');
    }

    function setAddressLine2(?string $value): self
    {
        $this->set('addressLine2', $value);
        return $this;
    }

    function getCity(): ?string
    {
        return $this->get('city');
    }

    function setCity(?string $value): self
    {
        $this->set('city', $value);
        return $this;
    }

    function getState(): ?string
    {
        return $this->get('state');
    }

    function setState(?string $value): self
    {
        $this->set('state', $value);
        return $this;
    }

    function getCountry(): ?string
    {
        return $this->get('country');
    }

    function setCountry(?string $value): self
    {
        $this->set('country', $value);
        return $this;
    }

    function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    function setPostalCode(?string $value): self
    {
        $this->set('postalCode', $value);
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

    function getWebsite(): ?string
    {
        return $this->get('website');
    }

    function setWebsite(?string $value): self
    {
        $this->set('website', $value);
        return $this;
    }

    function getTaxRegistrationNumber(): ?string
    {
        return $this->get('taxRegistrationNumber');
    }

    function setTaxRegistrationNumber(?string $value): self
    {
        $this->set('taxRegistrationNumber', $value);
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

    function getIrs1099Code(): ?string
    {
        return $this->get('irs1099Code');
    }

    function setIrs1099Code(?string $value): self
    {
        $this->set('irs1099Code', $value);
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

    function getPaymentMethodId(): ?string
    {
        return $this->get('paymentMethodId');
    }

    function setPaymentMethodId(?string $value): self
    {
        $this->set('paymentMethodId', $value);
        return $this;
    }

    function getTaxLiable(): ?bool
    {
        return $this->get('taxLiable');
    }

    function setTaxLiable(?bool $value): self
    {
        $this->set('taxLiable', $value);
        return $this;
    }

    function getBlocked(): ?string
    {
        return $this->get('blocked');
    }

    function setBlocked(?string $value): self
    {
        $this->set('blocked', $value);
        return $this;
    }

    function getBalance(): ?float
    {
        return $this->get('balance');
    }

    function setBalance(?float $value): self
    {
        $this->set('balance', $value);
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

    function getCurrency(): ?Currency\Record
    {
        return $this->get('currency');
    }

    function getPaymentTerm(): ?PaymentTerm\Record
    {
        return $this->get('paymentTerm');
    }

    function getPaymentMethod(): ?PaymentMethod\Record
    {
        return $this->get('paymentMethod');
    }

    function getPicture(): ?Picture\Record
    {
        return $this->get('picture');
    }

    /**
     * @return Entity\Collection|DefaultDimension\Record[]
     */
    function getDefaultDimensions(): Entity\Collection
    {
        return $this->getAsCollection('defaultDimensions');
    }

    function getAgedAccountsPayable(): ?AgedAccountsPayable\Record
    {
        return $this->get('agedAccountsPayable');
    }

    /**
     * @return Entity\Collection|ContactInformation\Record[]
     */
    function getContactsInformation(): Entity\Collection
    {
        return $this->getAsCollection('contactsInformation');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
