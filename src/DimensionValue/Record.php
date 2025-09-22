<?php
namespace Rebel\BCApi2\Entity\DimensionValue;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Dimension;

class Record extends Entity
{
    protected $classMap = ['dimension' => Dimension\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function getDimensionId(): ?string
    {
        return $this->get('dimensionId');
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

    function getDimension(): ?Dimension\Record
    {
        return $this->get('dimension');
    }
}
