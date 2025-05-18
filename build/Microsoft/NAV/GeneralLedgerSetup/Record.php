<?php
namespace Microsoft\NAV\GeneralLedgerSetup;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function setId(?string $value): self
    {
        $this->set(Properties::id->name, $value);
        return $this;
    }

    public function getAllowPostingFrom(): ?\DateTime
    {
        return $this->getAsDate(Properties::allowPostingFrom->name);
    }

    public function setAllowPostingFrom(?\DateTime $value): self
    {
        $this->set(Properties::allowPostingFrom->name, $value);
        return $this;
    }

    public function getAllowPostingTo(): ?\DateTime
    {
        return $this->getAsDate(Properties::allowPostingTo->name);
    }

    public function setAllowPostingTo(?\DateTime $value): self
    {
        $this->set(Properties::allowPostingTo->name, $value);
        return $this;
    }

    public function getAdditionalReportingCurrency(): ?string
    {
        return $this->get(Properties::additionalReportingCurrency->name);
    }

    public function setAdditionalReportingCurrency(?string $value): self
    {
        $this->set(Properties::additionalReportingCurrency->name, $value);
        return $this;
    }

    public function getLocalCurrencyCode(): ?string
    {
        return $this->get(Properties::localCurrencyCode->name);
    }

    public function setLocalCurrencyCode(?string $value): self
    {
        $this->set(Properties::localCurrencyCode->name, $value);
        return $this;
    }

    public function getLocalCurrencySymbol(): ?string
    {
        return $this->get(Properties::localCurrencySymbol->name);
    }

    public function setLocalCurrencySymbol(?string $value): self
    {
        $this->set(Properties::localCurrencySymbol->name, $value);
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->getAsDateTime(Properties::lastModifiedDateTime->name);
    }

    public function setLastModifiedDateTime(?\DateTime $value): self
    {
        $this->set(Properties::lastModifiedDateTime->name, $value);
        return $this;
    }

    public function isAllowQueryFromConsolidation(): ?bool
    {
        return $this->get(Properties::allowQueryFromConsolidation->name);
    }

    public function setAllowQueryFromConsolidation(?bool $value): self
    {
        $this->set(Properties::allowQueryFromConsolidation->name, $value);
        return $this;
    }

    public function getShortcutDimension1Code(): ?string
    {
        return $this->get(Properties::shortcutDimension1Code->name);
    }

    public function setShortcutDimension1Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension1Code->name, $value);
        return $this;
    }

    public function getShortcutDimension2Code(): ?string
    {
        return $this->get(Properties::shortcutDimension2Code->name);
    }

    public function setShortcutDimension2Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension2Code->name, $value);
        return $this;
    }

    public function getShortcutDimension3Code(): ?string
    {
        return $this->get(Properties::shortcutDimension3Code->name);
    }

    public function setShortcutDimension3Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension3Code->name, $value);
        return $this;
    }

    public function getShortcutDimension4Code(): ?string
    {
        return $this->get(Properties::shortcutDimension4Code->name);
    }

    public function setShortcutDimension4Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension4Code->name, $value);
        return $this;
    }

    public function getShortcutDimension5Code(): ?string
    {
        return $this->get(Properties::shortcutDimension5Code->name);
    }

    public function setShortcutDimension5Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension5Code->name, $value);
        return $this;
    }

    public function getShortcutDimension6Code(): ?string
    {
        return $this->get(Properties::shortcutDimension6Code->name);
    }

    public function setShortcutDimension6Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension6Code->name, $value);
        return $this;
    }

    public function getShortcutDimension7Code(): ?string
    {
        return $this->get(Properties::shortcutDimension7Code->name);
    }

    public function setShortcutDimension7Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension7Code->name, $value);
        return $this;
    }

    public function getShortcutDimension8Code(): ?string
    {
        return $this->get(Properties::shortcutDimension8Code->name);
    }

    public function setShortcutDimension8Code(?string $value): self
    {
        $this->set(Properties::shortcutDimension8Code->name, $value);
        return $this;
    }
}