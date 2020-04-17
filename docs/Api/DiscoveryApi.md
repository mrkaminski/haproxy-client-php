# Swagger\Client\DiscoveryApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAPIEndpoints**](DiscoveryApi.md#getapiendpoints) | **GET** / | Return list of root endpoints
[**getConfigurationEndpoints**](DiscoveryApi.md#getconfigurationendpoints) | **GET** /services/haproxy/configuration | Return list of HAProxy advanced configuration endpoints
[**getHaproxyEndpoints**](DiscoveryApi.md#gethaproxyendpoints) | **GET** /services/haproxy | Return list of HAProxy related endpoints
[**getRuntimeEndpoints**](DiscoveryApi.md#getruntimeendpoints) | **GET** /services/haproxy/runtime | Return list of HAProxy advanced runtime endpoints
[**getServicesEndpoints**](DiscoveryApi.md#getservicesendpoints) | **GET** /services | Return list of service endpoints
[**getStatsEndpoints**](DiscoveryApi.md#getstatsendpoints) | **GET** /services/haproxy/stats | Return list of HAProxy stats endpoints

# **getAPIEndpoints**
> \Swagger\Client\Model\Endpoints getAPIEndpoints()

Return list of root endpoints

Returns a list of root endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAPIEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getAPIEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurationEndpoints**
> \Swagger\Client\Model\Endpoints getConfigurationEndpoints()

Return list of HAProxy advanced configuration endpoints

Returns a list of endpoints to be used for advanced configuration of HAProxy objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfigurationEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getConfigurationEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHaproxyEndpoints**
> \Swagger\Client\Model\Endpoints getHaproxyEndpoints()

Return list of HAProxy related endpoints

Returns a list of HAProxy related endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHaproxyEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getHaproxyEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuntimeEndpoints**
> \Swagger\Client\Model\Endpoints getRuntimeEndpoints()

Return list of HAProxy advanced runtime endpoints

Returns a list of endpoints to be used for advanced runtime settings of HAProxy objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRuntimeEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getRuntimeEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServicesEndpoints**
> \Swagger\Client\Model\Endpoints getServicesEndpoints()

Return list of service endpoints

Returns a list of API managed services endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServicesEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getServicesEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatsEndpoints**
> \Swagger\Client\Model\Endpoints getStatsEndpoints()

Return list of HAProxy stats endpoints

Returns a list of HAProxy stats endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DiscoveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatsEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->getStatsEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Endpoints**](../Model/Endpoints.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

