<?php
namespace Rebel\BCApi2\Entity\Dimension;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionValue;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::dimensionValues->name => DimensionValue\Record::class,
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

    /**
     * @return Entity\Collection<DimensionValue\Record>
     */
    public function getDimensionValues(): Entity\Collection
    {
        return $this->get(Properties::dimensionValues->name) ?? new Entity\Collection();
    }
}