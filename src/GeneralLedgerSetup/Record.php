<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerSetup;

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

    public function getAllowPostingFrom(): ?Carbon
    {
        return $this->getAsDate('allowPostingFrom');
    }

    public function getAllowPostingTo(): ?Carbon
    {
        return $this->getAsDate('allowPostingTo');
    }

    public function getAdditionalReportingCurrency(): ?string
    {
        return $this->get('additionalReportingCurrency');
    }

    public function getLocalCurrencyCode(): ?string
    {
        return $this->get('localCurrencyCode');
    }

    public function getLocalCurrencySymbol(): ?string
    {
        return $this->get('localCurrencySymbol');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function getAllowQueryFromConsolidation(): ?bool
    {
        return $this->get('allowQueryFromConsolidation');
    }

    public function getShortcutDimension1Code(): ?string
    {
        return $this->get('shortcutDimension1Code');
    }

    public function getShortcutDimension2Code(): ?string
    {
        return $this->get('shortcutDimension2Code');
    }

    public function getShortcutDimension3Code(): ?string
    {
        return $this->get('shortcutDimension3Code');
    }

    public function getShortcutDimension4Code(): ?string
    {
        return $this->get('shortcutDimension4Code');
    }

    public function getShortcutDimension5Code(): ?string
    {
        return $this->get('shortcutDimension5Code');
    }

    public function getShortcutDimension6Code(): ?string
    {
        return $this->get('shortcutDimension6Code');
    }

    public function getShortcutDimension7Code(): ?string
    {
        return $this->get('shortcutDimension7Code');
    }

    public function getShortcutDimension8Code(): ?string
    {
        return $this->get('shortcutDimension8Code');
    }
}
