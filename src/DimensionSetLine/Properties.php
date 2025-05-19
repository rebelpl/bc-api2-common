<?php
namespace Rebel\BCApi2\Entity\DimensionSetLine;

enum Properties
{
    case id;
    case code;
    case consolidationCode;
    case parentId;
    case parentType;
    case displayName;
    case valueId;
    case valueCode;
    case valueConsolidationCode;
    case valueDisplayName;

    case salesInvoice;
    case salesInvoiceLine;
    case customerPayment;
    case journalLine;
    case timeRegistrationEntry;
    case generalLedgerEntry;
    case salesOrder;
    case salesOrderLine;
    case salesQuote;
    case salesQuoteLine;
    case salesCreditMemo;
    case salesCreditMemoLine;
    case purchaseInvoice;
    case purchaseInvoiceLine;
    case vendorPayment;
    case salesShipment;
    case salesShipmentLine;
    case purchaseReceipt;
    case purchaseReceiptLine;
    case purchaseOrder;
    case purchaseOrderLine;
    case purchaseCreditMemo;
    case purchaseCreditMemoLine;
}