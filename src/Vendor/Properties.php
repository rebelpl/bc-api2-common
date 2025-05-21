<?php
namespace Rebel\BCApi2\Entity\Vendor;

enum Properties
{
    case id;
    case number;
    case displayName;
    case addressLine1;
    case addressLine2;
    case city;
    case state;
    case country;
    case postalCode;
    case phoneNumber;
    case email;
    case website;
    case taxRegistrationNumber;
    case currencyId;
    case currencyCode;
    case irs1099Code;
    case paymentTermsId;
    case paymentMethodId;
    case taxLiable;
    case blocked;
    case balance;
    case lastModifiedDateTime;
    case currency;
    case paymentTerm;
    case paymentMethod;
    case picture;
    case defaultDimensions;
    case agedAccountsPayable;
    case contactsInformation;
    case documentAttachments;
}
