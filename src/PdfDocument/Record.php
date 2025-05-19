<?php
namespace Rebel\BCApi2\Entity\PdfDocument;

use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\SalesInvoice;
use Rebel\BCApi2\Entity\SalesQuote;
use Rebel\BCApi2\Entity\SalesCreditMemo;
use Rebel\BCApi2\Entity\PurchaseInvoice;
use Rebel\BCApi2\Entity\PurchaseCreditMemo;
use Rebel\BCApi2\Entity\CustomerContact;

class Record extends Entity
{
	public ?string $id {
		get => $this->get('id');
	}

	public ?string $parentId {
		get => $this->get('parentId');
	}

	public ?Enums\AttachmentEntityBufferDocumentType $parentType {
		get => $this->get('parentType', Enums\AttachmentEntityBufferDocumentType::class);
	}

	public ?string $pdfDocumentContent {
		get => $this->get('pdfDocumentContent');
	}

	public ?SalesInvoice\Record $salesInvoice {
		get => $this->get('salesInvoice');
		set => $this->set('salesInvoice', $value);
	}

	public ?SalesQuote\Record $salesQuote {
		get => $this->get('salesQuote');
		set => $this->set('salesQuote', $value);
	}

	public ?SalesCreditMemo\Record $salesCreditMemo {
		get => $this->get('salesCreditMemo');
		set => $this->set('salesCreditMemo', $value);
	}

	public ?PurchaseInvoice\Record $purchaseInvoice {
		get => $this->get('purchaseInvoice');
		set => $this->set('purchaseInvoice', $value);
	}

	public ?PurchaseCreditMemo\Record $purchaseCreditMemo {
		get => $this->get('purchaseCreditMemo');
		set => $this->set('purchaseCreditMemo', $value);
	}

	public ?CustomerContact\Record $customerContact {
		get => $this->get('customerContact');
		set => $this->set('customerContact', $value);
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