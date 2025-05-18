<?php
namespace Microsoft\NAV\FixedAsset;

use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity\Repository as EntityRepository;

readonly class Repository extends EntityRepository
{
    public function __construct(Client $client)
    {
        parent::__construct($client, 'fixedAssets', 'v2.0', Record::class);
    }
}