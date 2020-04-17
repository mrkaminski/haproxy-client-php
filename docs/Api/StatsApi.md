# Swagger\Client\StatsApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStats**](StatsApi.md#getstats) | **GET** /services/haproxy/stats/native | Gets stats

# **getStats**
> \Swagger\Client\Model\NativeStats getStats($type, $name, $parent)

Gets stats

Getting stats from the HAProxy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Object type to get stats for (one of frontend, backend, server)
$name = "name_example"; // string | Object name to get stats for
$parent = "parent_example"; // string | Object parent name to get stats for, in case the object is a server

try {
    $result = $apiInstance->getStats($type, $name, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Object type to get stats for (one of frontend, backend, server) | [optional]
 **name** | **string**| Object name to get stats for | [optional]
 **parent** | **string**| Object parent name to get stats for, in case the object is a server | [optional]

### Return type

[**\Swagger\Client\Model\NativeStats**](../Model/NativeStats.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

