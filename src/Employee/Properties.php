<?php
namespace Rebel\BCApi2\Entity\Employee;

enum Properties
{
    case id;
    case number;
    case displayName;
    case givenName;
    case middleName;
    case surname;
    case jobTitle;
    case addressLine1;
    case addressLine2;
    case city;
    case state;
    case country;
    case postalCode;
    case phoneNumber;
    case mobilePhone;
    case email;
    case personalEmail;
    case employmentDate;
    case terminationDate;
    case status;
    case birthDate;
    case statisticsGroupCode;
    case lastModifiedDateTime;
    case picture;
    case defaultDimensions;
    case timeRegistrationEntries;
    case documentAttachments;
}
