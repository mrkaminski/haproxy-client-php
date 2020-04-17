# Swagger\Client\ACLApi

All URIs are relative to */v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAcl**](ACLApi.md#createacl) | **POST** /services/haproxy/configuration/acls | Add a new ACL line
[**deleteAcl**](ACLApi.md#deleteacl) | **DELETE** /services/haproxy/configuration/acls/{id} | Delete a ACL line
[**getAcl**](ACLApi.md#getacl) | **GET** /services/haproxy/configuration/acls/{id} | Return one ACL line
[**getAcls**](ACLApi.md#getacls) | **GET** /services/haproxy/configuration/acls | Return an array of all ACL lines
[**replaceAcl**](ACLApi.md#replaceacl) | **PUT** /services/haproxy/configuration/acls/{id} | Replace a ACL line

# **createAcl**
> \Swagger\Client\Model\Acl createAcl($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Add a new ACL line

Adds a new ACL line of the specified type in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ACLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Acl(); // \Swagger\Client\Model\Acl | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->createAcl($body, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACLApi->createAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Acl**](../Model/Acl.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Acl**](../Model/Acl.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAcl**
> deleteAcl($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload)

Delete a ACL line

Deletes a ACL line configuration by it's ID from the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ACLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ACL line ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $apiInstance->deleteAcl($id, $parent_name, $parent_type, $transaction_id, $version, $force_reload);
} catch (Exception $e) {
    echo 'Exception when calling ACLApi->deleteAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ACL line ID |
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

# **getAcl**
> \Swagger\Client\Model\InlineResponse20031 getAcl($id, $parent_name, $parent_type, $transaction_id)

Return one ACL line

Returns one ACL line configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ACLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ACL line ID
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getAcl($id, $parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACLApi->getAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ACL line ID |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAcls**
> \Swagger\Client\Model\InlineResponse20030 getAcls($parent_name, $parent_type, $transaction_id)

Return an array of all ACL lines

Returns all ACL lines that are configured in specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ACLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.

try {
    $result = $apiInstance->getAcls($parent_name, $parent_type, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACLApi->getAcls: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAcl**
> \Swagger\Client\Model\Acl replaceAcl($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload)

Replace a ACL line

Replaces a ACL line configuration by it's ID in the specified parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ACLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Acl(); // \Swagger\Client\Model\Acl | 
$parent_name = "parent_name_example"; // string | Parent name
$parent_type = "parent_type_example"; // string | Parent type
$id = 56; // int | ACL line ID
$transaction_id = "transaction_id_example"; // string | ID of the transaction where we want to add the operation. Cannot be used when version is specified.
$version = 56; // int | Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it's own version.
$force_reload = false; // bool | If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration.

try {
    $result = $apiInstance->replaceAcl($body, $parent_name, $parent_type, $id, $transaction_id, $version, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ACLApi->replaceAcl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Acl**](../Model/Acl.md)|  |
 **parent_name** | **string**| Parent name |
 **parent_type** | **string**| Parent type |
 **id** | **int**| ACL line ID |
 **transaction_id** | **string**| ID of the transaction where we want to add the operation. Cannot be used when version is specified. | [optional]
 **version** | **int**| Version used for checking configuration version. Cannot be used when transaction is specified, transaction has it&#x27;s own version. | [optional]
 **force_reload** | **bool**| If set, do a force reload, do not wait for the configured reload-delay. Cannot be used when transaction is specified, as changes in transaction are not applied directly to configuration. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Acl**](../Model/Acl.md)

### Authorization

[basic_auth](../../README.md#basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

