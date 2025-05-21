<?php
namespace Rebel\BCApi2\Entity\Enums;

enum GlAccountType: string
{
    case Posting = 'Posting';
    case Heading = 'Heading';
    case Total = 'Total';
    case BeginTotal = 'Begin_x002D_Total';
    case EndTotal = 'End_x002D_Total';
}
