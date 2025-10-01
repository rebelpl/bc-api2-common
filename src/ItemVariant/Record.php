<?php
namespace Rebel\BCApi2\Entity\ItemVariant;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Item;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['item' => Item\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getItemId(): ?string
    {
        return $this->get('itemId');
    }

    public function setItemId(?string $value): self
    {
        $this->set('itemId', $value);
        return $this;
    }

    public function getItemNumber(): ?string
    {
        return $this->get('itemNumber');
    }

    public function setItemNumber(?string $value): self
    {
        $this->set('itemNumber', $value);
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->get('code');
    }

    public function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function setDescription(?string $value): self
    {
        $this->set('description', $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    public function getItem(): ?Item\Record
    {
        return $this->getAsRelation('item');
    }
}
