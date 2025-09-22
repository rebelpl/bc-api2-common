<?php
namespace Rebel\BCApi2\Entity\BalanceSheet;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?int $lineNumber {
        get => $this->get('lineNumber');
    }

    public ?string $display {
        get => $this->get('display');
    }

    public ?float $balance {
        get => $this->get('balance');
    }

    public ?string $lineType {
        get => $this->get('lineType');
    }

    public ?int $indentation {
        get => $this->get('indentation');
    }
}
