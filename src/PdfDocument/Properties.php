<?php
namespace Rebel\BCApi2\Entity\PdfDocument;

enum Properties
{
    case id;
    case parentId;
    case parentType;
    case pdfDocumentContent;
    case salesInvoice;
    case salesQuote;
    case salesCreditMemo;
    case purchaseInvoice;
    case purchaseCreditMemo;
    case customerContact;
}
