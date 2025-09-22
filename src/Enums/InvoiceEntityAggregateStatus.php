<?php
namespace Rebel\BCApi2\Entity\Enums;

class InvoiceEntityAggregateStatus
{
    public const Null = '_x0020_';
    public const Draft = 'Draft';
    public const InReview = 'In_x0020_Review';
    public const Open = 'Open';
    public const Paid = 'Paid';
    public const Canceled = 'Canceled';
    public const Corrective = 'Corrective';
}
