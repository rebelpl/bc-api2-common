<?php
namespace Rebel\BCApi2\Entity\Enums;

enum JobQueuePriority: string
{
    case High = 'High';
    case Normal = 'Normal';
    case Low = 'Low';
}