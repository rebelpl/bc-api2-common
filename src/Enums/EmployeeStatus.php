<?php
namespace Rebel\BCApi2\Entity\Enums;

enum EmployeeStatus: string
{
    case Active = 'Active';
    case Inactive = 'Inactive';
    case Terminated = 'Terminated';
}
