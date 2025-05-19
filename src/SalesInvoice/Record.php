<?php
namespace Rebel\BCApi2\Entity\SalesInvoice;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\ShipmentMethod;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\SalesInvoiceLine;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\Attachment;
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

	public ?string $externalDocumentNumber {
		get => $this->get('externalDocumentNumber');
		set => $this->set('externalDocumentNumber', $value);
	}

	public ?\DateTime $invoiceDate {
		get => $this->get('invoiceDate', 'date');
		set => $this->set('invoiceDate', $value);
	}

	public ?\DateTime $postingDate {
		get => $this->get('postingDate', 'date');
		set => $this->set('postingDate', $value);
	}

	public ?\DateTime $dueDate {
		get => $this->get('dueDate', 'date');
		set => $this->set('dueDate', $value);
	}

	public ?\DateTime $promisedPayDate {
		get => $this->get('promisedPayDate', 'date');
		set => $this->set('promisedPayDate', $value);
	}

	public ?string $customerPurchaseOrderReference {
		get => $this->get('customerPurchaseOrderReference');
		set => $this->set('customerPurchaseOrderReference', $value);
	}

	public ?string $customerId {
		get => $this->get('customerId');
		set => $this->set('customerId', $value);
	}

	public ?string $customerNumber {
		get => $this->get('customerNumber');
		set => $this->set('customerNumber', $value);
	}

	public ?string $customerName {
		get => $this->get('customerName');
		set => $this->set('customerName', $value);
	}

	public ?string $billToName {
		get => $this->get('billToName');
		set => $this->set('billToName', $value);
	}

	public ?string $billToCustomerId {
		get => $this->get('billToCustomerId');
		set => $this->set('billToCustomerId', $value);
	}

	public ?string $billToCustomerNumber {
		get => $this->get('billToCustomerNumber');
		set => $this->set('billToCustomerNumber', $value);
	}

	public ?string $shipToName {
		get => $this->get('shipToName');
		set => $this->set('shipToName', $value);
	}

	public ?string $shipToContact {
		get => $this->get('shipToContact');
		set => $this->set('shipToContact', $value);
	}

	public ?string $sellToAddressLine1 {
		get => $this->get('sellToAddressLine1');
		set => $this->set('sellToAddressLine1', $value);
	}

	public ?string $sellToAddressLine2 {
		get => $this->get('sellToAddressLine2');
		set => $this->set('sellToAddressLine2', $value);
	}

	public ?string $sellToCity {
		get => $this->get('sellToCity');
		set => $this->set('sellToCity', $value);
	}

	public ?string $sellToCountry {
		get => $this->get('sellToCountry');
		set => $this->set('sellToCountry', $value);
	}

	public ?string $sellToState {
		get => $this->get('sellToState');
		set => $this->set('sellToState', $value);
	}

	public ?string $sellToPostCode {
		get => $this->get('sellToPostCode');
		set => $this->set('sellToPostCode', $value);
	}

	public ?string $billToAddressLine1 {
		get => $this->get('billToAddressLine1');
		set => $this->set('billToAddressLine1', $value);
	}

	public ?string $billToAddressLine2 {
		get => $this->get('billToAddressLine2');
		set => $this->set('billToAddressLine2', $value);
	}

	public ?string $billToCity {
		get => $this->get('billToCity');
		set => $this->set('billToCity', $value);
	}

	public ?string $billToCountry {
		get => $this->get('billToCountry');
		set => $this->set('billToCountry', $value);
	}

	public ?string $billToState {
		get => $this->get('billToState');
		set => $this->set('billToState', $value);
	}

	public ?string $billToPostCode {
		get => $this->get('billToPostCode');
		set => $this->set('billToPostCode', $value);
	}

	public ?string $shipToAddressLine1 {
		get => $this->get('shipToAddressLine1');
		set => $this->set('shipToAddressLine1', $value);
	}

	public ?string $shipToAddressLine2 {
		get => $this->get('shipToAddressLine2');
		set => $this->set('shipToAddressLine2', $value);
	}

	public ?string $shipToCity {
		get => $this->get('shipToCity');
		set => $this->set('shipToCity', $value);
	}

	public ?string $shipToCountry {
		get => $this->get('shipToCountry');
		set => $this->set('shipToCountry', $value);
	}

	public ?string $shipToState {
		get => $this->get('shipToState');
		set => $this->set('shipToState', $value);
	}

	public ?string $shipToPostCode {
		get => $this->get('shipToPostCode');
		set => $this->set('shipToPostCode', $value);
	}

	public ?string $currencyId {
		get => $this->get('currencyId');
		set => $this->set('currencyId', $value);
	}

	public ?string $shortcutDimension1Code {
		get => $this->get('shortcutDimension1Code');
		set => $this->set('shortcutDimension1Code', $value);
	}

	public ?string $shortcutDimension2Code {
		get => $this->get('shortcutDimension2Code');
		set => $this->set('shortcutDimension2Code', $value);
	}

	public ?string $currencyCode {
		get => $this->get('currencyCode');
		set => $this->set('currencyCode', $value);
	}

	public ?string $orderId {
		get => $this->get('orderId');
		set => $this->set('orderId', $value);
	}

	public ?string $orderNumber {
		get => $this->get('orderNumber');
		set => $this->set('orderNumber', $value);
	}

	public ?string $paymentTermsId {
		get => $this->get('paymentTermsId');
		set => $this->set('paymentTermsId', $value);
	}

	public ?string $shipmentMethodId {
		get => $this->get('shipmentMethodId');
		set => $this->set('shipmentMethodId', $value);
	}

	public ?string $salesperson {
		get => $this->get('salesperson');
		set => $this->set('salesperson', $value);
	}

	public ?string $disputeStatusId {
		get => $this->get('disputeStatusId');
		set => $this->set('disputeStatusId', $value);
	}

	public ?string $disputeStatus {
		get => $this->get('disputeStatus');
		set => $this->set('disputeStatus', $value);
	}

	public ?bool $pricesIncludeTax {
		get => $this->get('pricesIncludeTax');
		set => $this->set('pricesIncludeTax', $value);
	}

	public ?float $remainingAmount {
		get => $this->get('remainingAmount');
		set => $this->set('remainingAmount', $value);
	}

	public ?float $discountAmount {
		get => $this->get('discountAmount');
		set => $this->set('discountAmount', $value);
	}

	public ?bool $discountAppliedBeforeTax {
		get => $this->get('discountAppliedBeforeTax');
		set => $this->set('discountAppliedBeforeTax', $value);
	}

	public ?float $totalAmountExcludingTax {
		get => $this->get('totalAmountExcludingTax');
		set => $this->set('totalAmountExcludingTax', $value);
	}

	public ?float $totalTaxAmount {
		get => $this->get('totalTaxAmount');
		set => $this->set('totalTaxAmount', $value);
	}

	public ?float $totalAmountIncludingTax {
		get => $this->get('totalAmountIncludingTax');
		set => $this->set('totalAmountIncludingTax', $value);
	}

	public ?Enums\InvoiceEntityAggregateStatus $status {
		get => $this->get('status', Enums\InvoiceEntityAggregateStatus::class);
		set => $this->set('status', $value);
	}

	public ?\DateTime $lastModifiedDateTime {
		get => $this->get('lastModifiedDateTime', 'datetime');
		set => $this->set('lastModifiedDateTime', $value);
	}

	public ?string $phoneNumber {
		get => $this->get('phoneNumber');
		set => $this->set('phoneNumber', $value);
	}

	public ?string $email {
		get => $this->get('email');
		set => $this->set('email', $value);
	}

	public ?Customer\Record $customer {
		get => $this->get('customer');
		set => $this->set('customer', $value);
	}

	public ?Currency\Record $currency {
		get => $this->get('currency');
		set => $this->set('currency', $value);
	}

	public ?DimensionValue\Record $dimensionValue {
		get => $this->get('dimensionValue');
		set => $this->set('dimensionValue', $value);
	}

	public ?PaymentTerm\Record $paymentTerm {
		get => $this->get('paymentTerm');
		set => $this->set('paymentTerm', $value);
	}

	public ?ShipmentMethod\Record $shipmentMethod {
		get => $this->get('shipmentMethod');
		set => $this->set('shipmentMethod', $value);
	}

	/** @var Entity\Collection<DimensionSetLine\Record> */
	public Entity\Collection $dimensionSetLines {
		get => $this->get('dimensionSetLines', 'collection');
	}

	/** @var Entity\Collection<SalesInvoiceLine\Record> */
	public Entity\Collection $salesInvoiceLines {
		get => $this->get('salesInvoiceLines', 'collection');
	}

	public ?PdfDocument\Record $pdfDocument {
		get => $this->get('pdfDocument');
		set => $this->set('pdfDocument', $value);
	}

	/** @var Entity\Collection<Attachment\Record> */
	public Entity\Collection $attachments {
		get => $this->get('attachments', 'collection');
	}

	/** @var Entity\Collection<DocumentAttachment\Record> */
	public Entity\Collection $documentAttachments {
		get => $this->get('documentAttachments', 'collection');
	}

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
			'customer' => Customer\Record::class,
			'currency' => Currency\Record::class,
			'dimensionValue' => DimensionValue\Record::class,
			'paymentTerm' => PaymentTerm\Record::class,
			'shipmentMethod' => ShipmentMethod\Record::class,
			'dimensionSetLines' => DimensionSetLine\Record::class,
			'salesInvoiceLines' => SalesInvoiceLine\Record::class,
			'pdfDocument' => PdfDocument\Record::class,
			'attachments' => Attachment\Record::class,
			'documentAttachments' => DocumentAttachment\Record::class,
        ];
    }
}