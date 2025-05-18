<?php
namespace Microsoft\NAV\Enums;

enum EmployeeStatus: string
{
    case Active = 'Active';
    case Inactive = 'Inactive';
    case Terminated = 'Terminated';
}