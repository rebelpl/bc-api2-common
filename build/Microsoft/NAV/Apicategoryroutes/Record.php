<?php
namespace Microsoft\NAV\Apicategoryroutes;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getRoute(): ?string
    {
        return $this->get(Properties::route->name);
    }

    public function setRoute(?string $value): self
    {
        $this->set(Properties::route->name, $value);
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->get(Properties::publisher->name);
    }

    public function setPublisher(?string $value): self
    {
        $this->set(Properties::publisher->name, $value);
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->get(Properties::group->name);
    }

    public function setGroup(?string $value): self
    {
        $this->set(Properties::group->name, $value);
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->get(Properties::version->name);
    }

    public function setVersion(?string $value): self
    {
        $this->set(Properties::version->name, $value);
        return $this;
    }
}