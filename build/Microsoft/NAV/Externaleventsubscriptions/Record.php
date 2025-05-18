<?php
namespace Microsoft\NAV\Externaleventsubscriptions;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getCompanyId(): ?string
    {
        return $this->get(Properties::companyId->name);
    }

    public function setCompanyId(?string $value): self
    {
        $this->set(Properties::companyId->name, $value);
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

    public function getAppId(): ?string
    {
        return $this->get(Properties::appId->name);
    }

    public function setAppId(?string $value): self
    {
        $this->set(Properties::appId->name, $value);
        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->get(Properties::eventName->name);
    }

    public function setEventName(?string $value): self
    {
        $this->set(Properties::eventName->name, $value);
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->get(Properties::companyName->name);
    }

    public function setCompanyName(?string $value): self
    {
        $this->set(Properties::companyName->name, $value);
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

    public function getNotificationUrl(): ?string
    {
        return $this->get(Properties::notificationUrl->name);
    }

    public function setNotificationUrl(?string $value): self
    {
        $this->set(Properties::notificationUrl->name, $value);
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

    public function getSubscriptionType(): ?string
    {
        return $this->get(Properties::subscriptionType->name);
    }

    public function setSubscriptionType(?string $value): self
    {
        $this->set(Properties::subscriptionType->name, $value);
        return $this;
    }

    public function getEventVersion(): ?string
    {
        return $this->get(Properties::eventVersion->name);
    }

    public function setEventVersion(?string $value): self
    {
        $this->set(Properties::eventVersion->name, $value);
        return $this;
    }

    public function getSubscriptionState(): ?string
    {
        return $this->get(Properties::subscriptionState->name);
    }

    public function setSubscriptionState(?string $value): self
    {
        $this->set(Properties::subscriptionState->name, $value);
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