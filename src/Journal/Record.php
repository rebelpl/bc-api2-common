<?php
namespace Rebel\BCApi2\Entity\Journal;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\JournalLine;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['journalLines' => JournalLine\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
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

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    public function getTemplateDisplayName(): ?string
    {
        return $this->get('templateDisplayName');
    }

    public function setTemplateDisplayName(?string $value): self
    {
        $this->set('templateDisplayName', $value);
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

    public function getBalancingAccountId(): ?string
    {
        return $this->get('balancingAccountId');
    }

    public function setBalancingAccountId(?string $value): self
    {
        $this->set('balancingAccountId', $value);
        return $this;
    }

    public function getBalancingAccountNumber(): ?string
    {
        return $this->get('balancingAccountNumber');
    }

    public function setBalancingAccountNumber(?string $value): self
    {
        $this->set('balancingAccountNumber', $value);
        return $this;
    }

    /**
     * @return Entity\Collection|JournalLine\Record[]
     */
    public function getJournalLines(): Entity\Collection
    {
        return $this->getAsCollection('journalLines');
    }

    public function doPost(Client $client): void
    {
        $this->doAction('Microsoft.NAV.post', $client);
    }
}
