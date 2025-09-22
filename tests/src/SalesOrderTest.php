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
    private $salesOrders = [];

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
        $salesOrder->setExternalDocumentNumber('TEST-001');
        $this->assertEquals('TEST-001', $salesOrder->getExternalDocumentNumber());

        foreach ($this->salesOrders as $salesOrder) {
            $this->assertNotEmpty($salesOrder->getNumber());
            $this->assertGreaterThan(new \DateTime('2020-01-01'), $salesOrder->getOrderDate());
            $this->assertEquals(Enums\SalesOrderEntityBufferStatus::Open, $salesOrder->getStatus());
        }
    }

    public function testEmptyInstance(): void
    {
        $salesOrder = new SalesOrder\Record();
        $this->assertNull($salesOrder->getETag());
        $this->assertNull($salesOrder->getOrderDate());
        $this->assertEmpty($salesOrder->toUpdate());
    }

    public function testRepositoryHasCorrectEntityClass(): void
    {
        $client = new Client('test', 'test', '/v2.0', 'test');
        $repository = new SalesOrder\Repository($client);
        $this->assertEquals(SalesOrder\Record::class, $repository->getEntityClass());
    }

    public function testNewInstance(): void
    {
        $salesOrder = new SalesOrder\Record([
            SalesOrder\Properties::externalDocumentNumber => "TEST-001",
            SalesOrder\Properties::customerNumber => "NA0007",
        ], [ SalesOrder\Properties::salesOrderLines, SalesOrder\Properties::customer ]);

        $salesLines = $salesOrder->getSalesOrderLines();
        $salesLines[] = new SalesOrderLine\Record([
            SalesOrderLine\Properties::sequence => 10000,
            SalesOrderLine\Properties::itemId => "b3c285a5-f12b-f011-9a4a-7c1e5275406f",
            SalesOrderLine\Properties::quantity => 10,
        ]);

        $salesLines[] = new SalesOrderLine\Record([
            "lineType" => "Item",
            "lineObjectNumber" => "1120",
            "quantity" => 20
        ]);

        $this->assertCount(2, $salesOrder->getSalesOrderLines());

        $updateData = $salesOrder->toUpdate(true);
        $this->assertEquals('TEST-001', $updateData['externalDocumentNumber']);
        $this->assertArrayHasKey('salesOrderLines', $updateData);
        $this->assertCount(2, $updateData['salesOrderLines']);
    }
}