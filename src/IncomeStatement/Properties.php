<?php
namespace Rebel\BCApi2\Entity\IncomeStatement;

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