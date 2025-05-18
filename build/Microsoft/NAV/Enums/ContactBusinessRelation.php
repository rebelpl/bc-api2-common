<?php
namespace Microsoft\NAV\Enums;

enum ContactBusinessRelation: string
{
    case Null = '_x0020_';
    case Customer = 'Customer';
    case Vendor = 'Vendor';
    case BankAccount = 'Bank_x0020_Account';
    case Employee = 'Employee';
    case None = 'None';
    case Other = 'Other';
    case Multiple = 'Multiple';
}