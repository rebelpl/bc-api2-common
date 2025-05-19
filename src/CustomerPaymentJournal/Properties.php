<?php
namespace Rebel\BCApi2\Entity\CustomerPaymentJournal;

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