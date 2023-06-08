<?php
/**
 * ApiClient
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
 * The version of the OpenAPI document: 2.0.13
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
 * ApiClient Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiClient implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiClient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => 'string',
        'owner' => 'string',
        'createdAt' => '\DateTime',
        'secret' => 'string',
        'name' => 'string',
        'redirectUris' => 'object[]',
        'grants' => 'object[]',
        'scopes' => 'object[]',
        'active' => 'bool',
        'allowPlainTextPkce' => 'bool',
        'confidential' => 'bool',
        'plainTextPkceAllowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifier' => null,
        'owner' => 'iri-reference',
        'createdAt' => 'date-time',
        'secret' => null,
        'name' => null,
        'redirectUris' => null,
        'grants' => null,
        'scopes' => null,
        'active' => null,
        'allowPlainTextPkce' => null,
        'confidential' => null,
        'plainTextPkceAllowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'identifier' => false,
		'owner' => true,
		'createdAt' => false,
		'secret' => true,
		'name' => false,
		'redirectUris' => false,
		'grants' => false,
		'scopes' => false,
		'active' => false,
		'allowPlainTextPkce' => false,
		'confidential' => false,
		'plainTextPkceAllowed' => false
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
        'identifier' => 'identifier',
        'owner' => 'owner',
        'createdAt' => 'createdAt',
        'secret' => 'secret',
        'name' => 'name',
        'redirectUris' => 'redirectUris',
        'grants' => 'grants',
        'scopes' => 'scopes',
        'active' => 'active',
        'allowPlainTextPkce' => 'allowPlainTextPkce',
        'confidential' => 'confidential',
        'plainTextPkceAllowed' => 'plainTextPkceAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'owner' => 'setOwner',
        'createdAt' => 'setCreatedAt',
        'secret' => 'setSecret',
        'name' => 'setName',
        'redirectUris' => 'setRedirectUris',
        'grants' => 'setGrants',
        'scopes' => 'setScopes',
        'active' => 'setActive',
        'allowPlainTextPkce' => 'setAllowPlainTextPkce',
        'confidential' => 'setConfidential',
        'plainTextPkceAllowed' => 'setPlainTextPkceAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'owner' => 'getOwner',
        'createdAt' => 'getCreatedAt',
        'secret' => 'getSecret',
        'name' => 'getName',
        'redirectUris' => 'getRedirectUris',
        'grants' => 'getGrants',
        'scopes' => 'getScopes',
        'active' => 'getActive',
        'allowPlainTextPkce' => 'getAllowPlainTextPkce',
        'confidential' => 'getConfidential',
        'plainTextPkceAllowed' => 'getPlainTextPkceAllowed'
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
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('secret', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('redirectUris', $data ?? [], null);
        $this->setIfExists('grants', $data ?? [], null);
        $this->setIfExists('scopes', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('allowPlainTextPkce', $data ?? [], null);
        $this->setIfExists('confidential', $data ?? [], null);
        $this->setIfExists('plainTextPkceAllowed', $data ?? [], null);
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

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ((mb_strlen($this->container['identifier']) > 32)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }
        if ((mb_strlen($identifier) > 32)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling ApiClient., must be smaller than or equal to 32.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            array_push($this->openAPINullablesSetToNull, 'owner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('owner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
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
     * Gets secret
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string|null $secret secret
     *
     * @return self
     */
    public function setSecret($secret)
    {
        if (is_null($secret)) {
            array_push($this->openAPINullablesSetToNull, 'secret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('secret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets redirectUris
     *
     * @return object[]|null
     */
    public function getRedirectUris()
    {
        return $this->container['redirectUris'];
    }

    /**
     * Sets redirectUris
     *
     * @param object[]|null $redirectUris redirectUris
     *
     * @return self
     */
    public function setRedirectUris($redirectUris)
    {
        if (is_null($redirectUris)) {
            throw new \InvalidArgumentException('non-nullable redirectUris cannot be null');
        }
        $this->container['redirectUris'] = $redirectUris;

        return $this;
    }

    /**
     * Gets grants
     *
     * @return object[]|null
     */
    public function getGrants()
    {
        return $this->container['grants'];
    }

    /**
     * Sets grants
     *
     * @param object[]|null $grants grants
     *
     * @return self
     */
    public function setGrants($grants)
    {
        if (is_null($grants)) {
            throw new \InvalidArgumentException('non-nullable grants cannot be null');
        }
        $this->container['grants'] = $grants;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return object[]|null
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param object[]|null $scopes scopes
     *
     * @return self
     */
    public function setScopes($scopes)
    {
        if (is_null($scopes)) {
            throw new \InvalidArgumentException('non-nullable scopes cannot be null');
        }
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets allowPlainTextPkce
     *
     * @return bool|null
     */
    public function getAllowPlainTextPkce()
    {
        return $this->container['allowPlainTextPkce'];
    }

    /**
     * Sets allowPlainTextPkce
     *
     * @param bool|null $allowPlainTextPkce allowPlainTextPkce
     *
     * @return self
     */
    public function setAllowPlainTextPkce($allowPlainTextPkce)
    {
        if (is_null($allowPlainTextPkce)) {
            throw new \InvalidArgumentException('non-nullable allowPlainTextPkce cannot be null');
        }
        $this->container['allowPlainTextPkce'] = $allowPlainTextPkce;

        return $this;
    }

    /**
     * Gets confidential
     *
     * @return bool|null
     */
    public function getConfidential()
    {
        return $this->container['confidential'];
    }

    /**
     * Sets confidential
     *
     * @param bool|null $confidential confidential
     *
     * @return self
     */
    public function setConfidential($confidential)
    {
        if (is_null($confidential)) {
            throw new \InvalidArgumentException('non-nullable confidential cannot be null');
        }
        $this->container['confidential'] = $confidential;

        return $this;
    }

    /**
     * Gets plainTextPkceAllowed
     *
     * @return bool|null
     */
    public function getPlainTextPkceAllowed()
    {
        return $this->container['plainTextPkceAllowed'];
    }

    /**
     * Sets plainTextPkceAllowed
     *
     * @param bool|null $plainTextPkceAllowed plainTextPkceAllowed
     *
     * @return self
     */
    public function setPlainTextPkceAllowed($plainTextPkceAllowed)
    {
        if (is_null($plainTextPkceAllowed)) {
            throw new \InvalidArgumentException('non-nullable plainTextPkceAllowed cannot be null');
        }
        $this->container['plainTextPkceAllowed'] = $plainTextPkceAllowed;

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


