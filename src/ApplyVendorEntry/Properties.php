<?php
namespace Rebel\BCApi2\Entity\ApplyVendorEntry;

enum Properties
{
    case id;
    case applied;
    case appliesToId;
    case postingDate;
    case documentType;
    case documentNumber;
    case externalDocumentNumber;
    case vendorNumber;
    case vendorName;
    case description;
    case remainingAmount;
    case lastModifiedDateTime;
}
