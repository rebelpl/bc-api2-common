<?php
namespace Microsoft\NAV\FixedAsset;

enum Properties
{
    case id;
    case number;
    case displayName;
    case fixedAssetLocationCode;
    case fixedAssetLocationId;
    case classCode;
    case subclassCode;
    case blocked;
    case serialNumber;
    case employeeNumber;
    case employeeId;
    case underMaintenance;
    case lastModifiedDateTime;

    case fixedAssetLocation;
    case employee;
}