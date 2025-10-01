<?php
namespace Rebel\BCApi2\Entity\PdfDocument;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\CustomerContact;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesQuote;

class Record extends Entity
{
    protected $primaryKey = 'id';

    protected $classMap = [
        'salesInvoice' => SalesInvoice\Record::class,
        'salesQuote' => SalesQuote\Record::class,
        'salesCreditMemo' => SalesCreditMemo\Record::class,
        'purchaseInvoice' => PurchaseInvoice\Record::class,
        'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
        'customerContact' => CustomerContact\Record::class,
    ];

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    public function getParentType(): ?string
    {
        return $this->get('parentType');
    }

    public function getPdfDocumentContent(): Entity\DataStream
    {
        return $this->get('pdfDocumentContent');
    }

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->getAsRelation('salesInvoice');
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->getAsRelation('salesQuote');
    }

    public function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->getAsRelation('salesCreditMemo');
    }

    public function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->getAsRelation('purchaseInvoice');
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->getAsRelation('purchaseCreditMemo');
    }

    public function getCustomerContact(): ?CustomerContact\Record
    {
        return $this->getAsRelation('customerContact');
    }
}
