<?php
namespace Microsoft\NAV\Picture;

enum Properties
{
    case id;
    case parentType;
    case width;
    case height;
    case contentType;
    case pictureContent;

    case item;
    case customer;
    case contact;
    case vendor;
    case employee;
}