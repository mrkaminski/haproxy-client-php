# Swagger\Client\HTTPRequestRuleApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHTTPRequestRule**](HTTPRequestRuleApi.md#createhttprequestrule) | **POST** /services/haproxy/configuration/http_request_rules | Add a new HTTP Request Rule
[**deleteHTTPRequestRule**](HTTPRequestRuleApi.md#deletehttprequestrule) | **DELETE** /services/haproxy/configuration/http_request_rules/{id} | Delete a HTTP Request Rule
[**getHTTPRequestRule**](HTTPRequestRuleApi.md#gethttprequestrule) | **GET** /services/haproxy/configuration/http_request_rules/{id} | Return one HTTP Request Rule
[**getHTTPRequestRules**](HTTPRequestRuleApi.md#gethttprequestrules) | **GET** /services/haproxy/configuration/http_request_rules | Return an array of all HTTP Request Rules
[**replaceHTTPRequestRule**](HTTPRequestRuleApi.md#replacehttprequestrule) | **PUT** /services/haproxy/configuration/http_request_rules/{id} | Replace a HTTP Request Rule

# **createHTTPRequestRule**
> \Swagger\Client\Model\HttpRequestRule createHTTPRequestRule($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Add a new HTTP Request Rule

Adds a new HTTP Request Rule of the specified type in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HTTPRequestRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\HttpRequestRule(); // \Swagger\Client\Model\HttpRequestRule | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createHTTPRequestRule($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HTTPRequestRuleApi->createHTTPRequestRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HttpRequestRule**](../Model/HttpRequestRule.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\HttpRequestRule**](../Model/HttpRequestRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHTTPRequestRule**
> deleteHTTPRequestRule($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Delete a HTTP Request Rule

Deletes a HTTP Request Rule configuration by it's ID from the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HTTPRequestRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | HTTP Request Rule ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteHTTPRequestRule($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling HTTPRequestRuleApi->deleteHTTPRequestRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| HTTP Request Rule ID |
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

# **getHTTPRequestRule**
> \Swagger\Client\Model\InlineResponse20013 getHTTPRequestRule($id, $parent_name, $parent_type, $transaction_id)

Return one HTTP Request Rule

Returns one HTTP Request Rule configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HTTPRequestRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | HTTP Request Rule ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getHTTPRequestRule($id, $parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HTTPRequestRuleApi->getHTTPRequestRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| HTTP Request Rule ID |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHTTPRequestRules**
> \Swagger\Client\Model\InlineResponse20012 getHTTPRequestRules($parent_name, $parent_type, $transaction_id)

Return an array of all HTTP Request Rules

Returns all HTTP Request Rules that are configured in specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HTTPRequestRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getHTTPRequestRules($parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HTTPRequestRuleApi->getHTTPRequestRules: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceHTTPRequestRule**
> \Swagger\Client\Model\HttpRequestRule replaceHTTPRequestRule($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload)

Replace a HTTP Request Rule

Replaces a HTTP Request Rule configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HTTPRequestRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\HttpRequestRule(); // \Swagger\Client\Model\HttpRequestRule | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$id = 56; // int | HTTP Request Rule ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceHTTPRequestRule($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HTTPRequestRuleApi->replaceHTTPRequestRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HttpRequestRule**](../Model/HttpRequestRule.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **id** | **int**| HTTP Request Rule ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\HttpRequestRule**](../Model/HttpRequestRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

