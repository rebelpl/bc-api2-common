<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerSetup;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getAllowPostingFrom(): ?\DateTime
    {
        return $this->getAsDate(Properties::allowPostingFrom->name);
    }

    public function getAllowPostingTo(): ?\DateTime
    {
        return $this->getAsDate(Properties::allowPostingTo->name);
    }

    public function getAdditionalReportingCurrency(): ?string
    {
        return $this->get(Properties::additionalReportingCurrency->name);
    }

    public function getLocalCurrencyCode(): ?string
    {
        return $this->get(Properties::localCurrencyCode->name);
    }

    public function getLocalCurrencySymbol(): ?string
    {
        return $this->get(Properties::localCurrencySymbol->name);
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function isAllowQueryFromConsolidation(): ?bool
    {
        return $this->get(Properties::allowQueryFromConsolidation->name);
    }

    public function getShortcutDimension1Code(): ?string
    {
        return $this->get(Properties::shortcutDimension1Code->name);
    }

    public function getShortcutDimension2Code(): ?string
    {
        return $this->get(Properties::shortcutDimension2Code->name);
    }

    public function getShortcutDimension3Code(): ?string
    {
        return $this->get(Properties::shortcutDimension3Code->name);
    }

    public function getShortcutDimension4Code(): ?string
    {
        return $this->get(Properties::shortcutDimension4Code->name);
    }

    public function getShortcutDimension5Code(): ?string
    {
        return $this->get(Properties::shortcutDimension5Code->name);
    }

    public function getShortcutDimension6Code(): ?string
    {
        return $this->get(Properties::shortcutDimension6Code->name);
    }

    public function getShortcutDimension7Code(): ?string
    {
        return $this->get(Properties::shortcutDimension7Code->name);
    }

    public function getShortcutDimension8Code(): ?string
    {
        return $this->get(Properties::shortcutDimension8Code->name);
    }
}