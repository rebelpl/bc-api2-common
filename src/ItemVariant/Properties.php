<?php
namespace Rebel\BCApi2\Entity\ItemVariant;

enum Properties
{
    case id;
    case itemId;
    case itemNumber;
    case code;
    case description;
    case lastModifiedDateTime;

    case item;
}