<?php
namespace Rebel\BCApi2\Entity\DimensionValue;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Dimension;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['dimension' => Dimension\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function getDimensionId(): ?string
    {
        return $this->get('dimensionId');
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

    public function getDimension(): ?Dimension\Record
    {
        return $this->getAsRelation('dimension');
    }
}
