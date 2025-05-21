<?php
namespace Rebel\BCApi2\Entity\PaymentTerm;

enum Properties
{
    case id;
    case code;
    case displayName;
    case dueDateCalculation;
    case discountDateCalculation;
    case discountPercent;
    case calculateDiscountOnCreditMemos;
    case lastModifiedDateTime;
}
