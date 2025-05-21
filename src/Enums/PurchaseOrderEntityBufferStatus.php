<?php
namespace Rebel\BCApi2\Entity\Enums;

enum PurchaseOrderEntityBufferStatus: string
{
    case Draft = 'Draft';
    case InReview = 'In_x0020_Review';
    case Open = 'Open';
}
