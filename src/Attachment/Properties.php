<?php
namespace Rebel\BCApi2\Entity\Attachment;

enum Properties
{
    case id;
    case parentId;
    case fileName;
    case byteSize;
    case attachmentContent;
    case lastModifiedDateTime;
    case parentType;

    case salesInvoice;
    case journalLine;
    case generalLedgerEntry;
    case salesOrder;
    case salesQuote;
    case salesCreditMemo;
    case purchaseInvoice;
    case purchaseOrder;
    case purchaseCreditMemo;
}