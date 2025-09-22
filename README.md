# Business Central API2 for PHP - Common Entities
This library includes PHP models for all ```Microsoft.NAV``` entities from [Business Central API (v2.0)](https://learn.microsoft.com/en-us/dynamics365/business-central/dev-itpro/api-reference/v2.0/),
generated using the ```Rebel\BCApi2\Entity\Generator``` from [Business Central API2 for PHP](https://github.com/rebelpl/bc-api2-client).

## Install
```shell
composer require rebelpl/bc-api2-common
```

For PHP7.2 compatible version use:
```shell
composer require rebelpl/bc-api2-common:dev-php7.2
```

## Usage
```php
use Rebel\BCApi2\Entity\Item;
use Rebel\BCApi2\Entity\SalesOrder;
use Rebel\BCApi2\Request\Expression;

$client = new Rebel\BCApi2\Client(
    accessToken: '<access_token>',
    environment: '<environment>',
    companyId: '<company_id>',
);

$repository = new SalesOrder\Repository($client);
$repository->setExpandedByDefault([
    SalesOrder\Properties::salesOrderLines->name,
    SalesOrder\Properties::customer->name,
 ])

// Get a sales order by ID
$salesOrder = $repository->get('abc-123');

// Update properties of the sales order
$salesOrder->externalDocumentNumber = 'TEST';
$salesOrder->salesOrderLines[0]->quantity = 10;
$salesOrder->salesOrderLines[] = new Rebel\BCApi2\Entity\SalesOrderLine\Record([
    'itemId' => '12345',
    'quantity' => 5
]);

// Save all changes in one operation
$repository->save($salesOrder);

// find top 10 sales orders with filters
$orderBy = [ SalesOrder\Properties::orderDate->name => 'DESC' ];
$salesOrders = $repository->findBy([
    SalesOrder\Properties::customerNumber->name => '30000',
    Expression::greaterOrEqualThan(SalesOrder\Properties::orderDate->name, new \DateTime('today')),
    SalesOrder\Properties::shipToCountry->name => [ 'PL', 'DE' ],
], $orderBy, 10);

foreach ($salesOrders as $salesOrder) {
    echo " - {$salesOrder->number}:\t{$salesOrder->totalAmountIncludingTax} {$salesOrder->currencyCode}\n"; 
}

// upload picture for an item
$repository = new Item\Repository($client);

/** @var Item\Record $item */
$item = $repository->findOneBy([ 'number' => '100000' ]);

$file = file_get_contents('tests/files/picture.png');
$item->picture->pictureContent->uploadWith($client, $file, $item->picture->getETag());
```

## Tests
```shell
./vendor/bin/phpunit
```
