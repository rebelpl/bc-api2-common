<?php
namespace Rebel\BCApi2\Entity\JobQueueLogEntry;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getJobQueueEntryId(): ?string
    {
        return $this->get(Properties::jobQueueEntryId->name);
    }

    public function getUserId(): ?string
    {
        return $this->get(Properties::userId->name);
    }

    public function getStartDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::startDateTime->name);
    }

    public function getEndDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::endDateTime->name);
    }

    public function getObjectIdToRun(): ?int
    {
        return $this->get(Properties::objectIdToRun->name);
    }

    public function getObjectTypeToRun(): ?string
    {
        return $this->get(Properties::objectTypeToRun->name);
    }

    public function getStatus(): ?string
    {
        return $this->get(Properties::status->name);
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function getErrorMessage(): ?string
    {
        return $this->get(Properties::errorMessage->name);
    }

    public function getJobQueueCategoryCode(): ?string
    {
        return $this->get(Properties::jobQueueCategoryCode->name);
    }

    public function getErrorCallStack(): ?string
    {
        return $this->get(Properties::errorCallStack->name);
    }

    public function getParameterString(): ?string
    {
        return $this->get(Properties::parameterString->name);
    }

    public function getSystemTaskId(): ?string
    {
        return $this->get(Properties::systemTaskId->name);
    }

    public function getUserSessionId(): ?int
    {
        return $this->get(Properties::userSessionId->name);
    }

    public function getUserServiceInstanceId(): ?int
    {
        return $this->get(Properties::userServiceInstanceId->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }
}