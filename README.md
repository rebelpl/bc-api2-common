# Business Central API2 for PHP - Common Entities
This library includes PHP models for all ```Microsoft.NAV``` entities from [Business Central API (v2.0)](https://learn.microsoft.com/en-us/dynamics365/business-central/dev-itpro/api-reference/v2.0/),
generated using the ```Rebel\BCApi2\Entity\Generator``` from [Business Central API2 for PHP](https://github.com/rebelpl/bc-api2-client).

## Install
```shell
composer require rebelpl/bc-api2-common
```

## Usage
```php
use Rebel\BCApi2\Entity\SalesOrder;

$client = new Rebel\BCApi2\Client(
    accessToken: '<access_token>',
    environment: '<environment>',
    companyId: '<company_id>',
);

$repository = new SalesOrder\Repository($client);
$criteria = [ SalesOrder\Properties::customerNumber->name => '30000' ];
$orderBy = [ SalesOrder\Properties::orderDate->name => 'DESC' ];
$expand = [ SalesOrder\Properties::salesOrderLines->name, SalesOrder\Properties::customer->name ];
$salesOrders = $repository->findBy($criteria, $orderBy, 10, null, $expand);
foreach ($salesOrders as $salesOrder) {
    echo " - {$salesOrder->number}:\t{$salesOrder->totalAmountIncludingTax} {$salesOrder->currencyCode}\n"; 
}
```

## Tests
```shell
./vendor/bin/phpunit
```
