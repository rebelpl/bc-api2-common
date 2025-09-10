<?php
namespace Rebel\BCApi2\Entity\Customer;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\AgedAccountsReceivable;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\CustomerFinancialDetail;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PaymentMethod;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\ShipmentMethod;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set { $this->set('number', $value); }
        get => $this->get('number');
    }

    public ?string $displayName {
        set { $this->set('displayName', $value); }
        get => $this->get('displayName');
    }

    public ?Enums\ContactType $type {
        set { $this->set('type', $value); }
        get => $this->getAsEnum('type', Enums\ContactType::class);
    }

    public ?string $addressLine1 {
        set { $this->set('addressLine1', $value); }
        get => $this->get('addressLine1');
    }

    public ?string $addressLine2 {
        set { $this->set('addressLine2', $value); }
        get => $this->get('addressLine2');
    }

    public ?string $city {
        set { $this->set('city', $value); }
        get => $this->get('city');
    }

    public ?string $state {
        set { $this->set('state', $value); }
        get => $this->get('state');
    }

    public ?string $country {
        set { $this->set('country', $value); }
        get => $this->get('country');
    }

    public ?string $postalCode {
        set { $this->set('postalCode', $value); }
        get => $this->get('postalCode');
    }

    public ?string $phoneNumber {
        set { $this->set('phoneNumber', $value); }
        get => $this->get('phoneNumber');
    }

    public ?string $email {
        set { $this->set('email', $value); }
        get => $this->get('email');
    }

    public ?string $website {
        set { $this->set('website', $value); }
        get => $this->get('website');
    }

    public ?string $salespersonCode {
        set { $this->set('salespersonCode', $value); }
        get => $this->get('salespersonCode');
    }

    public ?float $balanceDue {
        set { $this->set('balanceDue', $value); }
        get => $this->get('balanceDue');
    }

    public ?float $creditLimit {
        set { $this->set('creditLimit', $value); }
        get => $this->get('creditLimit');
    }

    public ?bool $taxLiable {
        set { $this->set('taxLiable', $value); }
        get => $this->get('taxLiable');
    }

    public ?string $taxAreaId {
        set { $this->set('taxAreaId', $value); }
        get => $this->get('taxAreaId');
    }

    public ?string $taxAreaDisplayName {
        set { $this->set('taxAreaDisplayName', $value); }
        get => $this->get('taxAreaDisplayName');
    }

    public ?string $taxRegistrationNumber {
        set { $this->set('taxRegistrationNumber', $value); }
        get => $this->get('taxRegistrationNumber');
    }

    public ?string $currencyId {
        set { $this->set('currencyId', $value); }
        get => $this->get('currencyId');
    }

    public ?string $currencyCode {
        set { $this->set('currencyCode', $value); }
        get => $this->get('currencyCode');
    }

    public ?string $paymentTermsId {
        set { $this->set('paymentTermsId', $value); }
        get => $this->get('paymentTermsId');
    }

    public ?string $shipmentMethodId {
        set { $this->set('shipmentMethodId', $value); }
        get => $this->get('shipmentMethodId');
    }

    public ?string $paymentMethodId {
        set { $this->set('paymentMethodId', $value); }
        get => $this->get('paymentMethodId');
    }

    public ?Enums\CustomerBlocked $blocked {
        set { $this->set('blocked', $value); }
        get => $this->getAsEnum('blocked', Enums\CustomerBlocked::class);
    }

    public ?Carbon $lastModifiedDateTime {
        set { $this->setAsDateTime('lastModifiedDateTime', $value); }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Currency\Record $currency {
        get => $this->get('currency');
    }

    public ?PaymentTerm\Record $paymentTerm {
        get => $this->get('paymentTerm');
    }

    public ?ShipmentMethod\Record $shipmentMethod {
        get => $this->get('shipmentMethod');
    }

    public ?PaymentMethod\Record $paymentMethod {
        get => $this->get('paymentMethod');
    }

    public ?CustomerFinancialDetail\Record $customerFinancialDetail {
        get => $this->get('customerFinancialDetail');
    }

    public ?Picture\Record $picture {
        get => $this->get('picture');
    }

    /** @var ?Entity\Collection<DefaultDimension\Record> */
    public ?Entity\Collection $defaultDimensions {
        get => $this->get('defaultDimensions', 'collection');
    }

    public ?AgedAccountsReceivable\Record $agedAccountsReceivable {
        get => $this->get('agedAccountsReceivable');
    }

    /** @var ?Entity\Collection<ContactInformation\Record> */
    public ?Entity\Collection $contactsInformation {
        get => $this->get('contactsInformation', 'collection');
    }

    /** @var ?Entity\Collection<DocumentAttachment\Record> */
    public ?Entity\Collection $documentAttachments {
        get => $this->get('documentAttachments', 'collection');
    }

    protected array $classMap = [
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'shipmentMethod' => ShipmentMethod\Record::class,
        'paymentMethod' => PaymentMethod\Record::class,
        'customerFinancialDetail' => CustomerFinancialDetail\Record::class,
        'picture' => Picture\Record::class,
        'defaultDimensions' => DefaultDimension\Record::class,
        'agedAccountsReceivable' => AgedAccountsReceivable\Record::class,
        'contactsInformation' => ContactInformation\Record::class,
        'documentAttachments' => DocumentAttachment\Record::class,
    ];
}
