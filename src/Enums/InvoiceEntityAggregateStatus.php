<?php
namespace Rebel\BCApi2\Entity\Enums;

enum InvoiceEntityAggregateStatus: string
{
    case Null = '_x0020_';
    case Draft = 'Draft';
    case InReview = 'In_x0020_Review';
    case Open = 'Open';
    case Paid = 'Paid';
    case Canceled = 'Canceled';
    case Corrective = 'Corrective';
}
