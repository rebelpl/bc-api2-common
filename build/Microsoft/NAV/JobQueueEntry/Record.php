<?php
namespace Microsoft\NAV\JobQueueEntry;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\JobQueueLogEntry;
use Microsoft\NAV\Enums;

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

    public function getLastReadyState(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastReadyState->name);
    }

    public function setLastReadyState(?\DateTime $value): self
    {
        $this->set(Properties::lastReadyState->name, $value);
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::expirationDateTime->name);
    }

    public function setExpirationDateTime(?\DateTime $value): self
    {
        $this->set(Properties::expirationDateTime->name, $value);
        return $this;
    }

    public function getEarliestStartDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::earliestStartDateTime->name);
    }

    public function setEarliestStartDateTime(?\DateTime $value): self
    {
        $this->set(Properties::earliestStartDateTime->name, $value);
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

    public function getObjectIdToRun(): ?int
    {
        return $this->get(Properties::objectIdToRun->name);
    }

    public function setObjectIdToRun(?int $value): self
    {
        $this->set(Properties::objectIdToRun->name, $value);
        return $this;
    }

    public function getObjectCaptionToRun(): ?string
    {
        return $this->get(Properties::objectCaptionToRun->name);
    }

    public function setObjectCaptionToRun(?string $value): self
    {
        $this->set(Properties::objectCaptionToRun->name, $value);
        return $this;
    }

    public function getReportOutputType(): ?Enums\JobQueueReportOutputType
    {
        return $this->getAsEnum(Properties::reportOutputType->name, Enums\JobQueueReportOutputType::class);
    }

    public function setReportOutputType(?Enums\JobQueueReportOutputType $value): self
    {
        $this->set(Properties::reportOutputType->name, $value);
        return $this;
    }

    public function getMaxNumberAttemptsToRun(): ?int
    {
        return $this->get(Properties::maxNumberAttemptsToRun->name);
    }

    public function setMaxNumberAttemptsToRun(?int $value): self
    {
        $this->set(Properties::maxNumberAttemptsToRun->name, $value);
        return $this;
    }

    public function getNumberOfAttemptsToRun(): ?int
    {
        return $this->get(Properties::numberOfAttemptsToRun->name);
    }

    public function setNumberOfAttemptsToRun(?int $value): self
    {
        $this->set(Properties::numberOfAttemptsToRun->name, $value);
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

    public function getRecordIdToProcess(): ?string
    {
        return $this->get(Properties::recordIdToProcess->name);
    }

    public function setRecordIdToProcess(?string $value): self
    {
        $this->set(Properties::recordIdToProcess->name, $value);
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

    public function isRecurringJob(): ?bool
    {
        return $this->get(Properties::recurringJob->name);
    }

    public function setRecurringJob(?bool $value): self
    {
        $this->set(Properties::recurringJob->name, $value);
        return $this;
    }

    public function getNumberOfMinutesBetweenRuns(): ?int
    {
        return $this->get(Properties::numberOfMinutesBetweenRuns->name);
    }

    public function setNumberOfMinutesBetweenRuns(?int $value): self
    {
        $this->set(Properties::numberOfMinutesBetweenRuns->name, $value);
        return $this;
    }

    public function isRunOnMonday(): ?bool
    {
        return $this->get(Properties::runOnMonday->name);
    }

    public function setRunOnMonday(?bool $value): self
    {
        $this->set(Properties::runOnMonday->name, $value);
        return $this;
    }

    public function isRunOnTuesday(): ?bool
    {
        return $this->get(Properties::runOnTuesday->name);
    }

    public function setRunOnTuesday(?bool $value): self
    {
        $this->set(Properties::runOnTuesday->name, $value);
        return $this;
    }

    public function isRunOnWednesday(): ?bool
    {
        return $this->get(Properties::runOnWednesday->name);
    }

    public function setRunOnWednesday(?bool $value): self
    {
        $this->set(Properties::runOnWednesday->name, $value);
        return $this;
    }

    public function isRunOnThursday(): ?bool
    {
        return $this->get(Properties::runOnThursday->name);
    }

    public function setRunOnThursday(?bool $value): self
    {
        $this->set(Properties::runOnThursday->name, $value);
        return $this;
    }

    public function isRunOnFridays(): ?bool
    {
        return $this->get(Properties::runOnFridays->name);
    }

    public function setRunOnFridays(?bool $value): self
    {
        $this->set(Properties::runOnFridays->name, $value);
        return $this;
    }

    public function isRunOnSaturdays(): ?bool
    {
        return $this->get(Properties::runOnSaturdays->name);
    }

    public function setRunOnSaturdays(?bool $value): self
    {
        $this->set(Properties::runOnSaturdays->name, $value);
        return $this;
    }

    public function isRunOnSundays(): ?bool
    {
        return $this->get(Properties::runOnSundays->name);
    }

    public function setRunOnSundays(?bool $value): self
    {
        $this->set(Properties::runOnSundays->name, $value);
        return $this;
    }

    public function getStartingTime(): ?string
    {
        return $this->get(Properties::startingTime->name);
    }

    public function setStartingTime(?string $value): self
    {
        $this->set(Properties::startingTime->name, $value);
        return $this;
    }

    public function getEndingTime(): ?string
    {
        return $this->get(Properties::endingTime->name);
    }

    public function setEndingTime(?string $value): self
    {
        $this->set(Properties::endingTime->name, $value);
        return $this;
    }

    public function getReferenceStartingTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::referenceStartingTime->name);
    }

    public function setReferenceStartingTime(?\DateTime $value): self
    {
        $this->set(Properties::referenceStartingTime->name, $value);
        return $this;
    }

    public function getNextRunDateFormula(): ?string
    {
        return $this->get(Properties::nextRunDateFormula->name);
    }

    public function setNextRunDateFormula(?string $value): self
    {
        $this->set(Properties::nextRunDateFormula->name, $value);
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

    public function isRunInUserSession(): ?bool
    {
        return $this->get(Properties::runInUserSession->name);
    }

    public function setRunInUserSession(?bool $value): self
    {
        $this->set(Properties::runInUserSession->name, $value);
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

    public function getJobQueueCategoryCode(): ?string
    {
        return $this->get(Properties::jobQueueCategoryCode->name);
    }

    public function setJobQueueCategoryCode(?string $value): self
    {
        $this->set(Properties::jobQueueCategoryCode->name, $value);
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

    public function getUserServiceInstanceId(): ?int
    {
        return $this->get(Properties::userServiceInstanceId->name);
    }

    public function setUserServiceInstanceId(?int $value): self
    {
        $this->set(Properties::userServiceInstanceId->name, $value);
        return $this;
    }

    public function getUserSessionStarted(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::userSessionStarted->name);
    }

    public function setUserSessionStarted(?\DateTime $value): self
    {
        $this->set(Properties::userSessionStarted->name, $value);
        return $this;
    }

    public function isNotifyOnSuccess(): ?bool
    {
        return $this->get(Properties::notifyOnSuccess->name);
    }

    public function setNotifyOnSuccess(?bool $value): self
    {
        $this->set(Properties::notifyOnSuccess->name, $value);
        return $this;
    }

    public function getUserLanguageId(): ?int
    {
        return $this->get(Properties::userLanguageId->name);
    }

    public function setUserLanguageId(?int $value): self
    {
        $this->set(Properties::userLanguageId->name, $value);
        return $this;
    }

    public function getPrinterName(): ?string
    {
        return $this->get(Properties::printerName->name);
    }

    public function setPrinterName(?string $value): self
    {
        $this->set(Properties::printerName->name, $value);
        return $this;
    }

    public function isReportRequestPageOptions(): ?bool
    {
        return $this->get(Properties::reportRequestPageOptions->name);
    }

    public function setReportRequestPageOptions(?bool $value): self
    {
        $this->set(Properties::reportRequestPageOptions->name, $value);
        return $this;
    }

    public function getRerunDelay(): ?int
    {
        return $this->get(Properties::rerunDelay->name);
    }

    public function setRerunDelay(?int $value): self
    {
        $this->set(Properties::rerunDelay->name, $value);
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

    public function isScheduled(): ?bool
    {
        return $this->get(Properties::scheduled->name);
    }

    public function setScheduled(?bool $value): self
    {
        $this->set(Properties::scheduled->name, $value);
        return $this;
    }

    public function isManualRecurrence(): ?bool
    {
        return $this->get(Properties::manualRecurrence->name);
    }

    public function setManualRecurrence(?bool $value): self
    {
        $this->set(Properties::manualRecurrence->name, $value);
        return $this;
    }

    public function getJobTimeOut(): ?string
    {
        return $this->get(Properties::jobTimeOut->name);
    }

    public function setJobTimeOut(?string $value): self
    {
        $this->set(Properties::jobTimeOut->name, $value);
        return $this;
    }

    public function getPriorityWithinCategory(): ?Enums\JobQueuePriority
    {
        return $this->getAsEnum(Properties::priorityWithinCategory->name, Enums\JobQueuePriority::class);
    }

    public function setPriorityWithinCategory(?Enums\JobQueuePriority $value): self
    {
        $this->set(Properties::priorityWithinCategory->name, $value);
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

    /**
     * @return Entity\Collection<JobQueueLogEntry\Record>
     */
    public function getJobQueueLogEntries(): Entity\Collection
    {
        return $this->get(Properties::jobQueueLogEntries->name) ?? new Entity\Collection();
    }
}