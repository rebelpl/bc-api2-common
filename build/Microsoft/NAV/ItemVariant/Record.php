<?php
namespace Microsoft\NAV\ItemVariant;

use Rebel\BCApi2\Entity;
use Microsoft\NAV\Item;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::item->name => Item\Record::class,
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

    public function getItemId(): ?string
    {
        return $this->get(Properties::itemId->name);
    }

    public function setItemId(?string $value): self
    {
        $this->set(Properties::itemId->name, $value);
        return $this;
    }

    public function getItemNumber(): ?string
    {
        return $this->get(Properties::itemNumber->name);
    }

    public function setItemNumber(?string $value): self
    {
        $this->set(Properties::itemNumber->name, $value);
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

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
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

    public function getItem(): ?Item\Record
    {
        return $this->get(Properties::item->name);
    }
}