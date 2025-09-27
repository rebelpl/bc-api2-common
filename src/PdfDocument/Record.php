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
    protected $classMap = [
        'salesInvoice' => SalesInvoice\Record::class,
        'salesQuote' => SalesQuote\Record::class,
        'salesCreditMemo' => SalesCreditMemo\Record::class,
        'purchaseInvoice' => PurchaseInvoice\Record::class,
        'purchaseCreditMemo' => PurchaseCreditMemo\Record::class,
        'customerContact' => CustomerContact\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getParentId(): ?string
    {
        return $this->get('parentId');
    }

    function getParentType(): ?string
    {
        return $this->get('parentType');
    }

    function getPdfDocumentContent(): Entity\DataStream
    {
        return $this->get('pdfDocumentContent');
    }

    function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->getAsRelation('salesInvoice');
    }

    function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->getAsRelation('salesQuote');
    }

    function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->getAsRelation('salesCreditMemo');
    }

    function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->getAsRelation('purchaseInvoice');
    }

    function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->getAsRelation('purchaseCreditMemo');
    }

    function getCustomerContact(): ?CustomerContact\Record
    {
        return $this->getAsRelation('customerContact');
    }
}
