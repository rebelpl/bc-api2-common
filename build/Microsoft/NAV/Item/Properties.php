<?php
namespace Microsoft\NAV\Item;

enum Properties
{
    case id;
    case number;
    case displayName;
    case displayName2;
    case type;
    case itemCategoryId;
    case itemCategoryCode;
    case blocked;
    case gtin;
    case inventory;
    case unitPrice;
    case priceIncludesTax;
    case unitCost;
    case taxGroupId;
    case taxGroupCode;
    case baseUnitOfMeasureId;
    case baseUnitOfMeasureCode;
    case generalProductPostingGroupId;
    case generalProductPostingGroupCode;
    case inventoryPostingGroupId;
    case inventoryPostingGroupCode;
    case lastModifiedDateTime;

    case itemCategory;
    case inventoryPostingGroup;
    case generalProductPostingGroup;
    case unitOfMeasure;
    case picture;
    case defaultDimensions;
    case itemVariants;
    case documentAttachments;
}