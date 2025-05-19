<?php
namespace Rebel\BCApi2\Entity\Enums;

enum TaxBufferType: string
{
    case SalesTax = 'Sales_x0020_Tax';
    case VAT = 'VAT';
}