<?php
namespace Microsoft\NAV\Opportunity;

enum Properties
{
    case id;
    case number;
    case contactNumber;
    case contactName;
    case contactCompanyName;
    case salespersonCode;
    case description;
    case status;
    case closed;
    case creationDate;
    case dateClosed;
    case calculatedCurrentValue;
    case chancesOfSuccessPrc;
    case completedPrc;
    case estimatedClosingDate;
    case estimatedValue;
    case systemCreatedAt;
    case lastModifiedDateTime;

}