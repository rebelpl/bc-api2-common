<?php
namespace Rebel\BCApi2\Entity\AccountingPeriod;

enum Properties
{
    case id;
    case startingDate;
    case name;
    case newFiscalYear;
    case closed;
    case dateLocked;
    case lastModifiedDateTime;
}
