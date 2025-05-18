<?php
namespace Microsoft\NAV\DocumentAttachment;

enum Properties
{
    case id;
    case fileName;
    case byteSize;
    case attachmentContent;
    case parentType;
    case parentId;
    case lineNumber;
    case documentFlowSales;
    case documentFlowPurchase;
    case lastModifiedDateTime;

    case item;
    case customer;
    case vendor;
    case salesInvoice;
    case employee;
    case salesOrder;
    case salesQuote;
    case salesCreditMemo;
    case purchaseInvoice;
    case project;
    case purchaseOrder;
    case purchaseCreditMemo;
}