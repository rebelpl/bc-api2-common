<?php
namespace Rebel\BCApi2\Entity\DimensionValue;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Dimension;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::dimension->name => Dimension\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getCode(): ?string
    {
        return $this->get(Properties::code->name);
    }

    public function getDimensionId(): ?string
    {
        return $this->get(Properties::dimensionId->name);
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function getConsolidationCode(): ?string
    {
        return $this->get(Properties::consolidationCode->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function getDimension(): ?Dimension\Record
    {
        return $this->get(Properties::dimension->name);
    }
}