# OpenAPIClient-php
Salestream API

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://rest-dev.salestream.io/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityApi* | [**leadIdActivityEmailEmailIdDelete**](docs\Api/ActivityApi.md#leadidactivityemailemailiddelete) | **DELETE** /lead/{id}/activity/email/{emailId} | 
*ActivityApi* | [**leadIdActivityEmailEmailIdPut**](docs\Api/ActivityApi.md#leadidactivityemailemailidput) | **PUT** /lead/{id}/activity/email/{emailId} | 
*ActivityApi* | [**leadIdActivityEmailPost**](docs\Api/ActivityApi.md#leadidactivityemailpost) | **POST** /lead/{id}/activity/email | 
*ActivityApi* | [**leadIdActivityGet**](docs\Api/ActivityApi.md#leadidactivityget) | **GET** /lead/{id}/activity | 
*ActivityApi* | [**leadIdActivityNoteNoteIdDelete**](docs\Api/ActivityApi.md#leadidactivitynotenoteiddelete) | **DELETE** /lead/{id}/activity/note/{noteId} | 
*ActivityApi* | [**leadIdActivityNoteNoteIdPut**](docs\Api/ActivityApi.md#leadidactivitynotenoteidput) | **PUT** /lead/{id}/activity/note/{noteId} | 
*ActivityApi* | [**leadIdActivityNotePost**](docs\Api/ActivityApi.md#leadidactivitynotepost) | **POST** /lead/{id}/activity/note | 
*ActivityApi* | [**leadIdActivitySmsPost**](docs\Api/ActivityApi.md#leadidactivitysmspost) | **POST** /lead/{id}/activity/sms | 
*ActivityApi* | [**leadIdActivitySmsSmsIdDelete**](docs\Api/ActivityApi.md#leadidactivitysmssmsiddelete) | **DELETE** /lead/{id}/activity/sms/{smsId} | 
*ActivityApi* | [**leadIdActivitySmsSmsIdPut**](docs\Api/ActivityApi.md#leadidactivitysmssmsidput) | **PUT** /lead/{id}/activity/sms/{smsId} | 
*CommonApi* | [**emailAddressesGet**](docs\Api/CommonApi.md#emailaddressesget) | **GET** /email-addresses | 
*CommonApi* | [**leadStatusesGet**](docs\Api/CommonApi.md#leadstatusesget) | **GET** /lead-statuses | 
*CommonApi* | [**opportunityStatusesGet**](docs\Api/CommonApi.md#opportunitystatusesget) | **GET** /opportunity-statuses | 
*CommonApi* | [**phoneNumbersGet**](docs\Api/CommonApi.md#phonenumbersget) | **GET** /phone-numbers | 
*CustomFieldsApi* | [**customFieldGet**](docs\Api/CustomFieldsApi.md#customfieldget) | **GET** /custom-field | 
*LeadApi* | [**leadIdGet**](docs\Api/LeadApi.md#leadidget) | **GET** /lead/{id} | 
*LeadApi* | [**leadIdPut**](docs\Api/LeadApi.md#leadidput) | **PUT** /lead/{id} | 
*LeadApi* | [**leadPost**](docs\Api/LeadApi.md#leadpost) | **POST** /lead | 
*LeadApi* | [**leadSearchPost**](docs\Api/LeadApi.md#leadsearchpost) | **POST** /lead/search | 
*LeadContactApi* | [**leadIdContactsContactIdDelete**](docs\Api/LeadContactApi.md#leadidcontactscontactiddelete) | **DELETE** /lead/{id}/contacts/{contactId} | 
*LeadContactApi* | [**leadIdContactsContactIdGet**](docs\Api/LeadContactApi.md#leadidcontactscontactidget) | **GET** /lead/{id}/contacts/{contactId} | 
*LeadContactApi* | [**leadIdContactsContactIdPut**](docs\Api/LeadContactApi.md#leadidcontactscontactidput) | **PUT** /lead/{id}/contacts/{contactId} | 
*LeadContactApi* | [**leadIdContactsGet**](docs\Api/LeadContactApi.md#leadidcontactsget) | **GET** /lead/{id}/contacts | 
*LeadContactApi* | [**leadIdContactsPost**](docs\Api/LeadContactApi.md#leadidcontactspost) | **POST** /lead/{id}/contacts | 
*LeadOpportunityApi* | [**leadIdOpportunityGet**](docs\Api/LeadOpportunityApi.md#leadidopportunityget) | **GET** /lead/{id}/opportunity | 
*LeadOpportunityApi* | [**leadIdOpportunityOpportunityIdDelete**](docs\Api/LeadOpportunityApi.md#leadidopportunityopportunityiddelete) | **DELETE** /lead/{id}/opportunity/{opportunityId} | 
*LeadOpportunityApi* | [**leadIdOpportunityOpportunityIdPut**](docs\Api/LeadOpportunityApi.md#leadidopportunityopportunityidput) | **PUT** /lead/{id}/opportunity/{opportunityId} | 
*LeadOpportunityApi* | [**leadIdOpportunityPost**](docs\Api/LeadOpportunityApi.md#leadidopportunitypost) | **POST** /lead/{id}/opportunity | 
*TaskApi* | [**leadIdTaskPost**](docs\Api/TaskApi.md#leadidtaskpost) | **POST** /lead/{id}/task | 
*TaskApi* | [**leadIdTaskTaskIdDelete**](docs\Api/TaskApi.md#leadidtasktaskiddelete) | **DELETE** /lead/{id}/task/{taskId} | 
*TaskApi* | [**leadIdTaskTaskIdPut**](docs\Api/TaskApi.md#leadidtasktaskidput) | **PUT** /lead/{id}/task/{taskId} | 
*WebhookApi* | [**webhookDelete**](docs\Api/WebhookApi.md#webhookdelete) | **DELETE** /webhook | 
*WebhookApi* | [**webhookGet**](docs\Api/WebhookApi.md#webhookget) | **GET** /webhook | 
*WebhookApi* | [**webhookPost**](docs\Api/WebhookApi.md#webhookpost) | **POST** /webhook | 
*WebhookApi* | [**webhookRegisterPost**](docs\Api/WebhookApi.md#webhookregisterpost) | **POST** /webhook/register | 
*WebhookApi* | [**webhookUnregisterPost**](docs\Api/WebhookApi.md#webhookunregisterpost) | **POST** /webhook/unregister | 


## Documentation For Models

 - [CreateContact](docs\Model/CreateContact.md)
 - [CreateContactDetails](docs\Model/CreateContactDetails.md)
 - [CreateEmail](docs\Model/CreateEmail.md)
 - [CreateLead](docs\Model/CreateLead.md)
 - [CreateLeadAddresses](docs\Model/CreateLeadAddresses.md)
 - [CreateLeadContacts](docs\Model/CreateLeadContacts.md)
 - [CreateNote](docs\Model/CreateNote.md)
 - [CreateOpportunity](docs\Model/CreateOpportunity.md)
 - [CreateSms](docs\Model/CreateSms.md)
 - [CreateTask](docs\Model/CreateTask.md)
 - [CreateWebhook](docs\Model/CreateWebhook.md)
 - [ErrorResponse](docs\Model/ErrorResponse.md)
 - [InlineObject](docs\Model/InlineObject.md)
 - [RegisterResource](docs\Model/RegisterResource.md)
 - [SuccessResponse](docs\Model/SuccessResponse.md)
 - [UnregisterResource](docs\Model/UnregisterResource.md)
 - [UpdateContact](docs\Model/UpdateContact.md)
 - [UpdateEmail](docs\Model/UpdateEmail.md)
 - [UpdateLead](docs\Model/UpdateLead.md)
 - [UpdateNote](docs\Model/UpdateNote.md)
 - [UpdateOpportunity](docs\Model/UpdateOpportunity.md)
 - [UpdateSms](docs\Model/UpdateSms.md)
 - [UpdateTask](docs\Model/UpdateTask.md)
 - [UpdateWebhook](docs\Model/UpdateWebhook.md)


## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: apiKey
- **Location**: HTTP header


## Author



