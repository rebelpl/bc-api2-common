<?php
namespace Rebel\BCApi2\Entity\PurchaseOrderLine;

enum Properties
{
    case id;
    case documentId;
    case sequence;
    case itemId;
    case accountId;
    case lineType;
    case lineObjectNumber;
    case description;
    case description2;
    case unitOfMeasureId;
    case unitOfMeasureCode;
    case quantity;
    case directUnitCost;
    case discountAmount;
    case discountPercent;
    case discountAppliedBeforeTax;
    case amountExcludingTax;
    case taxCode;
    case taxPercent;
    case totalTaxAmount;
    case amountIncludingTax;
    case invoiceDiscountAllocation;
    case netAmount;
    case netTaxAmount;
    case netAmountIncludingTax;
    case expectedReceiptDate;
    case receivedQuantity;
    case invoicedQuantity;
    case invoiceQuantity;
    case receiveQuantity;
    case itemVariantId;
    case locationId;

    case purchaseOrder;
    case item;
    case account;
    case unitOfMeasure;
    case itemVariant;
    case dimensionSetLines;
    case location;
}