# OpenAPI\Client\LeadApi

All URIs are relative to *https://rest-dev.salestream.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadIdGet**](LeadApi.md#leadIdGet) | **GET** /lead/{id} | 
[**leadIdPut**](LeadApi.md#leadIdPut) | **PUT** /lead/{id} | 
[**leadPost**](LeadApi.md#leadPost) | **POST** /lead | 
[**leadSearchPost**](LeadApi.md#leadSearchPost) | **POST** /lead/search | 


# **leadIdGet**
> leadIdGet($id)



Get lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id

try {
    $apiInstance->leadIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdPut($id, $company, $url, $description, $contacts, $addresses, $custom_fields, $status)



Update lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$company = 'company_example'; // string | 
$url = 'url_example'; // string | 
$description = 'description_example'; // string | 
$contacts = new \OpenAPI\Client\Model\CreateLeadContacts(); // \OpenAPI\Client\Model\CreateLeadContacts[] | 
$addresses = new \OpenAPI\Client\Model\CreateLeadAddresses(); // \OpenAPI\Client\Model\CreateLeadAddresses[] | 
$custom_fields = new \stdClass; // object | 
$status = 'status_example'; // string | 

try {
    $result = $apiInstance->leadIdPut($id, $company, $url, $description, $contacts, $addresses, $custom_fields, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **company** | **string**|  | [optional]
 **url** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **contacts** | [**\OpenAPI\Client\Model\CreateLeadContacts[]**](../Model/\OpenAPI\Client\Model\CreateLeadContacts.md)|  | [optional]
 **addresses** | [**\OpenAPI\Client\Model\CreateLeadAddresses[]**](../Model/\OpenAPI\Client\Model\CreateLeadAddresses.md)|  | [optional]
 **custom_fields** | [**object**](../Model/object.md)|  | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadPost**
> \OpenAPI\Client\Model\SuccessResponse leadPost($company, $url, $description, $contacts, $addresses, $custom_fields, $status)



Create lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | 
$url = 'url_example'; // string | 
$description = 'description_example'; // string | 
$contacts = new \OpenAPI\Client\Model\CreateLeadContacts(); // \OpenAPI\Client\Model\CreateLeadContacts[] | 
$addresses = new \OpenAPI\Client\Model\CreateLeadAddresses(); // \OpenAPI\Client\Model\CreateLeadAddresses[] | 
$custom_fields = new \stdClass; // object | 
$status = 'status_example'; // string | 

try {
    $result = $apiInstance->leadPost($company, $url, $description, $contacts, $addresses, $custom_fields, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | **string**|  |
 **url** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **contacts** | [**\OpenAPI\Client\Model\CreateLeadContacts[]**](../Model/\OpenAPI\Client\Model\CreateLeadContacts.md)|  | [optional]
 **addresses** | [**\OpenAPI\Client\Model\CreateLeadAddresses[]**](../Model/\OpenAPI\Client\Model\CreateLeadAddresses.md)|  | [optional]
 **custom_fields** | [**object**](../Model/object.md)|  | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadSearchPost**
> leadSearchPost($search_string, $columns)



Search for leads

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_string = 'search_string_example'; // string | 
$columns = 'columns_example'; // string[] | 

try {
    $apiInstance->leadSearchPost($search_string, $columns);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_string** | **string**|  | [optional]
 **columns** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

