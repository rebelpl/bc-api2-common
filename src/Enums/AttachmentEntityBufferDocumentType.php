<?php
namespace Rebel\BCApi2\Entity\Enums;

class AttachmentEntityBufferDocumentType
{
    public const Null = '_x0020_';
    public const Journal = 'Journal';
    public const SalesOrder = 'Sales_x0020_Order';
    public const SalesQuote = 'Sales_x0020_Quote';
    public const SalesCreditMemo = 'Sales_x0020_Credit_x0020_Memo';
    public const SalesInvoice = 'Sales_x0020_Invoice';
    public const PurchaseInvoice = 'Purchase_x0020_Invoice';
    public const PurchaseOrder = 'Purchase_x0020_Order';
    public const Employee = 'Employee';
    public const Job = 'Job';
    public const Item = 'Item';
    public const Customer = 'Customer';
    public const Vendor = 'Vendor';
    public const PurchaseCreditMemo = 'Purchase_x0020_Credit_x0020_Memo';
    public const CustomerStatement = 'Customer_x0020_Statement';
}
