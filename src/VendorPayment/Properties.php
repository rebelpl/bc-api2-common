<?php
namespace Rebel\BCApi2\Entity\VendorPayment;

enum Properties
{
    case id;
    case journalId;
    case journalDisplayName;
    case lineNumber;
    case vendorId;
    case vendorNumber;
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
    case vendor;
    case dimensionSetLines;
    case applyVendorEntries;
    case vendorPaymentJournal;
}