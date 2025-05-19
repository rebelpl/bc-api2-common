<?php
namespace Rebel\BCApi2\Entity\CashFlowStatement;

enum Properties
{
    case id;
    case lineNumber;
    case display;
    case netChange;
    case lineType;
    case indentation;
    case dateFilter;

}