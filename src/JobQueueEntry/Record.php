<?php
namespace Rebel\BCApi2\Entity\JobQueueEntry;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\JobQueueLogEntry;

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

	public ?\DateTime $lastReadyState {
		get => $this->get('lastReadyState', 'datetime');
	}

	public ?\DateTime $expirationDateTime {
		get => $this->get('expirationDateTime', 'datetime');
	}

	public ?\DateTime $earliestStartDateTime {
		get => $this->get('earliestStartDateTime', 'datetime');
	}

	public ?string $objectTypeToRun {
		get => $this->get('objectTypeToRun');
	}

	public ?int $objectIdToRun {
		get => $this->get('objectIdToRun');
	}

	public ?string $objectCaptionToRun {
		get => $this->get('objectCaptionToRun');
	}

	public ?Enums\JobQueueReportOutputType $reportOutputType {
		get => $this->get('reportOutputType', Enums\JobQueueReportOutputType::class);
	}

	public ?int $maxNumberAttemptsToRun {
		get => $this->get('maxNumberAttemptsToRun');
	}

	public ?int $numberOfAttemptsToRun {
		get => $this->get('numberOfAttemptsToRun');
	}

	public ?string $status {
		get => $this->get('status');
	}

	public ?string $recordIdToProcess {
		get => $this->get('recordIdToProcess');
	}

	public ?string $parameterString {
		get => $this->get('parameterString');
	}

	public ?bool $recurringJob {
		get => $this->get('recurringJob');
	}

	public ?int $numberOfMinutesBetweenRuns {
		get => $this->get('numberOfMinutesBetweenRuns');
	}

	public ?bool $runOnMonday {
		get => $this->get('runOnMonday');
	}

	public ?bool $runOnTuesday {
		get => $this->get('runOnTuesday');
	}

	public ?bool $runOnWednesday {
		get => $this->get('runOnWednesday');
	}

	public ?bool $runOnThursday {
		get => $this->get('runOnThursday');
	}

	public ?bool $runOnFridays {
		get => $this->get('runOnFridays');
	}

	public ?bool $runOnSaturdays {
		get => $this->get('runOnSaturdays');
	}

	public ?bool $runOnSundays {
		get => $this->get('runOnSundays');
	}

	public ?string $startingTime {
		get => $this->get('startingTime');
	}

	public ?string $endingTime {
		get => $this->get('endingTime');
	}

	public ?\DateTime $referenceStartingTime {
		get => $this->get('referenceStartingTime', 'datetime');
	}

	public ?string $nextRunDateFormula {
		get => $this->get('nextRunDateFormula');
	}

	public ?string $description {
		get => $this->get('description');
	}

	public ?bool $runInUserSession {
		get => $this->get('runInUserSession');
	}

	public ?int $userSessionId {
		get => $this->get('userSessionId');
	}

	public ?string $jobQueueCategoryCode {
		get => $this->get('jobQueueCategoryCode');
	}

	public ?string $errorMessage {
		get => $this->get('errorMessage');
	}

	public ?int $userServiceInstanceId {
		get => $this->get('userServiceInstanceId');
	}

	public ?\DateTime $userSessionStarted {
		get => $this->get('userSessionStarted', 'datetime');
	}

	public ?bool $notifyOnSuccess {
		get => $this->get('notifyOnSuccess');
	}

	public ?int $userLanguageId {
		get => $this->get('userLanguageId');
	}

	public ?string $printerName {
		get => $this->get('printerName');
	}

	public ?bool $reportRequestPageOptions {
		get => $this->get('reportRequestPageOptions');
	}

	public ?int $rerunDelay {
		get => $this->get('rerunDelay');
	}

	public ?string $systemTaskId {
		get => $this->get('systemTaskId');
	}

	public ?bool $scheduled {
		get => $this->get('scheduled');
	}

	public ?bool $manualRecurrence {
		get => $this->get('manualRecurrence');
	}

	public ?string $jobTimeOut {
		get => $this->get('jobTimeOut');
	}

	public ?Enums\JobQueuePriority $priorityWithinCategory {
		get => $this->get('priorityWithinCategory', Enums\JobQueuePriority::class);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}

	/** @var Entity\Collection<JobQueueLogEntry\Record> */
	public Entity\Collection $jobQueueLogEntries {
		get => $this->get('jobQueueLogEntries', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'jobQueueLogEntries' => JobQueueLogEntry\Record::class,
        ];
    }
}