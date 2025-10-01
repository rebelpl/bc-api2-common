<?php
namespace Rebel\BCApi2\Entity\SalespersonPurchaser;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'id';

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

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function setEmail(?string $value): self
    {
        $this->set('email', $value);
        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->get('email2');
    }

    public function setEmail2(?string $value): self
    {
        $this->set('email2', $value);
        return $this;
    }

    public function getPhoneNo(): ?string
    {
        return $this->get('phoneNo');
    }

    public function setPhoneNo(?string $value): self
    {
        $this->set('phoneNo', $value);
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->get('jobTitle');
    }

    public function setJobTitle(?string $value): self
    {
        $this->set('jobTitle', $value);
        return $this;
    }

    public function getCommisionPercent(): ?float
    {
        return $this->get('commisionPercent');
    }

    public function setCommisionPercent(?float $value): self
    {
        $this->set('commisionPercent', $value);
        return $this;
    }

    public function getPrivacyBlocked(): ?bool
    {
        return $this->get('privacyBlocked');
    }

    public function setPrivacyBlocked(?bool $value): self
    {
        $this->set('privacyBlocked', $value);
        return $this;
    }

    public function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    public function setBlocked(?bool $value): self
    {
        $this->set('blocked', $value);
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
}
