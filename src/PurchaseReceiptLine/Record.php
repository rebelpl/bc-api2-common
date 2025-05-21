<?php
namespace Rebel\BCApi2\Entity\PurchaseReceiptLine;

use Carbon\Carbon;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\Enums;
use Rebel\BCApi2\Entity\PurchaseReceipt;

class Record extends Entity
{
    public ?string $id {
        get => $this->get('id');
    }

    public ?string $documentId {
        get => $this->get('documentId');
    }

    public ?int $sequence {
        get => $this->get('sequence');
    }

    public ?Enums\PurchaseLineType $lineType {
        get => $this->getAsEnum('lineType', Enums\PurchaseLineType::class);
    }

    public ?string $lineObjectNumber {
        get => $this->get('lineObjectNumber');
    }

    public ?string $description {
        get => $this->get('description');
    }

    public ?string $description2 {
        get => $this->get('description2');
    }

    public ?string $unitOfMeasureCode {
        get => $this->get('unitOfMeasureCode');
    }

    public ?float $unitCost {
        get => $this->get('unitCost');
    }

    public ?float $quantity {
        get => $this->get('quantity');
    }

    public ?float $discountPercent {
        get => $this->get('discountPercent');
    }

    public ?float $taxPercent {
        get => $this->get('taxPercent');
    }

    public ?Carbon $expectedReceiptDate {
        get => $this->getAsDateTime('expectedReceiptDate');
    }

    /** @var ?PurchaseReceipt\Record */
    public ?PurchaseReceipt\Record $purchaseReceipt {
        get => $this->get('purchaseReceipt');
    }

    /** @var ?Entity\Collection<DimensionSetLine\Record> */
    public ?Entity\Collection $dimensionSetLines {
        get => $this->get('dimensionSetLines');
    }

    public function __construct(array $data = [], ?string $context = null)
    {
        parent::__construct($data, $context);

        $this->classMap = [
            'purchaseReceipt' => PurchaseReceipt\Record::class,
            'dimensionSetLines' => DimensionSetLine\Record::class,
        ];
    }
}
