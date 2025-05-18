<?php
namespace Microsoft\NAV\Enums;

enum OpportunityStatus: string
{
    case NotStarted = 'Not_x0020_Started';
    case InProgress = 'In_x0020_Progress';
    case Won = 'Won';
    case Lost = 'Lost';
}