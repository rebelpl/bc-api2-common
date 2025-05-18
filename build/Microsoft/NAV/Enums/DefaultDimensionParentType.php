<?php
namespace Microsoft\NAV\Enums;

enum DefaultDimensionParentType: string
{
    case Null = '_x0020_';
    case Customer = 'Customer';
    case Item = 'Item';
    case Vendor = 'Vendor';
    case Employee = 'Employee';
}