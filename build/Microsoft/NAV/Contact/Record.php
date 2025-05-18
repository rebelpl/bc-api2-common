<?php
namespace Microsoft\NAV\Contact;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\ContactInformation;
use Microsoft\NAV\Picture;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::contactInformation->name => ContactInformation\Record::class,
            Properties::picture->name => Picture\Record::class,
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

    public function getType(): ?Enums\ContactType
    {
        return $this->getAsEnum(Properties::type->name, Enums\ContactType::class);
    }

    public function setType(?Enums\ContactType $value): self
    {
        $this->set(Properties::type->name, $value);
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

    public function getJobTitle(): ?string
    {
        return $this->get(Properties::jobTitle->name);
    }

    public function setJobTitle(?string $value): self
    {
        $this->set(Properties::jobTitle->name, $value);
        return $this;
    }

    public function getCompanyNumber(): ?string
    {
        return $this->get(Properties::companyNumber->name);
    }

    public function setCompanyNumber(?string $value): self
    {
        $this->set(Properties::companyNumber->name, $value);
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->get(Properties::companyName->name);
    }

    public function setCompanyName(?string $value): self
    {
        $this->set(Properties::companyName->name, $value);
        return $this;
    }

    public function getContactBusinessRelation(): ?Enums\ContactBusinessRelation
    {
        return $this->getAsEnum(Properties::contactBusinessRelation->name, Enums\ContactBusinessRelation::class);
    }

    public function setContactBusinessRelation(?Enums\ContactBusinessRelation $value): self
    {
        $this->set(Properties::contactBusinessRelation->name, $value);
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

    public function getMobilePhoneNumber(): ?string
    {
        return $this->get(Properties::mobilePhoneNumber->name);
    }

    public function setMobilePhoneNumber(?string $value): self
    {
        $this->set(Properties::mobilePhoneNumber->name, $value);
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

    public function getSearchName(): ?string
    {
        return $this->get(Properties::searchName->name);
    }

    public function setSearchName(?string $value): self
    {
        $this->set(Properties::searchName->name, $value);
        return $this;
    }

    public function isPrivacyBlocked(): ?bool
    {
        return $this->get(Properties::privacyBlocked->name);
    }

    public function setPrivacyBlocked(?bool $value): self
    {
        $this->set(Properties::privacyBlocked->name, $value);
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

    public function getLastInteractionDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::lastInteractionDate->name);
    }

    public function setLastInteractionDate(?\DateTime $value): self
    {
        $this->set(Properties::lastInteractionDate->name, $value);
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

    public function getContactInformation(): ?ContactInformation\Record
    {
        return $this->get(Properties::contactInformation->name);
    }

    public function getPicture(): ?Picture\Record
    {
        return $this->get(Properties::picture->name);
    }
}