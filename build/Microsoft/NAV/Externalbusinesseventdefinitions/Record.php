<?php
namespace Microsoft\NAV\Externalbusinesseventdefinitions;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getAppId(): ?string
    {
        return $this->get(Properties::appId->name);
    }

    public function setAppId(?string $value): self
    {
        $this->set(Properties::appId->name, $value);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->get(Properties::name->name);
    }

    public function setName(?string $value): self
    {
        $this->set(Properties::name->name, $value);
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

    public function getPayload(): ?string
    {
        return $this->get(Properties::payload->name);
    }

    public function setPayload(?string $value): self
    {
        $this->set(Properties::payload->name, $value);
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

    public function getDescription(): ?string
    {
        return $this->get(Properties::description->name);
    }

    public function setDescription(?string $value): self
    {
        $this->set(Properties::description->name, $value);
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->get(Properties::category->name);
    }

    public function setCategory(?string $value): self
    {
        $this->set(Properties::category->name, $value);
        return $this;
    }

    public function getAppName(): ?string
    {
        return $this->get(Properties::appName->name);
    }

    public function setAppName(?string $value): self
    {
        $this->set(Properties::appName->name, $value);
        return $this;
    }

    public function getAppPublisher(): ?string
    {
        return $this->get(Properties::appPublisher->name);
    }

    public function setAppPublisher(?string $value): self
    {
        $this->set(Properties::appPublisher->name, $value);
        return $this;
    }

    public function getAppVersion(): ?string
    {
        return $this->get(Properties::appVersion->name);
    }

    public function setAppVersion(?string $value): self
    {
        $this->set(Properties::appVersion->name, $value);
        return $this;
    }
}