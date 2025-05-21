<?php
namespace Rebel\BCApi2\Entity\Enums;

enum SalesOrderEntityBufferStatus: string
{
    case Draft = 'Draft';
    case InReview = 'In_x0020_Review';
    case Open = 'Open';
}
