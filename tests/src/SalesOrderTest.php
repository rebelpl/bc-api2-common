<?php
namespace Rebel\Test\BCApi2\Entity;

use PHPUnit\Framework\TestCase;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\Enums;

class SalesOrderTest extends TestCase
{
    /** @var SalesOrder\Record[]  */
    private array $salesOrders = [];

    protected function setUp(): void
    {
        $data = json_decode(file_get_contents('tests/files/salesOrders.json'), true);
        foreach ($data['value'] as $result) {
            $this->salesOrders[] = new SalesOrder\Record($result, $data[ Entity::ODATA_CONTEXT ]);
        }
    }

    public function testBasicProperties(): void
    {
        foreach ($this->salesOrders as $salesOrder) {
            $this->assertNotEmpty($salesOrder->number);
            $this->assertGreaterThan(new \DateTime('2020-01-01'), $salesOrder->orderDate);
            $this->assertInstanceOf(Enums\SalesOrderEntityBufferStatus::class, $salesOrder->status);
            $this->assertNull($salesOrder->fooBar);
        }
    }

    public function testNewInstance(): void
    {
        $salesOrder = new SalesOrder\Record();
        $this->assertNull($salesOrder->etag);
        $this->assertNull($salesOrder->orderDate);
        $this->assertEmpty($salesOrder->toUpdate());
    }

    public function testRepositoryHasCorrectEntityClass(): void
    {
        $client = new Client('', '');
        $repository = new SalesOrder\Repository($client);
        $this->assertEquals(SalesOrder\Record::class, $repository->getEntityClass());
    }
}