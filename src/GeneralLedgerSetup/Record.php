<?php
namespace Rebel\BCApi2\Entity\GeneralLedgerSetup;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?Carbon $allowPostingFrom {
        get => $this->getAsDate('allowPostingFrom');
    }

    public ?Carbon $allowPostingTo {
        get => $this->getAsDate('allowPostingTo');
    }

    public ?string $additionalReportingCurrency {
        get => $this->get('additionalReportingCurrency');
    }

    public ?string $localCurrencyCode {
        get => $this->get('localCurrencyCode');
    }

    public ?string $localCurrencySymbol {
        get => $this->get('localCurrencySymbol');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?bool $allowQueryFromConsolidation {
        get => $this->get('allowQueryFromConsolidation');
    }

    public ?string $shortcutDimension1Code {
        get => $this->get('shortcutDimension1Code');
    }

    public ?string $shortcutDimension2Code {
        get => $this->get('shortcutDimension2Code');
    }

    public ?string $shortcutDimension3Code {
        get => $this->get('shortcutDimension3Code');
    }

    public ?string $shortcutDimension4Code {
        get => $this->get('shortcutDimension4Code');
    }

    public ?string $shortcutDimension5Code {
        get => $this->get('shortcutDimension5Code');
    }

    public ?string $shortcutDimension6Code {
        get => $this->get('shortcutDimension6Code');
    }

    public ?string $shortcutDimension7Code {
        get => $this->get('shortcutDimension7Code');
    }

    public ?string $shortcutDimension8Code {
        get => $this->get('shortcutDimension8Code');
    }
}
