<?php
namespace Rebel\BCApi2\Entity\JobQueueLogEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getJobQueueEntryId(): ?string
    {
        return $this->get('jobQueueEntryId');
    }

    function getUserId(): ?string
    {
        return $this->get('userId');
    }

    function getStartDateTime(): ?Carbon
    {
        return $this->getAsDateTime('startDateTime');
    }

    function getEndDateTime(): ?Carbon
    {
        return $this->getAsDateTime('endDateTime');
    }

    function getObjectIdToRun(): ?int
    {
        return $this->get('objectIdToRun');
    }

    function getObjectTypeToRun(): ?string
    {
        return $this->get('objectTypeToRun');
    }

    function getStatus(): ?string
    {
        return $this->get('status');
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function getErrorMessage(): ?string
    {
        return $this->get('errorMessage');
    }

    function getJobQueueCategoryCode(): ?string
    {
        return $this->get('jobQueueCategoryCode');
    }

    function getErrorCallStack(): Entity\DataStream
    {
        return $this->get('errorCallStack');
    }

    function getParameterString(): ?string
    {
        return $this->get('parameterString');
    }

    function getSystemTaskId(): ?string
    {
        return $this->get('systemTaskId');
    }

    function getUserSessionId(): ?int
    {
        return $this->get('userSessionId');
    }

    function getUserServiceInstanceId(): ?int
    {
        return $this->get('userServiceInstanceId');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
