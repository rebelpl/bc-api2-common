<?php
namespace Rebel\BCApi2\Entity\Vendor;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\PaymentMethod;
use Rebel\BCApi2\Entity\Picture;
use Rebel\BCApi2\Entity\DefaultDimension;
use Rebel\BCApi2\Entity\AgedAccountsPayable;
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

	public ?string $irs1099Code {
		get => $this->get('irs1099Code');
		set => $this->set('irs1099Code', $value);
	}

	public ?string $paymentTermsId {
		get => $this->get('paymentTermsId');
		set => $this->set('paymentTermsId', $value);
	}

	public ?string $paymentMethodId {
		get => $this->get('paymentMethodId');
		set => $this->set('paymentMethodId', $value);
	}

	public ?bool $taxLiable {
		get => $this->get('taxLiable');
		set => $this->set('taxLiable', $value);
	}

	public ?Enums\VendorBlocked $blocked {
		get => $this->get('blocked', Enums\VendorBlocked::class);
		set => $this->set('blocked', $value);
	}

	public ?float $balance {
		get => $this->get('balance');
		set => $this->set('balance', $value);
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

	public ?PaymentMethod\Record $paymentMethod {
		get => $this->get('paymentMethod');
		set => $this->set('paymentMethod', $value);
	}

	public ?Picture\Record $picture {
		get => $this->get('picture');
		set => $this->set('picture', $value);
	}

	/** @var Entity\Collection<DefaultDimension\Record> */
	public Entity\Collection $defaultDimensions {
		get => $this->get('defaultDimensions', 'collection');
	}

	public ?AgedAccountsPayable\Record $agedAccountsPayable {
		get => $this->get('agedAccountsPayable');
		set => $this->set('agedAccountsPayable', $value);
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
			'paymentMethod' => PaymentMethod\Record::class,
			'picture' => Picture\Record::class,
			'defaultDimensions' => DefaultDimension\Record::class,
			'agedAccountsPayable' => AgedAccountsPayable\Record::class,
			'contactsInformation' => ContactInformation\Record::class,
			'documentAttachments' => DocumentAttachment\Record::class,
        ];
    }
}