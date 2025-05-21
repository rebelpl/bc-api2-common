<?php
namespace Rebel\BCApi2\Entity\Enums;

enum ItemLedgerEntryType: string
{
    case Purchase = 'Purchase';
    case Sale = 'Sale';
    case PositiveAdjmt = 'Positive_x0020_Adjmt_x002E_';
    case NegativeAdjmt = 'Negative_x0020_Adjmt_x002E_';
    case Transfer = 'Transfer';
    case Consumption = 'Consumption';
    case Output = 'Output';
    case Null = '_x0020_';
    case AssemblyConsumption = 'Assembly_x0020_Consumption';
    case AssemblyOutput = 'Assembly_x0020_Output';
}
