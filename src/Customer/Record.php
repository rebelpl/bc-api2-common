<?php
namespace Rebel\BCApi2\Entity\Customer;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\ShipmentMethod;
use Rebel\BCApi2\Entity\PaymentMethod;
use Rebel\BCApi2\Entity\CustomerFinancialDetail;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\AgedAccountsReceivable;
use Rebel\BCApi2\Entity\ContactInformation;
use Rebel\BCApi2\Entity\DocumentAttachment;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $number {
		get => $this->get('number');
		set => $this->set('number', $value);
	}

	public ?string $displayName {
		get => $this->get('displayName');
		set => $this->set('displayName', $value);
	}

	public ?Enums\ContactType $type {
		get => $this->get('type', Enums\ContactType::class);
		set => $this->set('type', $value);
	}

	public ?string $addressLine1 {
		get => $this->get('addressLine1');
		set => $this->set('addressLine1', $value);
	}

	public ?string $addressLine2 {
		get => $this->get('addressLine2');
		set => $this->set('addressLine2', $value);
	}

	public ?string $city {
		get => $this->get('city');
		set => $this->set('city', $value);
	}

	public ?string $state {
		get => $this->get('state');
		set => $this->set('state', $value);
	}

	public ?string $country {
		get => $this->get('country');
		set => $this->set('country', $value);
	}

	public ?string $postalCode {
		get => $this->get('postalCode');
		set => $this->set('postalCode', $value);
	}

	public ?string $phoneNumber {
		get => $this->get('phoneNumber');
		set => $this->set('phoneNumber', $value);
	}

	public ?string $email {
		get => $this->get('email');
		set => $this->set('email', $value);
	}

	public ?string $website {
		get => $this->get('website');
		set => $this->set('website', $value);
	}

	public ?string $salespersonCode {
		get => $this->get('salespersonCode');
		set => $this->set('salespersonCode', $value);
	}

	public ?float $balanceDue {
		get => $this->get('balanceDue');
		set => $this->set('balanceDue', $value);
	}

	public ?float $creditLimit {
		get => $this->get('creditLimit');
		set => $this->set('creditLimit', $value);
	}

	public ?bool $taxLiable {
		get => $this->get('taxLiable');
		set => $this->set('taxLiable', $value);
	}

	public ?string $taxAreaId {
		get => $this->get('taxAreaId');
		set => $this->set('taxAreaId', $value);
	}

	public ?string $taxAreaDisplayName {
		get => $this->get('taxAreaDisplayName');
		set => $this->set('taxAreaDisplayName', $value);
	}

	public ?string $taxRegistrationNumber {
		get => $this->get('taxRegistrationNumber');
		set => $this->set('taxRegistrationNumber', $value);
	}

	public ?string $currencyId {
		get => $this->get('currencyId');
		set => $this->set('currencyId', $value);
	}

	public ?string $currencyCode {
		get => $this->get('currencyCode');
		set => $this->set('currencyCode', $value);
	}

	public ?string $paymentTermsId {
		get => $this->get('paymentTermsId');
		set => $this->set('paymentTermsId', $value);
	}

	public ?string $shipmentMethodId {
		get => $this->get('shipmentMethodId');
		set => $this->set('shipmentMethodId', $value);
	}

	public ?string $paymentMethodId {
		get => $this->get('paymentMethodId');
		set => $this->set('paymentMethodId', $value);
	}

	public ?Enums\CustomerBlocked $blocked {
		get => $this->get('blocked', Enums\CustomerBlocked::class);
		set => $this->set('blocked', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?Currency\Record $currency {
		get => $this->get('currency');
		set => $this->set('currency', $value);
	}

	public ?PaymentTerm\Record $paymentTerm {
		get => $this->get('paymentTerm');
		set => $this->set('paymentTerm', $value);
	}

	public ?ShipmentMethod\Record $shipmentMethod {
		get => $this->get('shipmentMethod');
		set => $this->set('shipmentMethod', $value);
	}

	public ?PaymentMethod\Record $paymentMethod {
		get => $this->get('paymentMethod');
		set => $this->set('paymentMethod', $value);
	}

	public ?CustomerFinancialDetail\Record $customerFinancialDetail {
		get => $this->get('customerFinancialDetail');
		set => $this->set('customerFinancialDetail', $value);
	}

	public ?Picture\Record $picture {
		get => $this->get('picture');
		set => $this->set('picture', $value);
	}

	/** @var Entity\Collection<DefaultDimension\Record> */
	public Entity\Collection $defaultDimensions {
		get => $this->get('defaultDimensions', 'collection');
	}

	public ?AgedAccountsReceivable\Record $agedAccountsReceivable {
		get => $this->get('agedAccountsReceivable');
		set => $this->set('agedAccountsReceivable', $value);
	}

	/** @var Entity\Collection<ContactInformation\Record> */
	public Entity\Collection $contactsInformation {
		get => $this->get('contactsInformation', 'collection');
	}

	/** @var Entity\Collection<DocumentAttachment\Record> */
	public Entity\Collection $documentAttachments {
		get => $this->get('documentAttachments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
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
}