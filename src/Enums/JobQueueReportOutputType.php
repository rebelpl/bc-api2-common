<?php
namespace Rebel\BCApi2\Entity\Enums;

enum JobQueueReportOutputType: string
{
    case PDF = 'PDF';
    case Word = 'Word';
    case Excel = 'Excel';
    case Print = 'Print';
    case NoneProcessingonly = 'None_x0020__x0028_Processing_x0020_only_x0029_';
}