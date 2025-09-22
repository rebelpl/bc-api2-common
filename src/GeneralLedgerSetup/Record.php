<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerSetup;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;

class Record extends Entity
{
    function getId(): ?string
    {
        return $this->get('id');
    }

    function getAllowPostingFrom(): ?Carbon
    {
        return $this->getAsDate('allowPostingFrom');
    }

    function getAllowPostingTo(): ?Carbon
    {
        return $this->getAsDate('allowPostingTo');
    }

    function getAdditionalReportingCurrency(): ?string
    {
        return $this->get('additionalReportingCurrency');
    }

    function getLocalCurrencyCode(): ?string
    {
        return $this->get('localCurrencyCode');
    }

    function getLocalCurrencySymbol(): ?string
    {
        return $this->get('localCurrencySymbol');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function getAllowQueryFromConsolidation(): ?bool
    {
        return $this->get('allowQueryFromConsolidation');
    }

    function getShortcutDimension1Code(): ?string
    {
        return $this->get('shortcutDimension1Code');
    }

    function getShortcutDimension2Code(): ?string
    {
        return $this->get('shortcutDimension2Code');
    }

    function getShortcutDimension3Code(): ?string
    {
        return $this->get('shortcutDimension3Code');
    }

    function getShortcutDimension4Code(): ?string
    {
        return $this->get('shortcutDimension4Code');
    }

    function getShortcutDimension5Code(): ?string
    {
        return $this->get('shortcutDimension5Code');
    }

    function getShortcutDimension6Code(): ?string
    {
        return $this->get('shortcutDimension6Code');
    }

    function getShortcutDimension7Code(): ?string
    {
        return $this->get('shortcutDimension7Code');
    }

    function getShortcutDimension8Code(): ?string
    {
        return $this->get('shortcutDimension8Code');
    }
}
