<?php
namespace Rebel\BCApi2\Entity\JobQueueLogEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $jobQueueEntryId {
        get => $this->get('jobQueueEntryId');
    }

    public ?string $userId {
        get => $this->get('userId');
    }

    public ?Carbon $startDateTime {
        get => $this->getAsDateTime('startDateTime');
    }

    public ?Carbon $endDateTime {
        get => $this->getAsDateTime('endDateTime');
    }

    public ?int $objectIdToRun {
        get => $this->get('objectIdToRun');
    }

    public ?string $objectTypeToRun {
        get => $this->get('objectTypeToRun');
    }

    public ?string $status {
        get => $this->get('status');
    }

    public ?string $description {
        get => $this->get('description');
    }

    public ?string $errorMessage {
        get => $this->get('errorMessage');
    }

    public ?string $jobQueueCategoryCode {
        get => $this->get('jobQueueCategoryCode');
    }

    public Entity\DataStream $errorCallStack {
        get => $this->get('errorCallStack');
    }

    public ?string $parameterString {
        get => $this->get('parameterString');
    }

    public ?string $systemTaskId {
        get => $this->get('systemTaskId');
    }

    public ?int $userSessionId {
        get => $this->get('userSessionId');
    }

    public ?int $userServiceInstanceId {
        get => $this->get('userServiceInstanceId');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }
}
