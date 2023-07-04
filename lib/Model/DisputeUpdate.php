<?php
/**
 * DisputeUpdate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tripartie
 *
 * Our API suite for the **Resolution Center** and the **Safe Checkout** features. Simple, yet elegant web interfaces for your convenience. One request away from your first automated resolution or safe-checkout.
 *
 * The version of the OpenAPI document: 2.0.22
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Tripartie\Tpdk\Model;

use \ArrayAccess;
use \Tripartie\Tpdk\ObjectSerializer;

/**
 * DisputeUpdate Class Doc Comment
 *
 * @category Class
 * @description Access directly our resolution center without having used the safe-checkout feature.
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DisputeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dispute-Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemCount' => 'int',
        'issueType' => 'string',
        'issueInDescriptionType' => 'string',
        'issueDetails' => 'string',
        'complainantStake' => 'string',
        'chosenSolution' => 'string',
        'chosenPartialRefundAmount' => 'int',
        'counterSolution' => 'string',
        'counterPartialRefundAmount' => 'int',
        'complainantApproval' => 'bool',
        'sellerApproval' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'itemCount' => null,
        'issueType' => null,
        'issueInDescriptionType' => null,
        'issueDetails' => null,
        'complainantStake' => null,
        'chosenSolution' => null,
        'chosenPartialRefundAmount' => null,
        'counterSolution' => null,
        'counterPartialRefundAmount' => null,
        'complainantApproval' => null,
        'sellerApproval' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemCount' => true,
		'issueType' => true,
		'issueInDescriptionType' => true,
		'issueDetails' => true,
		'complainantStake' => true,
		'chosenSolution' => true,
		'chosenPartialRefundAmount' => true,
		'counterSolution' => true,
		'counterPartialRefundAmount' => true,
		'complainantApproval' => true,
		'sellerApproval' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'itemCount' => 'itemCount',
        'issueType' => 'issueType',
        'issueInDescriptionType' => 'issueInDescriptionType',
        'issueDetails' => 'issueDetails',
        'complainantStake' => 'complainantStake',
        'chosenSolution' => 'chosenSolution',
        'chosenPartialRefundAmount' => 'chosenPartialRefundAmount',
        'counterSolution' => 'counterSolution',
        'counterPartialRefundAmount' => 'counterPartialRefundAmount',
        'complainantApproval' => 'complainantApproval',
        'sellerApproval' => 'sellerApproval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemCount' => 'setItemCount',
        'issueType' => 'setIssueType',
        'issueInDescriptionType' => 'setIssueInDescriptionType',
        'issueDetails' => 'setIssueDetails',
        'complainantStake' => 'setComplainantStake',
        'chosenSolution' => 'setChosenSolution',
        'chosenPartialRefundAmount' => 'setChosenPartialRefundAmount',
        'counterSolution' => 'setCounterSolution',
        'counterPartialRefundAmount' => 'setCounterPartialRefundAmount',
        'complainantApproval' => 'setComplainantApproval',
        'sellerApproval' => 'setSellerApproval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemCount' => 'getItemCount',
        'issueType' => 'getIssueType',
        'issueInDescriptionType' => 'getIssueInDescriptionType',
        'issueDetails' => 'getIssueDetails',
        'complainantStake' => 'getComplainantStake',
        'chosenSolution' => 'getChosenSolution',
        'chosenPartialRefundAmount' => 'getChosenPartialRefundAmount',
        'counterSolution' => 'getCounterSolution',
        'counterPartialRefundAmount' => 'getCounterPartialRefundAmount',
        'complainantApproval' => 'getComplainantApproval',
        'sellerApproval' => 'getSellerApproval'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const ISSUE_TYPE_NOT_AS_DESCRIBED = 'NOT_AS_DESCRIBED';
    public const ISSUE_TYPE_DOES_NOT_WORK = 'DOES_NOT_WORK';
    public const ISSUE_TYPE_IS_INCOMPLETE = 'IS_INCOMPLETE';
    public const ISSUE_TYPE_DELIVERY_ISSUE = 'DELIVERY_ISSUE';
    public const ISSUE_TYPE_ALLEGED_FRAUD = 'ALLEGED_FRAUD';
    public const ISSUE_TYPE_NULL = 'null';
    public const ISSUE_IN_DESCRIPTION_TYPE_WRONG_COLOUR = 'WRONG_COLOUR';
    public const ISSUE_IN_DESCRIPTION_TYPE_DAMAGED_OR_USED = 'DAMAGED_OR_USED';
    public const ISSUE_IN_DESCRIPTION_TYPE_INCORRECT_FORMAT_OR_SIZE = 'INCORRECT_FORMAT_OR_SIZE';
    public const ISSUE_IN_DESCRIPTION_TYPE_DIFFERENT_MATERIAL = 'DIFFERENT_MATERIAL';
    public const ISSUE_IN_DESCRIPTION_TYPE_NULL = 'null';
    public const COMPLAINANT_STAKE_LOW = 'LOW';
    public const COMPLAINANT_STAKE_MEDIUM = 'MEDIUM';
    public const COMPLAINANT_STAKE_HIGH = 'HIGH';
    public const COMPLAINANT_STAKE_NULL = 'null';
    public const CHOSEN_SOLUTION_PARTIAL_REFUND_WITH_PARTIAL_RETURN = 'PARTIAL_REFUND_WITH_PARTIAL_RETURN';
    public const CHOSEN_SOLUTION_PARTIAL_REFUND_WITHOUT_RETURN = 'PARTIAL_REFUND_WITHOUT_RETURN';
    public const CHOSEN_SOLUTION_COMPLETE_REFUND_WITH_RETURN = 'COMPLETE_REFUND_WITH_RETURN';
    public const CHOSEN_SOLUTION_COMPLETE_REFUND_WITHOUT_RETURN = 'COMPLETE_REFUND_WITHOUT_RETURN';
    public const CHOSEN_SOLUTION_ABANDON_CLAIM = 'ABANDON_CLAIM';
    public const CHOSEN_SOLUTION_NULL = 'null';
    public const COUNTER_SOLUTION_PARTIAL_REFUND_WITH_PARTIAL_RETURN = 'PARTIAL_REFUND_WITH_PARTIAL_RETURN';
    public const COUNTER_SOLUTION_PARTIAL_REFUND_WITHOUT_RETURN = 'PARTIAL_REFUND_WITHOUT_RETURN';
    public const COUNTER_SOLUTION_COMPLETE_REFUND_WITH_RETURN = 'COMPLETE_REFUND_WITH_RETURN';
    public const COUNTER_SOLUTION_COMPLETE_REFUND_WITHOUT_RETURN = 'COMPLETE_REFUND_WITHOUT_RETURN';
    public const COUNTER_SOLUTION_ABANDON_CLAIM = 'ABANDON_CLAIM';
    public const COUNTER_SOLUTION_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIssueTypeAllowableValues()
    {
        return [
            self::ISSUE_TYPE_NOT_AS_DESCRIBED,
            self::ISSUE_TYPE_DOES_NOT_WORK,
            self::ISSUE_TYPE_IS_INCOMPLETE,
            self::ISSUE_TYPE_DELIVERY_ISSUE,
            self::ISSUE_TYPE_ALLEGED_FRAUD,
            self::ISSUE_TYPE_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIssueInDescriptionTypeAllowableValues()
    {
        return [
            self::ISSUE_IN_DESCRIPTION_TYPE_WRONG_COLOUR,
            self::ISSUE_IN_DESCRIPTION_TYPE_DAMAGED_OR_USED,
            self::ISSUE_IN_DESCRIPTION_TYPE_INCORRECT_FORMAT_OR_SIZE,
            self::ISSUE_IN_DESCRIPTION_TYPE_DIFFERENT_MATERIAL,
            self::ISSUE_IN_DESCRIPTION_TYPE_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComplainantStakeAllowableValues()
    {
        return [
            self::COMPLAINANT_STAKE_LOW,
            self::COMPLAINANT_STAKE_MEDIUM,
            self::COMPLAINANT_STAKE_HIGH,
            self::COMPLAINANT_STAKE_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChosenSolutionAllowableValues()
    {
        return [
            self::CHOSEN_SOLUTION_PARTIAL_REFUND_WITH_PARTIAL_RETURN,
            self::CHOSEN_SOLUTION_PARTIAL_REFUND_WITHOUT_RETURN,
            self::CHOSEN_SOLUTION_COMPLETE_REFUND_WITH_RETURN,
            self::CHOSEN_SOLUTION_COMPLETE_REFUND_WITHOUT_RETURN,
            self::CHOSEN_SOLUTION_ABANDON_CLAIM,
            self::CHOSEN_SOLUTION_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCounterSolutionAllowableValues()
    {
        return [
            self::COUNTER_SOLUTION_PARTIAL_REFUND_WITH_PARTIAL_RETURN,
            self::COUNTER_SOLUTION_PARTIAL_REFUND_WITHOUT_RETURN,
            self::COUNTER_SOLUTION_COMPLETE_REFUND_WITH_RETURN,
            self::COUNTER_SOLUTION_COMPLETE_REFUND_WITHOUT_RETURN,
            self::COUNTER_SOLUTION_ABANDON_CLAIM,
            self::COUNTER_SOLUTION_NULL,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemCount', $data ?? [], null);
        $this->setIfExists('issueType', $data ?? [], null);
        $this->setIfExists('issueInDescriptionType', $data ?? [], null);
        $this->setIfExists('issueDetails', $data ?? [], null);
        $this->setIfExists('complainantStake', $data ?? [], null);
        $this->setIfExists('chosenSolution', $data ?? [], null);
        $this->setIfExists('chosenPartialRefundAmount', $data ?? [], null);
        $this->setIfExists('counterSolution', $data ?? [], null);
        $this->setIfExists('counterPartialRefundAmount', $data ?? [], null);
        $this->setIfExists('complainantApproval', $data ?? [], null);
        $this->setIfExists('sellerApproval', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['itemCount']) && ($this->container['itemCount'] <= 0)) {
            $invalidProperties[] = "invalid value for 'itemCount', must be bigger than 0.";
        }

        $allowedValues = $this->getIssueTypeAllowableValues();
        if (!is_null($this->container['issueType']) && !in_array($this->container['issueType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'issueType', must be one of '%s'",
                $this->container['issueType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIssueInDescriptionTypeAllowableValues();
        if (!is_null($this->container['issueInDescriptionType']) && !in_array($this->container['issueInDescriptionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'issueInDescriptionType', must be one of '%s'",
                $this->container['issueInDescriptionType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['issueDetails'] === null) {
            $invalidProperties[] = "'issueDetails' can't be null";
        }
        if ((mb_strlen($this->container['issueDetails']) > 1000)) {
            $invalidProperties[] = "invalid value for 'issueDetails', the character length must be smaller than or equal to 1000.";
        }

        if ((mb_strlen($this->container['issueDetails']) < 30)) {
            $invalidProperties[] = "invalid value for 'issueDetails', the character length must be bigger than or equal to 30.";
        }

        $allowedValues = $this->getComplainantStakeAllowableValues();
        if (!is_null($this->container['complainantStake']) && !in_array($this->container['complainantStake'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'complainantStake', must be one of '%s'",
                $this->container['complainantStake'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getChosenSolutionAllowableValues();
        if (!is_null($this->container['chosenSolution']) && !in_array($this->container['chosenSolution'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'chosenSolution', must be one of '%s'",
                $this->container['chosenSolution'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['chosenPartialRefundAmount']) && ($this->container['chosenPartialRefundAmount'] <= 0)) {
            $invalidProperties[] = "invalid value for 'chosenPartialRefundAmount', must be bigger than 0.";
        }

        $allowedValues = $this->getCounterSolutionAllowableValues();
        if (!is_null($this->container['counterSolution']) && !in_array($this->container['counterSolution'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'counterSolution', must be one of '%s'",
                $this->container['counterSolution'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['counterPartialRefundAmount']) && ($this->container['counterPartialRefundAmount'] <= 0)) {
            $invalidProperties[] = "invalid value for 'counterPartialRefundAmount', must be bigger than 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets itemCount
     *
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->container['itemCount'];
    }

    /**
     * Sets itemCount
     *
     * @param int|null $itemCount The dispute may concern only PART of the package. Specify it there.
     *
     * @return self
     */
    public function setItemCount($itemCount)
    {
        if (is_null($itemCount)) {
            array_push($this->openAPINullablesSetToNull, 'itemCount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itemCount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($itemCount) && ($itemCount <= 0)) {
            throw new \InvalidArgumentException('invalid value for $itemCount when calling DisputeUpdate., must be bigger than 0.');
        }

        $this->container['itemCount'] = $itemCount;

        return $this;
    }

    /**
     * Gets issueType
     *
     * @return string|null
     */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
     * Sets issueType
     *
     * @param string|null $issueType issueType
     *
     * @return self
     */
    public function setIssueType($issueType)
    {
        if (is_null($issueType)) {
            array_push($this->openAPINullablesSetToNull, 'issueType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issueType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIssueTypeAllowableValues();
        if (!is_null($issueType) && !in_array($issueType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'issueType', must be one of '%s'",
                    $issueType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['issueType'] = $issueType;

        return $this;
    }

    /**
     * Gets issueInDescriptionType
     *
     * @return string|null
     */
    public function getIssueInDescriptionType()
    {
        return $this->container['issueInDescriptionType'];
    }

    /**
     * Sets issueInDescriptionType
     *
     * @param string|null $issueInDescriptionType To be set only in conjunction of issueType = NOT_AS_DESCRIBED.
     *
     * @return self
     */
    public function setIssueInDescriptionType($issueInDescriptionType)
    {
        if (is_null($issueInDescriptionType)) {
            array_push($this->openAPINullablesSetToNull, 'issueInDescriptionType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issueInDescriptionType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIssueInDescriptionTypeAllowableValues();
        if (!is_null($issueInDescriptionType) && !in_array($issueInDescriptionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'issueInDescriptionType', must be one of '%s'",
                    $issueInDescriptionType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['issueInDescriptionType'] = $issueInDescriptionType;

        return $this;
    }

    /**
     * Gets issueDetails
     *
     * @return string
     */
    public function getIssueDetails()
    {
        return $this->container['issueDetails'];
    }

    /**
     * Sets issueDetails
     *
     * @param string $issueDetails issueDetails
     *
     * @return self
     */
    public function setIssueDetails($issueDetails)
    {
        if (is_null($issueDetails)) {
            array_push($this->openAPINullablesSetToNull, 'issueDetails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issueDetails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($issueDetails) && (mb_strlen($issueDetails) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $issueDetails when calling DisputeUpdate., must be smaller than or equal to 1000.');
        }
        if (!is_null($issueDetails) && (mb_strlen($issueDetails) < 30)) {
            throw new \InvalidArgumentException('invalid length for $issueDetails when calling DisputeUpdate., must be bigger than or equal to 30.');
        }

        $this->container['issueDetails'] = $issueDetails;

        return $this;
    }

    /**
     * Gets complainantStake
     *
     * @return string|null
     */
    public function getComplainantStake()
    {
        return $this->container['complainantStake'];
    }

    /**
     * Sets complainantStake
     *
     * @param string|null $complainantStake complainantStake
     *
     * @return self
     */
    public function setComplainantStake($complainantStake)
    {
        if (is_null($complainantStake)) {
            array_push($this->openAPINullablesSetToNull, 'complainantStake');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('complainantStake', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getComplainantStakeAllowableValues();
        if (!is_null($complainantStake) && !in_array($complainantStake, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'complainantStake', must be one of '%s'",
                    $complainantStake,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['complainantStake'] = $complainantStake;

        return $this;
    }

    /**
     * Gets chosenSolution
     *
     * @return string|null
     */
    public function getChosenSolution()
    {
        return $this->container['chosenSolution'];
    }

    /**
     * Sets chosenSolution
     *
     * @param string|null $chosenSolution chosenSolution
     *
     * @return self
     */
    public function setChosenSolution($chosenSolution)
    {
        if (is_null($chosenSolution)) {
            array_push($this->openAPINullablesSetToNull, 'chosenSolution');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chosenSolution', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getChosenSolutionAllowableValues();
        if (!is_null($chosenSolution) && !in_array($chosenSolution, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'chosenSolution', must be one of '%s'",
                    $chosenSolution,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['chosenSolution'] = $chosenSolution;

        return $this;
    }

    /**
     * Gets chosenPartialRefundAmount
     *
     * @return int|null
     */
    public function getChosenPartialRefundAmount()
    {
        return $this->container['chosenPartialRefundAmount'];
    }

    /**
     * Sets chosenPartialRefundAmount
     *
     * @param int|null $chosenPartialRefundAmount chosenPartialRefundAmount
     *
     * @return self
     */
    public function setChosenPartialRefundAmount($chosenPartialRefundAmount)
    {
        if (is_null($chosenPartialRefundAmount)) {
            array_push($this->openAPINullablesSetToNull, 'chosenPartialRefundAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chosenPartialRefundAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($chosenPartialRefundAmount) && ($chosenPartialRefundAmount <= 0)) {
            throw new \InvalidArgumentException('invalid value for $chosenPartialRefundAmount when calling DisputeUpdate., must be bigger than 0.');
        }

        $this->container['chosenPartialRefundAmount'] = $chosenPartialRefundAmount;

        return $this;
    }

    /**
     * Gets counterSolution
     *
     * @return string|null
     */
    public function getCounterSolution()
    {
        return $this->container['counterSolution'];
    }

    /**
     * Sets counterSolution
     *
     * @param string|null $counterSolution counterSolution
     *
     * @return self
     */
    public function setCounterSolution($counterSolution)
    {
        if (is_null($counterSolution)) {
            array_push($this->openAPINullablesSetToNull, 'counterSolution');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('counterSolution', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCounterSolutionAllowableValues();
        if (!is_null($counterSolution) && !in_array($counterSolution, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'counterSolution', must be one of '%s'",
                    $counterSolution,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['counterSolution'] = $counterSolution;

        return $this;
    }

    /**
     * Gets counterPartialRefundAmount
     *
     * @return int|null
     */
    public function getCounterPartialRefundAmount()
    {
        return $this->container['counterPartialRefundAmount'];
    }

    /**
     * Sets counterPartialRefundAmount
     *
     * @param int|null $counterPartialRefundAmount counterPartialRefundAmount
     *
     * @return self
     */
    public function setCounterPartialRefundAmount($counterPartialRefundAmount)
    {
        if (is_null($counterPartialRefundAmount)) {
            array_push($this->openAPINullablesSetToNull, 'counterPartialRefundAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('counterPartialRefundAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($counterPartialRefundAmount) && ($counterPartialRefundAmount <= 0)) {
            throw new \InvalidArgumentException('invalid value for $counterPartialRefundAmount when calling DisputeUpdate., must be bigger than 0.');
        }

        $this->container['counterPartialRefundAmount'] = $counterPartialRefundAmount;

        return $this;
    }

    /**
     * Gets complainantApproval
     *
     * @return bool|null
     */
    public function getComplainantApproval()
    {
        return $this->container['complainantApproval'];
    }

    /**
     * Sets complainantApproval
     *
     * @param bool|null $complainantApproval complainantApproval
     *
     * @return self
     */
    public function setComplainantApproval($complainantApproval)
    {
        if (is_null($complainantApproval)) {
            array_push($this->openAPINullablesSetToNull, 'complainantApproval');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('complainantApproval', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['complainantApproval'] = $complainantApproval;

        return $this;
    }

    /**
     * Gets sellerApproval
     *
     * @return bool|null
     */
    public function getSellerApproval()
    {
        return $this->container['sellerApproval'];
    }

    /**
     * Sets sellerApproval
     *
     * @param bool|null $sellerApproval sellerApproval
     *
     * @return self
     */
    public function setSellerApproval($sellerApproval)
    {
        if (is_null($sellerApproval)) {
            array_push($this->openAPINullablesSetToNull, 'sellerApproval');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sellerApproval', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sellerApproval'] = $sellerApproval;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


