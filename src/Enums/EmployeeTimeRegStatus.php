<?php
namespace Rebel\BCApi2\Entity\Enums;

enum EmployeeTimeRegStatus: string
{
    case Open = 'Open';
    case Submitted = 'Submitted';
    case Rejected = 'Rejected';
    case Approved = 'Approved';
}