# Swagger\Client\ServerApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServer**](ServerApi.md#createserver) | **POST** /services/haproxy/configuration/servers | Add a new server
[**deleteServer**](ServerApi.md#deleteserver) | **DELETE** /services/haproxy/configuration/servers/{name} | Delete a server
[**getRuntimeServer**](ServerApi.md#getruntimeserver) | **GET** /services/haproxy/runtime/servers/{name} | Return one server runtime settings
[**getRuntimeServers**](ServerApi.md#getruntimeservers) | **GET** /services/haproxy/runtime/servers | Return an array of runtime servers&#x27; setings
[**getServer**](ServerApi.md#getserver) | **GET** /services/haproxy/configuration/servers/{name} | Return one server
[**getServers**](ServerApi.md#getservers) | **GET** /services/haproxy/configuration/servers | Return an array of servers
[**replaceRuntimeServer**](ServerApi.md#replaceruntimeserver) | **PUT** /services/haproxy/runtime/servers/{name} | Replace server transient settings
[**replaceServer**](ServerApi.md#replaceserver) | **PUT** /services/haproxy/configuration/servers/{name} | Replace a server

# **createServer**
> \Swagger\Client\Model\Server createServer($body, $backend, $transaction_id, $version, $force_reload)

Add a new server

Adds a new server in the specified backend in the configuration file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Server(); // \Swagger\Client\Model\Server | 
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createServer($body, $backend, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Server**](../Model/Server.md)|  |
 **backend** | **string**| Parent backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Server**](../Model/Server.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServer**
> deleteServer($name, $backend, $transaction_id, $version, $force_reload)

Delete a server

Deletes a server configuration by it's name in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Server name
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteServer($name, $backend, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Server name |
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

# **getRuntimeServer**
> \Swagger\Client\Model\RuntimeServer getRuntimeServer($name, $backend)

Return one server runtime settings

Returns one server runtime settings by it's name in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Server name
$backend = "backend_example"; // string | Parent backend name

try {
    $result = $apiInstance->getRuntimeServer($name, $backend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getRuntimeServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Server name |
 **backend** | **string**| Parent backend name |

### Return type

[**\Swagger\Client\Model\RuntimeServer**](../Model/RuntimeServer.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuntimeServers**
> \Swagger\Client\Model\RuntimeServers getRuntimeServers($backend)

Return an array of runtime servers' setings

Returns an array of all servers' runtime settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backend = "backend_example"; // string | Parent backend name

try {
    $result = $apiInstance->getRuntimeServers($backend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getRuntimeServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backend** | **string**| Parent backend name |

### Return type

[**\Swagger\Client\Model\RuntimeServers**](../Model/RuntimeServers.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServer**
> \Swagger\Client\Model\InlineResponse20011 getServer($name, $backend, $transaction_id)

Return one server

Returns one server configuration by it's name in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Server name
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getServer($name, $backend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Server name |
 **backend** | **string**| Parent backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServers**
> \Swagger\Client\Model\InlineResponse20010 getServers($backend, $transaction_id)

Return an array of servers

Returns an array of all servers that are configured in specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backend = "backend_example"; // string | Parent backend name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getServers($backend, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backend** | **string**| Parent backend name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRuntimeServer**
> \Swagger\Client\Model\RuntimeServer replaceRuntimeServer($body, $backend, $name)

Replace server transient settings

Replaces a server transient settings by it's name in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RuntimeServer(); // \Swagger\Client\Model\RuntimeServer | 
$backend = "backend_example"; // string | Parent backend name
$name = "name_example"; // string | Server name

try {
    $result = $apiInstance->replaceRuntimeServer($body, $backend, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->replaceRuntimeServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RuntimeServer**](../Model/RuntimeServer.md)|  |
 **backend** | **string**| Parent backend name |
 **name** | **string**| Server name |

### Return type

[**\Swagger\Client\Model\RuntimeServer**](../Model/RuntimeServer.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceServer**
> \Swagger\Client\Model\Server replaceServer($body, $backend, $name, $transaction_id, $version, $force_reload)

Replace a server

Replaces a server configuration by it's name in the specified backend.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Server(); // \Swagger\Client\Model\Server | 
$backend = "backend_example"; // string | Parent backend name
$name = "name_example"; // string | Server name
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceServer($body, $backend, $name, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->replaceServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Server**](../Model/Server.md)|  |
 **backend** | **string**| Parent backend name |
 **name** | **string**| Server name |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Server**](../Model/Server.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

