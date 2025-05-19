<?php
namespace Rebel\BCApi2\Entity\Enums;

enum DefaultDimensionParentType: string
{
    case Null = '_x0020_';
    case Customer = 'Customer';
    case Item = 'Item';
    case Vendor = 'Vendor';
    case Employee = 'Employee';
}