<?php
namespace Rebel\BCApi2\Entity\Enums;

enum ItemLedgerDocumentType: string
{
    case Null = '_x0020_';
    case SalesShipment = 'Sales_x0020_Shipment';
    case SalesInvoice = 'Sales_x0020_Invoice';
    case SalesReturnReceipt = 'Sales_x0020_Return_x0020_Receipt';
    case SalesCreditMemo = 'Sales_x0020_Credit_x0020_Memo';
    case PurchaseReceipt = 'Purchase_x0020_Receipt';
    case PurchaseInvoice = 'Purchase_x0020_Invoice';
    case PurchaseReturnShipment = 'Purchase_x0020_Return_x0020_Shipment';
    case PurchaseCreditMemo = 'Purchase_x0020_Credit_x0020_Memo';
    case TransferShipment = 'Transfer_x0020_Shipment';
    case TransferReceipt = 'Transfer_x0020_Receipt';
    case ServiceShipment = 'Service_x0020_Shipment';
    case ServiceInvoice = 'Service_x0020_Invoice';
    case ServiceCreditMemo = 'Service_x0020_Credit_x0020_Memo';
    case PostedAssembly = 'Posted_x0020_Assembly';
    case InventoryReceipt = 'Inventory_x0020_Receipt';
    case InventoryShipment = 'Inventory_x0020_Shipment';
    case DirectTransfer = 'Direct_x0020_Transfer';
}
