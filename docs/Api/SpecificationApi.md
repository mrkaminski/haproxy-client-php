# Swagger\Client\SpecificationApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSpecification**](SpecificationApi.md#getspecification) | **GET** /specification | Data Plane API Specification

# **getSpecification**
> object getSpecification()

Data Plane API Specification

Return Data Plane API OpenAPI specification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSpecification();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->getSpecification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

