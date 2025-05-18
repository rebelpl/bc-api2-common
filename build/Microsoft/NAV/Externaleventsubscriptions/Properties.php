<?php
namespace Microsoft\NAV\Externaleventsubscriptions;

enum Properties
{
    case id;
    case companyId;
    case timestamp;
    case appId;
    case eventName;
    case companyName;
    case userId;
    case notificationUrl;
    case lastModifiedDateTime;
    case clientState;
    case subscriptionType;
    case eventVersion;
    case subscriptionState;
    case systemCreatedAt;
    case systemCreatedBy;
    case systemModifiedAt;
    case systemModifiedBy;

}