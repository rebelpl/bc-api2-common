<?php
namespace Microsoft\NAV\Subscriptions;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getSubscriptionId(): ?string
    {
        return $this->get(Properties::subscriptionId->name);
    }

    public function setSubscriptionId(?string $value): self
    {
        $this->set(Properties::subscriptionId->name, $value);
        return $this;
    }

    public function getNotificationUrl(): ?string
    {
        return $this->get(Properties::notificationUrl->name);
    }

    public function setNotificationUrl(?string $value): self
    {
        $this->set(Properties::notificationUrl->name, $value);
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->get(Properties::resource->name);
    }

    public function setResource(?string $value): self
    {
        $this->set(Properties::resource->name, $value);
        return $this;
    }

    public function getTimestamp(): ?int
    {
        return $this->get(Properties::timestamp->name);
    }

    public function setTimestamp(?int $value): self
    {
        $this->set(Properties::timestamp->name, $value);
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->get(Properties::userId->name);
    }

    public function setUserId(?string $value): self
    {
        $this->set(Properties::userId->name, $value);
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

    public function getClientState(): ?string
    {
        return $this->get(Properties::clientState->name);
    }

    public function setClientState(?string $value): self
    {
        $this->set(Properties::clientState->name, $value);
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::expirationDateTime->name);
    }

    public function setExpirationDateTime(?\DateTime $value): self
    {
        $this->set(Properties::expirationDateTime->name, $value);
        return $this;
    }

    public function getSystemCreatedAt(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::systemCreatedAt->name);
    }

    public function setSystemCreatedAt(?\DateTime $value): self
    {
        $this->set(Properties::systemCreatedAt->name, $value);
        return $this;
    }

    public function getSystemCreatedBy(): ?string
    {
        return $this->get(Properties::systemCreatedBy->name);
    }

    public function setSystemCreatedBy(?string $value): self
    {
        $this->set(Properties::systemCreatedBy->name, $value);
        return $this;
    }

    public function getSystemModifiedAt(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::systemModifiedAt->name);
    }

    public function setSystemModifiedAt(?\DateTime $value): self
    {
        $this->set(Properties::systemModifiedAt->name, $value);
        return $this;
    }

    public function getSystemModifiedBy(): ?string
    {
        return $this->get(Properties::systemModifiedBy->name);
    }

    public function setSystemModifiedBy(?string $value): self
    {
        $this->set(Properties::systemModifiedBy->name, $value);
        return $this;
    }
}