# Business Central API2 for PHP - Common Entities
This library includes models for all Microsoft.NAV entities from [Business Central API (v2.0)](https://learn.microsoft.com/en-us/dynamics365/business-central/dev-itpro/api-reference/v2.0/)
and the code generator tool to create similar models for your own API. 

## Install
```shell
composer require rebelpl/bc-api2-common
```

## Usage
```php
use Microsoft\NAV\SalesOrder;

$client = new Rebel\BCApi2\Client(
    accessToken: '<access_token>',
    environment: '<environment>',
    companyId: '<company_id>',
);

$repository = new SalesOrder\Repository($client);
$criteria = [ SalesOrder\Properties::customerNumber->name => '30000' ];
$orderBy = [ SalesOrder\Properties::orderDate->name => 'DESC' ];
$expand = [ SalesOrder\Properties::salesOrderLines, SalesOrder\Properties::customer ];
$salesOrders = $repository->findBy($criteria, $orderBy, 10, null, $expand);
foreach ($salesOrders as $salesOrder) {
    echo " - {$salesOrder->getNumber()}:\t{$salesOrder->getTotalAmountIncludingTax()} {$salesOrder->getCurrencyCode()}\n"; 
}
```

## Generate models for your API
```shell
curl -X GET "https://api.businesscentral.dynamics.com/v2.0/<environment>/api/<api_ublisher>/<api_group>/<api_version>/$metadata" \
  -H "Authorization: Bearer <access_token>" \
  -H "Accept: application/xml" \
  -o files/metadata.xml

./vendor/bin/generate \
    --metadata="files/metadata.xml" \
    --output="src/Models/" \
    --namespace="Foo\\Bar"
    --apipath="<api_publisher>/<api_group>/<api_version>"
```

## Tests
```shell
./vendor/bin/phpunit
```