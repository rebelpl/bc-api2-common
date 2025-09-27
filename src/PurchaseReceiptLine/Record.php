<?php
namespace Rebel\BCApi2\Entity\PurchaseReceiptLine;

use Carbon\Carbon;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\DimensionSetLine;
use Rebel\BCApi2\Entity\PurchaseReceipt;

class Record extends Entity
{
    protected $classMap = [
        'purchaseReceipt' => PurchaseReceipt\Record::class,
        'dimensionSetLines' => DimensionSetLine\Record::class,
    ];

    function getId(): ?string
    {
        return $this->get('id');
    }

    function getDocumentId(): ?string
    {
        return $this->get('documentId');
    }

    function getSequence(): ?int
    {
        return $this->get('sequence');
    }

    function getLineType(): ?string
    {
        return $this->get('lineType');
    }

    function getLineObjectNumber(): ?string
    {
        return $this->get('lineObjectNumber');
    }

    function getDescription(): ?string
    {
        return $this->get('description');
    }

    function getDescription2(): ?string
    {
        return $this->get('description2');
    }

    function getUnitOfMeasureCode(): ?string
    {
        return $this->get('unitOfMeasureCode');
    }

    function getUnitCost(): ?float
    {
        return $this->get('unitCost');
    }

    function getQuantity(): ?float
    {
        return $this->get('quantity');
    }

    function getDiscountPercent(): ?float
    {
        return $this->get('discountPercent');
    }

    function getTaxPercent(): ?float
    {
        return $this->get('taxPercent');
    }

    function getExpectedReceiptDate(): ?Carbon
    {
        return $this->getAsDate('expectedReceiptDate');
    }

    function getPurchaseReceipt(): ?PurchaseReceipt\Record
    {
        return $this->getAsRelation('purchaseReceipt');
    }

    /**
     * @return Entity\Collection|DimensionSetLine\Record[]
     */
    function getDimensionSetLines(): Entity\Collection
    {
        return $this->getAsCollection('dimensionSetLines');
    }
}
