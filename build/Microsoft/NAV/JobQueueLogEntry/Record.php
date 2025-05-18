<?php
namespace Microsoft\NAV\JobQueueLogEntry;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getJobQueueEntryId(): ?string
    {
        return $this->get(Properties::jobQueueEntryId->name);
    }

    public function setJobQueueEntryId(?string $value): self
    {
        $this->set(Properties::jobQueueEntryId->name, $value);
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->get(Properties::userId->name);
    }

    public function setUserId(?string $value): self
    {
        $this->set(Properties::userId->name, $value);
        return $this;
    }

    public function getStartDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::startDateTime->name);
    }

    public function setStartDateTime(?\DateTime $value): self
    {
        $this->set(Properties::startDateTime->name, $value);
        return $this;
    }

    public function getEndDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::endDateTime->name);
    }

    public function setEndDateTime(?\DateTime $value): self
    {
        $this->set(Properties::endDateTime->name, $value);
        return $this;
    }

    public function getObjectIdToRun(): ?int
    {
        return $this->get(Properties::objectIdToRun->name);
    }

    public function setObjectIdToRun(?int $value): self
    {
        $this->set(Properties::objectIdToRun->name, $value);
        return $this;
    }

    public function getObjectTypeToRun(): ?string
    {
        return $this->get(Properties::objectTypeToRun->name);
    }

    public function setObjectTypeToRun(?string $value): self
    {
        $this->set(Properties::objectTypeToRun->name, $value);
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->get(Properties::status->name);
    }

    public function setStatus(?string $value): self
    {
        $this->set(Properties::status->name, $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->get(Properties::errorMessage->name);
    }

    public function setErrorMessage(?string $value): self
    {
        $this->set(Properties::errorMessage->name, $value);
        return $this;
    }

    public function getJobQueueCategoryCode(): ?string
    {
        return $this->get(Properties::jobQueueCategoryCode->name);
    }

    public function setJobQueueCategoryCode(?string $value): self
    {
        $this->set(Properties::jobQueueCategoryCode->name, $value);
        return $this;
    }

    public function getErrorCallStack(): ?string
    {
        return $this->get(Properties::errorCallStack->name);
    }

    public function setErrorCallStack(?string $value): self
    {
        $this->set(Properties::errorCallStack->name, $value);
        return $this;
    }

    public function getParameterString(): ?string
    {
        return $this->get(Properties::parameterString->name);
    }

    public function setParameterString(?string $value): self
    {
        $this->set(Properties::parameterString->name, $value);
        return $this;
    }

    public function getSystemTaskId(): ?string
    {
        return $this->get(Properties::systemTaskId->name);
    }

    public function setSystemTaskId(?string $value): self
    {
        $this->set(Properties::systemTaskId->name, $value);
        return $this;
    }

    public function getUserSessionId(): ?int
    {
        return $this->get(Properties::userSessionId->name);
    }

    public function setUserSessionId(?int $value): self
    {
        $this->set(Properties::userSessionId->name, $value);
        return $this;
    }

    public function getUserServiceInstanceId(): ?int
    {
        return $this->get(Properties::userServiceInstanceId->name);
    }

    public function setUserServiceInstanceId(?int $value): self
    {
        $this->set(Properties::userServiceInstanceId->name, $value);
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
}