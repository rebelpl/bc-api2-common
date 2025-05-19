<?php
namespace Rebel\BCApi2\Entity\Project;

enum Properties
{
    case id;
    case number;
    case displayName;
    case lastModifiedDateTime;

    case documentAttachments;
}