<?php
namespace Rebel\BCApi2\Entity\Account;

enum Properties
{
    case id;
    case number;
    case displayName;
    case category;
    case subCategory;
    case blocked;
    case accountType;
    case directPosting;
    case netChange;
    case consolidationTranslationMethod;
    case consolidationDebitAccount;
    case consolidationCreditAccount;
    case excludeFromConsolidation;
    case lastModifiedDateTime;

    case trialBalance;
}