<?php
namespace Microsoft\NAV\Currency;

enum Properties
{
    case id;
    case code;
    case displayName;
    case symbol;
    case amountDecimalPlaces;
    case amountRoundingPrecision;
    case lastModifiedDateTime;

}