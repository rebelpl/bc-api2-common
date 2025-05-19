<?php
namespace Rebel\BCApi2\Entity\Enums;

enum DimensionSetEntryBufferParentType: string
{
    case Null = '_x0020_';
    case JournalLine = 'Journal_x0020_Line';
    case SalesOrder = 'Sales_x0020_Order';
    case SalesOrderLine = 'Sales_x0020_Order_x0020_Line';
    case SalesQuote = 'Sales_x0020_Quote';
    case SalesQuoteLine = 'Sales_x0020_Quote_x0020_Line';
    case SalesCreditMemo = 'Sales_x0020_Credit_x0020_Memo';
    case SalesCreditMemoLine = 'Sales_x0020_Credit_x0020_Memo_x0020_Line';
    case SalesInvoice = 'Sales_x0020_Invoice';
    case SalesInvoiceLine = 'Sales_x0020_Invoice_x0020_Line';
    case PurchaseInvoice = 'Purchase_x0020_Invoice';
    case PurchaseInvoiceLine = 'Purchase_x0020_Invoice_x0020_Line';
    case GeneralLedgerEntry = 'General_x0020_Ledger_x0020_Entry';
    case TimeRegistrationEntry = 'Time_x0020_Registration_x0020_Entry';
    case SalesShipment = 'Sales_x0020_Shipment';
    case SalesShipmentLine = 'Sales_x0020_Shipment_x0020_Line';
    case PurchaseReceipt = 'Purchase_x0020_Receipt';
    case PurchaseReceiptLine = 'Purchase_x0020_Receipt_x0020_Line';
    case PurchaseOrder = 'Purchase_x0020_Order';
    case PurchaseOrderLine = 'Purchase_x0020_Order_x0020_Line';
    case PurchaseCreditMemo = 'Purchase_x0020_Credit_x0020_Memo';
    case PurchaseCreditMemoLine = 'Purchase_x0020_Credit_x0020_Memo_x0020_Line';
}