<?php
/**
 * PersonaWriteAddress
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
 * The version of the OpenAPI document: 2.0.178
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
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
 * PersonaWriteAddress Class Doc Comment
 *
 * @category Class
 * @description Always the Shipping address. Thus enabling automated package returns.
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PersonaWriteAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Persona_Write_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'companyName' => 'mixed',
        'countryCode' => 'mixed',
        'zipCode' => 'mixed',
        'cityName' => 'mixed',
        'firstLine' => 'mixed',
        'secondLine' => 'mixed',
        'buildingName' => 'mixed',
        'buildingFloor' => 'mixed',
        'gateOrPortalOrInboxCode' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'companyName' => null,
        'countryCode' => null,
        'zipCode' => null,
        'cityName' => null,
        'firstLine' => null,
        'secondLine' => null,
        'buildingName' => null,
        'buildingFloor' => null,
        'gateOrPortalOrInboxCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'companyName' => true,
        'countryCode' => true,
        'zipCode' => true,
        'cityName' => true,
        'firstLine' => true,
        'secondLine' => true,
        'buildingName' => true,
        'buildingFloor' => true,
        'gateOrPortalOrInboxCode' => true
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
        'companyName' => 'companyName',
        'countryCode' => 'countryCode',
        'zipCode' => 'zipCode',
        'cityName' => 'cityName',
        'firstLine' => 'firstLine',
        'secondLine' => 'secondLine',
        'buildingName' => 'buildingName',
        'buildingFloor' => 'buildingFloor',
        'gateOrPortalOrInboxCode' => 'gateOrPortalOrInboxCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyName' => 'setCompanyName',
        'countryCode' => 'setCountryCode',
        'zipCode' => 'setZipCode',
        'cityName' => 'setCityName',
        'firstLine' => 'setFirstLine',
        'secondLine' => 'setSecondLine',
        'buildingName' => 'setBuildingName',
        'buildingFloor' => 'setBuildingFloor',
        'gateOrPortalOrInboxCode' => 'setGateOrPortalOrInboxCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyName' => 'getCompanyName',
        'countryCode' => 'getCountryCode',
        'zipCode' => 'getZipCode',
        'cityName' => 'getCityName',
        'firstLine' => 'getFirstLine',
        'secondLine' => 'getSecondLine',
        'buildingName' => 'getBuildingName',
        'buildingFloor' => 'getBuildingFloor',
        'gateOrPortalOrInboxCode' => 'getGateOrPortalOrInboxCode'
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
        $this->setIfExists('companyName', $data ?? [], null);
        $this->setIfExists('countryCode', $data ?? [], null);
        $this->setIfExists('zipCode', $data ?? [], null);
        $this->setIfExists('cityName', $data ?? [], null);
        $this->setIfExists('firstLine', $data ?? [], null);
        $this->setIfExists('secondLine', $data ?? [], null);
        $this->setIfExists('buildingName', $data ?? [], null);
        $this->setIfExists('buildingFloor', $data ?? [], null);
        $this->setIfExists('gateOrPortalOrInboxCode', $data ?? [], null);
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

        if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) > 3)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 3.";
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
     * Gets companyName
     *
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param mixed|null $companyName companyName
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        if (is_null($companyName)) {
            array_push($this->openAPINullablesSetToNull, 'companyName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('companyName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return mixed|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param mixed|null $countryCode countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        if (is_null($countryCode)) {
            array_push($this->openAPINullablesSetToNull, 'countryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('countryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($countryCode) && (mb_strlen($countryCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling PersonaWriteAddress., must be smaller than or equal to 3.');
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return mixed|null
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param mixed|null $zipCode zipCode
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        if (is_null($zipCode)) {
            array_push($this->openAPINullablesSetToNull, 'zipCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zipCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets cityName
     *
     * @return mixed|null
     */
    public function getCityName()
    {
        return $this->container['cityName'];
    }

    /**
     * Sets cityName
     *
     * @param mixed|null $cityName cityName
     *
     * @return self
     */
    public function setCityName($cityName)
    {
        if (is_null($cityName)) {
            array_push($this->openAPINullablesSetToNull, 'cityName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cityName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cityName'] = $cityName;

        return $this;
    }

    /**
     * Gets firstLine
     *
     * @return mixed|null
     */
    public function getFirstLine()
    {
        return $this->container['firstLine'];
    }

    /**
     * Sets firstLine
     *
     * @param mixed|null $firstLine firstLine
     *
     * @return self
     */
    public function setFirstLine($firstLine)
    {
        if (is_null($firstLine)) {
            array_push($this->openAPINullablesSetToNull, 'firstLine');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstLine', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstLine'] = $firstLine;

        return $this;
    }

    /**
     * Gets secondLine
     *
     * @return mixed|null
     */
    public function getSecondLine()
    {
        return $this->container['secondLine'];
    }

    /**
     * Sets secondLine
     *
     * @param mixed|null $secondLine secondLine
     *
     * @return self
     */
    public function setSecondLine($secondLine)
    {
        if (is_null($secondLine)) {
            array_push($this->openAPINullablesSetToNull, 'secondLine');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('secondLine', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['secondLine'] = $secondLine;

        return $this;
    }

    /**
     * Gets buildingName
     *
     * @return mixed|null
     */
    public function getBuildingName()
    {
        return $this->container['buildingName'];
    }

    /**
     * Sets buildingName
     *
     * @param mixed|null $buildingName buildingName
     *
     * @return self
     */
    public function setBuildingName($buildingName)
    {
        if (is_null($buildingName)) {
            array_push($this->openAPINullablesSetToNull, 'buildingName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buildingName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buildingName'] = $buildingName;

        return $this;
    }

    /**
     * Gets buildingFloor
     *
     * @return mixed|null
     */
    public function getBuildingFloor()
    {
        return $this->container['buildingFloor'];
    }

    /**
     * Sets buildingFloor
     *
     * @param mixed|null $buildingFloor buildingFloor
     *
     * @return self
     */
    public function setBuildingFloor($buildingFloor)
    {
        if (is_null($buildingFloor)) {
            array_push($this->openAPINullablesSetToNull, 'buildingFloor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buildingFloor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buildingFloor'] = $buildingFloor;

        return $this;
    }

    /**
     * Gets gateOrPortalOrInboxCode
     *
     * @return mixed|null
     */
    public function getGateOrPortalOrInboxCode()
    {
        return $this->container['gateOrPortalOrInboxCode'];
    }

    /**
     * Sets gateOrPortalOrInboxCode
     *
     * @param mixed|null $gateOrPortalOrInboxCode gateOrPortalOrInboxCode
     *
     * @return self
     */
    public function setGateOrPortalOrInboxCode($gateOrPortalOrInboxCode)
    {
        if (is_null($gateOrPortalOrInboxCode)) {
            array_push($this->openAPINullablesSetToNull, 'gateOrPortalOrInboxCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gateOrPortalOrInboxCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gateOrPortalOrInboxCode'] = $gateOrPortalOrInboxCode;

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


