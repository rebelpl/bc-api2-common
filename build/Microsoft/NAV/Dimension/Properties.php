<?php
namespace Microsoft\NAV\Dimension;

enum Properties
{
    case id;
    case code;
    case displayName;
    case consolidationCode;
    case lastModifiedDateTime;

    case dimensionValues;
}