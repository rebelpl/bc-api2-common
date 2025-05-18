<?php
namespace Microsoft\NAV\Subscriptions;

enum Properties
{
    case subscriptionId;
    case notificationUrl;
    case resource;
    case timestamp;
    case userId;
    case lastModifiedDateTime;
    case clientState;
    case expirationDateTime;
    case systemCreatedAt;
    case systemCreatedBy;
    case systemModifiedAt;
    case systemModifiedBy;

}