# Swagger\Client\StickTableApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStickTable**](StickTableApi.md#getsticktable) | **GET** /services/haproxy/runtime/stick_tables/{name} | Return Stick Table
[**getStickTableEntries**](StickTableApi.md#getsticktableentries) | **GET** /services/haproxy/runtime/stick_table_entries | Return Stick Table Entries
[**getStickTables**](StickTableApi.md#getsticktables) | **GET** /services/haproxy/runtime/stick_tables | Return Stick Tables

# **getStickTable**
> \Swagger\Client\Model\StickTable getStickTable($name, $process)

Return Stick Table

Returns one stick table from runtime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StickTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Stick table name
$process = 56; // int | Process number if master-worker mode, if not only first process is returned

try {
    $result = $apiInstance->getStickTable($name, $process);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StickTableApi->getStickTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Stick table name |
 **process** | **int**| Process number if master-worker mode, if not only first process is returned |

### Return type

[**\Swagger\Client\Model\StickTable**](../Model/StickTable.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStickTableEntries**
> \Swagger\Client\Model\StickTableEntries getStickTableEntries($stick_table, $process, $filter, $key, $count, $offset)

Return Stick Table Entries

Returns an array of all entries in a given stick tables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StickTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stick_table = "stick_table_example"; // string | Stick table name
$process = 56; // int | Process number if master-worker mode, if not only first process is returned
$filter = "filter_example"; // string | A list of filters in format data.<type> <operator> <value> separated by comma
$key = "key_example"; // string | Key which we want the entries for
$count = 56; // int | Max number of entries to be returned for pagination
$offset = 56; // int | Offset which indicates how many items we skip in pagination

try {
    $result = $apiInstance->getStickTableEntries($stick_table, $process, $filter, $key, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StickTableApi->getStickTableEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stick_table** | **string**| Stick table name |
 **process** | **int**| Process number if master-worker mode, if not only first process is returned |
 **filter** | **string**| A list of filters in format data.&lt;type&gt; &lt;operator&gt; &lt;value&gt; separated by comma | [optional]
 **key** | **string**| Key which we want the entries for | [optional]
 **count** | **int**| Max number of entries to be returned for pagination | [optional]
 **offset** | **int**| Offset which indicates how many items we skip in pagination | [optional]

### Return type

[**\Swagger\Client\Model\StickTableEntries**](../Model/StickTableEntries.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStickTables**
> \Swagger\Client\Model\StickTables getStickTables($process)

Return Stick Tables

Returns an array of all stick tables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\StickTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process = 56; // int | Process number if master-worker mode, if not all processes are returned

try {
    $result = $apiInstance->getStickTables($process);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StickTableApi->getStickTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process** | **int**| Process number if master-worker mode, if not all processes are returned | [optional]

### Return type

[**\Swagger\Client\Model\StickTables**](../Model/StickTables.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

