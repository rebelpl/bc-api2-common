<?php
namespace Microsoft\NAV\RetainedEarningsStatement;

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

    public function getLineNumber(): ?int
    {
        return $this->get(Properties::lineNumber->name);
    }

    public function setLineNumber(?int $value): self
    {
        $this->set(Properties::lineNumber->name, $value);
        return $this;
    }

    public function getDisplay(): ?string
    {
        return $this->get(Properties::display->name);
    }

    public function setDisplay(?string $value): self
    {
        $this->set(Properties::display->name, $value);
        return $this;
    }

    public function getNetChange(): ?float
    {
        return $this->get(Properties::netChange->name);
    }

    public function setNetChange(?float $value): self
    {
        $this->set(Properties::netChange->name, $value);
        return $this;
    }

    public function getLineType(): ?string
    {
        return $this->get(Properties::lineType->name);
    }

    public function setLineType(?string $value): self
    {
        $this->set(Properties::lineType->name, $value);
        return $this;
    }

    public function getIndentation(): ?int
    {
        return $this->get(Properties::indentation->name);
    }

    public function setIndentation(?int $value): self
    {
        $this->set(Properties::indentation->name, $value);
        return $this;
    }
}