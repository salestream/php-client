# OpenAPI\Client\ActivityApi

All URIs are relative to *https://rest-dev.salestream.io/api/v1*

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
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityEmailEmailIdPut($id, $email_id, $email_id, $to, $cc, $bcc, $subject, $message, $draft, $reminder_enabled, $reminder_date, $schedule)



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
$email_id = 'email_id_example'; // string | 
$to = 'to_example'; // string[] | 
$cc = 'cc_example'; // string[] | 
$bcc = 'bcc_example'; // string[] | 
$subject = 'subject_example'; // string | 
$message = 'message_example'; // string | 
$draft = True; // bool | 
$reminder_enabled = True; // bool | 
$reminder_date = 56; // int | 
$schedule = 56; // int | 

try {
    $result = $apiInstance->leadIdActivityEmailEmailIdPut($id, $email_id, $email_id, $to, $cc, $bcc, $subject, $message, $draft, $reminder_enabled, $reminder_date, $schedule);
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
 **email_id** | **string**|  | [optional]
 **to** | [**string[]**](../Model/string.md)|  | [optional]
 **cc** | [**string[]**](../Model/string.md)|  | [optional]
 **bcc** | [**string[]**](../Model/string.md)|  | [optional]
 **subject** | **string**|  | [optional]
 **message** | **string**|  | [optional]
 **draft** | **bool**|  | [optional]
 **reminder_enabled** | **bool**|  | [optional]
 **reminder_date** | **int**|  | [optional]
 **schedule** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityEmailPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityEmailPost($id, $email_id, $to, $subject, $message, $cc, $bcc, $draft, $reminder_enabled, $reminder_date, $schedule)



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
$email_id = 'email_id_example'; // string | 
$to = 'to_example'; // string[] | 
$subject = 'subject_example'; // string | 
$message = 'message_example'; // string | 
$cc = 'cc_example'; // string[] | 
$bcc = 'bcc_example'; // string[] | 
$draft = True; // bool | 
$reminder_enabled = True; // bool | 
$reminder_date = 56; // int | 
$schedule = 56; // int | 

try {
    $result = $apiInstance->leadIdActivityEmailPost($id, $email_id, $to, $subject, $message, $cc, $bcc, $draft, $reminder_enabled, $reminder_date, $schedule);
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
 **email_id** | **string**|  |
 **to** | [**string[]**](../Model/string.md)|  |
 **subject** | **string**|  |
 **message** | **string**|  |
 **cc** | [**string[]**](../Model/string.md)|  | [optional]
 **bcc** | [**string[]**](../Model/string.md)|  | [optional]
 **draft** | **bool**|  | [optional]
 **reminder_enabled** | **bool**|  | [optional]
 **reminder_date** | **int**|  | [optional]
 **schedule** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
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
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityNoteNoteIdPut($id, $note_id, $note)



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
$note = 'note_example'; // string | 

try {
    $result = $apiInstance->leadIdActivityNoteNoteIdPut($id, $note_id, $note);
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
 **note** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivityNotePost**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivityNotePost($id, $note)



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
$note = 'note_example'; // string | 

try {
    $result = $apiInstance->leadIdActivityNotePost($id, $note);
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
 **note** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadIdActivitySmsPost**
> \OpenAPI\Client\Model\SuccessResponse leadIdActivitySmsPost($id, $phone_id, $detail_id, $message, $draft, $schedule)



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
$phone_id = 'phone_id_example'; // string | 
$detail_id = 'detail_id_example'; // string | 
$message = new \OpenAPI\Client\Model\Text(); // Text | 
$draft = True; // bool | 
$schedule = 56; // int | 

try {
    $result = $apiInstance->leadIdActivitySmsPost($id, $phone_id, $detail_id, $message, $draft, $schedule);
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
 **phone_id** | **string**|  | [optional]
 **detail_id** | **string**|  | [optional]
 **message** | [**Text**](../Model/Text.md)|  | [optional]
 **draft** | **bool**|  | [optional]
 **schedule** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
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
> \OpenAPI\Client\Model\SuccessResponse leadIdActivitySmsSmsIdPut($id, $sms_id, $phone_id, $detail_id, $message, $draft, $schedule)



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
$phone_id = 'phone_id_example'; // string | 
$detail_id = 'detail_id_example'; // string | 
$message = new \OpenAPI\Client\Model\Text(); // Text | 
$draft = True; // bool | 
$schedule = 56; // int | 

try {
    $result = $apiInstance->leadIdActivitySmsSmsIdPut($id, $sms_id, $phone_id, $detail_id, $message, $draft, $schedule);
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
 **phone_id** | **string**|  |
 **detail_id** | **string**|  |
 **message** | [**Text**](../Model/Text.md)|  |
 **draft** | **bool**|  | [optional]
 **schedule** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

