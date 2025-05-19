<?php
namespace Rebel\BCApi2\Entity\CurrencyExchangeRate;

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