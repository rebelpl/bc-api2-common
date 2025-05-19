<?php
namespace Rebel\BCApi2\Entity\JobQueueEntry;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\JobQueueLogEntry;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::jobQueueLogEntries->name => JobQueueLogEntry\Record::class,
        ];
    }

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

    public function getLastReadyState(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastReadyState->name);
    }

    public function getExpirationDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::expirationDateTime->name);
    }

    public function getEarliestStartDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::earliestStartDateTime->name);
    }

    public function getObjectTypeToRun(): ?string
    {
        return $this->get(Properties::objectTypeToRun->name);
    }

    public function getObjectIdToRun(): ?int
    {
        return $this->get(Properties::objectIdToRun->name);
    }

    public function getObjectCaptionToRun(): ?string
    {
        return $this->get(Properties::objectCaptionToRun->name);
    }

    public function getReportOutputType(): ?Enums\JobQueueReportOutputType
    {
        return $this->getAsEnum(Properties::reportOutputType->name, Enums\JobQueueReportOutputType::class);
    }

    public function getMaxNumberAttemptsToRun(): ?int
    {
        return $this->get(Properties::maxNumberAttemptsToRun->name);
    }

    public function getNumberOfAttemptsToRun(): ?int
    {
        return $this->get(Properties::numberOfAttemptsToRun->name);
    }

    public function getStatus(): ?string
    {
        return $this->get(Properties::status->name);
    }

    public function getRecordIdToProcess(): ?string
    {
        return $this->get(Properties::recordIdToProcess->name);
    }

    public function getParameterString(): ?string
    {
        return $this->get(Properties::parameterString->name);
    }

    public function isRecurringJob(): ?bool
    {
        return $this->get(Properties::recurringJob->name);
    }

    public function getNumberOfMinutesBetweenRuns(): ?int
    {
        return $this->get(Properties::numberOfMinutesBetweenRuns->name);
    }

    public function isRunOnMonday(): ?bool
    {
        return $this->get(Properties::runOnMonday->name);
    }

    public function isRunOnTuesday(): ?bool
    {
        return $this->get(Properties::runOnTuesday->name);
    }

    public function isRunOnWednesday(): ?bool
    {
        return $this->get(Properties::runOnWednesday->name);
    }

    public function isRunOnThursday(): ?bool
    {
        return $this->get(Properties::runOnThursday->name);
    }

    public function isRunOnFridays(): ?bool
    {
        return $this->get(Properties::runOnFridays->name);
    }

    public function isRunOnSaturdays(): ?bool
    {
        return $this->get(Properties::runOnSaturdays->name);
    }

    public function isRunOnSundays(): ?bool
    {
        return $this->get(Properties::runOnSundays->name);
    }

    public function getStartingTime(): ?string
    {
        return $this->get(Properties::startingTime->name);
    }

    public function getEndingTime(): ?string
    {
        return $this->get(Properties::endingTime->name);
    }

    public function getReferenceStartingTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::referenceStartingTime->name);
    }

    public function getNextRunDateFormula(): ?string
    {
        return $this->get(Properties::nextRunDateFormula->name);
    }

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function isRunInUserSession(): ?bool
    {
        return $this->get(Properties::runInUserSession->name);
    }

    public function getUserSessionId(): ?int
    {
        return $this->get(Properties::userSessionId->name);
    }

    public function getJobQueueCategoryCode(): ?string
    {
        return $this->get(Properties::jobQueueCategoryCode->name);
    }

    public function getErrorMessage(): ?string
    {
        return $this->get(Properties::errorMessage->name);
    }

    public function getUserServiceInstanceId(): ?int
    {
        return $this->get(Properties::userServiceInstanceId->name);
    }

    public function getUserSessionStarted(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::userSessionStarted->name);
    }

    public function isNotifyOnSuccess(): ?bool
    {
        return $this->get(Properties::notifyOnSuccess->name);
    }

    public function getUserLanguageId(): ?int
    {
        return $this->get(Properties::userLanguageId->name);
    }

    public function getPrinterName(): ?string
    {
        return $this->get(Properties::printerName->name);
    }

    public function isReportRequestPageOptions(): ?bool
    {
        return $this->get(Properties::reportRequestPageOptions->name);
    }

    public function getRerunDelay(): ?int
    {
        return $this->get(Properties::rerunDelay->name);
    }

    public function getSystemTaskId(): ?string
    {
        return $this->get(Properties::systemTaskId->name);
    }

    public function isScheduled(): ?bool
    {
        return $this->get(Properties::scheduled->name);
    }

    public function isManualRecurrence(): ?bool
    {
        return $this->get(Properties::manualRecurrence->name);
    }

    public function getJobTimeOut(): ?string
    {
        return $this->get(Properties::jobTimeOut->name);
    }

    public function getPriorityWithinCategory(): ?Enums\JobQueuePriority
    {
        return $this->getAsEnum(Properties::priorityWithinCategory->name, Enums\JobQueuePriority::class);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    /**
     * @return Entity\Collection<JobQueueLogEntry\Record>
     */
    public function getJobQueueLogEntries(): Entity\Collection
    {
        return $this->get(Properties::jobQueueLogEntries->name) ?? new Entity\Collection();
    }
}