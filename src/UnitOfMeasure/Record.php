<?php
namespace Rebel\BCApi2\Entity\UnitOfMeasure;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
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

    function getInternationalStandardCode(): ?string
    {
        return $this->get('internationalStandardCode');
    }

    function setInternationalStandardCode(?string $value): self
    {
        $this->set('internationalStandardCode', $value);
        return $this;
    }

    function getSymbol(): ?string
    {
        return $this->get('symbol');
    }

    function setSymbol(?string $value): self
    {
        $this->set('symbol', $value);
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
}
