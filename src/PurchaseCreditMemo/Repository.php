<?php
namespace Rebel\BCApi2\Entity\PurchaseCreditMemo;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

readonly class Repository extends EntityRepository
{
    public function __construct(Client $client)
    {
        parent::__construct($client, entitySetName: 'purchaseCreditMemos', entityClass: Record::class);
    }
}
