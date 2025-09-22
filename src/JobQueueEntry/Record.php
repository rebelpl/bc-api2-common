<?php
namespace Rebel\BCApi2\Entity\JobQueueEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\JobQueueLogEntry;

class Record extends Entity
{
    protected $classMap = ['jobQueueLogEntries' => JobQueueLogEntry\Record::class];

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

    function getLastReadyState(): ?Carbon
    {
        return $this->getAsDateTime('lastReadyState');
    }

    function getExpirationDateTime(): ?Carbon
    {
        return $this->getAsDateTime('expirationDateTime');
    }

    function getEarliestStartDateTime(): ?Carbon
    {
        return $this->getAsDateTime('earliestStartDateTime');
    }

    function getObjectTypeToRun(): ?string
    {
        return $this->get('objectTypeToRun');
    }

    function getObjectIdToRun(): ?int
    {
        return $this->get('objectIdToRun');
    }

    function getObjectCaptionToRun(): ?string
    {
        return $this->get('objectCaptionToRun');
    }

    function getReportOutputType(): ?string
    {
        return $this->get('reportOutputType');
    }

    function getMaxNumberAttemptsToRun(): ?int
    {
        return $this->get('maxNumberAttemptsToRun');
    }

    function getNumberOfAttemptsToRun(): ?int
    {
        return $this->get('numberOfAttemptsToRun');
    }

    function getStatus(): ?string
    {
        return $this->get('status');
    }

    function getRecordIdToProcess(): ?string
    {
        return $this->get('recordIdToProcess');
    }

    function getParameterString(): ?string
    {
        return $this->get('parameterString');
    }

    function getRecurringJob(): ?bool
    {
        return $this->get('recurringJob');
    }

    function getNumberOfMinutesBetweenRuns(): ?int
    {
        return $this->get('numberOfMinutesBetweenRuns');
    }

    function getRunOnMonday(): ?bool
    {
        return $this->get('runOnMonday');
    }

    function getRunOnTuesday(): ?bool
    {
        return $this->get('runOnTuesday');
    }

    function getRunOnWednesday(): ?bool
    {
        return $this->get('runOnWednesday');
    }

    function getRunOnThursday(): ?bool
    {
        return $this->get('runOnThursday');
    }

    function getRunOnFridays(): ?bool
    {
        return $this->get('runOnFridays');
    }

    function getRunOnSaturdays(): ?bool
    {
        return $this->get('runOnSaturdays');
    }

    function getRunOnSundays(): ?bool
    {
        return $this->get('runOnSundays');
    }

    function getStartingTime(): ?string
    {
        return $this->get('startingTime');
    }

    function getEndingTime(): ?string
    {
        return $this->get('endingTime');
    }

    function getReferenceStartingTime(): ?Carbon
    {
        return $this->getAsDateTime('referenceStartingTime');
    }

    function getNextRunDateFormula(): ?string
    {
        return $this->get('nextRunDateFormula');
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function getRunInUserSession(): ?bool
    {
        return $this->get('runInUserSession');
    }

    function getUserSessionId(): ?int
    {
        return $this->get('userSessionId');
    }

    function getJobQueueCategoryCode(): ?string
    {
        return $this->get('jobQueueCategoryCode');
    }

    function getErrorMessage(): ?string
    {
        return $this->get('errorMessage');
    }

    function getUserServiceInstanceId(): ?int
    {
        return $this->get('userServiceInstanceId');
    }

    function getUserSessionStarted(): ?Carbon
    {
        return $this->getAsDateTime('userSessionStarted');
    }

    function getNotifyOnSuccess(): ?bool
    {
        return $this->get('notifyOnSuccess');
    }

    function getUserLanguageId(): ?int
    {
        return $this->get('userLanguageId');
    }

    function getPrinterName(): ?string
    {
        return $this->get('printerName');
    }

    function getReportRequestPageOptions(): ?bool
    {
        return $this->get('reportRequestPageOptions');
    }

    function getRerunDelay(): ?int
    {
        return $this->get('rerunDelay');
    }

    function getSystemTaskId(): ?string
    {
        return $this->get('systemTaskId');
    }

    function getScheduled(): ?bool
    {
        return $this->get('scheduled');
    }

    function getManualRecurrence(): ?bool
    {
        return $this->get('manualRecurrence');
    }

    function getJobTimeOut(): ?string
    {
        return $this->get('jobTimeOut');
    }

    function getPriorityWithinCategory(): ?string
    {
        return $this->get('priorityWithinCategory');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    /**
     * @return Entity\Collection|JobQueueLogEntry\Record[]
     */
    function getJobQueueLogEntries(): Entity\Collection
    {
        return $this->getAsCollection('jobQueueLogEntries');
    }
}
