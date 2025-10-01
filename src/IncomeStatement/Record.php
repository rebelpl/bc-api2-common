<?php
namespace Rebel\BCApi2\Entity\IncomeStatement;

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

    public function getLineNumber(): ?int
    {
        return $this->get('lineNumber');
    }

    public function getDisplay(): ?string
    {
        return $this->get('display');
    }

    public function getNetChange(): ?float
    {
        return $this->get('netChange');
    }

    public function getLineType(): ?string
    {
        return $this->get('lineType');
    }

    public function getIndentation(): ?int
    {
        return $this->get('indentation');
    }
}
