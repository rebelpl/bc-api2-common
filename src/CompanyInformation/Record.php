<?php
namespace Rebel\BCApi2\Entity\CompanyInformation;

use Rebel\BCApi2\Entity;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
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

	public ?string $faxNumber {
		get => $this->get('faxNumber');
		set => $this->set('faxNumber', $value);
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

	public ?string $currencyCode {
		get => $this->get('currencyCode');
		set => $this->set('currencyCode', $value);
	}

	public ?\DateTime $currentFiscalYearStartDate {
		get => $this->get('currentFiscalYearStartDate', 'date');
		set => $this->set('currentFiscalYearStartDate', $value);
	}

	public ?string $industry {
		get => $this->get('industry');
		set => $this->set('industry', $value);
	}

	public ?string $picture {
		get => $this->get('picture');
		set => $this->set('picture', $value);
	}

	public ?string $experience {
		get => $this->get('experience');
		set => $this->set('experience', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}


}