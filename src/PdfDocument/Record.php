<?php
namespace Rebel\BCApi2\Entity\PdfDocument;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerContact;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesQuote;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $parentId {
        get => $this->get('parentId');
    }

    public ?Enums\AttachmentEntityBufferDocumentType $parentType {
        get => $this->getAsEnum('parentType', Enums\AttachmentEntityBufferDocumentType::class);
    }

    public Entity\DataStream $pdfDocumentContent {
        get => $this->get('pdfDocumentContent');
    }

    public ?SalesInvoice\Record $salesInvoice {
        get => $this->get('salesInvoice');
    }

    public ?SalesQuote\Record $salesQuote {
        get => $this->get('salesQuote');
    }

    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->get('salesCreditMemo');
    }

    public ?PurchaseInvoice\Record $purchaseInvoice {
        get => $this->get('purchaseInvoice');
    }

    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->get('purchaseCreditMemo');
    }

    public ?CustomerContact\Record $customerContact {
        get => $this->get('customerContact');
    }

    protected array $classMap = [
        'salesInvoice' => SalesInvoice\Record::class,
        'salesQuote' => SalesQuote\Record::class,
        'salesCreditMemo' => SalesCreditMemo\Record::class,
        'purchaseInvoice' => PurchaseInvoice\Record::class,
        'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
        'customerContact' => CustomerContact\Record::class,
    ];
}
