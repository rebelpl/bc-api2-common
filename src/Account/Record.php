<?php
namespace Rebel\BCApi2\Entity\Account;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\TrialBalance;

class Record extends Entity
{
    protected $primaryKey = 'id';
    protected $classMap = ['trialBalance' => TrialBalance\Record::class];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function getDisplayName(): ?string
    {
        return $this->get('displayName');
    }

    public function getCategory(): ?string
    {
        return $this->get('category');
    }

    public function getSubCategory(): ?string
    {
        return $this->get('subCategory');
    }

    public function getBlocked(): ?bool
    {
        return $this->get('blocked');
    }

    public function getAccountType(): ?string
    {
        return $this->get('accountType');
    }

    public function getDirectPosting(): ?bool
    {
        return $this->get('directPosting');
    }

    public function getNetChange(): ?float
    {
        return $this->get('netChange');
    }

    public function getConsolidationTranslationMethod(): ?string
    {
        return $this->get('consolidationTranslationMethod');
    }

    public function getConsolidationDebitAccount(): ?string
    {
        return $this->get('consolidationDebitAccount');
    }

    public function getConsolidationCreditAccount(): ?string
    {
        return $this->get('consolidationCreditAccount');
    }

    public function getExcludeFromConsolidation(): ?bool
    {
        return $this->get('excludeFromConsolidation');
    }

    public function getLastModifiedDateTime(): ?Carbon
    {
        return $this->getAsDateTime('lastModifiedDateTime');
    }

    public function getTrialBalance(): ?TrialBalance\Record
    {
        return $this->getAsRelation('trialBalance');
    }
}
