<?php
namespace Rebel\BCApi2\Entity\Opportunity;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set => $this->set('number', $value);
        get => $this->get('number');
    }

    public ?string $contactNumber {
        set => $this->set('contactNumber', $value);
        get => $this->get('contactNumber');
    }

    public ?string $contactName {
        set => $this->set('contactName', $value);
        get => $this->get('contactName');
    }

    public ?string $contactCompanyName {
        set => $this->set('contactCompanyName', $value);
        get => $this->get('contactCompanyName');
    }

    public ?string $salespersonCode {
        set => $this->set('salespersonCode', $value);
        get => $this->get('salespersonCode');
    }

    public ?string $description {
        set => $this->set('description', $value);
        get => $this->get('description');
    }

    public ?Enums\OpportunityStatus $status {
        set => $this->set('status', $value);
        get => $this->getAsEnum('status', Enums\OpportunityStatus::class);
    }

    public ?bool $closed {
        set => $this->set('closed', $value);
        get => $this->get('closed');
    }

    public ?Carbon $creationDate {
        set => $this->setAsDateTime('creationDate', $value);
        get => $this->getAsDateTime('creationDate');
    }

    public ?Carbon $dateClosed {
        set => $this->setAsDateTime('dateClosed', $value);
        get => $this->getAsDateTime('dateClosed');
    }

    public ?float $calculatedCurrentValue {
        set => $this->set('calculatedCurrentValue', $value);
        get => $this->get('calculatedCurrentValue');
    }

    public ?float $chancesOfSuccessPrc {
        set => $this->set('chancesOfSuccessPrc', $value);
        get => $this->get('chancesOfSuccessPrc');
    }

    public ?float $completedPrc {
        set => $this->set('completedPrc', $value);
        get => $this->get('completedPrc');
    }

    public ?Carbon $estimatedClosingDate {
        set => $this->setAsDateTime('estimatedClosingDate', $value);
        get => $this->getAsDateTime('estimatedClosingDate');
    }

    public ?float $estimatedValue {
        set => $this->set('estimatedValue', $value);
        get => $this->get('estimatedValue');
    }

    public ?Carbon $systemCreatedAt {
        set => $this->setAsDateTime('systemCreatedAt', $value);
        get => $this->getAsDateTime('systemCreatedAt');
    }

    public ?Carbon $lastModifiedDateTime {
        set => $this->setAsDateTime('lastModifiedDateTime', $value);
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
        ];
    }
}
