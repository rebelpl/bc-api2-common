<?php
namespace Microsoft\NAV\PurchaseCreditMemoLine;

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
    case unitOfMeasureId;
    case unitOfMeasureCode;
    case unitCost;
    case quantity;
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
    case itemVariantId;
    case locationId;

    case purchaseCreditMemo;
    case item;
    case account;
    case unitOfMeasure;
    case itemVariant;
    case dimensionSetLines;
    case location;
}