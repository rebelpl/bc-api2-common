<?php
namespace Rebel\BCApi2\Entity\Project;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DocumentAttachment;

class Record extends Entity
{
    protected $classMap = ['documentAttachments' => DocumentAttachment\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function setNumber(?string $value): self
    {
        $this->set('number', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
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

    /**
     * @return Entity\Collection|DocumentAttachment\Record[]
     */
    function getDocumentAttachments(): Entity\Collection
    {
        return $this->getAsCollection('documentAttachments');
    }
}
