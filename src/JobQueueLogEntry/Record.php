<?php
namespace Rebel\BCApi2\Entity\JobQueueLogEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'id';

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getJobQueueEntryId(): ?string
    {
        return $this->get('jobQueueEntryId');
    }

    public function getUserId(): ?string
    {
        return $this->get('userId');
    }

    public function getStartDateTime(): ?Carbon
    {
        return $this->getAsDateTime('startDateTime');
    }

    public function getEndDateTime(): ?Carbon
    {
        return $this->getAsDateTime('endDateTime');
    }

    public function getObjectIdToRun(): ?int
    {
        return $this->get('objectIdToRun');
    }

    public function getObjectTypeToRun(): ?string
    {
        return $this->get('objectTypeToRun');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getErrorMessage(): ?string
    {
        return $this->get('errorMessage');
    }

    public function getJobQueueCategoryCode(): ?string
    {
        return $this->get('jobQueueCategoryCode');
    }

    public function getErrorCallStack(): Entity\DataStream
    {
        return $this->get('errorCallStack');
    }

    public function getParameterString(): ?string
    {
        return $this->get('parameterString');
    }

    public function getSystemTaskId(): ?string
    {
        return $this->get('systemTaskId');
    }

    public function getUserSessionId(): ?int
    {
        return $this->get('userSessionId');
    }

    public function getUserServiceInstanceId(): ?int
    {
        return $this->get('userServiceInstanceId');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
