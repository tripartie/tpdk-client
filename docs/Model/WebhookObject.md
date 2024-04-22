# # WebhookObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**transaction** | [**\Tripartie\Tpdk\Model\TransactionRead**](TransactionRead.md) |  | [optional]
**status** | **string** |  | [default to 'CREATED']
**redirectUrl** | **string** | Fill-in that field IF you intend to redirect your customer instead of using a WebView. | [optional]
**itemCount** | **int** |  | [optional] [default to 1]
**issueType** | **string** |  | [optional]
**issueInDescriptionType** | **string** | To be set only in conjunction of issueType &#x3D; NOT_AS_DESCRIBED. | [optional]
**issueMentionedInOffer** | **bool** |  | [optional]
**issueDetails** | **string** |  | [optional]
**complainantTruthfulnessScore** | **int** |  | [default to 100]
**sellerTruthfulnessScore** | **int** |  | [default to 100]
**complainantStake** | **string** |  | [optional]
**inferredStake** | **string** |  | [optional]
**recommendedSolution** | **string** |  | [optional]
**recommendedPartialRefundAmount** | **int** |  | [optional]
**chosenSolution** | **string** |  | [optional]
**chosenPartialRefundAmount** | **int** |  | [optional]
**counterSolution** | **string** |  | [optional]
**counterPartialRefundAmount** | **int** |  | [optional]
**sellerNotes** | **string** |  | [optional]
**sellerRejectionReason** | **string** |  | [optional]
**complainantApproval** | **bool** |  | [optional]
**sellerApproval** | **bool** |  | [optional]
**platformSolution** | **string** |  | [optional]
**platformPartialRefundAmount** | **int** |  | [optional]
**platformApproval** | **bool** |  | [optional]
**platformActorType** | **string** |  | [optional]
**platformReasoning** | **string** | Explicit additional information about the platform decision. Could be written by AI, Ruling or Customer Care. | [optional]
**arbitrationBy** | **string** |  | [optional]
**parcels** | [**\Tripartie\Tpdk\Model\ParcelRead[]**](ParcelRead.md) |  |
**views** | [**\Tripartie\Tpdk\Model\ViewRead[]**](ViewRead.md) |  |
**metadata** | [**\Tripartie\Tpdk\Model\MetadataRead[]**](MetadataRead.md) |  |
**events** | [**\Tripartie\Tpdk\Model\WorkflowEventRead[]**](WorkflowEventRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**viewCount** | **int** |  | [optional] [readonly]
**statusExpiration** | **\DateTime** | Yield if eligible the date-time at which the dispute state expire. | [optional] [readonly]
**awaitedParty** | **string** | Determine who is awaited (actor) for the next transition | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
**messageCount** | **int** |  | [optional] [readonly]
**closedInFavorOf** | **string** | Determine who won the case, if not specified, then it is ongoing. | [optional] [readonly]
**disbursedByBuyer** | **float** | Total amount disbursed by the buyer to acquire the item. | [optional] [readonly]
**maxRefundableForBuyer** | **float** | How much the buyer can actually receive back in case of a full refund. | [optional] [readonly]
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**language** | **string** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**email** | **string** |  | [optional]
**mobilePhoneNumber** | **string** |  | [optional]
**publicUrl** | **string** | If specified, there would be not need for you to fill-in details. Must be accessible over WAN. | [optional]
**organization** | [**\Tripartie\Tpdk\Model\OrganizationRead**](OrganizationRead.md) |  | [optional]
**seller** | [**\Tripartie\Tpdk\Model\PersonaRead**](PersonaRead.md) | If the seller is actually YOUR organization, set it to NULL. |
**nature** | **string** | This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information. | [default to 'physical_item']
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**unitPrice** | **float** |  | [optional]
**currencyCode** | **string** |  | [optional] [default to 'EUR']
**condition** | **string** |  | [optional] [default to 'USED']
**medias** | [**\Tripartie\Tpdk\Model\MediaRead[]**](MediaRead.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
