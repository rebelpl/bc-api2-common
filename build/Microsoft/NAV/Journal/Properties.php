<?php
namespace Microsoft\NAV\Journal;

enum Properties
{
    case id;
    case code;
    case displayName;
    case templateDisplayName;
    case lastModifiedDateTime;
    case balancingAccountId;
    case balancingAccountNumber;

    case journalLines;
}