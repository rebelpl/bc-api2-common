<?php
namespace Rebel\BCApi2\Entity\Enums;

enum AnalysisSourceType: string
{
    case Null = '_x0020_';
    case Customer = 'Customer';
    case Vendor = 'Vendor';
    case Item = 'Item';
}