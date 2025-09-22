<?php
namespace Rebel\BCApi2\Entity\Journal;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\JournalLine;

class Record extends Entity
{
    protected $classMap = ['journalLines' => JournalLine\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
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

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getTemplateDisplayName(): ?string
    {
        return $this->get('templateDisplayName');
    }

    function setTemplateDisplayName(?string $value): self
    {
        $this->set('templateDisplayName', $value);
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

    function getBalancingAccountId(): ?string
    {
        return $this->get('balancingAccountId');
    }

    function setBalancingAccountId(?string $value): self
    {
        $this->set('balancingAccountId', $value);
        return $this;
    }

    function getBalancingAccountNumber(): ?string
    {
        return $this->get('balancingAccountNumber');
    }

    function setBalancingAccountNumber(?string $value): self
    {
        $this->set('balancingAccountNumber', $value);
        return $this;
    }

    /**
     * @return Entity\Collection|JournalLine\Record[]
     */
    function getJournalLines(): Entity\Collection
    {
        return $this->getAsCollection('journalLines');
    }

    function doPost(Client $client): void
    {
        $this->doAction('Microsoft.NAV.post', $client);
    }
}
