# OpenAPI\Client\TaskApi

All URIs are relative to *https://rest-dev.salestream.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadIdTaskPost**](TaskApi.md#leadIdTaskPost) | **POST** /lead/{id}/task | 
[**leadIdTaskTaskIdDelete**](TaskApi.md#leadIdTaskTaskIdDelete) | **DELETE** /lead/{id}/task/{taskId} | 
[**leadIdTaskTaskIdPut**](TaskApi.md#leadIdTaskTaskIdPut) | **PUT** /lead/{id}/task/{taskId} | 


# **leadIdTaskPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdTaskPost($id, $date, $user_id, $desc)



Create task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$date = 56; // int | 
$user_id = 'user_id_example'; // string | 
$desc = 'desc_example'; // string | 

try {
    $result = $apiInstance->leadIdTaskPost($id, $date, $user_id, $desc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->leadIdTaskPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **date** | **int**|  |
 **user_id** | **string**|  |
 **desc** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdTaskTaskIdDelete**
> \OpenAPI\Client\Model\SuccessResponse leadIdTaskTaskIdDelete($id, $task_id)



Delete task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$task_id = 'task_id_example'; // string | task id

try {
    $result = $apiInstance->leadIdTaskTaskIdDelete($id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->leadIdTaskTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **task_id** | **string**| task id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdTaskTaskIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdTaskTaskIdPut($id, $task_id, $date, $user_id, $desc)



Update task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$task_id = 'task_id_example'; // string | task id
$date = 56; // int | 
$user_id = 'user_id_example'; // string | 
$desc = 'desc_example'; // string | 

try {
    $result = $apiInstance->leadIdTaskTaskIdPut($id, $task_id, $date, $user_id, $desc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->leadIdTaskTaskIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **task_id** | **string**| task id |
 **date** | **int**|  | [optional]
 **user_id** | **string**|  | [optional]
 **desc** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

