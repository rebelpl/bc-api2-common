<?php
namespace Rebel\BCApi2\Entity\Enums;

enum ContactBusinessRelationLinkToTable: string
{
    case Null = '_x0020_';
    case Customer = 'Customer';
    case Vendor = 'Vendor';
    case BankAccount = 'Bank_x0020_Account';
    case Employee = 'Employee';
}