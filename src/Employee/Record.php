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
    protected $primaryKey = 'id';

    protected $classMap = [
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'timeRegistrationEntries' => TimeRegistrationEntry\Record::class,
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

    public function getGivenName(): ?string
    {
        return $this->get('givenName');
    }

    public function setGivenName(?string $value): self
    {
        $this->set('givenName', $value);
        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->get('middleName');
    }

    public function setMiddleName(?string $value): self
    {
        $this->set('middleName', $value);
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->get('surname');
    }

    public function setSurname(?string $value): self
    {
        $this->set('surname', $value);
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->get('jobTitle');
    }

    public function setJobTitle(?string $value): self
    {
        $this->set('jobTitle', $value);
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

    public function getMobilePhone(): ?string
    {
        return $this->get('mobilePhone');
    }

    public function setMobilePhone(?string $value): self
    {
        $this->set('mobilePhone', $value);
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

    public function getPersonalEmail(): ?string
    {
        return $this->get('personalEmail');
    }

    public function setPersonalEmail(?string $value): self
    {
        $this->set('personalEmail', $value);
        return $this;
    }

    public function getEmploymentDate(): ?Carbon
    {
        return $this->getAsDate('employmentDate');
    }

    public function setEmploymentDate(?\DateTime $value): self
    {
        $this->setAsDate('employmentDate', $value);
        return $this;
    }

    public function getTerminationDate(): ?Carbon
    {
        return $this->getAsDate('terminationDate');
    }

    public function setTerminationDate(?\DateTime $value): self
    {
        $this->setAsDate('terminationDate', $value);
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function setStatus(?string $value): self
    {
        $this->set('status', $value);
        return $this;
    }

    public function getBirthDate(): ?Carbon
    {
        return $this->getAsDate('birthDate');
    }

    public function setBirthDate(?\DateTime $value): self
    {
        $this->setAsDate('birthDate', $value);
        return $this;
    }

    public function getStatisticsGroupCode(): ?string
    {
        return $this->get('statisticsGroupCode');
    }

    public function setStatisticsGroupCode(?string $value): self
    {
        $this->set('statisticsGroupCode', $value);
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

    /**
     * @return Entity\Collection|TimeRegistrationEntry\Record[]
     */
    public function getTimeRegistrationEntries(): Entity\Collection
    {
        return $this->getAsCollection('timeRegistrationEntries');
    }

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    public function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
