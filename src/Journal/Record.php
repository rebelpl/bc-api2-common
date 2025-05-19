<?php
namespace Rebel\BCApi2\Entity\Journal;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\JournalLine;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::journalLines->name => JournalLine\Record::class,
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

    public function getDisplayName(): ?string
    {
        return $this->get(Properties::displayName->name);
    }

    public function setDisplayName(?string $value): self
    {
        $this->set(Properties::displayName->name, $value);
        return $this;
    }

    public function getTemplateDisplayName(): ?string
    {
        return $this->get(Properties::templateDisplayName->name);
    }

    public function setTemplateDisplayName(?string $value): self
    {
        $this->set(Properties::templateDisplayName->name, $value);
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

    public function getBalancingAccountId(): ?string
    {
        return $this->get(Properties::balancingAccountId->name);
    }

    public function setBalancingAccountId(?string $value): self
    {
        $this->set(Properties::balancingAccountId->name, $value);
        return $this;
    }

    public function getBalancingAccountNumber(): ?string
    {
        return $this->get(Properties::balancingAccountNumber->name);
    }

    public function setBalancingAccountNumber(?string $value): self
    {
        $this->set(Properties::balancingAccountNumber->name, $value);
        return $this;
    }

    /**
     * @return Entity\Collection<JournalLine\Record>
     */
    public function getJournalLines(): Entity\Collection
    {
        return $this->get(Properties::journalLines->name) ?? new Entity\Collection();
    }
}