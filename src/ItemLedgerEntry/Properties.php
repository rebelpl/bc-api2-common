<?php
namespace Rebel\BCApi2\Entity\ItemLedgerEntry;

enum Properties
{
    case id;
    case entryNumber;
    case itemNumber;
    case postingDate;
    case entryType;
    case sourceNumber;
    case sourceType;
    case documentNumber;
    case documentType;
    case description;
    case quantity;
    case salesAmountActual;
    case costAmountActual;
    case lastModifiedDateTime;

}