<?php
namespace Rebel\BCApi2\Entity\Enums;

enum ItemType: string
{
    case Inventory = 'Inventory';
    case Service = 'Service';
    case NonInventory = 'Non_x002D_Inventory';
}