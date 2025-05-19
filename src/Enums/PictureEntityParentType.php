<?php
namespace Rebel\BCApi2\Entity\Enums;

enum PictureEntityParentType: string
{
    case Customer = 'Customer';
    case Item = 'Item';
    case Vendor = 'Vendor';
    case Employee = 'Employee';
    case Contact = 'Contact';
}