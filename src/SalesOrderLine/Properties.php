<?php
namespace Rebel\BCApi2\Entity\SalesOrderLine;

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
    case unitPrice;
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
    case shipmentDate;
    case shippedQuantity;
    case invoicedQuantity;
    case invoiceQuantity;
    case shipQuantity;
    case itemVariantId;
    case locationId;
    case salesOrder;
    case item;
    case account;
    case unitOfMeasure;
    case itemVariant;
    case dimensionSetLines;
    case location;
}
