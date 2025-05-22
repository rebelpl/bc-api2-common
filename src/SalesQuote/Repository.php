<?php
namespace Rebel\BCApi2\Entity\SalesQuote;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

readonly class Repository extends EntityRepository
{
    public function __construct(Client $client)
    {
        parent::__construct($client, entitySetName: 'salesQuotes', entityClass: Record::class);
    }
}
