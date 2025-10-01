<?php
namespace Rebel\BCApi2\Entity\JobQueueEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\JobQueueLogEntry;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['jobQueueLogEntries' => JobQueueLogEntry\Record::class];

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

    public function getLastReadyState(): ?Carbon
    {
        return $this->getAsDateTime('lastReadyState');
    }

    public function getExpirationDateTime(): ?Carbon
    {
        return $this->getAsDateTime('expirationDateTime');
    }

    public function getEarliestStartDateTime(): ?Carbon
    {
        return $this->getAsDateTime('earliestStartDateTime');
    }

    public function getObjectTypeToRun(): ?string
    {
        return $this->get('objectTypeToRun');
    }

    public function getObjectIdToRun(): ?int
    {
        return $this->get('objectIdToRun');
    }

    public function getObjectCaptionToRun(): ?string
    {
        return $this->get('objectCaptionToRun');
    }

    public function getReportOutputType(): ?string
    {
        return $this->get('reportOutputType');
    }

    public function getMaxNumberAttemptsToRun(): ?int
    {
        return $this->get('maxNumberAttemptsToRun');
    }

    public function getNumberOfAttemptsToRun(): ?int
    {
        return $this->get('numberOfAttemptsToRun');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getRecordIdToProcess(): ?string
    {
        return $this->get('recordIdToProcess');
    }

    public function getParameterString(): ?string
    {
        return $this->get('parameterString');
    }

    public function getRecurringJob(): ?bool
    {
        return $this->get('recurringJob');
    }

    public function getNumberOfMinutesBetweenRuns(): ?int
    {
        return $this->get('numberOfMinutesBetweenRuns');
    }

    public function getRunOnMonday(): ?bool
    {
        return $this->get('runOnMonday');
    }

    public function getRunOnTuesday(): ?bool
    {
        return $this->get('runOnTuesday');
    }

    public function getRunOnWednesday(): ?bool
    {
        return $this->get('runOnWednesday');
    }

    public function getRunOnThursday(): ?bool
    {
        return $this->get('runOnThursday');
    }

    public function getRunOnFridays(): ?bool
    {
        return $this->get('runOnFridays');
    }

    public function getRunOnSaturdays(): ?bool
    {
        return $this->get('runOnSaturdays');
    }

    public function getRunOnSundays(): ?bool
    {
        return $this->get('runOnSundays');
    }

    public function getStartingTime(): ?string
    {
        return $this->get('startingTime');
    }

    public function getEndingTime(): ?string
    {
        return $this->get('endingTime');
    }

    public function getReferenceStartingTime(): ?Carbon
    {
        return $this->getAsDateTime('referenceStartingTime');
    }

    public function getNextRunDateFormula(): ?string
    {
        return $this->get('nextRunDateFormula');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getRunInUserSession(): ?bool
    {
        return $this->get('runInUserSession');
    }

    public function getUserSessionId(): ?int
    {
        return $this->get('userSessionId');
    }

    public function getJobQueueCategoryCode(): ?string
    {
        return $this->get('jobQueueCategoryCode');
    }

    public function getErrorMessage(): ?string
    {
        return $this->get('errorMessage');
    }

    public function getUserServiceInstanceId(): ?int
    {
        return $this->get('userServiceInstanceId');
    }

    public function getUserSessionStarted(): ?Carbon
    {
        return $this->getAsDateTime('userSessionStarted');
    }

    public function getNotifyOnSuccess(): ?bool
    {
        return $this->get('notifyOnSuccess');
    }

    public function getUserLanguageId(): ?int
    {
        return $this->get('userLanguageId');
    }

    public function getPrinterName(): ?string
    {
        return $this->get('printerName');
    }

    public function getReportRequestPageOptions(): ?bool
    {
        return $this->get('reportRequestPageOptions');
    }

    public function getRerunDelay(): ?int
    {
        return $this->get('rerunDelay');
    }

    public function getSystemTaskId(): ?string
    {
        return $this->get('systemTaskId');
    }

    public function getScheduled(): ?bool
    {
        return $this->get('scheduled');
    }

    public function getManualRecurrence(): ?bool
    {
        return $this->get('manualRecurrence');
    }

    public function getJobTimeOut(): ?string
    {
        return $this->get('jobTimeOut');
    }

    public function getPriorityWithinCategory(): ?string
    {
        return $this->get('priorityWithinCategory');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    /**
     * @return Entity\Collection|JobQueueLogEntry\Record[]
     */
    public function getJobQueueLogEntries(): Entity\Collection
    {
        return $this->getAsCollection('jobQueueLogEntries');
    }

    public function doRestart(Client $client): void
    {
        $this->doAction('Microsoft.NAV.restart', $client);
    }
}
