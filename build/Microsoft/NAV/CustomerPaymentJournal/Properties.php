<?php
namespace Microsoft\NAV\CustomerPaymentJournal;

enum Properties
{
    case id;
    case code;
    case displayName;
    case lastModifiedDateTime;
    case balancingAccountId;
    case balancingAccountNumber;

    case customerPayments;
}