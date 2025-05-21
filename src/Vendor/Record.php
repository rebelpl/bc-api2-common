<?php
namespace Rebel\BCApi2\Entity\Vendor;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\AgedAccountsPayable;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PaymentMethod;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\Picture;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set => $this->set('number', $value);
        get => $this->get('number');
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

    public ?string $currencyId {
        set => $this->set('currencyId', $value);
        get => $this->get('currencyId');
    }

    public ?string $currencyCode {
        set => $this->set('currencyCode', $value);
        get => $this->get('currencyCode');
    }

    public ?string $irs1099Code {
        set => $this->set('irs1099Code', $value);
        get => $this->get('irs1099Code');
    }

    public ?string $paymentTermsId {
        set => $this->set('paymentTermsId', $value);
        get => $this->get('paymentTermsId');
    }

    public ?string $paymentMethodId {
        set => $this->set('paymentMethodId', $value);
        get => $this->get('paymentMethodId');
    }

    public ?bool $taxLiable {
        set => $this->set('taxLiable', $value);
        get => $this->get('taxLiable');
    }

    public ?Enums\VendorBlocked $blocked {
        set => $this->set('blocked', $value);
        get => $this->getAsEnum('blocked', Enums\VendorBlocked::class);
    }

    public ?float $balance {
        set => $this->set('balance', $value);
        get => $this->get('balance');
    }

    public ?Carbon $lastModifiedDateTime {
        set => $this->setAsDateTime('lastModifiedDateTime', $value);
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    /** @var ?Currency\Record */
    public ?Currency\Record $currency {
        get => $this->get('currency');
    }

    /** @var ?PaymentTerm\Record */
    public ?PaymentTerm\Record $paymentTerm {
        get => $this->get('paymentTerm');
    }

    /** @var ?PaymentMethod\Record */
    public ?PaymentMethod\Record $paymentMethod {
        get => $this->get('paymentMethod');
    }

    /** @var ?Picture\Record */
    public ?Picture\Record $picture {
        get => $this->get('picture');
    }

    /** @var ?Entity\Collection<DefaultDimension\Record> */
    public ?Entity\Collection $defaultDimensions {
        get => $this->get('defaultDimensions');
    }

    /** @var ?AgedAccountsPayable\Record */
    public ?AgedAccountsPayable\Record $agedAccountsPayable {
        get => $this->get('agedAccountsPayable');
    }

    /** @var ?Entity\Collection<ContactInformation\Record> */
    public ?Entity\Collection $contactsInformation {
        get => $this->get('contactsInformation');
    }

    /** @var ?Entity\Collection<DocumentAttachment\Record> */
    public ?Entity\Collection $documentAttachments {
        get => $this->get('documentAttachments');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'currency' => Currency\Record::class,
            'paymentTerm' => PaymentTerm\Record::class,
            'paymentMethod' => PaymentMethod\Record::class,
            'picture' => Picture\Record::class,
            'defaultDimensions' => DefaultDimension\Record::class,
            'agedAccountsPayable' => AgedAccountsPayable\Record::class,
            'contactsInformation' => ContactInformation\Record::class,
            'documentAttachments' => DocumentAttachment\Record::class,
        ];
    }
}
