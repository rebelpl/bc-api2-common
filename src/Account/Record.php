<?php
namespace Rebel\BCApi2\Entity\Account;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\TrialBalance;

class Record extends Entity
{
    protected $classMap = ['trialBalance' => TrialBalance\Record::class];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getNumber(): ?string
    {
        return $this->get('number');
    }

    function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    function getCategory(): ?string
    {
        return $this->get('category');
    }

    function getSubCategory(): ?string
    {
        return $this->get('subCategory');
    }

    function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    function getAccountType(): ?string
    {
        return $this->get('accountType');
    }

    function getDirectPosting(): ?bool
    {
        return $this->get('directPosting');
    }

    function getNetChange(): ?float
    {
        return $this->get('netChange');
    }

    function getConsolidationTranslationMethod(): ?string
    {
        return $this->get('consolidationTranslationMethod');
    }

    function getConsolidationDebitAccount(): ?string
    {
        return $this->get('consolidationDebitAccount');
    }

    function getConsolidationCreditAccount(): ?string
    {
        return $this->get('consolidationCreditAccount');
    }

    function getExcludeFromConsolidation(): ?bool
    {
        return $this->get('excludeFromConsolidation');
    }

    function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    function getTrialBalance(): ?TrialBalance\Record
    {
        return $this->getAsRelation('trialBalance');
    }
}
