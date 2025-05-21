<?php
namespace Rebel\BCApi2\Entity\CompanyInformation;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $displayName {
        set => $this->set('displayName', $value);
        get => $this->get('displayName');
    }

    public ?string $addressLine1 {
        set => $this->set('addressLine1', $value);
        get => $this->get('addressLine1');
    }

    public ?string $addressLine2 {
        set => $this->set('addressLine2', $value);
        get => $this->get('addressLine2');
    }

    public ?string $city {
        set => $this->set('city', $value);
        get => $this->get('city');
    }

    public ?string $state {
        set => $this->set('state', $value);
        get => $this->get('state');
    }

    public ?string $country {
        set => $this->set('country', $value);
        get => $this->get('country');
    }

    public ?string $postalCode {
        set => $this->set('postalCode', $value);
        get => $this->get('postalCode');
    }

    public ?string $phoneNumber {
        set => $this->set('phoneNumber', $value);
        get => $this->get('phoneNumber');
    }

    public ?string $faxNumber {
        set => $this->set('faxNumber', $value);
        get => $this->get('faxNumber');
    }

    public ?string $email {
        set => $this->set('email', $value);
        get => $this->get('email');
    }

    public ?string $website {
        set => $this->set('website', $value);
        get => $this->get('website');
    }

    public ?string $taxRegistrationNumber {
        set => $this->set('taxRegistrationNumber', $value);
        get => $this->get('taxRegistrationNumber');
    }

    public ?string $currencyCode {
        set => $this->set('currencyCode', $value);
        get => $this->get('currencyCode');
    }

    public ?Carbon $currentFiscalYearStartDate {
        set => $this->setAsDateTime('currentFiscalYearStartDate', $value);
        get => $this->getAsDateTime('currentFiscalYearStartDate');
    }

    public ?string $industry {
        set => $this->set('industry', $value);
        get => $this->get('industry');
    }

    public ?string $picture {
        set => $this->set('picture', $value);
        get => $this->get('picture');
    }

    public ?string $experience {
        set => $this->set('experience', $value);
        get => $this->get('experience');
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
