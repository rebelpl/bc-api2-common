<?php
namespace Rebel\BCApi2\Entity\TrialBalance;

enum Properties
{
    case accountId;
    case number;
    case accountType;
    case display;
    case totalDebit;
    case totalCredit;
    case balanceAtDateDebit;
    case balanceAtDateCredit;
    case dateFilter;

    case account;
}