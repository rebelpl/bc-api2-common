<?php
namespace Microsoft\NAV\Enums;

enum SalesQuoteEntityBufferStatus: string
{
    case Draft = 'Draft';
    case Sent = 'Sent';
    case Accepted = 'Accepted';
    case Expired = 'Expired_x0020_';
}