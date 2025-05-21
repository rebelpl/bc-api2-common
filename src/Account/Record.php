<?php
namespace Rebel\BCApi2\Entity\Account;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\TrialBalance;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        get => $this->get('number');
    }

    public ?string $displayName {
        get => $this->get('displayName');
    }

    public ?Enums\GlAccountCategory $category {
        get => $this->getAsEnum('category', Enums\GlAccountCategory::class);
    }

    public ?string $subCategory {
        get => $this->get('subCategory');
    }

    public ?bool $blocked {
        get => $this->get('blocked');
    }

    public ?Enums\GlAccountType $accountType {
        get => $this->getAsEnum('accountType', Enums\GlAccountType::class);
    }

    public ?bool $directPosting {
        get => $this->get('directPosting');
    }

    public ?float $netChange {
        get => $this->get('netChange');
    }

    public ?string $consolidationTranslationMethod {
        get => $this->get('consolidationTranslationMethod');
    }

    public ?string $consolidationDebitAccount {
        get => $this->get('consolidationDebitAccount');
    }

    public ?string $consolidationCreditAccount {
        get => $this->get('consolidationCreditAccount');
    }

    public ?bool $excludeFromConsolidation {
        get => $this->get('excludeFromConsolidation');
    }

    public ?Carbon $lastModifiedDateTime {
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    /** @var ?TrialBalance\Record */
    public ?TrialBalance\Record $trialBalance {
        get => $this->get('trialBalance');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'trialBalance' => TrialBalance\Record::class,
        ];
    }
}
