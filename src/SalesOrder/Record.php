<?php
namespace Rebel\BCApi2\Entity\SalesOrder;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\Customer;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PaymentTerm;
use Rebel\BCApi2\Entity\SalesOrderLine;
use Rebel\BCApi2\Entity\ShipmentMethod;

class Record extends Entity
{
    protected string $primaryKey = 'id';

    public ?string $id {
        get => $this->get('id');
    }

    public ?string $number {
        set {
            $this->set('number', $value);
        }
        get => $this->get('number');
    }

    public ?string $externalDocumentNumber {
        set {
            $this->set('externalDocumentNumber', $value);
        }
        get => $this->get('externalDocumentNumber');
    }

    public ?Carbon $orderDate {
        set {
            $this->setAsDate('orderDate', $value);
        }
        get => $this->getAsDate('orderDate');
    }

    public ?Carbon $postingDate {
        set {
            $this->setAsDate('postingDate', $value);
        }
        get => $this->getAsDate('postingDate');
    }

    public ?string $customerId {
        set {
            $this->set('customerId', $value);
        }
        get => $this->get('customerId');
    }

    public ?string $customerNumber {
        set {
            $this->set('customerNumber', $value);
        }
        get => $this->get('customerNumber');
    }

    public ?string $customerName {
        set {
            $this->set('customerName', $value);
        }
        get => $this->get('customerName');
    }

    public ?string $billToName {
        set {
            $this->set('billToName', $value);
        }
        get => $this->get('billToName');
    }

    public ?string $billToCustomerId {
        set {
            $this->set('billToCustomerId', $value);
        }
        get => $this->get('billToCustomerId');
    }

    public ?string $billToCustomerNumber {
        set {
            $this->set('billToCustomerNumber', $value);
        }
        get => $this->get('billToCustomerNumber');
    }

    public ?string $shipToName {
        set {
            $this->set('shipToName', $value);
        }
        get => $this->get('shipToName');
    }

    public ?string $shipToContact {
        set {
            $this->set('shipToContact', $value);
        }
        get => $this->get('shipToContact');
    }

    public ?string $sellToAddressLine1 {
        set {
            $this->set('sellToAddressLine1', $value);
        }
        get => $this->get('sellToAddressLine1');
    }

    public ?string $sellToAddressLine2 {
        set {
            $this->set('sellToAddressLine2', $value);
        }
        get => $this->get('sellToAddressLine2');
    }

    public ?string $sellToCity {
        set {
            $this->set('sellToCity', $value);
        }
        get => $this->get('sellToCity');
    }

    public ?string $sellToCountry {
        set {
            $this->set('sellToCountry', $value);
        }
        get => $this->get('sellToCountry');
    }

    public ?string $sellToState {
        set {
            $this->set('sellToState', $value);
        }
        get => $this->get('sellToState');
    }

    public ?string $sellToPostCode {
        set {
            $this->set('sellToPostCode', $value);
        }
        get => $this->get('sellToPostCode');
    }

    public ?string $billToAddressLine1 {
        set {
            $this->set('billToAddressLine1', $value);
        }
        get => $this->get('billToAddressLine1');
    }

    public ?string $billToAddressLine2 {
        set {
            $this->set('billToAddressLine2', $value);
        }
        get => $this->get('billToAddressLine2');
    }

    public ?string $billToCity {
        set {
            $this->set('billToCity', $value);
        }
        get => $this->get('billToCity');
    }

    public ?string $billToCountry {
        set {
            $this->set('billToCountry', $value);
        }
        get => $this->get('billToCountry');
    }

    public ?string $billToState {
        set {
            $this->set('billToState', $value);
        }
        get => $this->get('billToState');
    }

    public ?string $billToPostCode {
        set {
            $this->set('billToPostCode', $value);
        }
        get => $this->get('billToPostCode');
    }

    public ?string $shipToAddressLine1 {
        set {
            $this->set('shipToAddressLine1', $value);
        }
        get => $this->get('shipToAddressLine1');
    }

    public ?string $shipToAddressLine2 {
        set {
            $this->set('shipToAddressLine2', $value);
        }
        get => $this->get('shipToAddressLine2');
    }

    public ?string $shipToCity {
        set {
            $this->set('shipToCity', $value);
        }
        get => $this->get('shipToCity');
    }

    public ?string $shipToCountry {
        set {
            $this->set('shipToCountry', $value);
        }
        get => $this->get('shipToCountry');
    }

    public ?string $shipToState {
        set {
            $this->set('shipToState', $value);
        }
        get => $this->get('shipToState');
    }

    public ?string $shipToPostCode {
        set {
            $this->set('shipToPostCode', $value);
        }
        get => $this->get('shipToPostCode');
    }

    public ?string $shortcutDimension1Code {
        set {
            $this->set('shortcutDimension1Code', $value);
        }
        get => $this->get('shortcutDimension1Code');
    }

    public ?string $shortcutDimension2Code {
        set {
            $this->set('shortcutDimension2Code', $value);
        }
        get => $this->get('shortcutDimension2Code');
    }

    public ?string $currencyId {
        set {
            $this->set('currencyId', $value);
        }
        get => $this->get('currencyId');
    }

    public ?string $currencyCode {
        set {
            $this->set('currencyCode', $value);
        }
        get => $this->get('currencyCode');
    }

    public ?bool $pricesIncludeTax {
        set {
            $this->set('pricesIncludeTax', $value);
        }
        get => $this->get('pricesIncludeTax');
    }

    public ?string $paymentTermsId {
        set {
            $this->set('paymentTermsId', $value);
        }
        get => $this->get('paymentTermsId');
    }

    public ?string $shipmentMethodId {
        set {
            $this->set('shipmentMethodId', $value);
        }
        get => $this->get('shipmentMethodId');
    }

    public ?string $salesperson {
        set {
            $this->set('salesperson', $value);
        }
        get => $this->get('salesperson');
    }

    public ?bool $partialShipping {
        set {
            $this->set('partialShipping', $value);
        }
        get => $this->get('partialShipping');
    }

    public ?Carbon $requestedDeliveryDate {
        set {
            $this->setAsDate('requestedDeliveryDate', $value);
        }
        get => $this->getAsDate('requestedDeliveryDate');
    }

    public ?float $discountAmount {
        set {
            $this->set('discountAmount', $value);
        }
        get => $this->get('discountAmount');
    }

    public ?bool $discountAppliedBeforeTax {
        set {
            $this->set('discountAppliedBeforeTax', $value);
        }
        get => $this->get('discountAppliedBeforeTax');
    }

    public ?float $totalAmountExcludingTax {
        set {
            $this->set('totalAmountExcludingTax', $value);
        }
        get => $this->get('totalAmountExcludingTax');
    }

    public ?float $totalTaxAmount {
        set {
            $this->set('totalTaxAmount', $value);
        }
        get => $this->get('totalTaxAmount');
    }

    public ?float $totalAmountIncludingTax {
        set {
            $this->set('totalAmountIncludingTax', $value);
        }
        get => $this->get('totalAmountIncludingTax');
    }

    public ?bool $fullyShipped {
        set {
            $this->set('fullyShipped', $value);
        }
        get => $this->get('fullyShipped');
    }

    public ?Enums\SalesOrderEntityBufferStatus $status {
        set {
            $this->set('status', $value);
        }
        get => $this->getAsEnum('status', Enums\SalesOrderEntityBufferStatus::class);
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?string $phoneNumber {
        set {
            $this->set('phoneNumber', $value);
        }
        get => $this->get('phoneNumber');
    }

    public ?string $email {
        set {
            $this->set('email', $value);
        }
        get => $this->get('email');
    }

    public ?Customer\Record $customer {
        get => $this->getAsRelation('customer');
    }

    public ?DimensionValue\Record $dimensionValue {
        get => $this->getAsRelation('dimensionValue');
    }

    public ?Currency\Record $currency {
        get => $this->getAsRelation('currency');
    }

    public ?PaymentTerm\Record $paymentTerm {
        get => $this->getAsRelation('paymentTerm');
    }

    public ?ShipmentMethod\Record $shipmentMethod {
        get => $this->getAsRelation('shipmentMethod');
    }

    /** @var Entity\Collection<DimensionSetLine\Record> */
    public Entity\Collection $dimensionSetLines {
        get => $this->getAsCollection('dimensionSetLines');
    }

    /** @var Entity\Collection<SalesOrderLine\Record> */
    public Entity\Collection $salesOrderLines {
        get => $this->getAsCollection('salesOrderLines');
    }

    /** @var Entity\Collection<Attachment\Record> */
    public Entity\Collection $attachments {
        get => $this->getAsCollection('attachments');
    }

    /** @var Entity\Collection<DocumentAttachment\Record> */
    public Entity\Collection $documentAttachments {
        get => $this->getAsCollection('documentAttachments');
    }

    protected array $classMap = [
        'customer' => Customer\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'currency' => Currency\Record::class,
        'paymentTerm' => PaymentTerm\Record::class,
        'shipmentMethod' => ShipmentMethod\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'salesOrderLines' => SalesOrderLine\Record::class,
        'attachments' => Attachment\Record::class,
        'documentAttachments' => DocumentAttachment\Record::class,
    ];

    function doShipAndInvoice(Client $client): void
    {
        $this->doAction('Microsoft.NAV.shipAndInvoice', $client);
    }
}
