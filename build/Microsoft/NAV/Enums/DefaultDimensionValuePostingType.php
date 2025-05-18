<?php
namespace Microsoft\NAV\Enums;

enum DefaultDimensionValuePostingType: string
{
    case Null = '_x0020_';
    case CodeMandatory = 'Code_x0020_Mandatory';
    case SameCode = 'Same_x0020_Code';
    case NoCode = 'No_x0020_Code';
}