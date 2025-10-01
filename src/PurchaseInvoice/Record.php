<?php
namespace Rebel\BCApi2\Entity\PurchaseInvoice;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Attachment;
use Rebel\BCApi2\Entity\Currency;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\DimensionValue;
use Rebel\BCApi2\Entity\DocumentAttachment;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PdfDocument;
use Rebel\BCApi2\Entity\PurchaseInvoiceLine;
use Rebel\BCApi2\Entity\Vendor;

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

    public ?Carbon $postingDate {
        set {
            $this->setAsDate('postingDate', $value);
        }
        get => $this->getAsDate('postingDate');
    }

    public ?Carbon $invoiceDate {
        set {
            $this->setAsDate('invoiceDate', $value);
        }
        get => $this->getAsDate('invoiceDate');
    }

    public ?Carbon $dueDate {
        set {
            $this->setAsDate('dueDate', $value);
        }
        get => $this->getAsDate('dueDate');
    }

    public ?string $vendorInvoiceNumber {
        set {
            $this->set('vendorInvoiceNumber', $value);
        }
        get => $this->get('vendorInvoiceNumber');
    }

    public ?string $vendorId {
        set {
            $this->set('vendorId', $value);
        }
        get => $this->get('vendorId');
    }

    public ?string $vendorNumber {
        set {
            $this->set('vendorNumber', $value);
        }
        get => $this->get('vendorNumber');
    }

    public ?string $vendorName {
        set {
            $this->set('vendorName', $value);
        }
        get => $this->get('vendorName');
    }

    public ?string $payToName {
        set {
            $this->set('payToName', $value);
        }
        get => $this->get('payToName');
    }

    public ?string $payToContact {
        set {
            $this->set('payToContact', $value);
        }
        get => $this->get('payToContact');
    }

    public ?string $payToVendorId {
        set {
            $this->set('payToVendorId', $value);
        }
        get => $this->get('payToVendorId');
    }

    public ?string $payToVendorNumber {
        set {
            $this->set('payToVendorNumber', $value);
        }
        get => $this->get('payToVendorNumber');
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

    public ?string $buyFromAddressLine1 {
        set {
            $this->set('buyFromAddressLine1', $value);
        }
        get => $this->get('buyFromAddressLine1');
    }

    public ?string $buyFromAddressLine2 {
        set {
            $this->set('buyFromAddressLine2', $value);
        }
        get => $this->get('buyFromAddressLine2');
    }

    public ?string $buyFromCity {
        set {
            $this->set('buyFromCity', $value);
        }
        get => $this->get('buyFromCity');
    }

    public ?string $buyFromCountry {
        set {
            $this->set('buyFromCountry', $value);
        }
        get => $this->get('buyFromCountry');
    }

    public ?string $buyFromState {
        set {
            $this->set('buyFromState', $value);
        }
        get => $this->get('buyFromState');
    }

    public ?string $buyFromPostCode {
        set {
            $this->set('buyFromPostCode', $value);
        }
        get => $this->get('buyFromPostCode');
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

    public ?string $payToAddressLine1 {
        set {
            $this->set('payToAddressLine1', $value);
        }
        get => $this->get('payToAddressLine1');
    }

    public ?string $payToAddressLine2 {
        set {
            $this->set('payToAddressLine2', $value);
        }
        get => $this->get('payToAddressLine2');
    }

    public ?string $payToCity {
        set {
            $this->set('payToCity', $value);
        }
        get => $this->get('payToCity');
    }

    public ?string $payToCountry {
        set {
            $this->set('payToCountry', $value);
        }
        get => $this->get('payToCountry');
    }

    public ?string $payToState {
        set {
            $this->set('payToState', $value);
        }
        get => $this->get('payToState');
    }

    public ?string $payToPostCode {
        set {
            $this->set('payToPostCode', $value);
        }
        get => $this->get('payToPostCode');
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

    public ?string $orderId {
        set {
            $this->set('orderId', $value);
        }
        get => $this->get('orderId');
    }

    public ?string $orderNumber {
        set {
            $this->set('orderNumber', $value);
        }
        get => $this->get('orderNumber');
    }

    public ?string $purchaser {
        set {
            $this->set('purchaser', $value);
        }
        get => $this->get('purchaser');
    }

    public ?bool $pricesIncludeTax {
        set {
            $this->set('pricesIncludeTax', $value);
        }
        get => $this->get('pricesIncludeTax');
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

    public ?Enums\InvoiceEntityAggregateStatus $status {
        set {
            $this->set('status', $value);
        }
        get => $this->getAsEnum('status', Enums\InvoiceEntityAggregateStatus::class);
    }

    public ?Carbon $lastModifiedDateTime {
        set {
            $this->setAsDateTime('lastModifiedDateTime', $value);
        }
        get => $this->getAsDateTime('lastModifiedDateTime');
    }

    public ?Vendor\Record $vendor {
        get => $this->getAsRelation('vendor');
    }

    public ?DimensionValue\Record $dimensionValue {
        get => $this->getAsRelation('dimensionValue');
    }

    public ?Currency\Record $currency {
        get => $this->getAsRelation('currency');
    }

    /** @var Entity\Collection<DimensionSetLine\Record> */
    public Entity\Collection $dimensionSetLines {
        get => $this->getAsCollection('dimensionSetLines');
    }

    /** @var Entity\Collection<PurchaseInvoiceLine\Record> */
    public Entity\Collection $purchaseInvoiceLines {
        get => $this->getAsCollection('purchaseInvoiceLines');
    }

    public ?PdfDocument\Record $pdfDocument {
        get => $this->getAsRelation('pdfDocument');
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
        'vendor' => Vendor\Record::class,
        'dimensionValue' => DimensionValue\Record::class,
        'currency' => Currency\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
        'purchaseInvoiceLines' => PurchaseInvoiceLine\Record::class,
        'pdfDocument' => PdfDocument\Record::class,
        'attachments' => Attachment\Record::class,
        'documentAttachments' => DocumentAttachment\Record::class,
    ];

    function doPost(Client $client): void
    {
        $this->doAction('Microsoft.NAV.post', $client);
    }
}
