<?php
namespace Rebel\BCApi2\Entity\Enums;

enum SalesQuoteEntityBufferStatus: string
{
    case Draft = 'Draft';
    case Sent = 'Sent';
    case Accepted = 'Accepted';
    case Expired = 'Expired_x0020_';
}
