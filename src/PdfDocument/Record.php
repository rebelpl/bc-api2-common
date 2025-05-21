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

    public ?string $pdfDocumentContent {
        get => $this->get('pdfDocumentContent');
    }

    /** @var ?SalesInvoice\Record */
    public ?SalesInvoice\Record $salesInvoice {
        get => $this->get('salesInvoice');
    }

    /** @var ?SalesQuote\Record */
    public ?SalesQuote\Record $salesQuote {
        get => $this->get('salesQuote');
    }

    /** @var ?SalesCreditMemo\Record */
    public ?SalesCreditMemo\Record $salesCreditMemo {
        get => $this->get('salesCreditMemo');
    }

    /** @var ?PurchaseInvoice\Record */
    public ?PurchaseInvoice\Record $purchaseInvoice {
        get => $this->get('purchaseInvoice');
    }

    /** @var ?PurchaseCreditMemo\Record */
    public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
        get => $this->get('purchaseCreditMemo');
    }

    /** @var ?CustomerContact\Record */
    public ?CustomerContact\Record $customerContact {
        get => $this->get('customerContact');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'salesInvoice' => SalesInvoice\Record::class,
            'salesQuote' => SalesQuote\Record::class,
            'salesCreditMemo' => SalesCreditMemo\Record::class,
            'purchaseInvoice' => PurchaseInvoice\Record::class,
            'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
            'customerContact' => CustomerContact\Record::class,
        ];
    }
}
