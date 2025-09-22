<?php
namespace Rebel\BCApi2\Entity\Enums;

class CountryRegionAddressFormat
{
    public const PostCodeCity = 'Post_x0020_Code_x002B_City';
    public const CityPostCode = 'City_x002B_Post_x0020_Code';
    public const CityCountyPostCode = 'City_x002B_County_x002B_Post_x0020_Code';
    public const BlankLinePostCodeCity = 'Blank_x0020_Line_x002B_Post_x0020_Code_x002B_City';
    public const Custom = 'Custom';
}
