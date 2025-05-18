<?php
namespace Microsoft\NAV\Customer;

enum Properties
{
    case id;
    case number;
    case displayName;
    case type;
    case addressLine1;
    case addressLine2;
    case city;
    case state;
    case country;
    case postalCode;
    case phoneNumber;
    case email;
    case website;
    case salespersonCode;
    case balanceDue;
    case creditLimit;
    case taxLiable;
    case taxAreaId;
    case taxAreaDisplayName;
    case taxRegistrationNumber;
    case currencyId;
    case currencyCode;
    case paymentTermsId;
    case shipmentMethodId;
    case paymentMethodId;
    case blocked;
    case lastModifiedDateTime;

    case currency;
    case paymentTerm;
    case shipmentMethod;
    case paymentMethod;
    case customerFinancialDetail;
    case picture;
    case defaultDimensions;
    case agedAccountsReceivable;
    case contactsInformation;
    case documentAttachments;
}