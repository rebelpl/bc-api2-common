<?php
namespace Microsoft\NAV\TimeRegistrationEntry;

enum Properties
{
    case id;
    case employeeId;
    case employeeNumber;
    case jobId;
    case jobNumber;
    case jobTaskNumber;
    case absence;
    case lineNumber;
    case date;
    case quantity;
    case status;
    case unitOfMeasureId;
    case unitOfMeasureCode;
    case lastModfiedDateTime;

    case employee;
    case dimensionSetLines;
}