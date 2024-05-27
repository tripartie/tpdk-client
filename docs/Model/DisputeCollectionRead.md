# # DisputeCollectionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**transaction** | [**\Tripartie\Tpdk\Model\DisputeTransactionCollectionRead**](DisputeTransactionCollectionRead.md) |  | [optional]
**status** | **string** |  | [default to 'CREATED']
**itemCount** | **int** | The dispute may concern only PART of the package. Specify it there. | [optional]
**issueType** | **string** |  | [optional]
**issueInDescriptionType** | **string** | To be set only in conjunction of issueType &#x3D; NOT_AS_DESCRIBED. | [optional]
**issueMentionedInOffer** | **bool** |  | [optional]
**complainantStake** | **string** |  | [optional]
**inferredStake** | **string** |  | [optional]
**chosenSolution** | **string** |  | [optional]
**chosenPartialRefundAmount** | **int** |  | [optional]
**platformSolution** | **string** |  | [optional]
**platformPartialRefundAmount** | **int** |  | [optional]
**platformApproval** | **bool** |  | [optional]
**platformActorType** | **string** |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**statusExpiration** | **\DateTime** | Yield if eligible the date-time at which the dispute state expire. | [optional] [readonly]
**awaitedParty** | **string** | Determine who is awaited (actor) for the next transition | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
**messageCount** | **int** |  | [optional] [readonly]
**closedInFavorOf** | **string** | Determine who won the case, if not specified, then it is ongoing. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
