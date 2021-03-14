<!-- #!/usr/bin/php -->
<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_number = "20-222222"; // string | Your unique Ingram Micro customer number
$iso_country_code = "US"; // string | 2 chars country code
$part_number = "1AQ821"; // string | Part Number can be ingram part number or vendor part number or customer part number or UPC

try {
    $result = $apiInstance->getV5CatalogProductsearch($customer_number, $iso_country_code, $part_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getV5CatalogProductsearch: ', $e->getMessage(), PHP_EOL;
}
?>