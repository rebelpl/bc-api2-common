<?php
namespace Microsoft\NAV\Enums;

enum ItemType: string
{
    case Inventory = 'Inventory';
    case Service = 'Service';
    case NonInventory = 'Non_x002D_Inventory';
}