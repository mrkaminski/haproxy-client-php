# Swagger\Client\LogTargetApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLogTarget**](LogTargetApi.md#createlogtarget) | **POST** /services/haproxy/configuration/log_targets | Add a new Log Target
[**deleteLogTarget**](LogTargetApi.md#deletelogtarget) | **DELETE** /services/haproxy/configuration/log_targets/{id} | Delete a Log Target
[**getLogTarget**](LogTargetApi.md#getlogtarget) | **GET** /services/haproxy/configuration/log_targets/{id} | Return one Log Target
[**getLogTargets**](LogTargetApi.md#getlogtargets) | **GET** /services/haproxy/configuration/log_targets | Return an array of all Log Targets
[**replaceLogTarget**](LogTargetApi.md#replacelogtarget) | **PUT** /services/haproxy/configuration/log_targets/{id} | Replace a Log Target

# **createLogTarget**
> \Swagger\Client\Model\LogTarget createLogTarget($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Add a new Log Target

Adds a new Log Target of the specified type in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LogTarget(); // \Swagger\Client\Model\LogTarget | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createLogTarget($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogTargetApi->createLogTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LogTarget**](../Model/LogTarget.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\LogTarget**](../Model/LogTarget.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLogTarget**
> deleteLogTarget($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Delete a Log Target

Deletes a Log Target configuration by it's ID from the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Log Target ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteLogTarget($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling LogTargetApi->deleteLogTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Log Target ID |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLogTarget**
> \Swagger\Client\Model\InlineResponse20029 getLogTarget($id, $parent_name, $parent_type, $transaction_id)

Return one Log Target

Returns one Log Target configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Log Target ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getLogTarget($id, $parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogTargetApi->getLogTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Log Target ID |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLogTargets**
> \Swagger\Client\Model\InlineResponse20028 getLogTargets($parent_name, $parent_type, $transaction_id)

Return an array of all Log Targets

Returns all Log Targets that are configured in specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getLogTargets($parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogTargetApi->getLogTargets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceLogTarget**
> \Swagger\Client\Model\LogTarget replaceLogTarget($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload)

Replace a Log Target

Replaces a Log Target configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogTargetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LogTarget(); // \Swagger\Client\Model\LogTarget | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$id = 56; // int | Log Target ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceLogTarget($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogTargetApi->replaceLogTarget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LogTarget**](../Model/LogTarget.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **id** | **int**| Log Target ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\LogTarget**](../Model/LogTarget.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

