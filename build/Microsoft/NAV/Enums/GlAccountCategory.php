<?php
namespace Microsoft\NAV\Enums;

enum GlAccountCategory: string
{
    case Null = '_x0020_';
    case Assets = 'Assets';
    case Liabilities = 'Liabilities';
    case Equity = 'Equity';
    case Income = 'Income';
    case CostofGoodsSold = 'Cost_x0020_of_x0020_Goods_x0020_Sold';
    case Expense = 'Expense';
}