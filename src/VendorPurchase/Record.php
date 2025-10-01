<?php
namespace Rebel\BCApi2\Entity\VendorPurchase;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'vendorId';

    public ?string $vendorId {
        get => $this->get('vendorId');
    }

    public ?string $vendorNumber {
        get => $this->get('vendorNumber');
    }

    public ?string $name {
        get => $this->get('name');
    }

    public ?float $totalPurchaseAmount {
        get => $this->get('totalPurchaseAmount');
    }
}
