<?php
namespace Rebel\BCApi2\Entity\AccountingPeriod;

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

    public function getStartingDate(): ?Carbon
    {
        return $this->getAsDate('startingDate');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getNewFiscalYear(): ?bool
    {
        return $this->get('newFiscalYear');
    }

    public function getClosed(): ?bool
    {
        return $this->get('closed');
    }

    public function getDateLocked(): ?bool
    {
        return $this->get('dateLocked');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
