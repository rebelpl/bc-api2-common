<?php
namespace Rebel\Test\BCApi2\Entity;

use PHPUnit\Framework\TestCase;
use Rebel\BCApi2\Client;
use Rebel\BCApi2\Entity;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Entity\SalesOrderLine;
use Rebel\BCApi2\Entity\Enums;

class SalesOrderTest extends TestCase
{
    /** @var SalesOrder\Record[]  */
    private array $salesOrders = [];

    protected function setUp(): void
    {
        $data = json_decode(file_get_contents('tests/files/salesOrders.json'), true);
        foreach ($data['value'] as $result) {
            $this->salesOrders[] = new SalesOrder\Record($result, [], $data[ Entity::ODATA_CONTEXT ]);
        }
    }

    public function testBasicProperties(): void
    {
        $salesOrder = new SalesOrder\Record();
        $salesOrder->externalDocumentNumber = 'TEST-001';
        $this->assertEquals('TEST-001', $salesOrder->externalDocumentNumber);

        foreach ($this->salesOrders as $salesOrder) {
            $this->assertNotEmpty($salesOrder->number);
            $this->assertGreaterThan(new \DateTime('2020-01-01'), $salesOrder->orderDate);
            $this->assertInstanceOf(Enums\SalesOrderEntityBufferStatus::class, $salesOrder->status);
            $this->assertNull($salesOrder->fooBar);
        }
    }

    public function testEmptyInstance(): void
    {
        $salesOrder = new SalesOrder\Record();
        $this->assertNull($salesOrder->etag);
        $this->assertNull($salesOrder->orderDate);
        $this->assertEmpty($salesOrder->toUpdate());
    }

    public function testRepositoryHasCorrectEntityClass(): void
    {
        $client = new Client('test', 'test', companyId: 'test');
        $repository = new SalesOrder\Repository($client);
        $this->assertEquals(SalesOrder\Record::class, $repository->getEntityClass());
    }

    public function testNewInstance(): void
    {
        $salesOrder = new SalesOrder\Record([
            "externalDocumentNumber" => "TEST-001",
            "customerNumber" => "NA0007",
        ], expanded: [ 'salesOrderLines', 'customer' ]);
        $this->assertInstanceOf(Entity\Collection::class, $salesOrder->salesOrderLines);

        $salesOrder->salesOrderLines[] = new SalesOrderLine\Record([
            "sequence" => 10000,
            "itemId" => "b3c285a5-f12b-f011-9a4a-7c1e5275406f",
            "quantity" => 10,
        ]);

        $salesOrder->salesOrderLines[] = new SalesOrderLine\Record([
            "lineType" => "Item",
            "lineObjectNumber" => "1120",
            "quantity" => 20
        ]);

        $this->assertCount(2, $salesOrder->salesOrderLines);

        $updateData = $salesOrder->toUpdate(true);
        $this->assertEquals('TEST-001', $updateData['externalDocumentNumber']);
        $this->assertArrayHasKey('salesOrderLines', $updateData);
        $this->assertCount(2, $updateData['salesOrderLines']);
    }
}