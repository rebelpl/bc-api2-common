<?php
namespace Rebel\BCApi2\Entity\CashFlowStatement;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getLineNumber(): ?int
    {
        return $this->get('lineNumber');
    }

    function getDisplay(): ?string
    {
        return $this->get('display');
    }

    function getNetChange(): ?float
    {
        return $this->get('netChange');
    }

    function getLineType(): ?string
    {
        return $this->get('lineType');
    }

    function getIndentation(): ?int
    {
        return $this->get('indentation');
    }
}
