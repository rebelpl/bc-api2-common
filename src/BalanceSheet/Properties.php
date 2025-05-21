<?php
namespace Rebel\BCApi2\Entity\BalanceSheet;

enum Properties
{
    case id;
    case lineNumber;
    case display;
    case balance;
    case lineType;
    case indentation;
    case dateFilter;
}
