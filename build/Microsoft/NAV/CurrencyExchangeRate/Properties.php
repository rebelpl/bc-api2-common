<?php
namespace Microsoft\NAV\CurrencyExchangeRate;

enum Properties
{
    case id;
    case currencyCode;
    case startingDate;
    case exchangeRateAmount;
    case relationalCurrencyCode;
    case relationalExchangeRateAmount;
    case lastModifiedDateTime;

}