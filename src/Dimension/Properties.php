<?php
namespace Rebel\BCApi2\Entity\Dimension;

enum Properties
{
    case id;
    case code;
    case displayName;
    case consolidationCode;
    case lastModifiedDateTime;

    case dimensionValues;
}