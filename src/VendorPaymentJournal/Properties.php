<?php
namespace Rebel\BCApi2\Entity\VendorPaymentJournal;

enum Properties
{
    case id;
    case code;
    case displayName;
    case balancingAccountId;
    case balancingAccountNumber;
    case lastModifiedDateTime;
    case vendorPayments;
}
