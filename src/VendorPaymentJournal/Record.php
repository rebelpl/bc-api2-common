<?php
namespace Rebel\BCApi2\Entity\VendorPaymentJournal;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\VendorPayment;

class Record extends Entity
{
    protected $classMap = ['vendorPayments' => VendorPayment\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getCode(): ?string
    {
        return $this->get('code');
    }

    function setCode(?string $value): self
    {
        $this->set('code', $value);
        return $this;
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function setDisplayName(?string $value): self
    {
        $this->set('displayName', $value);
        return $this;
    }

    function getBalancingAccountId(): ?string
    {
        return $this->get('balancingAccountId');
    }

    function setBalancingAccountId(?string $value): self
    {
        $this->set('balancingAccountId', $value);
        return $this;
    }

    function getBalancingAccountNumber(): ?string
    {
        return $this->get('balancingAccountNumber');
    }

    function setBalancingAccountNumber(?string $value): self
    {
        $this->set('balancingAccountNumber', $value);
        return $this;
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->setAsDateTime('lastModifiedDateTime', $value);
        return $this;
    }

    /**
     * @return Entity\Collection|VendorPayment\Record[]
     */
    function getVendorPayments(): Entity\Collection
    {
        return $this->getAsCollection('vendorPayments');
    }
}
