<?php
namespace Rebel\BCApi2\Entity\VendorPurchase;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getVendorId(): ?string
    {
        return $this->get('vendorId');
    }

    function getVendorNumber(): ?string
    {
        return $this->get('vendorNumber');
    }

    function getName(): ?string
    {
        return $this->get('name');
    }

    function getTotalPurchaseAmount(): ?float
    {
        return $this->get('totalPurchaseAmount');
    }
}
