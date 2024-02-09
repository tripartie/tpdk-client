# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**captcha** | **string** |  | [optional]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**birthday** | **\DateTime** |  | [optional]
**email** | **string** |  | [optional]
**invitedRole** | **string[]** |  | [optional]
**roles** | **string[]** |  |
**password** | **string** | The hashed password | [optional]
**plainPassword** | **string** |  | [optional]
**newPassword** | **string** |  | [optional]
**totpSecret** | **string** |  | [optional]
**totpUri** | **string** |  | [optional]
**totpEnabled** | **bool** |  | [optional]
**totpChallenge** | **string** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**originCountry** | **string** | The originating country | [optional]
**preferredLanguage** | **string** |  | [optional]
**lastSuccessfulLogIn** | **\DateTime** |  | [optional]
**emailVerificationCode** | **string** |  | [optional]
**emailVerificationInput** | **string** |  | [optional]
**phoneVerificationCode** | **string** |  | [optional]
**phoneVerificationInput** | **string** |  | [optional]
**avatar** | **string** |  | [optional]
**notifications** | **string[]** |  | [optional]
**medias** | **string[]** |  | [optional]
**views** | [**\Tripartie\Tpdk\Model\View[]**](View.md) |  |
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**consentMailNotification** | **bool** |  |
**consentMailAds** | **bool** |  |
**lockdown** | **bool** |  |
**keys** | **string[]** |  |
**organization** | **string** |  | [optional]
**impersonatedOrganization** | **string** |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**username** | **string** | A visual identifier that represents this user. | [optional] [readonly]
**salt** | **string** |  | [optional] [readonly]
**userIdentifier** | **string** |  | [optional] [readonly]
**impersonatingOrganization** | **bool** |  | [optional] [readonly]
**_2fa** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
