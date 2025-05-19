<?php
namespace Rebel\BCApi2\Entity\Location;

enum Properties
{
    case id;
    case code;
    case displayName;
    case contact;
    case addressLine1;
    case addressLine2;
    case city;
    case state;
    case country;
    case postalCode;
    case phoneNumber;
    case email;
    case website;
    case lastModifiedDateTime;

}