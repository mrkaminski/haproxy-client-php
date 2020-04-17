# Swagger\Client\FilterApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFilter**](FilterApi.md#createfilter) | **POST** /services/haproxy/configuration/filters | Add a new Filter
[**deleteFilter**](FilterApi.md#deletefilter) | **DELETE** /services/haproxy/configuration/filters/{id} | Delete a Filter
[**getFilter**](FilterApi.md#getfilter) | **GET** /services/haproxy/configuration/filters/{id} | Return one Filter
[**getFilters**](FilterApi.md#getfilters) | **GET** /services/haproxy/configuration/filters | Return an array of all Filters
[**replaceFilter**](FilterApi.md#replacefilter) | **PUT** /services/haproxy/configuration/filters/{id} | Replace a Filter

# **createFilter**
> \Swagger\Client\Model\Filter createFilter($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Add a new Filter

Adds a new Filter of the specified type in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Filter(); // \Swagger\Client\Model\Filter | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createFilter($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->createFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Filter**](../Model/Filter.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFilter**
> deleteFilter($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Delete a Filter

Deletes a Filter configuration by it's ID from the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteFilter($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->deleteFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Filter ID |
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

# **getFilter**
> \Swagger\Client\Model\InlineResponse20025 getFilter($id, $parent_name, $parent_type, $transaction_id)

Return one Filter

Returns one Filter configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getFilter($id, $parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Filter ID |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilters**
> \Swagger\Client\Model\InlineResponse20024 getFilters($parent_name, $parent_type, $transaction_id)

Return an array of all Filters

Returns all Filters that are configured in specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getFilters($parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getFilters: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceFilter**
> \Swagger\Client\Model\Filter replaceFilter($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload)

Replace a Filter

Replaces a Filter configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Filter(); // \Swagger\Client\Model\Filter | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$id = 56; // int | Filter ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceFilter($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->replaceFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Filter**](../Model/Filter.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **id** | **int**| Filter ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Filter**](../Model/Filter.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

