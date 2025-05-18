<?php
namespace Microsoft\NAV\Enums;

enum GenJournalAccountType: string
{
    case GLAccount = 'G_x002F_L_x0020_Account';
    case Customer = 'Customer';
    case Vendor = 'Vendor';
    case BankAccount = 'Bank_x0020_Account';
    case FixedAsset = 'Fixed_x0020_Asset';
    case ICPartner = 'IC_x0020_Partner';
    case Employee = 'Employee';
    case AllocationAccount = 'Allocation_x0020_Account';
}