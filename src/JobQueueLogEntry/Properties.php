<?php
namespace Rebel\BCApi2\Entity\JobQueueLogEntry;

class Properties
{
    public const id = 'id';
    public const jobQueueEntryId = 'jobQueueEntryId';
    public const userId = 'userId';
    public const startDateTime = 'startDateTime';
    public const endDateTime = 'endDateTime';
    public const objectIdToRun = 'objectIdToRun';
    public const objectTypeToRun = 'objectTypeToRun';
    public const status = 'status';
    public const description = 'description';
    public const errorMessage = 'errorMessage';
    public const jobQueueCategoryCode = 'jobQueueCategoryCode';
    public const errorCallStack = 'errorCallStack';
    public const parameterString = 'parameterString';
    public const systemTaskId = 'systemTaskId';
    public const userSessionId = 'userSessionId';
    public const userServiceInstanceId = 'userServiceInstanceId';
    public const lastModifiedDateTime = 'lastModifiedDateTime';
}
