<?php
namespace Rebel\BCApi2\Entity\AgedAccountsPayable;

enum Properties
{
    case vendorId;
    case vendorNumber;
    case name;
    case currencyCode;
    case balanceDue;
    case currentAmount;
    case period1Amount;
    case period2Amount;
    case period3Amount;
    case agedAsOfDate;
    case periodLengthFilter;
    case vendor;
}
