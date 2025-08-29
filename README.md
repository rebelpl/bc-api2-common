# Business Central API2 for PHP - Common Entities
This library includes models for all Microsoft.NAV entities from [Business Central API (v2.0)](https://learn.microsoft.com/en-us/dynamics365/business-central/dev-itpro/api-reference/v2.0/)
and the code generator tool to create similar models for your own API. 

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
$criteria = [ 'customerNumber' => '30000' ];
$orderBy = [ 'orderDate' => 'DESC' ];
$expand = [ SalesOrder\Properties::salesOrderLines, SalesOrder\Properties::customer ];
$salesOrders = $repository->findBy($criteria, $orderBy, 10, null, $expand);
foreach ($salesOrders as $salesOrder) {
    echo " - {$salesOrder->number}:\t{$salesOrder->totalAmountIncludingTax} {$salesOrder->currencyCode}\n"; 
}
```

## Download metadata for your API
```shell
curl -X GET "https://api.businesscentral.dynamics.com/v2.0/<environment>/api/<api_publisher>/<api_group>/<api_version>/$metadata" \
  -H "Authorization: Bearer <access_token>" \
  -H "Accept: application/xml" \
  -o files/metadata.xml
```

## Tests
```shell
./vendor/bin/phpunit
```
