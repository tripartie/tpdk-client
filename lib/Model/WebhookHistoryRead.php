<?php
/**
 * WebhookHistoryRead
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
 * The version of the OpenAPI document: 2.0.0-b2
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
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
 * WebhookHistoryRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookHistoryRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookHistory-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event' => 'string',
        'url' => 'string',
        'responseCode' => 'int',
        'responseBody' => 'string',
        'createdAt' => '\DateTime',
        'attemptedAt' => '\DateTime',
        'retryCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event' => null,
        'url' => null,
        'responseCode' => null,
        'responseBody' => null,
        'createdAt' => 'date-time',
        'attemptedAt' => 'date-time',
        'retryCount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'event' => false,
		'url' => false,
		'responseCode' => false,
		'responseBody' => false,
		'createdAt' => false,
		'attemptedAt' => false,
		'retryCount' => false
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
        'event' => 'event',
        'url' => 'url',
        'responseCode' => 'responseCode',
        'responseBody' => 'responseBody',
        'createdAt' => 'createdAt',
        'attemptedAt' => 'attemptedAt',
        'retryCount' => 'retryCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event' => 'setEvent',
        'url' => 'setUrl',
        'responseCode' => 'setResponseCode',
        'responseBody' => 'setResponseBody',
        'createdAt' => 'setCreatedAt',
        'attemptedAt' => 'setAttemptedAt',
        'retryCount' => 'setRetryCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event' => 'getEvent',
        'url' => 'getUrl',
        'responseCode' => 'getResponseCode',
        'responseBody' => 'getResponseBody',
        'createdAt' => 'getCreatedAt',
        'attemptedAt' => 'getAttemptedAt',
        'retryCount' => 'getRetryCount'
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

    public const EVENT_DISPUTE_OPENED = 'dispute.opened';
    public const EVENT_DISPUTE_SUBMITTED = 'dispute.submitted';
    public const EVENT_DISPUTE_CREATED = 'dispute.created';
    public const EVENT_DISPUTE_ABANDONED = 'dispute.abandoned';
    public const EVENT_DISPUTE_SETTLEMENT = 'dispute.settlement';
    public const EVENT_DISPUTE_CLOSED = 'dispute.closed';
    public const EVENT_DISPUTE_MANUAL_ARBITRATION_REQUIRED = 'dispute.manual_arbitration_required';
    public const EVENT_DISPUTE_UPDATED = 'dispute.updated';
    public const EVENT_OFFER_CREATED = 'offer.created';
    public const EVENT_OFFER_EXPIRED = 'offer.expired';
    public const EVENT_OFFER_UPDATED = 'offer.updated';
    public const EVENT_OFFER_CRAWL_FAILURE = 'offer.crawl_failure';
    public const EVENT_OFFER_TRANSACTION_AUTHORIZED = 'offer.transaction.authorized';
    public const EVENT_OFFER_TRANSACTION_RECONCILED = 'offer.transaction.reconciled';
    public const EVENT_OFFER_TRANSACTION_ABANDONED = 'offer.transaction.abandoned';
    public const EVENT_OFFER_CLOSED = 'offer.closed';
    public const EVENT_OFFER_TRANSACTION_REFUND = 'offer.transaction.refund';
    public const EVENT_PERSONA_ADDED = 'persona.added';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_DISPUTE_OPENED,
            self::EVENT_DISPUTE_SUBMITTED,
            self::EVENT_DISPUTE_CREATED,
            self::EVENT_DISPUTE_ABANDONED,
            self::EVENT_DISPUTE_SETTLEMENT,
            self::EVENT_DISPUTE_CLOSED,
            self::EVENT_DISPUTE_MANUAL_ARBITRATION_REQUIRED,
            self::EVENT_DISPUTE_UPDATED,
            self::EVENT_OFFER_CREATED,
            self::EVENT_OFFER_EXPIRED,
            self::EVENT_OFFER_UPDATED,
            self::EVENT_OFFER_CRAWL_FAILURE,
            self::EVENT_OFFER_TRANSACTION_AUTHORIZED,
            self::EVENT_OFFER_TRANSACTION_RECONCILED,
            self::EVENT_OFFER_TRANSACTION_ABANDONED,
            self::EVENT_OFFER_CLOSED,
            self::EVENT_OFFER_TRANSACTION_REFUND,
            self::EVENT_PERSONA_ADDED,
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
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('responseCode', $data ?? [], null);
        $this->setIfExists('responseBody', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('attemptedAt', $data ?? [], null);
        $this->setIfExists('retryCount', $data ?? [], null);
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

        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event', must be one of '%s'",
                $this->container['event'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['responseCode'] === null) {
            $invalidProperties[] = "'responseCode' can't be null";
        }
        if ($this->container['responseBody'] === null) {
            $invalidProperties[] = "'responseBody' can't be null";
        }
        if ($this->container['retryCount'] === null) {
            $invalidProperties[] = "'retryCount' can't be null";
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
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!in_array($event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event', must be one of '%s'",
                    $event,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets responseCode
     *
     * @return int
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     *
     * @param int $responseCode responseCode
     *
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        if (is_null($responseCode)) {
            throw new \InvalidArgumentException('non-nullable responseCode cannot be null');
        }
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets responseBody
     *
     * @return string
     */
    public function getResponseBody()
    {
        return $this->container['responseBody'];
    }

    /**
     * Sets responseBody
     *
     * @param string $responseBody responseBody
     *
     * @return self
     */
    public function setResponseBody($responseBody)
    {
        if (is_null($responseBody)) {
            throw new \InvalidArgumentException('non-nullable responseBody cannot be null');
        }
        $this->container['responseBody'] = $responseBody;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets attemptedAt
     *
     * @return \DateTime|null
     */
    public function getAttemptedAt()
    {
        return $this->container['attemptedAt'];
    }

    /**
     * Sets attemptedAt
     *
     * @param \DateTime|null $attemptedAt attemptedAt
     *
     * @return self
     */
    public function setAttemptedAt($attemptedAt)
    {
        if (is_null($attemptedAt)) {
            throw new \InvalidArgumentException('non-nullable attemptedAt cannot be null');
        }
        $this->container['attemptedAt'] = $attemptedAt;

        return $this;
    }

    /**
     * Gets retryCount
     *
     * @return int
     */
    public function getRetryCount()
    {
        return $this->container['retryCount'];
    }

    /**
     * Sets retryCount
     *
     * @param int $retryCount retryCount
     *
     * @return self
     */
    public function setRetryCount($retryCount)
    {
        if (is_null($retryCount)) {
            throw new \InvalidArgumentException('non-nullable retryCount cannot be null');
        }
        $this->container['retryCount'] = $retryCount;

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

