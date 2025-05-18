<?php
namespace Microsoft\NAV\CustomerContact;

enum Properties
{
    case id;
    case email;
    case firstName;
    case lastName;
    case professionalTitle;
    case customerId;
    case customerName;
    case primaryPhoneNumber;

    case pdfDocument;
}