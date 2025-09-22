<?php
namespace Rebel\BCApi2\Entity\SalespersonPurchaser;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
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

    function getEmail(): ?string
    {
        return $this->get('email');
    }

    function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    function getEmail2(): ?string
    {
        return $this->get('email2');
    }

    function setEmail2(?string $value): self
    {
        $this->set('email2', $value);
        return $this;
    }

    function getPhoneNo(): ?string
    {
        return $this->get('phoneNo');
    }

    function setPhoneNo(?string $value): self
    {
        $this->set('phoneNo', $value);
        return $this;
    }

    function getJobTitle(): ?string
    {
        return $this->get('jobTitle');
    }

    function setJobTitle(?string $value): self
    {
        $this->set('jobTitle', $value);
        return $this;
    }

    function getCommisionPercent(): ?float
    {
        return $this->get('commisionPercent');
    }

    function setCommisionPercent(?float $value): self
    {
        $this->set('commisionPercent', $value);
        return $this;
    }

    function getPrivacyBlocked(): ?bool
    {
        return $this->get('privacyBlocked');
    }

    function setPrivacyBlocked(?bool $value): self
    {
        $this->set('privacyBlocked', $value);
        return $this;
    }

    function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
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
