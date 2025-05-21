<?php
namespace Rebel\BCApi2\Entity\PurchaseReceipt;

enum Properties
{
    case id;
    case number;
    case invoiceDate;
    case postingDate;
    case dueDate;
    case vendorNumber;
    case vendorName;
    case payToName;
    case payToContact;
    case payToVendorNumber;
    case shipToName;
    case shipToContact;
    case buyFromAddressLine1;
    case buyFromAddressLine2;
    case buyFromCity;
    case buyFromCountry;
    case buyFromState;
    case buyFromPostCode;
    case shipToAddressLine1;
    case shipToAddressLine2;
    case shipToCity;
    case shipToCountry;
    case shipToState;
    case shipToPostCode;
    case payToAddressLine1;
    case payToAddressLine2;
    case payToCity;
    case payToCountry;
    case payToState;
    case payToPostCode;
    case currencyCode;
    case orderNumber;
    case lastModifiedDateTime;
    case purchaseReceiptLines;
    case dimensionSetLines;
}
