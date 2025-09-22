<?php
namespace Rebel\BCApi2\Entity\ItemLedgerEntry;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getEntryNumber(): ?int
    {
        return $this->get('entryNumber');
    }

    function getItemNumber(): ?string
    {
        return $this->get('itemNumber');
    }

    function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    function getEntryType(): ?string
    {
        return $this->get('entryType');
    }

    function getSourceNumber(): ?string
    {
        return $this->get('sourceNumber');
    }

    function getSourceType(): ?string
    {
        return $this->get('sourceType');
    }

    function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    function getDocumentType(): ?string
    {
        return $this->get('documentType');
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    function getSalesAmountActual(): ?float
    {
        return $this->get('salesAmountActual');
    }

    function getCostAmountActual(): ?float
    {
        return $this->get('costAmountActual');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
