# # WebhookObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **mixed** |  |
**transaction** | [**\Tripartie\Tpdk\Model\TransactionRead**](TransactionRead.md) |  | [optional]
**status** | **mixed** |  |
**redirectUrl** | **mixed** | Fill-in that field IF you intend to redirect your customer instead of using a WebView. | [optional]
**itemCount** | **mixed** |  | [optional]
**issueType** | **mixed** |  | [optional]
**issueInDescriptionType** | **mixed** | To be set only in conjunction of issueType &#x3D; NOT_AS_DESCRIBED. | [optional]
**issueMentionedInOffer** | **mixed** |  | [optional]
**issueDetails** | **mixed** |  | [optional]
**complainantTruthfulnessScore** | **mixed** |  |
**sellerTruthfulnessScore** | **mixed** |  |
**complainantStake** | **mixed** |  | [optional]
**inferredStake** | **mixed** |  | [optional]
**recommendedSolution** | **mixed** |  | [optional]
**recommendedPartialRefundAmount** | **mixed** |  | [optional]
**chosenSolution** | **mixed** |  | [optional]
**chosenPartialRefundAmount** | **mixed** |  | [optional]
**counterSolution** | **mixed** |  | [optional]
**counterPartialRefundAmount** | **mixed** |  | [optional]
**sellerNotes** | **mixed** |  | [optional]
**sellerRejectionReason** | **mixed** |  | [optional]
**complainantApproval** | **mixed** |  | [optional]
**sellerApproval** | **mixed** |  | [optional]
**platformSolution** | **mixed** |  | [optional]
**platformPartialRefundAmount** | **mixed** |  | [optional]
**platformApproval** | **mixed** |  | [optional]
**platformActorType** | **mixed** |  | [optional]
**platformReasoning** | **mixed** | Explicit additional information about the platform decision. Could be written by AI, Ruling or Customer Care. | [optional]
**arbitrationBy** | **mixed** |  | [optional]
**parcels** | **mixed** |  |
**views** | **mixed** |  |
**metadata** | **mixed** |  |
**events** | **mixed** |  | [optional]
**createdAt** | **mixed** |  | [optional] [readonly]
**updatedAt** | **mixed** |  | [optional] [readonly]
**viewCount** | **mixed** |  | [optional] [readonly]
**statusExpiration** | **mixed** | Yield if eligible the date-time at which the dispute state expire. | [optional] [readonly]
**awaitedParty** | **mixed** | Determine who is awaited (actor) for the next transition | [optional] [readonly]
**iri** | **mixed** |  | [optional] [readonly]
**messageCount** | **mixed** |  | [optional] [readonly]
**closedInFavorOf** | **mixed** | Determine who won the case, if not specified, then it is ongoing. | [optional] [readonly]
**disbursedByBuyer** | **mixed** | Total amount disbursed by the buyer to acquire the item. | [optional] [readonly]
**maxRefundableForBuyer** | **mixed** | How much the buyer can actually receive back in case of a full refund. | [optional] [readonly]
**id** | **mixed** |  | [optional] [readonly]
**firstName** | **mixed** |  | [optional]
**lastName** | **mixed** |  | [optional]
**language** | **mixed** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**email** | **mixed** |  | [optional]
**mobilePhoneNumber** | **mixed** |  | [optional]
**publicUrl** | **mixed** | If specified, there would be not need for you to fill-in details. Must be accessible over WAN. | [optional]
**organization** | [**\Tripartie\Tpdk\Model\OfferReadOrganization**](OfferReadOrganization.md) |  | [optional]
**seller** | [**\Tripartie\Tpdk\Model\PersonaRead**](PersonaRead.md) | If the seller is actually YOUR organization, set it to NULL. |
**nature** | **mixed** | This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information. |
**title** | **mixed** |  | [optional]
**description** | **mixed** |  | [optional]
**unitPrice** | **mixed** |  | [optional]
**currencyCode** | **mixed** |  | [optional]
**condition** | **mixed** |  | [optional]
**medias** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
