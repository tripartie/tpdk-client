# # OfferWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**publicUrl** | **string** | If specified, there would be not need for you to fill-in details. Must be accessible over WAN. | [optional]
**enforcePersonaAuth** | **bool** | Mean that the generated url cannot be accessed without a generated token for a Persona. Disallow external registration. | [optional] [default to true]
**overrideRateCommissionSafeCheckout** | **float** | Override YOUR platform fees for that particular Offer. | [optional]
**redirectUrl** | **string** | Fill-in that field IF you intend to redirect your customer instead of using a WebView. | [optional]
**title** | **string** |  |
**description** | **string** |  |
**unitPrice** | **float** |  | [optional]
**currencyCode** | **string** |  | [optional] [default to 'EUR']
**itemCount** | **int** |  | [optional] [default to 1]
**condition** | **string** |  | [optional] [default to 'USED']
**weightInGram** | **int** |  | [optional]
**shippingAllowed** | **bool** | That toggle allows the seller to propose shipping for its item. If set in conjunction of shippingCarrier, the label will be automatically generated. Also, it will restrict the carrier to the limited subset defined. | [optional]
**handDeliveryAllowed** | **bool** | Enable both parties to finalize the transaction in person rather than using delivery. A QR Code must be scanned by the seller once the buyer claims the product. | [optional] [default to true]
**shippingCarriers** | **string[]** | If you wish to enable automated shipping label generation through a specific provider, specify it there. | [optional]
**eanCode** | **string** |  | [optional]
**canBeSoldSeparately** | **bool** | Set this flag to false to forbid a potential buyer to acquire this item separately.          This is only useful in a BulkOffer context. | [optional] [default to true]
**metadata** | [**\Tripartie\Tpdk\Model\MetadataWrite[]**](MetadataWrite.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
