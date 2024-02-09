<?php
/**
 * UserUserReadOrganization
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
 * UserUserReadOrganization Class Doc Comment
 *
 * @category Class
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserUserReadOrganization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User_UserRead_organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'name' => 'mixed',
        'domainVerified' => 'mixed',
        'icon' => '\Tripartie\Tpdk\Model\OrganizationUserReadIcon',
        'logo' => '\Tripartie\Tpdk\Model\OrganizationUserReadIcon',
        'safeCheckoutToggle' => 'mixed',
        'resolutionCenterToggle' => 'mixed',
        'internalMessagingToggle' => 'mixed',
        'personaAuthPortalToggle' => 'mixed',
        'automatedReturnToggle' => 'mixed',
        'counterProposalToggle' => 'mixed',
        'flatRateEnabled' => 'mixed',
        'rateCommissionSafeCheckout' => 'mixed'
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
        'name' => null,
        'domainVerified' => null,
        'icon' => null,
        'logo' => null,
        'safeCheckoutToggle' => null,
        'resolutionCenterToggle' => null,
        'internalMessagingToggle' => null,
        'personaAuthPortalToggle' => null,
        'automatedReturnToggle' => null,
        'counterProposalToggle' => null,
        'flatRateEnabled' => null,
        'rateCommissionSafeCheckout' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'name' => true,
        'domainVerified' => true,
        'icon' => false,
        'logo' => false,
        'safeCheckoutToggle' => true,
        'resolutionCenterToggle' => true,
        'internalMessagingToggle' => true,
        'personaAuthPortalToggle' => true,
        'automatedReturnToggle' => true,
        'counterProposalToggle' => true,
        'flatRateEnabled' => true,
        'rateCommissionSafeCheckout' => true
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
        'name' => 'name',
        'domainVerified' => 'domainVerified',
        'icon' => 'icon',
        'logo' => 'logo',
        'safeCheckoutToggle' => 'safeCheckoutToggle',
        'resolutionCenterToggle' => 'resolutionCenterToggle',
        'internalMessagingToggle' => 'internalMessagingToggle',
        'personaAuthPortalToggle' => 'personaAuthPortalToggle',
        'automatedReturnToggle' => 'automatedReturnToggle',
        'counterProposalToggle' => 'counterProposalToggle',
        'flatRateEnabled' => 'flatRateEnabled',
        'rateCommissionSafeCheckout' => 'rateCommissionSafeCheckout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'domainVerified' => 'setDomainVerified',
        'icon' => 'setIcon',
        'logo' => 'setLogo',
        'safeCheckoutToggle' => 'setSafeCheckoutToggle',
        'resolutionCenterToggle' => 'setResolutionCenterToggle',
        'internalMessagingToggle' => 'setInternalMessagingToggle',
        'personaAuthPortalToggle' => 'setPersonaAuthPortalToggle',
        'automatedReturnToggle' => 'setAutomatedReturnToggle',
        'counterProposalToggle' => 'setCounterProposalToggle',
        'flatRateEnabled' => 'setFlatRateEnabled',
        'rateCommissionSafeCheckout' => 'setRateCommissionSafeCheckout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'domainVerified' => 'getDomainVerified',
        'icon' => 'getIcon',
        'logo' => 'getLogo',
        'safeCheckoutToggle' => 'getSafeCheckoutToggle',
        'resolutionCenterToggle' => 'getResolutionCenterToggle',
        'internalMessagingToggle' => 'getInternalMessagingToggle',
        'personaAuthPortalToggle' => 'getPersonaAuthPortalToggle',
        'automatedReturnToggle' => 'getAutomatedReturnToggle',
        'counterProposalToggle' => 'getCounterProposalToggle',
        'flatRateEnabled' => 'getFlatRateEnabled',
        'rateCommissionSafeCheckout' => 'getRateCommissionSafeCheckout'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('domainVerified', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('safeCheckoutToggle', $data ?? [], null);
        $this->setIfExists('resolutionCenterToggle', $data ?? [], null);
        $this->setIfExists('internalMessagingToggle', $data ?? [], null);
        $this->setIfExists('personaAuthPortalToggle', $data ?? [], null);
        $this->setIfExists('automatedReturnToggle', $data ?? [], null);
        $this->setIfExists('counterProposalToggle', $data ?? [], null);
        $this->setIfExists('flatRateEnabled', $data ?? [], null);
        $this->setIfExists('rateCommissionSafeCheckout', $data ?? [], null);
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

        if ($this->container['domainVerified'] === null) {
            $invalidProperties[] = "'domainVerified' can't be null";
        }
        if ($this->container['safeCheckoutToggle'] === null) {
            $invalidProperties[] = "'safeCheckoutToggle' can't be null";
        }
        if ($this->container['resolutionCenterToggle'] === null) {
            $invalidProperties[] = "'resolutionCenterToggle' can't be null";
        }
        if ($this->container['internalMessagingToggle'] === null) {
            $invalidProperties[] = "'internalMessagingToggle' can't be null";
        }
        if ($this->container['personaAuthPortalToggle'] === null) {
            $invalidProperties[] = "'personaAuthPortalToggle' can't be null";
        }
        if ($this->container['automatedReturnToggle'] === null) {
            $invalidProperties[] = "'automatedReturnToggle' can't be null";
        }
        if ($this->container['counterProposalToggle'] === null) {
            $invalidProperties[] = "'counterProposalToggle' can't be null";
        }
        if ($this->container['rateCommissionSafeCheckout'] === null) {
            $invalidProperties[] = "'rateCommissionSafeCheckout' can't be null";
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
     * @return mixed|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param mixed|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return mixed|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets domainVerified
     *
     * @return mixed
     */
    public function getDomainVerified()
    {
        return $this->container['domainVerified'];
    }

    /**
     * Sets domainVerified
     *
     * @param mixed $domainVerified domainVerified
     *
     * @return self
     */
    public function setDomainVerified($domainVerified)
    {
        if (is_null($domainVerified)) {
            array_push($this->openAPINullablesSetToNull, 'domainVerified');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('domainVerified', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['domainVerified'] = $domainVerified;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return \Tripartie\Tpdk\Model\OrganizationUserReadIcon|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param \Tripartie\Tpdk\Model\OrganizationUserReadIcon|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        if (is_null($icon)) {
            throw new \InvalidArgumentException('non-nullable icon cannot be null');
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \Tripartie\Tpdk\Model\OrganizationUserReadIcon|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Tripartie\Tpdk\Model\OrganizationUserReadIcon|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets safeCheckoutToggle
     *
     * @return mixed
     */
    public function getSafeCheckoutToggle()
    {
        return $this->container['safeCheckoutToggle'];
    }

    /**
     * Sets safeCheckoutToggle
     *
     * @param mixed $safeCheckoutToggle safeCheckoutToggle
     *
     * @return self
     */
    public function setSafeCheckoutToggle($safeCheckoutToggle)
    {
        if (is_null($safeCheckoutToggle)) {
            array_push($this->openAPINullablesSetToNull, 'safeCheckoutToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('safeCheckoutToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['safeCheckoutToggle'] = $safeCheckoutToggle;

        return $this;
    }

    /**
     * Gets resolutionCenterToggle
     *
     * @return mixed
     */
    public function getResolutionCenterToggle()
    {
        return $this->container['resolutionCenterToggle'];
    }

    /**
     * Sets resolutionCenterToggle
     *
     * @param mixed $resolutionCenterToggle resolutionCenterToggle
     *
     * @return self
     */
    public function setResolutionCenterToggle($resolutionCenterToggle)
    {
        if (is_null($resolutionCenterToggle)) {
            array_push($this->openAPINullablesSetToNull, 'resolutionCenterToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resolutionCenterToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resolutionCenterToggle'] = $resolutionCenterToggle;

        return $this;
    }

    /**
     * Gets internalMessagingToggle
     *
     * @return mixed
     */
    public function getInternalMessagingToggle()
    {
        return $this->container['internalMessagingToggle'];
    }

    /**
     * Sets internalMessagingToggle
     *
     * @param mixed $internalMessagingToggle internalMessagingToggle
     *
     * @return self
     */
    public function setInternalMessagingToggle($internalMessagingToggle)
    {
        if (is_null($internalMessagingToggle)) {
            array_push($this->openAPINullablesSetToNull, 'internalMessagingToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('internalMessagingToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['internalMessagingToggle'] = $internalMessagingToggle;

        return $this;
    }

    /**
     * Gets personaAuthPortalToggle
     *
     * @return mixed
     */
    public function getPersonaAuthPortalToggle()
    {
        return $this->container['personaAuthPortalToggle'];
    }

    /**
     * Sets personaAuthPortalToggle
     *
     * @param mixed $personaAuthPortalToggle personaAuthPortalToggle
     *
     * @return self
     */
    public function setPersonaAuthPortalToggle($personaAuthPortalToggle)
    {
        if (is_null($personaAuthPortalToggle)) {
            array_push($this->openAPINullablesSetToNull, 'personaAuthPortalToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('personaAuthPortalToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['personaAuthPortalToggle'] = $personaAuthPortalToggle;

        return $this;
    }

    /**
     * Gets automatedReturnToggle
     *
     * @return mixed
     */
    public function getAutomatedReturnToggle()
    {
        return $this->container['automatedReturnToggle'];
    }

    /**
     * Sets automatedReturnToggle
     *
     * @param mixed $automatedReturnToggle automatedReturnToggle
     *
     * @return self
     */
    public function setAutomatedReturnToggle($automatedReturnToggle)
    {
        if (is_null($automatedReturnToggle)) {
            array_push($this->openAPINullablesSetToNull, 'automatedReturnToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('automatedReturnToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['automatedReturnToggle'] = $automatedReturnToggle;

        return $this;
    }

    /**
     * Gets counterProposalToggle
     *
     * @return mixed
     */
    public function getCounterProposalToggle()
    {
        return $this->container['counterProposalToggle'];
    }

    /**
     * Sets counterProposalToggle
     *
     * @param mixed $counterProposalToggle counterProposalToggle
     *
     * @return self
     */
    public function setCounterProposalToggle($counterProposalToggle)
    {
        if (is_null($counterProposalToggle)) {
            array_push($this->openAPINullablesSetToNull, 'counterProposalToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('counterProposalToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['counterProposalToggle'] = $counterProposalToggle;

        return $this;
    }

    /**
     * Gets flatRateEnabled
     *
     * @return mixed|null
     */
    public function getFlatRateEnabled()
    {
        return $this->container['flatRateEnabled'];
    }

    /**
     * Sets flatRateEnabled
     *
     * @param mixed|null $flatRateEnabled flatRateEnabled
     *
     * @return self
     */
    public function setFlatRateEnabled($flatRateEnabled)
    {
        if (is_null($flatRateEnabled)) {
            array_push($this->openAPINullablesSetToNull, 'flatRateEnabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('flatRateEnabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['flatRateEnabled'] = $flatRateEnabled;

        return $this;
    }

    /**
     * Gets rateCommissionSafeCheckout
     *
     * @return mixed
     */
    public function getRateCommissionSafeCheckout()
    {
        return $this->container['rateCommissionSafeCheckout'];
    }

    /**
     * Sets rateCommissionSafeCheckout
     *
     * @param mixed $rateCommissionSafeCheckout rateCommissionSafeCheckout
     *
     * @return self
     */
    public function setRateCommissionSafeCheckout($rateCommissionSafeCheckout)
    {
        if (is_null($rateCommissionSafeCheckout)) {
            array_push($this->openAPINullablesSetToNull, 'rateCommissionSafeCheckout');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rateCommissionSafeCheckout', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rateCommissionSafeCheckout'] = $rateCommissionSafeCheckout;

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

