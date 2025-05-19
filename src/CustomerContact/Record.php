<?php
namespace Rebel\BCApi2\Entity\CustomerContact;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\PdfDocument;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
		set => $this->set('id', $value);
	}

	public ?string $email {
		get => $this->get('email');
		set => $this->set('email', $value);
	}

	public ?string $firstName {
		get => $this->get('firstName');
		set => $this->set('firstName', $value);
	}

	public ?string $lastName {
		get => $this->get('lastName');
		set => $this->set('lastName', $value);
	}

	public ?string $professionalTitle {
		get => $this->get('professionalTitle');
		set => $this->set('professionalTitle', $value);
	}

	public ?string $customerId {
		get => $this->get('customerId');
		set => $this->set('customerId', $value);
	}

	public ?string $customerName {
		get => $this->get('customerName');
		set => $this->set('customerName', $value);
	}

	public ?string $primaryPhoneNumber {
		get => $this->get('primaryPhoneNumber');
		set => $this->set('primaryPhoneNumber', $value);
	}

	public ?PdfDocument\Record $pdfDocument {
		get => $this->get('pdfDocument');
		set => $this->set('pdfDocument', $value);
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'pdfDocument' => PdfDocument\Record::class,
        ];
    }
}