<?php
namespace Rebel\BCApi2\Entity\PdfDocument;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\CustomerContact;
use Rebel\BCApi2\Entity\Enums;

class Record extends Entity
{
    public function __construct(array $data = [], protected ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            Properties::salesInvoice->name => SalesInvoice\Record::class,
            Properties::salesQuote->name => SalesQuote\Record::class,
            Properties::salesCreditMemo->name => SalesCreditMemo\Record::class,
            Properties::purchaseInvoice->name => PurchaseInvoice\Record::class,
            Properties::purchaseCreditMemo->name => PurchaseCreditMemo\Record::class,
            Properties::customerContact->name => CustomerContact\Record::class,
        ];
    }

    public function getId(): ?string
    {
        return $this->get(Properties::id->name);
    }

    public function getParentId(): ?string
    {
        return $this->get(Properties::parentId->name);
    }

    public function getParentType(): ?Enums\AttachmentEntityBufferDocumentType
    {
        return $this->getAsEnum(Properties::parentType->name, Enums\AttachmentEntityBufferDocumentType::class);
    }

    public function getPdfDocumentContent(): ?string
    {
        return $this->get(Properties::pdfDocumentContent->name);
    }

    public function getSalesInvoice(): ?SalesInvoice\Record
    {
        return $this->get(Properties::salesInvoice->name);
    }

    public function getSalesQuote(): ?SalesQuote\Record
    {
        return $this->get(Properties::salesQuote->name);
    }

    public function getSalesCreditMemo(): ?SalesCreditMemo\Record
    {
        return $this->get(Properties::salesCreditMemo->name);
    }

    public function getPurchaseInvoice(): ?PurchaseInvoice\Record
    {
        return $this->get(Properties::purchaseInvoice->name);
    }

    public function getPurchaseCreditMemo(): ?PurchaseCreditMemo\Record
    {
        return $this->get(Properties::purchaseCreditMemo->name);
    }

    public function getCustomerContact(): ?CustomerContact\Record
    {
        return $this->get(Properties::customerContact->name);
    }
}