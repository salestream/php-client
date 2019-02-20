# OpenAPI\Client\LeadContactApi

All URIs are relative to *https://rest-dev.salestream.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadIdContactsContactIdDelete**](LeadContactApi.md#leadIdContactsContactIdDelete) | **DELETE** /lead/{id}/contacts/{contactId} | 
[**leadIdContactsContactIdGet**](LeadContactApi.md#leadIdContactsContactIdGet) | **GET** /lead/{id}/contacts/{contactId} | 
[**leadIdContactsContactIdPut**](LeadContactApi.md#leadIdContactsContactIdPut) | **PUT** /lead/{id}/contacts/{contactId} | 
[**leadIdContactsGet**](LeadContactApi.md#leadIdContactsGet) | **GET** /lead/{id}/contacts | 
[**leadIdContactsPost**](LeadContactApi.md#leadIdContactsPost) | **POST** /lead/{id}/contacts | 


# **leadIdContactsContactIdDelete**
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsContactIdDelete($id, $contact_id)



delete lead contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$contact_id = 'contact_id_example'; // string | contact id

try {
    $result = $apiInstance->leadIdContactsContactIdDelete($id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadContactApi->leadIdContactsContactIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **contact_id** | **string**| contact id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdContactsContactIdGet**
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsContactIdGet($id, $contact_id)



get lead contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$contact_id = 'contact_id_example'; // string | contactId id

try {
    $result = $apiInstance->leadIdContactsContactIdGet($id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadContactApi->leadIdContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **contact_id** | **string**| contactId id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdContactsContactIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsContactIdPut($id, $contact_id, $update_contact)



update lead contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$contact_id = 'contact_id_example'; // string | contact id
$update_contact = new \OpenAPI\Client\Model\UpdateContact(); // \OpenAPI\Client\Model\UpdateContact | 

try {
    $result = $apiInstance->leadIdContactsContactIdPut($id, $contact_id, $update_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadContactApi->leadIdContactsContactIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **contact_id** | **string**| contact id |
 **update_contact** | [**\OpenAPI\Client\Model\UpdateContact**](../Model/UpdateContact.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdContactsGet**
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsGet($id)



get lead contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id

try {
    $result = $apiInstance->leadIdContactsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadContactApi->leadIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdContactsPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsPost($id, $create_contact)



Create lead contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$create_contact = new \OpenAPI\Client\Model\CreateContact(); // \OpenAPI\Client\Model\CreateContact | 

try {
    $result = $apiInstance->leadIdContactsPost($id, $create_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadContactApi->leadIdContactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **create_contact** | [**\OpenAPI\Client\Model\CreateContact**](../Model/CreateContact.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

