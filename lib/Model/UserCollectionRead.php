<?php
/**
 * UserCollectionRead
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
 * The version of the OpenAPI document: 2.0.86
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
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
 * UserCollectionRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserCollectionRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User-CollectionRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'publicName' => 'string',
        'roleInCompany' => 'string',
        'email' => 'string',
        'roles' => 'string[]',
        'intlPhoneNumber' => 'string',
        'lastSuccessfulLogIn' => '\DateTime',
        'avatar' => '\Tripartie\Tpdk\Model\MediaCollectionRead',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'organization' => '\Tripartie\Tpdk\Model\OrganizationCollectionRead'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'iri-reference',
        'firstName' => null,
        'lastName' => null,
        'publicName' => null,
        'roleInCompany' => null,
        'email' => null,
        'roles' => null,
        'intlPhoneNumber' => null,
        'lastSuccessfulLogIn' => 'date-time',
        'avatar' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'organization' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'firstName' => false,
		'lastName' => false,
		'publicName' => true,
		'roleInCompany' => true,
		'email' => false,
		'roles' => false,
		'intlPhoneNumber' => true,
		'lastSuccessfulLogIn' => true,
		'avatar' => true,
		'createdAt' => false,
		'updatedAt' => false,
		'organization' => true
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
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'publicName' => 'publicName',
        'roleInCompany' => 'roleInCompany',
        'email' => 'email',
        'roles' => 'roles',
        'intlPhoneNumber' => 'intlPhoneNumber',
        'lastSuccessfulLogIn' => 'lastSuccessfulLogIn',
        'avatar' => 'avatar',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'organization' => 'organization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'publicName' => 'setPublicName',
        'roleInCompany' => 'setRoleInCompany',
        'email' => 'setEmail',
        'roles' => 'setRoles',
        'intlPhoneNumber' => 'setIntlPhoneNumber',
        'lastSuccessfulLogIn' => 'setLastSuccessfulLogIn',
        'avatar' => 'setAvatar',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'organization' => 'setOrganization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'publicName' => 'getPublicName',
        'roleInCompany' => 'getRoleInCompany',
        'email' => 'getEmail',
        'roles' => 'getRoles',
        'intlPhoneNumber' => 'getIntlPhoneNumber',
        'lastSuccessfulLogIn' => 'getLastSuccessfulLogIn',
        'avatar' => 'getAvatar',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'organization' => 'getOrganization'
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

    public const ROLES_ORGANIZATION_OWNER = 'ROLE_ORGANIZATION_OWNER';
    public const ROLES_ADMIN = 'ROLE_ADMIN';
    public const ROLES_CONSULTANT = 'ROLE_CONSULTANT';
    public const ROLES_ACCOUNTING_MANAGER = 'ROLE_ACCOUNTING_MANAGER';
    public const ROLES_BILLING_MANAGER = 'ROLE_BILLING_MANAGER';
    public const ROLES_CUSTOMER_SERVICE = 'ROLE_CUSTOMER_SERVICE';
    public const ROLES_PLATFORM_SUPPORT = 'ROLE_PLATFORM_SUPPORT';
    public const ROLES_PLATFORM_ADMIN = 'ROLE_PLATFORM_ADMIN';
    public const ROLES_USER = 'ROLE_USER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAllowableValues()
    {
        return [
            self::ROLES_ORGANIZATION_OWNER,
            self::ROLES_ADMIN,
            self::ROLES_CONSULTANT,
            self::ROLES_ACCOUNTING_MANAGER,
            self::ROLES_BILLING_MANAGER,
            self::ROLES_CUSTOMER_SERVICE,
            self::ROLES_PLATFORM_SUPPORT,
            self::ROLES_PLATFORM_ADMIN,
            self::ROLES_USER,
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
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('publicName', $data ?? [], null);
        $this->setIfExists('roleInCompany', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('intlPhoneNumber', $data ?? [], null);
        $this->setIfExists('lastSuccessfulLogIn', $data ?? [], null);
        $this->setIfExists('avatar', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
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

        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
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
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            throw new \InvalidArgumentException('non-nullable lastName cannot be null');
        }
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets publicName
     *
     * @return string|null
     */
    public function getPublicName()
    {
        return $this->container['publicName'];
    }

    /**
     * Sets publicName
     *
     * @param string|null $publicName publicName
     *
     * @return self
     */
    public function setPublicName($publicName)
    {
        if (is_null($publicName)) {
            array_push($this->openAPINullablesSetToNull, 'publicName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('publicName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['publicName'] = $publicName;

        return $this;
    }

    /**
     * Gets roleInCompany
     *
     * @return string|null
     */
    public function getRoleInCompany()
    {
        return $this->container['roleInCompany'];
    }

    /**
     * Sets roleInCompany
     *
     * @param string|null $roleInCompany roleInCompany
     *
     * @return self
     */
    public function setRoleInCompany($roleInCompany)
    {
        if (is_null($roleInCompany)) {
            array_push($this->openAPINullablesSetToNull, 'roleInCompany');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('roleInCompany', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['roleInCompany'] = $roleInCompany;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[] $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $allowedValues = $this->getRolesAllowableValues();
        if (array_diff($roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets intlPhoneNumber
     *
     * @return string|null
     */
    public function getIntlPhoneNumber()
    {
        return $this->container['intlPhoneNumber'];
    }

    /**
     * Sets intlPhoneNumber
     *
     * @param string|null $intlPhoneNumber intlPhoneNumber
     *
     * @return self
     */
    public function setIntlPhoneNumber($intlPhoneNumber)
    {
        if (is_null($intlPhoneNumber)) {
            array_push($this->openAPINullablesSetToNull, 'intlPhoneNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intlPhoneNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['intlPhoneNumber'] = $intlPhoneNumber;

        return $this;
    }

    /**
     * Gets lastSuccessfulLogIn
     *
     * @return \DateTime|null
     */
    public function getLastSuccessfulLogIn()
    {
        return $this->container['lastSuccessfulLogIn'];
    }

    /**
     * Sets lastSuccessfulLogIn
     *
     * @param \DateTime|null $lastSuccessfulLogIn lastSuccessfulLogIn
     *
     * @return self
     */
    public function setLastSuccessfulLogIn($lastSuccessfulLogIn)
    {
        if (is_null($lastSuccessfulLogIn)) {
            array_push($this->openAPINullablesSetToNull, 'lastSuccessfulLogIn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastSuccessfulLogIn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastSuccessfulLogIn'] = $lastSuccessfulLogIn;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return \Tripartie\Tpdk\Model\MediaCollectionRead|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param \Tripartie\Tpdk\Model\MediaCollectionRead|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        if (is_null($avatar)) {
            array_push($this->openAPINullablesSetToNull, 'avatar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('avatar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['avatar'] = $avatar;

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
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Tripartie\Tpdk\Model\OrganizationCollectionRead|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Tripartie\Tpdk\Model\OrganizationCollectionRead|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            array_push($this->openAPINullablesSetToNull, 'organization');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organization', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organization'] = $organization;

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


