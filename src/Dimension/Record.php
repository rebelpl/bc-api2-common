<?php
namespace Rebel\BCApi2\Entity\Dimension;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionValue;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['dimensionValues' => DimensionValue\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function getConsolidationCode(): ?string
    {
        return $this->get('consolidationCode');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    /**
     * @return Entity\Collection|DimensionValue\Record[]
     */
    public function getDimensionValues(): Entity\Collection
    {
        return $this->getAsCollection('dimensionValues');
    }
}
