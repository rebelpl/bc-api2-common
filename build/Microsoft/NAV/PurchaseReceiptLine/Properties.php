<?php
namespace Microsoft\NAV\PurchaseReceiptLine;

enum Properties
{
    case id;
    case documentId;
    case sequence;
    case lineType;
    case lineObjectNumber;
    case description;
    case description2;
    case unitOfMeasureCode;
    case unitCost;
    case quantity;
    case discountPercent;
    case taxPercent;
    case expectedReceiptDate;

    case purchaseReceipt;
    case dimensionSetLines;
}