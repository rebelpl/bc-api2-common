<?php
namespace Rebel\BCApi2\Entity\CustomerFinancialDetail;

enum Properties
{
    case id;
    case number;
    case balance;
    case totalSalesExcludingTax;
    case overdueAmount;
    case lastModifiedDateTime;
    case customer;
}
