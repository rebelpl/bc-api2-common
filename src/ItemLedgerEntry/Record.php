<?php
namespace Rebel\BCApi2\Entity\ItemLedgerEntry;

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

    public function getEntryNumber(): ?int
    {
        return $this->get('entryNumber');
    }

    public function getItemNumber(): ?string
    {
        return $this->get('itemNumber');
    }

    public function getPostingDate(): ?Carbon
    {
        return $this->getAsDate('postingDate');
    }

    public function getEntryType(): ?string
    {
        return $this->get('entryType');
    }

    public function getSourceNumber(): ?string
    {
        return $this->get('sourceNumber');
    }

    public function getSourceType(): ?string
    {
        return $this->get('sourceType');
    }

    public function getDocumentNumber(): ?string
    {
        return $this->get('documentNumber');
    }

    public function getDocumentType(): ?string
    {
        return $this->get('documentType');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    public function getSalesAmountActual(): ?float
    {
        return $this->get('salesAmountActual');
    }

    public function getCostAmountActual(): ?float
    {
        return $this->get('costAmountActual');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }
}
