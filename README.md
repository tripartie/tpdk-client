# OpenAPIClient-php

Our API suite for the **Resolution Center** and the **Safe Checkout** features.
Simple, yet elegant web interfaces for your convenience. One request away from your first automated resolution or safe-checkout.

For more information, please visit [https://tripartie.com](https://tripartie.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tripartie/tpdk.git"
    }
  ],
  "require": {
    "tripartie/tpdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Organization identifier
$organizationUpdate = new \Tripartie\Tpdk\Model\OrganizationUpdate(); // \Tripartie\Tpdk\Model\OrganizationUpdate | The updated Organization resource

try {
    $result = $apiInstance->apiOrganizationsIdPatch($id, $organizationUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->apiOrganizationsIdPatch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://staging-api.tripartie.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandingApi* | [**apiOrganizationsIdPatch**](docs/Api/BrandingApi.md#apiorganizationsidpatch) | **PATCH** /organizations/{id} | Update your Organization details, branding or parameters
*BrandingApi* | [**apiOrganizationsIdiconDelete**](docs/Api/BrandingApi.md#apiorganizationsidicondelete) | **DELETE** /organizations/{id}/icon | Unset your Organization Icon
*BrandingApi* | [**apiOrganizationsIdiconPost**](docs/Api/BrandingApi.md#apiorganizationsidiconpost) | **POST** /organizations/{id}/icon | Upload your Organization Icon
*BrandingApi* | [**apiOrganizationsIdlogoDelete**](docs/Api/BrandingApi.md#apiorganizationsidlogodelete) | **DELETE** /organizations/{id}/logo | Unset your Organization Logo
*BrandingApi* | [**apiOrganizationsIdlogoPost**](docs/Api/BrandingApi.md#apiorganizationsidlogopost) | **POST** /organizations/{id}/logo | Upload your Organization logo
*NotificationApi* | [**apiPersonasIdnotificationsGetCollection**](docs/Api/NotificationApi.md#apipersonasidnotificationsgetcollection) | **GET** /personas/{id}/notifications | Retrieve pending notifications for Persona
*NotificationApi* | [**apiPersonasPersonaIdnotificationsIdPatch**](docs/Api/NotificationApi.md#apipersonaspersonaidnotificationsidpatch) | **PATCH** /personas/{personaId}/notifications/{id} | Mark as read/unread a notification for Persona
*NotificationApi* | [**apiUsersIdnotificationsGetCollection**](docs/Api/NotificationApi.md#apiusersidnotificationsgetcollection) | **GET** /users/{id}/notifications | Retrieves the collection of Notification resources.
*NotificationApi* | [**apiUsersUserIdnotificationsIdPatch**](docs/Api/NotificationApi.md#apiusersuseridnotificationsidpatch) | **PATCH** /users/{userId}/notifications/{id} | Mark as read/unread a notification for User
*OrganizationApi* | [**apiOrganizationsGetCollection**](docs/Api/OrganizationApi.md#apiorganizationsgetcollection) | **GET** /organizations | Retrieves the collection of Organization resources.
*OrganizationApi* | [**apiOrganizationsIdGet**](docs/Api/OrganizationApi.md#apiorganizationsidget) | **GET** /organizations/{id} | Retrieves a Organization resource.
*PersonaApi* | [**apiPersonasGetCollection**](docs/Api/PersonaApi.md#apipersonasgetcollection) | **GET** /personas | Retrieves the collection of Persona resources.
*PersonaApi* | [**apiPersonasIdDelete**](docs/Api/PersonaApi.md#apipersonasiddelete) | **DELETE** /personas/{id} | Unregister a Persona (Your customer)
*PersonaApi* | [**apiPersonasIdGet**](docs/Api/PersonaApi.md#apipersonasidget) | **GET** /personas/{id} | Retrieves a Persona resource.
*PersonaApi* | [**apiPersonasIdPatch**](docs/Api/PersonaApi.md#apipersonasidpatch) | **PATCH** /personas/{id} | Updates the Persona resource.
*PersonaApi* | [**apiPersonasIdtokenPost**](docs/Api/PersonaApi.md#apipersonasidtokenpost) | **POST** /personas/{id}/token | Issue authenticated URL for single end-user
*PersonaApi* | [**apiPersonasPost**](docs/Api/PersonaApi.md#apipersonaspost) | **POST** /personas | Register a Persona (Your customer)
*ResolutionCenterApi* | [**apiDisputesGetCollection**](docs/Api/ResolutionCenterApi.md#apidisputesgetcollection) | **GET** /disputes | Retrieves the collection of Dispute resources.
*ResolutionCenterApi* | [**apiDisputesPost**](docs/Api/ResolutionCenterApi.md#apidisputespost) | **POST** /disputes | Draft a standalone Dispute
*ResolutionCenterApi* | [**apiDisputesUlidDelete**](docs/Api/ResolutionCenterApi.md#apidisputesuliddelete) | **DELETE** /disputes/{ulid} | Abandon claims on Dispute
*ResolutionCenterApi* | [**apiDisputesUlidGet**](docs/Api/ResolutionCenterApi.md#apidisputesulidget) | **GET** /disputes/{ulid} | Retrieves a Dispute resource.
*ResolutionCenterApi* | [**apiDisputesUlidPatch**](docs/Api/ResolutionCenterApi.md#apidisputesulidpatch) | **PATCH** /disputes/{ulid} | Update the Dispute
*ResolutionCenterApi* | [**apiDisputesUlidevaluationsPost**](docs/Api/ResolutionCenterApi.md#apidisputesulidevaluationspost) | **POST** /disputes/{ulid}/evaluations | Submit an Evaluation for the Dispute
*ResolutionCenterApi* | [**apiDisputesUlidevidencesGetCollection**](docs/Api/ResolutionCenterApi.md#apidisputesulidevidencesgetcollection) | **GET** /disputes/{ulid}/evidences | Retrieve all Evidences in Dispute
*ResolutionCenterApi* | [**apiDisputesUlidevidencesIdDelete**](docs/Api/ResolutionCenterApi.md#apidisputesulidevidencesiddelete) | **DELETE** /disputes/{ulid}/evidences/{id} | Withdraw an Evidence from a Dispute
*ResolutionCenterApi* | [**apiDisputesUlidevidencesIdmediaPost**](docs/Api/ResolutionCenterApi.md#apidisputesulidevidencesidmediapost) | **POST** /disputes/{ulid}/evidences/{id}/media | Upload attachment in regard of described Evidence
*ResolutionCenterApi* | [**apiDisputesUlidevidencesPost**](docs/Api/ResolutionCenterApi.md#apidisputesulidevidencespost) | **POST** /disputes/{ulid}/evidences | Submit an Evidence to the Dispute case
*ResolutionCenterApi* | [**apiDisputesUlidparcelsGetCollection**](docs/Api/ResolutionCenterApi.md#apidisputesulidparcelsgetcollection) | **GET** /disputes/{ulid}/parcels | Retrieves the collection of Parcel resources.
*ResolutionCenterApi* | [**apiDisputesUlidparcelsIdDelete**](docs/Api/ResolutionCenterApi.md#apidisputesulidparcelsiddelete) | **DELETE** /disputes/{ulid}/parcels/{id} | Removes the Parcel resource.
*ResolutionCenterApi* | [**apiDisputesUlidparcelsPost**](docs/Api/ResolutionCenterApi.md#apidisputesulidparcelspost) | **POST** /disputes/{ulid}/parcels | Creates a Parcel resource.
*ResolutionCenterApi* | [**apiOffersUlidmediasPost**](docs/Api/ResolutionCenterApi.md#apioffersulidmediaspost) | **POST** /offers/{ulid}/medias | Upload a picture for a given Offer
*SafeCheckoutApi* | [**apiOffersGetCollection**](docs/Api/SafeCheckoutApi.md#apioffersgetcollection) | **GET** /offers | Read issued Offers
*SafeCheckoutApi* | [**apiOffersPost**](docs/Api/SafeCheckoutApi.md#apiofferspost) | **POST** /offers | Create an Offer and retrieve url
*SafeCheckoutApi* | [**apiOffersUlidGet**](docs/Api/SafeCheckoutApi.md#apioffersulidget) | **GET** /offers/{ulid} | Read an Offer
*SafeCheckoutApi* | [**apiOffersUlidmediasIdDelete**](docs/Api/SafeCheckoutApi.md#apioffersulidmediasiddelete) | **DELETE** /offers/{ulid}/medias/{id} | Removes the Media resource.
*SafeCheckoutApi* | [**apiOffersUlidmediasPost**](docs/Api/SafeCheckoutApi.md#apioffersulidmediaspost) | **POST** /offers/{ulid}/medias | Upload a picture for a given Offer
*SafeCheckoutApi* | [**apiOffersUlidtransactionsGetCollection**](docs/Api/SafeCheckoutApi.md#apioffersulidtransactionsgetcollection) | **GET** /offers/{ulid}/transactions | Retrieve Payment Intents for Offer
*SafeCheckoutApi* | [**apiOffersUlidtransactionsIdevaluationsPost**](docs/Api/SafeCheckoutApi.md#apioffersulidtransactionsidevaluationspost) | **POST** /offers/{ulid}/transactions/{id}/evaluations | Submit an Evaluation for the Offer
*SafeCheckoutApi* | [**apiOffersUlidtransactionsPost**](docs/Api/SafeCheckoutApi.md#apioffersulidtransactionspost) | **POST** /offers/{ulid}/transactions | Create a Payment Intent for Offer
*SafeCheckoutApi* | [**apiPersonasIdoffersDelete**](docs/Api/SafeCheckoutApi.md#apipersonasidoffersdelete) | **DELETE** /personas/{id}/offers | Revoke an Offer for given Persona
*SafeCheckoutApi* | [**apiPersonasIdoffersGetCollection**](docs/Api/SafeCheckoutApi.md#apipersonasidoffersgetcollection) | **GET** /personas/{id}/offers | List or Search Offers for given Persona
*SafeCheckoutApi* | [**apiPersonasIdoffersPatch**](docs/Api/SafeCheckoutApi.md#apipersonasidofferspatch) | **PATCH** /personas/{id}/offers | Update an Offer for given Persona
*SafeCheckoutApi* | [**apiPersonasIdoffersPost**](docs/Api/SafeCheckoutApi.md#apipersonasidofferspost) | **POST** /personas/{id}/offers | Create an Offer for given Persona
*SafeCheckoutApi* | [**apiTransactionsGetCollection**](docs/Api/SafeCheckoutApi.md#apitransactionsgetcollection) | **GET** /transactions | Retrieves the collection of Transaction resources.
*SafeCheckoutApi* | [**apiTransactionsUliddisputeDelete**](docs/Api/SafeCheckoutApi.md#apitransactionsuliddisputedelete) | **DELETE** /transactions/{ulid}/dispute | Abandon claims on Dispute
*SafeCheckoutApi* | [**apiTransactionsUliddisputeGet**](docs/Api/SafeCheckoutApi.md#apitransactionsuliddisputeget) | **GET** /transactions/{ulid}/dispute | Read Dispute from existing Transaction
*SafeCheckoutApi* | [**apiTransactionsUliddisputePatch**](docs/Api/SafeCheckoutApi.md#apitransactionsuliddisputepatch) | **PATCH** /transactions/{ulid}/dispute | Interact with a Dispute
*SafeCheckoutApi* | [**apiTransactionsUliddisputePost**](docs/Api/SafeCheckoutApi.md#apitransactionsuliddisputepost) | **POST** /transactions/{ulid}/dispute | Open a Dispute related to existing Transaction
*SafeCheckoutApi* | [**apiTransactionsUlidparcelsGetCollection**](docs/Api/SafeCheckoutApi.md#apitransactionsulidparcelsgetcollection) | **GET** /transactions/{ulid}/parcels | Read shipments from Transaction
*SafeCheckoutApi* | [**apiTransactionsUlidparcelsIdDelete**](docs/Api/SafeCheckoutApi.md#apitransactionsulidparcelsiddelete) | **DELETE** /transactions/{ulid}/parcels/{id} | Withdraw shipment from Transaction
*SafeCheckoutApi* | [**apiTransactionsUlidparcelsPost**](docs/Api/SafeCheckoutApi.md#apitransactionsulidparcelspost) | **POST** /transactions/{ulid}/parcels | Manually declare package shipped for Transaction
*UserApi* | [**apiApiClientsGetCollection**](docs/Api/UserApi.md#apiapiclientsgetcollection) | **GET** /api-clients | Retrieves the collection of ApiClient resources.
*UserApi* | [**apiApiClientsIdentifierDelete**](docs/Api/UserApi.md#apiapiclientsidentifierdelete) | **DELETE** /api-clients/{identifier} | Removes the ApiClient resource.
*UserApi* | [**apiApiClientsIdentifierGet**](docs/Api/UserApi.md#apiapiclientsidentifierget) | **GET** /api-clients/{identifier} | Retrieves a ApiClient resource.
*UserApi* | [**apiApiClientsPost**](docs/Api/UserApi.md#apiapiclientspost) | **POST** /api-clients | Creates a ApiClient resource.
*UserApi* | [**apiInvitePost**](docs/Api/UserApi.md#apiinvitepost) | **POST** /invite | Organization invite
*UserApi* | [**apiMeGet**](docs/Api/UserApi.md#apimeget) | **GET** /me | Retrieves a User resource.
*UserApi* | [**apiPersonasauthenticationPost**](docs/Api/UserApi.md#apipersonasauthenticationpost) | **POST** /personas/authentication | Persona Authentication
*UserApi* | [**apiPersonasmeGet**](docs/Api/UserApi.md#apipersonasmeget) | **GET** /personas/me | Retrieve your authenticated Persona
*UserApi* | [**apiPersonasregisterPost**](docs/Api/UserApi.md#apipersonasregisterpost) | **POST** /personas/register | Persona external registration
*UserApi* | [**apiRegisterPost**](docs/Api/UserApi.md#apiregisterpost) | **POST** /register | Organization onboarding
*UserApi* | [**apiUsersGetCollection**](docs/Api/UserApi.md#apiusersgetcollection) | **GET** /users | Retrieves the collection of User resources.
*UserApi* | [**apiUsersIdGet**](docs/Api/UserApi.md#apiusersidget) | **GET** /users/{id} | Retrieves a User resource.
*UserApi* | [**apiUsersIdPatch**](docs/Api/UserApi.md#apiusersidpatch) | **PATCH** /users/{id} | Updates the User resource.
*UserApi* | [**apiUsersIdemailValidationPatch**](docs/Api/UserApi.md#apiusersidemailvalidationpatch) | **PATCH** /users/{id}/email-validation | Validate email ownership
*WebhookApi* | [**apiWebhookHistoriesGetCollection**](docs/Api/WebhookApi.md#apiwebhookhistoriesgetcollection) | **GET** /webhook-histories | Retrieves the collection of WebhookHistory resources.
*WebhookApi* | [**apiWebhookHistoriesIdGet**](docs/Api/WebhookApi.md#apiwebhookhistoriesidget) | **GET** /webhook-histories/{id} | Retrieves a WebhookHistory resource.
*WebhookApi* | [**apiWebhookHistoriesIdPut**](docs/Api/WebhookApi.md#apiwebhookhistoriesidput) | **PUT** /webhook-histories/{id} | Replay a Webhook that ended up in failure
*WebhookApi* | [**apiWebhookSubscriptionsGetCollection**](docs/Api/WebhookApi.md#apiwebhooksubscriptionsgetcollection) | **GET** /webhook-subscriptions | Retrieves the collection of WebhookSubscription resources.
*WebhookApi* | [**apiWebhookSubscriptionsIdDelete**](docs/Api/WebhookApi.md#apiwebhooksubscriptionsiddelete) | **DELETE** /webhook-subscriptions/{id} | Removes the WebhookSubscription resource.
*WebhookApi* | [**apiWebhookSubscriptionsPost**](docs/Api/WebhookApi.md#apiwebhooksubscriptionspost) | **POST** /webhook-subscriptions | Subscribe to Event(s)

## Models

- [Address](docs/Model/Address.md)
- [AddressIndependentWrite](docs/Model/AddressIndependentWrite.md)
- [AddressRead](docs/Model/AddressRead.md)
- [AddressUpdate](docs/Model/AddressUpdate.md)
- [AddressWrite](docs/Model/AddressWrite.md)
- [ApiClientPostCreationRead](docs/Model/ApiClientPostCreationRead.md)
- [ApiClientRead](docs/Model/ApiClientRead.md)
- [ApiClientWrite](docs/Model/ApiClientWrite.md)
- [DisputeCollectionRead](docs/Model/DisputeCollectionRead.md)
- [DisputeDisputeRead](docs/Model/DisputeDisputeRead.md)
- [DisputeIndependentWrite](docs/Model/DisputeIndependentWrite.md)
- [DisputePostCreationRead](docs/Model/DisputePostCreationRead.md)
- [DisputeRead](docs/Model/DisputeRead.md)
- [DisputeUpdate](docs/Model/DisputeUpdate.md)
- [DisputeWrite](docs/Model/DisputeWrite.md)
- [EvaluationRead](docs/Model/EvaluationRead.md)
- [EvaluationWrite](docs/Model/EvaluationWrite.md)
- [Evidence](docs/Model/Evidence.md)
- [EvidenceRead](docs/Model/EvidenceRead.md)
- [EvidenceWrite](docs/Model/EvidenceWrite.md)
- [Media](docs/Model/Media.md)
- [MediaAuthenticatedRead](docs/Model/MediaAuthenticatedRead.md)
- [MediaCollectionRead](docs/Model/MediaCollectionRead.md)
- [MediaDisputeRead](docs/Model/MediaDisputeRead.md)
- [MediaRead](docs/Model/MediaRead.md)
- [Metadata](docs/Model/Metadata.md)
- [MetadataDisputeRead](docs/Model/MetadataDisputeRead.md)
- [MetadataIndependentWrite](docs/Model/MetadataIndependentWrite.md)
- [MetadataRead](docs/Model/MetadataRead.md)
- [MetadataUpdate](docs/Model/MetadataUpdate.md)
- [MetadataWrite](docs/Model/MetadataWrite.md)
- [NotificationRead](docs/Model/NotificationRead.md)
- [NotificationUpdate](docs/Model/NotificationUpdate.md)
- [Offer](docs/Model/Offer.md)
- [OfferCollectionRead](docs/Model/OfferCollectionRead.md)
- [OfferDisputeRead](docs/Model/OfferDisputeRead.md)
- [OfferIndependentWrite](docs/Model/OfferIndependentWrite.md)
- [OfferPostCreationRead](docs/Model/OfferPostCreationRead.md)
- [OfferRead](docs/Model/OfferRead.md)
- [OfferUpdate](docs/Model/OfferUpdate.md)
- [OfferWrite](docs/Model/OfferWrite.md)
- [OrganizationAuthenticatedRead](docs/Model/OrganizationAuthenticatedRead.md)
- [OrganizationCollectionRead](docs/Model/OrganizationCollectionRead.md)
- [OrganizationDisputeRead](docs/Model/OrganizationDisputeRead.md)
- [OrganizationRead](docs/Model/OrganizationRead.md)
- [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
- [OrganizationWrite](docs/Model/OrganizationWrite.md)
- [Parcel](docs/Model/Parcel.md)
- [ParcelDisputeRead](docs/Model/ParcelDisputeRead.md)
- [ParcelIndependentWrite](docs/Model/ParcelIndependentWrite.md)
- [ParcelRead](docs/Model/ParcelRead.md)
- [ParcelWrite](docs/Model/ParcelWrite.md)
- [Persona](docs/Model/Persona.md)
- [PersonaAuthReturn](docs/Model/PersonaAuthReturn.md)
- [PersonaCollectionRead](docs/Model/PersonaCollectionRead.md)
- [PersonaExternalAuth](docs/Model/PersonaExternalAuth.md)
- [PersonaIndependentWrite](docs/Model/PersonaIndependentWrite.md)
- [PersonaPostAuthRead](docs/Model/PersonaPostAuthRead.md)
- [PersonaRead](docs/Model/PersonaRead.md)
- [PersonaRegister](docs/Model/PersonaRegister.md)
- [PersonaTokenWrite](docs/Model/PersonaTokenWrite.md)
- [PersonaUpdate](docs/Model/PersonaUpdate.md)
- [PersonaWrite](docs/Model/PersonaWrite.md)
- [TransactionCollectionRead](docs/Model/TransactionCollectionRead.md)
- [TransactionDisputeRead](docs/Model/TransactionDisputeRead.md)
- [TransactionIndependentWrite](docs/Model/TransactionIndependentWrite.md)
- [TransactionRead](docs/Model/TransactionRead.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityViolationsInner](docs/Model/UnprocessableEntityViolationsInner.md)
- [User](docs/Model/User.md)
- [UserAuthenticatedRead](docs/Model/UserAuthenticatedRead.md)
- [UserCollectionRead](docs/Model/UserCollectionRead.md)
- [UserEmailValidationWrite](docs/Model/UserEmailValidationWrite.md)
- [UserInvite](docs/Model/UserInvite.md)
- [UserPostRegisterRead](docs/Model/UserPostRegisterRead.md)
- [UserUpdate](docs/Model/UserUpdate.md)
- [UserWrite](docs/Model/UserWrite.md)
- [View](docs/Model/View.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookHistoryCollectionRead](docs/Model/WebhookHistoryCollectionRead.md)
- [WebhookHistoryRead](docs/Model/WebhookHistoryRead.md)
- [WebhookObject](docs/Model/WebhookObject.md)
- [WebhookSubscriptionRead](docs/Model/WebhookSubscriptionRead.md)
- [WebhookSubscriptionWrite](docs/Model/WebhookSubscriptionWrite.md)
- [WorkflowEventDisputeRead](docs/Model/WorkflowEventDisputeRead.md)
- [WorkflowEventRead](docs/Model/WorkflowEventRead.md)

## Authorization

Authentication schemes defined for the API:
### oauth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **OFFER_READ**: Read-only operations on safe-checkout offers
    - **OFFER_WRITE**: Write permissions on safe-checkout offers
    - **DISPUTE_READ**: Read-only operations on disputes
    - **DISPUTE_WRITE**: Write permissions on disputes
    - **DISPUTE_ARBITRATION**: Update permission on disputes for manual arbitration only
    - **ORGANIZATION_READ**: Read organization details and stats
    - **RULING_READ**: Read custom rules applied to the dispute resolution program
    - **RULING_WRITE**: Write custom rules applied to the dispute resolution program
    - **PERSONA_READ**: Read operations on the shared user-base knowledge
    - **PERSONA_WRITE**: Write permissions on the shared user-base knowledge
    - **PERSONA_AUTH**: Capability to issue short-term lived authenticated URL
    - **INTERNAL_WRITE**: Special internal scope

### jwtPersonalKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### personaAuthKey

- **Type**: API key
- **API key parameter name**: X-Persona-Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

noc@tripartie.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.92`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
