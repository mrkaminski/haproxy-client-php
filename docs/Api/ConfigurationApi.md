# Swagger\Client\ConfigurationApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHAProxyConfiguration**](ConfigurationApi.md#gethaproxyconfiguration) | **GET** /services/haproxy/configuration/raw | Return HAProxy configuration
[**postHAProxyConfiguration**](ConfigurationApi.md#posthaproxyconfiguration) | **POST** /services/haproxy/configuration/raw | Push new haproxy configuration

# **getHAProxyConfiguration**
> \Swagger\Client\Model\InlineResponse20032 getHAProxyConfiguration($transaction_id, $version)

Return HAProxy configuration

Returns HAProxy configuration file in plain text

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.

try {
    $result = $apiInstance->getHAProxyConfiguration($transaction_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getHAProxyConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postHAProxyConfiguration**
> string postHAProxyConfiguration($body, $version, $force_reload)

Push new haproxy configuration

Push a new haproxy configuration file in plain text

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->postHAProxyConfiguration($body, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->postHAProxyConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  |
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

**string**

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

