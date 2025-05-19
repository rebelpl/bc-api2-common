<?php
namespace Rebel\BCApi2\Entity\CustomerPayment;

enum Properties
{
    case id;
    case journalId;
    case journalDisplayName;
    case lineNumber;
    case customerId;
    case customerNumber;
    case postingDate;
    case documentNumber;
    case externalDocumentNumber;
    case amount;
    case appliesToInvoiceId;
    case appliesToInvoiceNumber;
    case description;
    case comment;
    case lastModifiedDateTime;

    case customerPaymentJournal;
    case customer;
    case dimensionSetLines;
}