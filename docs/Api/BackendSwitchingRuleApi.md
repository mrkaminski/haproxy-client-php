# Swagger\Client\BackendSwitchingRuleApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBackendSwitchingRule**](BackendSwitchingRuleApi.md#createbackendswitchingrule) | **POST** /services/haproxy/configuration/backend_switching_rules | Add a new Backend Switching Rule
[**deleteBackendSwitchingRule**](BackendSwitchingRuleApi.md#deletebackendswitchingrule) | **DELETE** /services/haproxy/configuration/backend_switching_rules/{id} | Delete a Backend Switching Rule
[**getBackendSwitchingRule**](BackendSwitchingRuleApi.md#getbackendswitchingrule) | **GET** /services/haproxy/configuration/backend_switching_rules/{id} | Return one Backend Switching Rule
[**getBackendSwitchingRules**](BackendSwitchingRuleApi.md#getbackendswitchingrules) | **GET** /services/haproxy/configuration/backend_switching_rules | Return an array of all Backend Switching Rules
[**replaceBackendSwitchingRule**](BackendSwitchingRuleApi.md#replacebackendswitchingrule) | **PUT** /services/haproxy/configuration/backend_switching_rules/{id} | Replace a Backend Switching Rule

# **createBackendSwitchingRule**
> \Swagger\Client\Model\BackendSwitchingRule createBackendSwitchingRule($body, $frontend, $transaction_id, $version, $force_reload)

Add a new Backend Switching Rule

Adds a new Backend Switching Rule of the specified type in the specified frontend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BackendSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BackendSwitchingRule(); // \Swagger\Client\Model\BackendSwitchingRule | 
$frontend = "frontend_example"; // string | Frontend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createBackendSwitchingRule($body, $frontend, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackendSwitchingRuleApi->createBackendSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BackendSwitchingRule**](../Model/BackendSwitchingRule.md)|  |
 **frontend** | **string**| Frontend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BackendSwitchingRule**](../Model/BackendSwitchingRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBackendSwitchingRule**
> deleteBackendSwitchingRule($id, $frontend, $transaction_id, $version, $force_reload)

Delete a Backend Switching Rule

Deletes a Backend Switching Rule configuration by it's ID from the specified frontend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BackendSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Switching Rule ID
$frontend = "frontend_example"; // string | Frontend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteBackendSwitchingRule($id, $frontend, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling BackendSwitchingRuleApi->deleteBackendSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Switching Rule ID |
 **frontend** | **string**| Frontend name |
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

# **getBackendSwitchingRule**
> \Swagger\Client\Model\InlineResponse20021 getBackendSwitchingRule($id, $frontend, $transaction_id)

Return one Backend Switching Rule

Returns one Backend Switching Rule configuration by it's ID in the specified frontend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BackendSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Switching Rule ID
$frontend = "frontend_example"; // string | Frontend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getBackendSwitchingRule($id, $frontend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackendSwitchingRuleApi->getBackendSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Switching Rule ID |
 **frontend** | **string**| Frontend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBackendSwitchingRules**
> \Swagger\Client\Model\InlineResponse20020 getBackendSwitchingRules($frontend, $transaction_id)

Return an array of all Backend Switching Rules

Returns all Backend Switching Rules that are configured in specified frontend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BackendSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$frontend = "frontend_example"; // string | Frontend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getBackendSwitchingRules($frontend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackendSwitchingRuleApi->getBackendSwitchingRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **frontend** | **string**| Frontend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBackendSwitchingRule**
> \Swagger\Client\Model\BackendSwitchingRule replaceBackendSwitchingRule($body, $frontend, $id, $transaction_id, $version, $force_reload)

Replace a Backend Switching Rule

Replaces a Backend Switching Rule configuration by it's ID in the specified frontend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BackendSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BackendSwitchingRule(); // \Swagger\Client\Model\BackendSwitchingRule | 
$frontend = "frontend_example"; // string | Frontend name
$id = 56; // int | Switching Rule ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceBackendSwitchingRule($body, $frontend, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackendSwitchingRuleApi->replaceBackendSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BackendSwitchingRule**](../Model/BackendSwitchingRule.md)|  |
 **frontend** | **string**| Frontend name |
 **id** | **int**| Switching Rule ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\BackendSwitchingRule**](../Model/BackendSwitchingRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

