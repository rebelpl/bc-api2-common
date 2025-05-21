<?php
namespace Rebel\BCApi2\Entity\CustomerPaymentJournal;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

readonly class Repository extends EntityRepository
{
    public function __construct(Client $client)
    {
        parent::__construct($client, 'customerPaymentJournals', 'v2.0', Record::class);
    }
}
