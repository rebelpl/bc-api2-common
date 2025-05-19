<?php
namespace Rebel\BCApi2\Entity\BankAccount;

enum Properties
{
    case id;
    case number;
    case displayName;
    case lastModifiedDateTime;
    case bankAccountNumber;
    case blocked;
    case currencyCode;
    case currencyId;
    case iban;
    case intercompanyEnabled;

}