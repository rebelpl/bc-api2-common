<?php
namespace Rebel\BCApi2\Entity\BalanceSheet;

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

    public function getBalance(): ?float
    {
        return $this->get('balance');
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
