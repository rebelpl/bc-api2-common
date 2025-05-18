<?php
namespace Microsoft\NAV\Employee;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Picture;
use Microsoft\NAV\DefaultDimension;
use Microsoft\NAV\TimeRegistrationEntry;
use Microsoft\NAV\DocumentAttachment;
use Microsoft\NAV\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::picture->name => Picture\Record::class,
            Properties::defaultDimensions->name => DefaultDimension\Record::class,
            Properties::timeRegistrationEntries->name => TimeRegistrationEntry\Record::class,
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

    public function getGivenName(): ?string
    {
        return $this->get(Properties::givenName->name);
    }

    public function setGivenName(?string $value): self
    {
        $this->set(Properties::givenName->name, $value);
        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->get(Properties::middleName->name);
    }

    public function setMiddleName(?string $value): self
    {
        $this->set(Properties::middleName->name, $value);
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->get(Properties::surname->name);
    }

    public function setSurname(?string $value): self
    {
        $this->set(Properties::surname->name, $value);
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

    public function getMobilePhone(): ?string
    {
        return $this->get(Properties::mobilePhone->name);
    }

    public function setMobilePhone(?string $value): self
    {
        $this->set(Properties::mobilePhone->name, $value);
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

    public function getPersonalEmail(): ?string
    {
        return $this->get(Properties::personalEmail->name);
    }

    public function setPersonalEmail(?string $value): self
    {
        $this->set(Properties::personalEmail->name, $value);
        return $this;
    }

    public function getEmploymentDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::employmentDate->name);
    }

    public function setEmploymentDate(?\DateTime $value): self
    {
        $this->set(Properties::employmentDate->name, $value);
        return $this;
    }

    public function getTerminationDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::terminationDate->name);
    }

    public function setTerminationDate(?\DateTime $value): self
    {
        $this->set(Properties::terminationDate->name, $value);
        return $this;
    }

    public function getStatus(): ?Enums\EmployeeStatus
    {
        return $this->getAsEnum(Properties::status->name, Enums\EmployeeStatus::class);
    }

    public function setStatus(?Enums\EmployeeStatus $value): self
    {
        $this->set(Properties::status->name, $value);
        return $this;
    }

    public function getBirthDate(): ?\DateTime
    {
        return $this->getAsDate(Properties::birthDate->name);
    }

    public function setBirthDate(?\DateTime $value): self
    {
        $this->set(Properties::birthDate->name, $value);
        return $this;
    }

    public function getStatisticsGroupCode(): ?string
    {
        return $this->get(Properties::statisticsGroupCode->name);
    }

    public function setStatisticsGroupCode(?string $value): self
    {
        $this->set(Properties::statisticsGroupCode->name, $value);
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

    /**
     * @return Entity\Collection<TimeRegistrationEntry\Record>
     */
    public function getTimeRegistrationEntries(): Entity\Collection
    {
        return $this->get(Properties::timeRegistrationEntries->name) ?? new Entity\Collection();
    }

    /**
     * @return Entity\Collection<DocumentAttachment\Record>
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->get(Properties::documentAttachments->name) ?? new Entity\Collection();
    }
}