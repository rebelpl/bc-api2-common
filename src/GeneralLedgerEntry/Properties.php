<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerEntry;

enum Properties
{
    case id;
    case entryNumber;
    case postingDate;
    case documentNumber;
    case documentType;
    case accountId;
    case accountNumber;
    case description;
    case debitAmount;
    case creditAmount;
    case additionalCurrencyDebitAmount;
    case additionalCurrencyCreditAmount;
    case lastModifiedDateTime;
    case account;
    case attachments;
    case dimensionSetLines;
}
