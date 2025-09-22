<?php
namespace Rebel\BCApi2\Entity\RetainedEarningsStatement;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

class Repository extends EntityRepository
{
    public function __construct(Client $client)
    {
        parent::__construct($client, 'retainedEarningsStatements', Record::class);
    }
}
