<?php
namespace Microsoft\NAV\Enums;

enum InvoiceLineAggLineType: string
{
    case Comment = 'Comment';
    case Account = 'Account';
    case Item = 'Item';
    case Resource = 'Resource';
    case FixedAsset = 'Fixed_x0020_Asset';
    case Charge = 'Charge';
    case AllocationAccount = 'Allocation_x0020_Account';
}