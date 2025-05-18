<?php
namespace Microsoft\NAV\CompanyInformation;

enum Properties
{
    case id;
    case displayName;
    case addressLine1;
    case addressLine2;
    case city;
    case state;
    case country;
    case postalCode;
    case phoneNumber;
    case faxNumber;
    case email;
    case website;
    case taxRegistrationNumber;
    case currencyCode;
    case currentFiscalYearStartDate;
    case industry;
    case picture;
    case experience;
    case lastModifiedDateTime;

}