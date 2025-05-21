<?php
namespace Rebel\BCApi2\Entity\Enums;

enum SalesCrMemoEntityBufferStatus: string
{
    case Draft = 'Draft';
    case InReview = 'In_x0020_Review';
    case Open = 'Open';
    case Canceled = 'Canceled';
    case Corrective = 'Corrective';
    case Paid = 'Paid';
}
