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
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsContactIdPut($id, $contact_id, $name, $title, $details)



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
$name = 'name_example'; // string | 
$title = 'title_example'; // string | 
$details = new \OpenAPI\Client\Model\CreateContactDetails(); // \OpenAPI\Client\Model\CreateContactDetails[] | 

try {
    $result = $apiInstance->leadIdContactsContactIdPut($id, $contact_id, $name, $title, $details);
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
 **name** | **string**|  | [optional]
 **title** | **string**|  | [optional]
 **details** | [**\OpenAPI\Client\Model\CreateContactDetails[]**](../Model/\OpenAPI\Client\Model\CreateContactDetails.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
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
> \OpenAPI\Client\Model\SuccessResponse leadIdContactsPost($id, $name, $title, $details)



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
$name = 'name_example'; // string | 
$title = 'title_example'; // string | 
$details = new \OpenAPI\Client\Model\CreateContactDetails(); // \OpenAPI\Client\Model\CreateContactDetails[] | 

try {
    $result = $apiInstance->leadIdContactsPost($id, $name, $title, $details);
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
 **name** | **string**|  |
 **title** | **string**|  | [optional]
 **details** | [**\OpenAPI\Client\Model\CreateContactDetails[]**](../Model/\OpenAPI\Client\Model\CreateContactDetails.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

