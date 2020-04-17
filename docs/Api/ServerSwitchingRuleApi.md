# Swagger\Client\ServerSwitchingRuleApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServerSwitchingRule**](ServerSwitchingRuleApi.md#createserverswitchingrule) | **POST** /services/haproxy/configuration/server_switching_rules | Add a new Server Switching Rule
[**deleteServerSwitchingRule**](ServerSwitchingRuleApi.md#deleteserverswitchingrule) | **DELETE** /services/haproxy/configuration/server_switching_rules/{id} | Delete a Server Switching Rule
[**getServerSwitchingRule**](ServerSwitchingRuleApi.md#getserverswitchingrule) | **GET** /services/haproxy/configuration/server_switching_rules/{id} | Return one Server Switching Rule
[**getServerSwitchingRules**](ServerSwitchingRuleApi.md#getserverswitchingrules) | **GET** /services/haproxy/configuration/server_switching_rules | Return an array of all Server Switching Rules
[**replaceServerSwitchingRule**](ServerSwitchingRuleApi.md#replaceserverswitchingrule) | **PUT** /services/haproxy/configuration/server_switching_rules/{id} | Replace a Server Switching Rule

# **createServerSwitchingRule**
> \Swagger\Client\Model\ServerSwitchingRule createServerSwitchingRule($body, $backend, $transaction_id, $version, $force_reload)

Add a new Server Switching Rule

Adds a new Server Switching Rule of the specified type in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ServerSwitchingRule(); // \Swagger\Client\Model\ServerSwitchingRule | 
$backend = "backend_example"; // string | Backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createServerSwitchingRule($body, $backend, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerSwitchingRuleApi->createServerSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ServerSwitchingRule**](../Model/ServerSwitchingRule.md)|  |
 **backend** | **string**| Backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ServerSwitchingRule**](../Model/ServerSwitchingRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServerSwitchingRule**
> deleteServerSwitchingRule($id, $backend, $transaction_id, $version, $force_reload)

Delete a Server Switching Rule

Deletes a Server Switching Rule configuration by it's ID from the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Switching Rule ID
$backend = "backend_example"; // string | Backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteServerSwitchingRule($id, $backend, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling ServerSwitchingRuleApi->deleteServerSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Switching Rule ID |
 **backend** | **string**| Backend name |
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

# **getServerSwitchingRule**
> \Swagger\Client\Model\InlineResponse20023 getServerSwitchingRule($id, $backend, $transaction_id)

Return one Server Switching Rule

Returns one Server Switching Rule configuration by it's ID in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Switching Rule ID
$backend = "backend_example"; // string | Backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getServerSwitchingRule($id, $backend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerSwitchingRuleApi->getServerSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Switching Rule ID |
 **backend** | **string**| Backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerSwitchingRules**
> \Swagger\Client\Model\InlineResponse20022 getServerSwitchingRules($backend, $transaction_id)

Return an array of all Server Switching Rules

Returns all Backend Switching Rules that are configured in specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backend = "backend_example"; // string | Backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getServerSwitchingRules($backend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerSwitchingRuleApi->getServerSwitchingRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backend** | **string**| Backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceServerSwitchingRule**
> \Swagger\Client\Model\ServerSwitchingRule replaceServerSwitchingRule($body, $backend, $id, $transaction_id, $version, $force_reload)

Replace a Server Switching Rule

Replaces a Server Switching Rule configuration by it's ID in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerSwitchingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ServerSwitchingRule(); // \Swagger\Client\Model\ServerSwitchingRule | 
$backend = "backend_example"; // string | Backend name
$id = 56; // int | Switching Rule ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceServerSwitchingRule($body, $backend, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerSwitchingRuleApi->replaceServerSwitchingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ServerSwitchingRule**](../Model/ServerSwitchingRule.md)|  |
 **backend** | **string**| Backend name |
 **id** | **int**| Switching Rule ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ServerSwitchingRule**](../Model/ServerSwitchingRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

