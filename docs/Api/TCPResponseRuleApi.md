# Swagger\Client\TCPResponseRuleApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTCPResponseRule**](TCPResponseRuleApi.md#createtcpresponserule) | **POST** /services/haproxy/configuration/tcp_response_rules | Add a new TCP Response Rule
[**deleteTCPResponseRule**](TCPResponseRuleApi.md#deletetcpresponserule) | **DELETE** /services/haproxy/configuration/tcp_response_rules/{id} | Delete a TCP Response Rule
[**getTCPResponseRule**](TCPResponseRuleApi.md#gettcpresponserule) | **GET** /services/haproxy/configuration/tcp_response_rules/{id} | Return one TCP Response Rule
[**getTCPResponseRules**](TCPResponseRuleApi.md#gettcpresponserules) | **GET** /services/haproxy/configuration/tcp_response_rules | Return an array of all TCP Response Rules
[**replaceTCPResponseRule**](TCPResponseRuleApi.md#replacetcpresponserule) | **PUT** /services/haproxy/configuration/tcp_response_rules/{id} | Replace a TCP Response Rule

# **createTCPResponseRule**
> \Swagger\Client\Model\TcpResponseRule createTCPResponseRule($body, $backend, $transaction_id, $version, $force_reload)

Add a new TCP Response Rule

Adds a new TCP Response Rule of the specified type in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TCPResponseRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TcpResponseRule(); // \Swagger\Client\Model\TcpResponseRule | 
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createTCPResponseRule($body, $backend, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPResponseRuleApi->createTCPResponseRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TcpResponseRule**](../Model/TcpResponseRule.md)|  |
 **backend** | **string**| Parent backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\TcpResponseRule**](../Model/TcpResponseRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTCPResponseRule**
> deleteTCPResponseRule($id, $backend, $transaction_id, $version, $force_reload)

Delete a TCP Response Rule

Deletes a TCP Response Rule configuration by it's ID from the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TCPResponseRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | TCP Response Rule ID
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteTCPResponseRule($id, $backend, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling TCPResponseRuleApi->deleteTCPResponseRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| TCP Response Rule ID |
 **backend** | **string**| Parent backend name |
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

# **getTCPResponseRule**
> \Swagger\Client\Model\InlineResponse20019 getTCPResponseRule($id, $backend, $transaction_id)

Return one TCP Response Rule

Returns one TCP Response Rule configuration by it's ID in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TCPResponseRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | TCP Response Rule ID
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getTCPResponseRule($id, $backend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPResponseRuleApi->getTCPResponseRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| TCP Response Rule ID |
 **backend** | **string**| Parent backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTCPResponseRules**
> \Swagger\Client\Model\InlineResponse20018 getTCPResponseRules($backend, $transaction_id)

Return an array of all TCP Response Rules

Returns all TCP Response Rules that are configured in specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TCPResponseRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getTCPResponseRules($backend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPResponseRuleApi->getTCPResponseRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backend** | **string**| Parent backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTCPResponseRule**
> \Swagger\Client\Model\TcpResponseRule replaceTCPResponseRule($body, $backend, $id, $transaction_id, $version, $force_reload)

Replace a TCP Response Rule

Replaces a TCP Response Rule configuration by it's ID in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TCPResponseRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TcpResponseRule(); // \Swagger\Client\Model\TcpResponseRule | 
$backend = "backend_example"; // string | Parent backend name
$id = 56; // int | TCP Response Rule ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceTCPResponseRule($body, $backend, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TCPResponseRuleApi->replaceTCPResponseRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TcpResponseRule**](../Model/TcpResponseRule.md)|  |
 **backend** | **string**| Parent backend name |
 **id** | **int**| TCP Response Rule ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\TcpResponseRule**](../Model/TcpResponseRule.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

