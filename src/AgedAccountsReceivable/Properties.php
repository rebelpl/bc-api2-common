<?php
namespace Rebel\BCApi2\Entity\AgedAccountsReceivable;

enum Properties
{
    case customerId;
    case customerNumber;
    case name;
    case currencyCode;
    case balanceDue;
    case currentAmount;
    case period1Label;
    case period1Amount;
    case period2Label;
    case period2Amount;
    case period3Label;
    case period3Amount;
    case agedAsOfDate;
    case periodLengthFilter;
    case customer;
}
