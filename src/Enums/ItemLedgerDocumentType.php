<?php
namespace Rebel\BCApi2\Entity\Enums;

class ItemLedgerDocumentType
{
    public const Null = '_x0020_';
    public const SalesShipment = 'Sales_x0020_Shipment';
    public const SalesInvoice = 'Sales_x0020_Invoice';
    public const SalesReturnReceipt = 'Sales_x0020_Return_x0020_Receipt';
    public const SalesCreditMemo = 'Sales_x0020_Credit_x0020_Memo';
    public const PurchaseReceipt = 'Purchase_x0020_Receipt';
    public const PurchaseInvoice = 'Purchase_x0020_Invoice';
    public const PurchaseReturnShipment = 'Purchase_x0020_Return_x0020_Shipment';
    public const PurchaseCreditMemo = 'Purchase_x0020_Credit_x0020_Memo';
    public const TransferShipment = 'Transfer_x0020_Shipment';
    public const TransferReceipt = 'Transfer_x0020_Receipt';
    public const ServiceShipment = 'Service_x0020_Shipment';
    public const ServiceInvoice = 'Service_x0020_Invoice';
    public const ServiceCreditMemo = 'Service_x0020_Credit_x0020_Memo';
    public const PostedAssembly = 'Posted_x0020_Assembly';
    public const InventoryReceipt = 'Inventory_x0020_Receipt';
    public const InventoryShipment = 'Inventory_x0020_Shipment';
    public const DirectTransfer = 'Direct_x0020_Transfer';
}
