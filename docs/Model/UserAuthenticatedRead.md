# # UserAuthenticatedRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**birthday** | **\DateTime** |  | [optional]
**email** | **string** |  | [optional]
**roles** | **string[]** |  |
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**originCountry** | **string** | The originating country | [optional]
**preferredLanguage** | **string** |  | [optional]
**lastSuccessfulLogIn** | **\DateTime** |  | [optional]
**avatar** | [**\Tripartie\Tpdk\Model\MediaAuthenticatedRead**](MediaAuthenticatedRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**consentMailNotification** | **bool** |  |
**consentMailAds** | **bool** |  |
**organization** | [**\Tripartie\Tpdk\Model\OrganizationAuthenticatedRead**](OrganizationAuthenticatedRead.md) |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**impersonatingOrganization** | **bool** |  | [optional] [readonly]
**_2fa** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
