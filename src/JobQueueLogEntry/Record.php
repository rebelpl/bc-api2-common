<?php
namespace Rebel\BCApi2\Entity\JobQueueLogEntry;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $jobQueueEntryId {
		get => $this->get('jobQueueEntryId');
	}

	public ?string $userId {
		get => $this->get('userId');
	}

	public ?\DateTime $startDateTime {
		get => $this->get('startDateTime', 'datetime');
	}

	public ?\DateTime $endDateTime {
		get => $this->get('endDateTime', 'datetime');
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

	public ?string $errorCallStack {
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

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}


}