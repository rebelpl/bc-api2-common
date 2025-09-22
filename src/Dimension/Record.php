<?php
namespace Rebel\BCApi2\Entity\Dimension;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionValue;

class Record extends Entity
{
    protected $classMap = ['dimensionValues' => DimensionValue\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function getConsolidationCode(): ?string
    {
        return $this->get('consolidationCode');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    /**
     * @return Entity\Collection|DimensionValue\Record[]
     */
    function getDimensionValues(): Entity\Collection
    {
        return $this->getAsCollection('dimensionValues');
    }
}
