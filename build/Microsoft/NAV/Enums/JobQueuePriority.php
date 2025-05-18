<?php
namespace Microsoft\NAV\Enums;

enum JobQueuePriority: string
{
    case High = 'High';
    case Normal = 'Normal';
    case Low = 'Low';
}