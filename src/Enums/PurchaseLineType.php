<?php
namespace Rebel\BCApi2\Entity\Enums;

class PurchaseLineType
{
    public const Null = '_x0020_';
    public const GLAccount = 'G_x002F_L_x0020_Account';
    public const Item = 'Item';
    public const Resource = 'Resource';
    public const FixedAsset = 'Fixed_x0020_Asset';
    public const ChargeItem = 'Charge_x0020__x0028_Item_x0029_';
    public const AllocationAccount = 'Allocation_x0020_Account';
}
