<?php
namespace Rebel\BCApi2\Entity\SalesShipment;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\SalesShipmentLine;
use Rebel\BCApi2\Entity\DimensionSetLine;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $number {
		get => $this->get('number');
	}

	public ?string $externalDocumentNumber {
		get => $this->get('externalDocumentNumber');
	}

	public ?\DateTime $invoiceDate {
		get => $this->get('invoiceDate', 'date');
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
	}

	public ?\DateTime $dueDate {
		get => $this->get('dueDate', 'date');
	}

	public ?string $customerPurchaseOrderReference {
		get => $this->get('customerPurchaseOrderReference');
	}

	public ?string $customerId {
		get => $this->get('customerId');
	}

	public ?string $customerNumber {
		get => $this->get('customerNumber');
	}

	public ?string $customerName {
		get => $this->get('customerName');
	}

	public ?string $billToCustomerId {
		get => $this->get('billToCustomerId');
	}

	public ?string $billToName {
		get => $this->get('billToName');
	}

	public ?string $billToCustomerNumber {
		get => $this->get('billToCustomerNumber');
	}

	public ?string $shipToName {
		get => $this->get('shipToName');
	}

	public ?string $shipToContact {
		get => $this->get('shipToContact');
	}

	public ?string $sellToAddressLine1 {
		get => $this->get('sellToAddressLine1');
	}

	public ?string $sellToAddressLine2 {
		get => $this->get('sellToAddressLine2');
	}

	public ?string $sellToCity {
		get => $this->get('sellToCity');
	}

	public ?string $sellToCountry {
		get => $this->get('sellToCountry');
	}

	public ?string $sellToState {
		get => $this->get('sellToState');
	}

	public ?string $sellToPostCode {
		get => $this->get('sellToPostCode');
	}

	public ?string $billToAddressLine1 {
		get => $this->get('billToAddressLine1');
	}

	public ?string $billToAddressLine2 {
		get => $this->get('billToAddressLine2');
	}

	public ?string $billToCity {
		get => $this->get('billToCity');
	}

	public ?string $billToCountry {
		get => $this->get('billToCountry');
	}

	public ?string $billToState {
		get => $this->get('billToState');
	}

	public ?string $billToPostCode {
		get => $this->get('billToPostCode');
	}

	public ?string $shipToAddressLine1 {
		get => $this->get('shipToAddressLine1');
	}

	public ?string $shipToAddressLine2 {
		get => $this->get('shipToAddressLine2');
	}

	public ?string $shipToCity {
		get => $this->get('shipToCity');
	}

	public ?string $shipToCountry {
		get => $this->get('shipToCountry');
	}

	public ?string $shipToState {
		get => $this->get('shipToState');
	}

	public ?string $shipToPostCode {
		get => $this->get('shipToPostCode');
	}

	public ?string $currencyCode {
		get => $this->get('currencyCode');
	}

	public ?string $orderNumber {
		get => $this->get('orderNumber');
	}

	public ?string $paymentTermsCode {
		get => $this->get('paymentTermsCode');
	}

	public ?string $shipmentMethodCode {
		get => $this->get('shipmentMethodCode');
	}

	public ?string $salesperson {
		get => $this->get('salesperson');
	}

	public ?bool $pricesIncludeTax {
		get => $this->get('pricesIncludeTax');
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
	}

	public ?string $phoneNumber {
		get => $this->get('phoneNumber');
	}

	public ?string $email {
		get => $this->get('email');
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

	/** @var Entity\Collection<SalesShipmentLine\Record> */
	public Entity\Collection $salesShipmentLines {
		get => $this->get('salesShipmentLines', 'collection');
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'customer' => Customer\Record::class,
			'salesShipmentLines' => SalesShipmentLine\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}