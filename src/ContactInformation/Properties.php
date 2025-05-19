<?php
namespace Rebel\BCApi2\Entity\ContactInformation;

enum Properties
{
    case contactId;
    case contactNumber;
    case contactName;
    case contactType;
    case relatedId;
    case relatedType;

    case customer;
    case contact;
    case vendor;
}