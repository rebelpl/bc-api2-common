<?php
namespace Rebel\BCApi2\Entity\VendorPurchase;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    protected $primaryKey = 'vendorId';

    public function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    public function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getTotalPurchaseAmount(): ?float
    {
        return $this->get('totalPurchaseAmount');
    }
}
