# OpenAPI\Client\ActivityApi

All URIs are relative to *https://api-us.salestream.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadIdActivityEmailEmailIdDelete**](ActivityApi.md#leadIdActivityEmailEmailIdDelete) | **DELETE** /lead/{id}/activity/email/{emailId} | 
[**leadIdActivityEmailEmailIdPut**](ActivityApi.md#leadIdActivityEmailEmailIdPut) | **PUT** /lead/{id}/activity/email/{emailId} | 
[**leadIdActivityEmailPost**](ActivityApi.md#leadIdActivityEmailPost) | **POST** /lead/{id}/activity/email | 
[**leadIdActivityGet**](ActivityApi.md#leadIdActivityGet) | **GET** /lead/{id}/activity | 
[**leadIdActivityNoteNoteIdDelete**](ActivityApi.md#leadIdActivityNoteNoteIdDelete) | **DELETE** /lead/{id}/activity/note/{noteId} | 
[**leadIdActivityNoteNoteIdPut**](ActivityApi.md#leadIdActivityNoteNoteIdPut) | **PUT** /lead/{id}/activity/note/{noteId} | 
[**leadIdActivityNotePost**](ActivityApi.md#leadIdActivityNotePost) | **POST** /lead/{id}/activity/note | 
[**leadIdActivitySmsPost**](ActivityApi.md#leadIdActivitySmsPost) | **POST** /lead/{id}/activity/sms | 
[**leadIdActivitySmsSmsIdDelete**](ActivityApi.md#leadIdActivitySmsSmsIdDelete) | **DELETE** /lead/{id}/activity/sms/{smsId} | 
[**leadIdActivitySmsSmsIdPut**](ActivityApi.md#leadIdActivitySmsSmsIdPut) | **PUT** /lead/{id}/activity/sms/{smsId} | 


# **leadIdActivityEmailEmailIdDelete**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityEmailEmailIdDelete($id, $email_id)



delete email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$email_id = 'email_id_example'; // string | email id

try {
    $result = $apiInstance->leadIdActivityEmailEmailIdDelete($id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityEmailEmailIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **email_id** | **string**| email id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityEmailEmailIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityEmailEmailIdPut($id, $email_id, $update_email)



update email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$email_id = 'email_id_example'; // string | email id
$update_email = new \OpenAPI\Client\Model\UpdateEmail(); // \OpenAPI\Client\Model\UpdateEmail | 

try {
    $result = $apiInstance->leadIdActivityEmailEmailIdPut($id, $email_id, $update_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityEmailEmailIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **email_id** | **string**| email id |
 **update_email** | [**\OpenAPI\Client\Model\UpdateEmail**](../Model/UpdateEmail.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityEmailPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityEmailPost($id, $create_email)



create activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$create_email = new \OpenAPI\Client\Model\CreateEmail(); // \OpenAPI\Client\Model\CreateEmail | 

try {
    $result = $apiInstance->leadIdActivityEmailPost($id, $create_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **create_email** | [**\OpenAPI\Client\Model\CreateEmail**](../Model/CreateEmail.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityGet**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityGet($id, $after, $before)



get lead activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$after = 'after_example'; // string | after token
$before = 'before_example'; // string | before token

try {
    $result = $apiInstance->leadIdActivityGet($id, $after, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **after** | **string**| after token | [optional]
 **before** | **string**| before token | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityNoteNoteIdDelete**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityNoteNoteIdDelete($id, $note_id)



delete note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$note_id = 'note_id_example'; // string | note id

try {
    $result = $apiInstance->leadIdActivityNoteNoteIdDelete($id, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityNoteNoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **note_id** | **string**| note id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityNoteNoteIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityNoteNoteIdPut($id, $note_id, $update_note)



udpate note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$note_id = 'note_id_example'; // string | note id
$update_note = new \OpenAPI\Client\Model\UpdateNote(); // \OpenAPI\Client\Model\UpdateNote | 

try {
    $result = $apiInstance->leadIdActivityNoteNoteIdPut($id, $note_id, $update_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityNoteNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **note_id** | **string**| note id |
 **update_note** | [**\OpenAPI\Client\Model\UpdateNote**](../Model/UpdateNote.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityNotePost**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityNotePost($id, $create_note)



create note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$create_note = new \OpenAPI\Client\Model\CreateNote(); // \OpenAPI\Client\Model\CreateNote | 

try {
    $result = $apiInstance->leadIdActivityNotePost($id, $create_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivityNotePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **create_note** | [**\OpenAPI\Client\Model\CreateNote**](../Model/CreateNote.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivitySmsPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivitySmsPost($id, $create_sms)



create sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$create_sms = new \OpenAPI\Client\Model\CreateSms(); // \OpenAPI\Client\Model\CreateSms | 

try {
    $result = $apiInstance->leadIdActivitySmsPost($id, $create_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivitySmsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **create_sms** | [**\OpenAPI\Client\Model\CreateSms**](../Model/CreateSms.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivitySmsSmsIdDelete**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivitySmsSmsIdDelete($id, $sms_id)



delete sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$sms_id = 'sms_id_example'; // string | sms id

try {
    $result = $apiInstance->leadIdActivitySmsSmsIdDelete($id, $sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivitySmsSmsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **sms_id** | **string**| sms id |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivitySmsSmsIdPut**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivitySmsSmsIdPut($id, $sms_id, $update_sms)



create sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | lead id
$sms_id = 'sms_id_example'; // string | sms id
$update_sms = new \OpenAPI\Client\Model\UpdateSms(); // \OpenAPI\Client\Model\UpdateSms | 

try {
    $result = $apiInstance->leadIdActivitySmsSmsIdPut($id, $sms_id, $update_sms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->leadIdActivitySmsSmsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| lead id |
 **sms_id** | **string**| sms id |
 **update_sms** | [**\OpenAPI\Client\Model\UpdateSms**](../Model/UpdateSms.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

