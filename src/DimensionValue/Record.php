<?php
namespace Rebel\BCApi2\Entity\DimensionValue;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Dimension;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        get => $this->get('code');
    }

    public ?string $dimensionId {
        get => $this->get('dimensionId');
    }

    public ?string $displayName {
        get => $this->get('displayName');
    }

    public ?string $consolidationCode {
        get => $this->get('consolidationCode');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Dimension\Record $dimension {
        get => $this->getAsRelation('dimension');
    }

    protected array $classMap = ['dimension' => Dimension\Record::class];
}
