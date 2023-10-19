# # DisputeRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**transaction** | [**\Tripartie\Tpdk\Model\TransactionRead**](TransactionRead.md) |  | [optional]
**status** | **string** |  | [default to 'CREATED']
**redirectUrl** | **string** | Fill-in that field IF you intend to redirect your customer instead of using a WebView. | [optional]
**itemCount** | **int** | The dispute may concern only PART of the package. Specify it there. | [optional]
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
**metadata** | [**\Tripartie\Tpdk\Model\MetadataRead[]**](MetadataRead.md) |  |
**events** | [**\Tripartie\Tpdk\Model\WorkflowEventRead[]**](WorkflowEventRead.md) |  | [optional] [readonly]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**statusExpiration** | **\DateTime** | Yield if eligible the date-time at which the dispute state expire. | [optional] [readonly]
**awaitedParty** | **string** | Determine who is awaited (actor) for the next transition | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
**messageCount** | **int** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
