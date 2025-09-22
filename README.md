# Business Central API2 for PHP - Common Entities
This library includes PHP models for all ```Microsoft.NAV``` entities from [Business Central API (v2.0)](https://learn.microsoft.com/en-us/dynamics365/business-central/dev-itpro/api-reference/v2.0/),
generated using the ```Rebel\BCApi2\Entity\Generator``` from [Business Central API2 for PHP](https://github.com/rebelpl/bc-api2-client).

## Install
```shell
composer require rebelpl/bc-api2-common:dev-php7.2
```

For PHP 8.4 compatible version use:
```shell
composer require rebelpl/bc-api2-common:dev-php7.2
```

## Usage
```php
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Request\Expression;

$client = new Rebel\BCApi2\Client(
    '<access_token>',
    '<environment>', '/v2.0'
    '<company_id>',
);

$repository = new SalesOrder\Repository($client);
$repository->setExpandedByDefault([
    SalesOrder\Properties::salesOrderLines,
    SalesOrder\Properties::customer,
 ])

// Get a sales order by ID
$salesOrder = $repository->get('abc-123');

// Update properties of the sales order
$salesOrder->setExternalDocumentNumber('TEST');
$salesLines = $salesOrder->getSalesOrderLines(); 
$salesLines[0]->setQuantity(10);
$salesLines[] = new Rebel\BCApi2\Entity\SalesOrderLine\Record([
    'itemId' => '12345',
    'quantity' => 5
]);

// Save all changes in one operation
$repository->save($salesOrder);

// find top 10 sales orders with filters
$orderBy = [ SalesOrder\Properties::orderDate => 'DESC' ];
$salesOrders = $repository->findBy([
    SalesOrder\Properties::customerNumber => '30000',
    Expression::greaterOrEqualThan(SalesOrder\Properties::orderDate, new \DateTime('today')),
    SalesOrder\Properties::shipToCountry => [ 'PL', 'DE' ],
], $orderBy, 10);

foreach ($salesOrders as $salesOrder) {
    /** @var SalesOrder\Record $salesOrder */
    echo " - {$salesOrder->getNumber()}:\t{$salesOrder->getTotalAmountIncludingTax()} {$salesOrder->getCurrencyCode()}\n"; 
}

// upload picture for an item
$repository = new Item\Repository($client);

/** @var Item\Record $item */
$item = $repository->findOneBy([ 'number' => '100000' ]);

$file = file_get_contents('tests/files/picture.png');
$item->getPicture()->getPictureContent()->uploadWith($client, $file, $item->picture->getETag());
```

## Tests
```shell
./vendor/bin/phpunit
```
