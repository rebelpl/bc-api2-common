<?php
namespace Rebel\BCApi2\Entity\AgedAccountsReceivable;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

class Repository extends EntityRepository
{
    public function __construct(Client $client)
    {
        parent::__construct($client, 'agedAccountsReceivables', Record::class);
    }
}
