<?php
namespace Rebel\BCApi2\Entity\Contact;

enum Properties
{
    case id;
    case number;
    case type;
    case displayName;
    case jobTitle;
    case companyNumber;
    case companyName;
    case contactBusinessRelation;
    case addressLine1;
    case addressLine2;
    case city;
    case state;
    case country;
    case postalCode;
    case phoneNumber;
    case mobilePhoneNumber;
    case email;
    case website;
    case searchName;
    case privacyBlocked;
    case taxRegistrationNumber;
    case lastInteractionDate;
    case lastModifiedDateTime;
    case contactInformation;
    case picture;
}
