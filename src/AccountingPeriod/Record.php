<?php
namespace Rebel\BCApi2\Entity\AccountingPeriod;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getStartingDate(): ?Carbon
    {
        return $this->getAsDate('startingDate');
    }

    function getName(): ?string
    {
        return $this->get('name');
    }

    function getNewFiscalYear(): ?bool
    {
        return $this->get('newFiscalYear');
    }

    function getClosed(): ?bool
    {
        return $this->get('closed');
    }

    function getDateLocked(): ?bool
    {
        return $this->get('dateLocked');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
