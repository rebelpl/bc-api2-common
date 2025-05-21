<?php
namespace Rebel\BCApi2\Entity\VendorPurchase;

enum Properties
{
    case vendorId;
    case vendorNumber;
    case name;
    case totalPurchaseAmount;
    case dateFilter_FilterOnly;
}
