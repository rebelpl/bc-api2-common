<?php
namespace Rebel\BCApi2\Entity\Enums;

enum PurchaseLineType: string
{
    case Null = '_x0020_';
    case GLAccount = 'G_x002F_L_x0020_Account';
    case Item = 'Item';
    case Resource = 'Resource';
    case FixedAsset = 'Fixed_x0020_Asset';
    case ChargeItem = 'Charge_x0020__x0028_Item_x0029_';
    case AllocationAccount = 'Allocation_x0020_Account';
}