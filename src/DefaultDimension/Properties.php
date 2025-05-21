<?php
namespace Rebel\BCApi2\Entity\DefaultDimension;

enum Properties
{
    case id;
    case parentType;
    case parentId;
    case dimensionId;
    case dimensionCode;
    case dimensionValueId;
    case dimensionValueCode;
    case postingValidation;
    case lastModifiedDateTime;
    case item;
    case account;
    case dimension;
    case dimensionValue;
    case customer;
    case vendor;
    case employee;
}
