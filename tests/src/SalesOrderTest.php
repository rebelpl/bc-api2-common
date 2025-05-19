<?php
namespace Rebel\Test\BCApi2\Entity;

use PHPUnit\Framework\TestCase;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\SalesOrder;

class SalesOrderTest extends TestCase
{
    /** @var SalesOrder\Record[]  */
    private array $salesOrders = [];

    protected function setUp(): void
    {
        $data = json_decode(file_get_contents('tests/files/salesOrders.json'), true);
        echo count($data);
        foreach ($data['value'] as $result) {
            $this->salesOrders[] = new SalesOrder\Record($result, $data[ Entity::ODATA_CONTEXT ]);
        }
    }

    public function testNumberIsNotEmpty(): void
    {
        foreach ($this->salesOrders as $salesOrder) {
            $this->assertNotEmpty($salesOrder->getNumber());
        }
    }

    public function testRepositoryHasCorrectEntityClass(): void
    {
        $client = new Client('', '');
        $repository = new SalesOrder\Repository($client);
        $this->assertEquals(SalesOrder\Record::class, $repository->getEntityClass());
    }
}