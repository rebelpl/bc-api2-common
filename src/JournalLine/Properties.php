<?php
namespace Rebel\BCApi2\Entity\JournalLine;

enum Properties
{
    case id;
    case journalId;
    case journalDisplayName;
    case lineNumber;
    case accountType;
    case accountId;
    case accountNumber;
    case postingDate;
    case documentNumber;
    case externalDocumentNumber;
    case amount;
    case description;
    case comment;
    case taxCode;
    case balanceAccountType;
    case balancingAccountId;
    case balancingAccountNumber;
    case lastModifiedDateTime;
    case journal;
    case customerPaymentJournal;
    case account;
    case attachments;
    case dimensionSetLines;
}
