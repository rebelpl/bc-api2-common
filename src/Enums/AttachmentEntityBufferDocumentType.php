<?php
namespace Rebel\BCApi2\Entity\Enums;

enum AttachmentEntityBufferDocumentType: string
{
    case Null = '_x0020_';
    case Journal = 'Journal';
    case SalesOrder = 'Sales_x0020_Order';
    case SalesQuote = 'Sales_x0020_Quote';
    case SalesCreditMemo = 'Sales_x0020_Credit_x0020_Memo';
    case SalesInvoice = 'Sales_x0020_Invoice';
    case PurchaseInvoice = 'Purchase_x0020_Invoice';
    case PurchaseOrder = 'Purchase_x0020_Order';
    case Employee = 'Employee';
    case Job = 'Job';
    case Item = 'Item';
    case Customer = 'Customer';
    case Vendor = 'Vendor';
    case PurchaseCreditMemo = 'Purchase_x0020_Credit_x0020_Memo';
    case CustomerStatement = 'Customer_x0020_Statement';
}
