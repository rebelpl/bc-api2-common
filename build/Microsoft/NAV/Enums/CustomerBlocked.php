<?php
namespace Microsoft\NAV\Enums;

enum CustomerBlocked: string
{
    case Null = '_x0020_';
    case Ship = 'Ship';
    case Invoice = 'Invoice';
    case All = 'All';
}