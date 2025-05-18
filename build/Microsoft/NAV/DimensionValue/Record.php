<?php
namespace Microsoft\NAV\DimensionValue;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Dimension;

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

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->get(Properties::code->name);
    }

    public function setCode(?string $value): self
    {
        $this->set(Properties::code->name, $value);
        return $this;
    }

    public function getDimensionId(): ?string
    {
        return $this->get(Properties::dimensionId->name);
    }

    public function setDimensionId(?string $value): self
    {
        $this->set(Properties::dimensionId->name, $value);
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getConsolidationCode(): ?string
    {
        return $this->get(Properties::consolidationCode->name);
    }

    public function setConsolidationCode(?string $value): self
    {
        $this->set(Properties::consolidationCode->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function getDimension(): ?Dimension\Record
    {
        return $this->get(Properties::dimension->name);
    }
}