<?php
namespace Rebel\BCApi2\Entity\RetainedEarningsStatement;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getLineNumber(): ?int
    {
        return $this->get(Properties::lineNumber->name);
    }

    public function getDisplay(): ?string
    {
        return $this->get(Properties::display->name);
    }

    public function getNetChange(): ?float
    {
        return $this->get(Properties::netChange->name);
    }

    public function getLineType(): ?string
    {
        return $this->get(Properties::lineType->name);
    }

    public function getIndentation(): ?int
    {
        return $this->get(Properties::indentation->name);
    }
}