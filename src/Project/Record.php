<?php
namespace Rebel\BCApi2\Entity\Project;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set {
            $this->set('number', $value);
        }
        get => $this->get('number');
    }

    public ?string $displayName {
        set {
            $this->set('displayName', $value);
        }
        get => $this->get('displayName');
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    /** @var Entity\Collection<DocumentAttachment\Record> */
    public Entity\Collection $documentAttachments {
        get => $this->getAsCollection('documentAttachments');
    }

    protected array $classMap = ['documentAttachments' => DocumentAttachment\Record::class];
}
