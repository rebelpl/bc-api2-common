<?php
namespace Rebel\BCApi2\Entity\Employee;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\TimeRegistrationEntry;

class Record extends Entity
{
    protected $classMap = [
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'timeRegistrationEntries' => TimeRegistrationEntry\Record::class,
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

    function getGivenName(): ?string
    {
        return $this->get('givenName');
    }

    function setGivenName(?string $value): self
    {
        $this->set('givenName', $value);
        return $this;
    }

    function getMiddleName(): ?string
    {
        return $this->get('middleName');
    }

    function setMiddleName(?string $value): self
    {
        $this->set('middleName', $value);
        return $this;
    }

    function getSurname(): ?string
    {
        return $this->get('surname');
    }

    function setSurname(?string $value): self
    {
        $this->set('surname', $value);
        return $this;
    }

    function getJobTitle(): ?string
    {
        return $this->get('jobTitle');
    }

    function setJobTitle(?string $value): self
    {
        $this->set('jobTitle', $value);
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

    function getMobilePhone(): ?string
    {
        return $this->get('mobilePhone');
    }

    function setMobilePhone(?string $value): self
    {
        $this->set('mobilePhone', $value);
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

    function getPersonalEmail(): ?string
    {
        return $this->get('personalEmail');
    }

    function setPersonalEmail(?string $value): self
    {
        $this->set('personalEmail', $value);
        return $this;
    }

    function getEmploymentDate(): ?Carbon
    {
        return $this->getAsDate('employmentDate');
    }

    function setEmploymentDate(?\DateTime $value): self
    {
        $this->setAsDate('employmentDate', $value);
        return $this;
    }

    function getTerminationDate(): ?Carbon
    {
        return $this->getAsDate('terminationDate');
    }

    function setTerminationDate(?\DateTime $value): self
    {
        $this->setAsDate('terminationDate', $value);
        return $this;
    }

    function getStatus(): ?string
    {
        return $this->get('status');
    }

    function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    function getBirthDate(): ?Carbon
    {
        return $this->getAsDate('birthDate');
    }

    function setBirthDate(?\DateTime $value): self
    {
        $this->setAsDate('birthDate', $value);
        return $this;
    }

    function getStatisticsGroupCode(): ?string
    {
        return $this->get('statisticsGroupCode');
    }

    function setStatisticsGroupCode(?string $value): self
    {
        $this->set('statisticsGroupCode', $value);
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

    /**
     * @return Entity\Collection|TimeRegistrationEntry\Record[]
     */
    function getTimeRegistrationEntries(): Entity\Collection
    {
        return $this->getAsCollection('timeRegistrationEntries');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
