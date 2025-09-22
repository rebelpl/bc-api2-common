<?php
namespace Rebel\BCApi2\Entity\ItemVariant;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Item;

class Record extends Entity
{
    protected $classMap = ['item' => Item\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getItemId(): ?string
    {
        return $this->get('itemId');
    }

    function setItemId(?string $value): self
    {
        $this->set('itemId', $value);
        return $this;
    }

    function getItemNumber(): ?string
    {
        return $this->get('itemNumber');
    }

    function setItemNumber(?string $value): self
    {
        $this->set('itemNumber', $value);
        return $this;
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function setDescription(?string $value): self
    {
        $this->set('description', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    function getItem(): ?Item\Record
    {
        return $this->get('item');
    }
}
