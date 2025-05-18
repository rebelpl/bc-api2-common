<?php
namespace Microsoft\NAV\JobQueueLogEntry;

enum Properties
{
    case id;
    case jobQueueEntryId;
    case userId;
    case startDateTime;
    case endDateTime;
    case objectIdToRun;
    case objectTypeToRun;
    case status;
    case description;
    case errorMessage;
    case jobQueueCategoryCode;
    case errorCallStack;
    case parameterString;
    case systemTaskId;
    case userSessionId;
    case userServiceInstanceId;
    case lastModifiedDateTime;

}