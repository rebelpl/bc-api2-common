<?php
namespace Rebel\BCApi2\Entity\SalesShipmentLine;

enum Properties
{
    case id;
    case documentId;
    case documentNo;
    case sequence;
    case lineType;
    case lineObjectNumber;
    case description;
    case description2;
    case unitOfMeasureCode;
    case unitPrice;
    case quantity;
    case discountPercent;
    case taxPercent;
    case shipmentDate;

    case salesShipment;
    case dimensionSetLines;
}