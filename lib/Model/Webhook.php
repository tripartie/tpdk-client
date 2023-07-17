<?php
/**
 * Webhook
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
 * The version of the OpenAPI document: 2.0.26
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
 * Webhook Class Doc Comment
 *
 * @category Class
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Webhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'event' => 'string',
        'objectId' => 'string',
        'iri' => 'string',
        'occurredAt' => '\DateTime',
        'object' => '\Tripartie\Tpdk\Model\WebhookObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'event' => null,
        'objectId' => null,
        'iri' => 'iri',
        'occurredAt' => 'date-time',
        'object' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'event' => false,
		'objectId' => false,
		'iri' => false,
		'occurredAt' => false,
		'object' => false
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
        'id' => 'id',
        'event' => 'event',
        'objectId' => 'objectId',
        'iri' => 'iri',
        'occurredAt' => 'occurredAt',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'event' => 'setEvent',
        'objectId' => 'setObjectId',
        'iri' => 'setIri',
        'occurredAt' => 'setOccurredAt',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'event' => 'getEvent',
        'objectId' => 'getObjectId',
        'iri' => 'getIri',
        'occurredAt' => 'getOccurredAt',
        'object' => 'getObject'
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
    public const EVENT_DISPUTE_EXPIRED = 'dispute.expired';
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
            self::EVENT_DISPUTE_EXPIRED,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('objectId', $data ?? [], null);
        $this->setIfExists('iri', $data ?? [], null);
        $this->setIfExists('occurredAt', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
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

        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event', must be one of '%s'",
                $this->container['event'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string|null $event event
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
     * Gets objectId
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
     * Sets objectId
     *
     * @param string|null $objectId objectId
     *
     * @return self
     */
    public function setObjectId($objectId)
    {
        if (is_null($objectId)) {
            throw new \InvalidArgumentException('non-nullable objectId cannot be null');
        }
        $this->container['objectId'] = $objectId;

        return $this;
    }

    /**
     * Gets iri
     *
     * @return string|null
     */
    public function getIri()
    {
        return $this->container['iri'];
    }

    /**
     * Sets iri
     *
     * @param string|null $iri iri
     *
     * @return self
     */
    public function setIri($iri)
    {
        if (is_null($iri)) {
            throw new \InvalidArgumentException('non-nullable iri cannot be null');
        }
        $this->container['iri'] = $iri;

        return $this;
    }

    /**
     * Gets occurredAt
     *
     * @return \DateTime|null
     */
    public function getOccurredAt()
    {
        return $this->container['occurredAt'];
    }

    /**
     * Sets occurredAt
     *
     * @param \DateTime|null $occurredAt occurredAt
     *
     * @return self
     */
    public function setOccurredAt($occurredAt)
    {
        if (is_null($occurredAt)) {
            throw new \InvalidArgumentException('non-nullable occurredAt cannot be null');
        }
        $this->container['occurredAt'] = $occurredAt;

        return $this;
    }

    /**
     * Gets object
     *
     * @return \Tripartie\Tpdk\Model\WebhookObject|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param \Tripartie\Tpdk\Model\WebhookObject|null $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $this->container['object'] = $object;

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


