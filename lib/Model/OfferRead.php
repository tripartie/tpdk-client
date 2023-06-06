<?php
/**
 * OfferRead
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
 * The version of the OpenAPI document: 2.0.9
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
 * OfferRead Class Doc Comment
 *
 * @category Class
 * @description An Offer object represent a public listening
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OfferRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Offer-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ulid' => 'string',
        'publicUrl' => 'string',
        'nature' => 'string',
        'title' => 'string',
        'description' => 'string',
        'unitPrice' => 'float',
        'currencyCode' => 'string',
        'itemCount' => 'int',
        'condition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ulid' => null,
        'publicUrl' => null,
        'nature' => null,
        'title' => null,
        'description' => null,
        'unitPrice' => null,
        'currencyCode' => null,
        'itemCount' => null,
        'condition' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ulid' => false,
		'publicUrl' => true,
		'nature' => false,
		'title' => false,
		'description' => true,
		'unitPrice' => true,
		'currencyCode' => true,
		'itemCount' => false,
		'condition' => false
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
        'ulid' => 'ulid',
        'publicUrl' => 'publicUrl',
        'nature' => 'nature',
        'title' => 'title',
        'description' => 'description',
        'unitPrice' => 'unitPrice',
        'currencyCode' => 'currencyCode',
        'itemCount' => 'itemCount',
        'condition' => 'condition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ulid' => 'setUlid',
        'publicUrl' => 'setPublicUrl',
        'nature' => 'setNature',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'unitPrice' => 'setUnitPrice',
        'currencyCode' => 'setCurrencyCode',
        'itemCount' => 'setItemCount',
        'condition' => 'setCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ulid' => 'getUlid',
        'publicUrl' => 'getPublicUrl',
        'nature' => 'getNature',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'unitPrice' => 'getUnitPrice',
        'currencyCode' => 'getCurrencyCode',
        'itemCount' => 'getItemCount',
        'condition' => 'getCondition'
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

    public const NATURE_SERVICE = 'service';
    public const NATURE_PHYSICAL_ITEM = 'physical_item';
    public const NATURE_DEMATERIALIZED_ITEM = 'dematerialized_item';
    public const NATURE_RENT_ITEM = 'rent_item';
    public const CONDITION__NEW = 'NEW';
    public const CONDITION_USED = 'USED';
    public const CONDITION_DAMAGED = 'DAMAGED';
    public const CONDITION_DETERIORATED = 'DETERIORATED';
    public const CONDITION_UNRECOVERABLE = 'UNRECOVERABLE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNatureAllowableValues()
    {
        return [
            self::NATURE_SERVICE,
            self::NATURE_PHYSICAL_ITEM,
            self::NATURE_DEMATERIALIZED_ITEM,
            self::NATURE_RENT_ITEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
            self::CONDITION_USED,
            self::CONDITION_DAMAGED,
            self::CONDITION_DETERIORATED,
            self::CONDITION_UNRECOVERABLE,
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
        $this->setIfExists('ulid', $data ?? [], null);
        $this->setIfExists('publicUrl', $data ?? [], null);
        $this->setIfExists('nature', $data ?? [], 'physical_item');
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('currencyCode', $data ?? [], 'EUR');
        $this->setIfExists('itemCount', $data ?? [], 1);
        $this->setIfExists('condition', $data ?? [], 'USED');
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

        if ($this->container['ulid'] === null) {
            $invalidProperties[] = "'ulid' can't be null";
        }
        if ($this->container['nature'] === null) {
            $invalidProperties[] = "'nature' can't be null";
        }
        $allowedValues = $this->getNatureAllowableValues();
        if (!is_null($this->container['nature']) && !in_array($this->container['nature'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'nature', must be one of '%s'",
                $this->container['nature'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['itemCount'] === null) {
            $invalidProperties[] = "'itemCount' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'condition', must be one of '%s'",
                $this->container['condition'],
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
     * Gets ulid
     *
     * @return string
     */
    public function getUlid()
    {
        return $this->container['ulid'];
    }

    /**
     * Sets ulid
     *
     * @param string $ulid ulid
     *
     * @return self
     */
    public function setUlid($ulid)
    {
        if (is_null($ulid)) {
            throw new \InvalidArgumentException('non-nullable ulid cannot be null');
        }
        $this->container['ulid'] = $ulid;

        return $this;
    }

    /**
     * Gets publicUrl
     *
     * @return string|null
     */
    public function getPublicUrl()
    {
        return $this->container['publicUrl'];
    }

    /**
     * Sets publicUrl
     *
     * @param string|null $publicUrl If specified, there would be not need for you to fill-in details. Must be accessible over WAN.
     *
     * @return self
     */
    public function setPublicUrl($publicUrl)
    {
        if (is_null($publicUrl)) {
            array_push($this->openAPINullablesSetToNull, 'publicUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('publicUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['publicUrl'] = $publicUrl;

        return $this;
    }

    /**
     * Gets nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->container['nature'];
    }

    /**
     * Sets nature
     *
     * @param string $nature This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information.
     *
     * @return self
     */
    public function setNature($nature)
    {
        if (is_null($nature)) {
            throw new \InvalidArgumentException('non-nullable nature cannot be null');
        }
        $allowedValues = $this->getNatureAllowableValues();
        if (!in_array($nature, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'nature', must be one of '%s'",
                    $nature,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nature'] = $nature;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float|null $unitPrice unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            array_push($this->openAPINullablesSetToNull, 'unitPrice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unitPrice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string|null $currencyCode currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        if (is_null($currencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'currencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets itemCount
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->container['itemCount'];
    }

    /**
     * Sets itemCount
     *
     * @param int $itemCount itemCount
     *
     * @return self
     */
    public function setItemCount($itemCount)
    {
        if (is_null($itemCount)) {
            throw new \InvalidArgumentException('non-nullable itemCount cannot be null');
        }
        $this->container['itemCount'] = $itemCount;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($condition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'condition', must be one of '%s'",
                    $condition,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

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


