<?php
namespace Microsoft\NAV\Enums;

enum EmployeeTimeRegStatus: string
{
    case Open = 'Open';
    case Submitted = 'Submitted';
    case Rejected = 'Rejected';
    case Approved = 'Approved';
}