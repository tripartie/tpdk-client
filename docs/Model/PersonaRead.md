# # PersonaRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**gender** | **string** |  | [optional] [default to 'RATHER_NOT_SAY']
**dateOfBirth** | **\DateTime** |  | [optional]
**language** | **string** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**email** | **string** |  | [optional]
**mobilePhoneNumber** | **string** |  | [optional]
**address** | [**\Tripartie\Tpdk\Model\PersonaReadAddress**](PersonaReadAddress.md) |  | [optional]
**riskLevel** | **string** | We sort Persona into three distinct risks&#39; category. This is inferred from the riskScore. | [optional]
**riskScore** | **int** | That score is regularly updated, each action taken can potentially update that value. A value close to zero mean zero risk and close to a hundred mean risky. | [optional]
**externalPurchaseCount** | **int** | Knowing the statistics on your user is used to better know its profile when you do not use the Safe-Checkout feature. Although it is not required, we recommend that you keep us informed. | [optional]
**externalSellCount** | **int** | Knowing the statistics on your user is used to better know its profile when you do not use the Safe-Checkout feature. Although it is not required, we recommend that you keep us informed. | [optional]
**metadata** | [**\Tripartie\Tpdk\Model\MetadataRead[]**](MetadataRead.md) | You can assign different meta to your Persona object for different purposes. eg. Ease searching. | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**offerCount** | **int** | Issued Offers count owned by a given Persona | [optional] [readonly]
**purchaseCount** | **int** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
