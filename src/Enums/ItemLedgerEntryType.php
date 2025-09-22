<?php
namespace Rebel\BCApi2\Entity\Enums;

class ItemLedgerEntryType
{
    public const Purchase = 'Purchase';
    public const Sale = 'Sale';
    public const PositiveAdjmt = 'Positive_x0020_Adjmt_x002E_';
    public const NegativeAdjmt = 'Negative_x0020_Adjmt_x002E_';
    public const Transfer = 'Transfer';
    public const Consumption = 'Consumption';
    public const Output = 'Output';
    public const Null = '_x0020_';
    public const AssemblyConsumption = 'Assembly_x0020_Consumption';
    public const AssemblyOutput = 'Assembly_x0020_Output';
}
