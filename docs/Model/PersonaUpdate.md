# # PersonaUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** |  |
**lastName** | **string** |  |
**gender** | **string** |  | [default to 'RATHER_NOT_SAY']
**dateOfBirth** | **\DateTime** |  | [optional]
**language** | **string** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**address** | [**\Tripartie\Tpdk\Model\PersonaUpdateAddress**](PersonaUpdateAddress.md) |  | [optional]
**externalPurchaseCount** | **int** | Knowing the statistics on your user is used to better know its profile when you do not use the Safe-Checkout feature. Although it is not required, we recommend that you keep us informed. | [optional]
**externalSellCount** | **int** | Knowing the statistics on your user is used to better know its profile when you do not use the Safe-Checkout feature. Although it is not required, we recommend that you keep us informed. | [optional]
**metadata** | [**\Tripartie\Tpdk\Model\MetadataUpdate[]**](MetadataUpdate.md) | You can assign different meta to your Persona object for different purposes. eg. Ease searching. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
