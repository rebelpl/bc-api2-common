<?php
namespace Rebel\BCApi2\Entity\PurchaseReceipt;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

class Repository extends EntityRepository
{
    public function __construct(Client $client, string $entityClass = Record::class)
    {
        parent::__construct($client, entitySetName: 'purchaseReceipts', entityClass: $entityClass);
    }
}
