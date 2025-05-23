<?php
namespace Rebel\BCApi2\Entity\Dimension;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $code {
        get => $this->get('code');
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

    /** @var ?Entity\Collection<DimensionValue\Record> */
    public ?Entity\Collection $dimensionValues {
        get => $this->get('dimensionValues', 'collection');
    }

    protected array $classMap = ['dimensionValues' => DimensionValue\Record::class];
}
