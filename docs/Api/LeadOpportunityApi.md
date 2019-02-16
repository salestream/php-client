# OpenAPI\Client\LeadOpportunityApi

All URIs are relative to *https://rest-dev.salestream.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadIdOpportunityGet**](LeadOpportunityApi.md#leadIdOpportunityGet) | **GET** /lead/{id}/opportunity | 
[**leadIdOpportunityOpportunityIdDelete**](LeadOpportunityApi.md#leadIdOpportunityOpportunityIdDelete) | **DELETE** /lead/{id}/opportunity/{opportunityId} | 
[**leadIdOpportunityOpportunityIdPut**](LeadOpportunityApi.md#leadIdOpportunityOpportunityIdPut) | **PUT** /lead/{id}/opportunity/{opportunityId} | 
[**leadIdOpportunityPost**](LeadOpportunityApi.md#leadIdOpportunityPost) | **POST** /lead/{id}/opportunity | 


# **leadIdOpportunityGet**
> \OpenAPI\Client\Model\SuccessResponse leadIdOpportunityGet($id)



get lead opportunities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadOpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id

try {
    $result = $apiInstance->leadIdOpportunityGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadOpportunityApi->leadIdOpportunityGet: ', $e->getMessage(), PHP_EOL;
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

# **leadIdOpportunityOpportunityIdDelete**
> \OpenAPI\Client\Model\SuccessResponse leadIdOpportunityOpportunityIdDelete($id, $opportunity_id)



Update opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadOpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$opportunity_id = 'opportunity_id_example'; // string | opportunity id

try {
    $result = $apiInstance->leadIdOpportunityOpportunityIdDelete($id, $opportunity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadOpportunityApi->leadIdOpportunityOpportunityIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **opportunity_id** | **string**| opportunity id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdOpportunityOpportunityIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdOpportunityOpportunityIdPut($id, $opportunity_id, $value, $est_close_date, $assignee, $confidence, $contact, $comment)



Update opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadOpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$opportunity_id = 'opportunity_id_example'; // string | opportunity id
$value = 56; // int | 
$est_close_date = 56; // int | 
$assignee = 'assignee_example'; // string | 
$confidence = 56; // int | 
$contact = 'contact_example'; // string | 
$comment = new \OpenAPI\Client\Model\Text(); // Text | 

try {
    $result = $apiInstance->leadIdOpportunityOpportunityIdPut($id, $opportunity_id, $value, $est_close_date, $assignee, $confidence, $contact, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadOpportunityApi->leadIdOpportunityOpportunityIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **opportunity_id** | **string**| opportunity id |
 **value** | **int**|  |
 **est_close_date** | **int**|  |
 **assignee** | **string**|  |
 **confidence** | **int**|  |
 **contact** | **string**|  | [optional]
 **comment** | [**Text**](../Model/Text.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdOpportunityPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdOpportunityPost($id, $value, $est_close_date, $assignee, $confidence, $contact, $comment)



Create opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LeadOpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$value = 56; // int | 
$est_close_date = 56; // int | 
$assignee = 'assignee_example'; // string | 
$confidence = 56; // int | 
$contact = 'contact_example'; // string | 
$comment = new \OpenAPI\Client\Model\Text(); // Text | 

try {
    $result = $apiInstance->leadIdOpportunityPost($id, $value, $est_close_date, $assignee, $confidence, $contact, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadOpportunityApi->leadIdOpportunityPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **value** | **int**|  |
 **est_close_date** | **int**|  |
 **assignee** | **string**|  |
 **confidence** | **int**|  |
 **contact** | **string**|  | [optional]
 **comment** | [**Text**](../Model/Text.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

