<?php
namespace Rebel\BCApi2\Entity\JobQueueEntry;

class Properties
{
    public const id = 'id';
    public const jobQueueEntryId = 'jobQueueEntryId';
    public const userId = 'userId';
    public const lastReadyState = 'lastReadyState';
    public const expirationDateTime = 'expirationDateTime';
    public const earliestStartDateTime = 'earliestStartDateTime';
    public const objectTypeToRun = 'objectTypeToRun';
    public const objectIdToRun = 'objectIdToRun';
    public const objectCaptionToRun = 'objectCaptionToRun';
    public const reportOutputType = 'reportOutputType';
    public const maxNumberAttemptsToRun = 'maxNumberAttemptsToRun';
    public const numberOfAttemptsToRun = 'numberOfAttemptsToRun';
    public const status = 'status';
    public const recordIdToProcess = 'recordIdToProcess';
    public const parameterString = 'parameterString';
    public const recurringJob = 'recurringJob';
    public const numberOfMinutesBetweenRuns = 'numberOfMinutesBetweenRuns';
    public const runOnMonday = 'runOnMonday';
    public const runOnTuesday = 'runOnTuesday';
    public const runOnWednesday = 'runOnWednesday';
    public const runOnThursday = 'runOnThursday';
    public const runOnFridays = 'runOnFridays';
    public const runOnSaturdays = 'runOnSaturdays';
    public const runOnSundays = 'runOnSundays';
    public const startingTime = 'startingTime';
    public const endingTime = 'endingTime';
    public const referenceStartingTime = 'referenceStartingTime';
    public const nextRunDateFormula = 'nextRunDateFormula';
    public const description = 'description';
    public const runInUserSession = 'runInUserSession';
    public const userSessionId = 'userSessionId';
    public const jobQueueCategoryCode = 'jobQueueCategoryCode';
    public const errorMessage = 'errorMessage';
    public const userServiceInstanceId = 'userServiceInstanceId';
    public const userSessionStarted = 'userSessionStarted';
    public const notifyOnSuccess = 'notifyOnSuccess';
    public const userLanguageId = 'userLanguageId';
    public const printerName = 'printerName';
    public const reportRequestPageOptions = 'reportRequestPageOptions';
    public const rerunDelay = 'rerunDelay';
    public const systemTaskId = 'systemTaskId';
    public const scheduled = 'scheduled';
    public const manualRecurrence = 'manualRecurrence';
    public const jobTimeOut = 'jobTimeOut';
    public const priorityWithinCategory = 'priorityWithinCategory';
    public const lastModifiedDateTime = 'lastModifiedDateTime';
    public const jobQueueLogEntries = 'jobQueueLogEntries';
}
