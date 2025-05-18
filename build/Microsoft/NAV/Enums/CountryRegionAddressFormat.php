<?php
namespace Microsoft\NAV\Enums;

enum CountryRegionAddressFormat: string
{
    case PostCodeCity = 'Post_x0020_Code_x002B_City';
    case CityPostCode = 'City_x002B_Post_x0020_Code';
    case CityCountyPostCode = 'City_x002B_County_x002B_Post_x0020_Code';
    case BlankLinePostCodeCity = 'Blank_x0020_Line_x002B_Post_x0020_Code_x002B_City';
    case Custom = 'Custom';
}