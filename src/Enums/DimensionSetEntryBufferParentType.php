<?php
namespace Rebel\BCApi2\Entity\Enums;

class DimensionSetEntryBufferParentType
{
    public const Null = '_x0020_';
    public const JournalLine = 'Journal_x0020_Line';
    public const SalesOrder = 'Sales_x0020_Order';
    public const SalesOrderLine = 'Sales_x0020_Order_x0020_Line';
    public const SalesQuote = 'Sales_x0020_Quote';
    public const SalesQuoteLine = 'Sales_x0020_Quote_x0020_Line';
    public const SalesCreditMemo = 'Sales_x0020_Credit_x0020_Memo';
    public const SalesCreditMemoLine = 'Sales_x0020_Credit_x0020_Memo_x0020_Line';
    public const SalesInvoice = 'Sales_x0020_Invoice';
    public const SalesInvoiceLine = 'Sales_x0020_Invoice_x0020_Line';
    public const PurchaseInvoice = 'Purchase_x0020_Invoice';
    public const PurchaseInvoiceLine = 'Purchase_x0020_Invoice_x0020_Line';
    public const GeneralLedgerEntry = 'General_x0020_Ledger_x0020_Entry';
    public const TimeRegistrationEntry = 'Time_x0020_Registration_x0020_Entry';
    public const SalesShipment = 'Sales_x0020_Shipment';
    public const SalesShipmentLine = 'Sales_x0020_Shipment_x0020_Line';
    public const PurchaseReceipt = 'Purchase_x0020_Receipt';
    public const PurchaseReceiptLine = 'Purchase_x0020_Receipt_x0020_Line';
    public const PurchaseOrder = 'Purchase_x0020_Order';
    public const PurchaseOrderLine = 'Purchase_x0020_Order_x0020_Line';
    public const PurchaseCreditMemo = 'Purchase_x0020_Credit_x0020_Memo';
    public const PurchaseCreditMemoLine = 'Purchase_x0020_Credit_x0020_Memo_x0020_Line';
}
