<?php
/**
 * OrganizationRead
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Resolution Center
 *
 * Simple, yet elegant web interfaces for your convenience. One request away from your first automated resolution.
 *
 * The version of the OpenAPI document: 2.0.208
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * OrganizationRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrganizationRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Organization-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'vatNumber' => 'string',
        'commercialRegistryNumber' => 'string',
        'websiteUrl' => 'string',
        'customBaseUrl' => 'string',
        'domainVerified' => 'bool',
        'icon' => '\Tripartie\Tpdk\Model\OrganizationMediaRead',
        'logo' => '\Tripartie\Tpdk\Model\OrganizationMediaRead',
        'primaryColor' => 'string',
        'directNotificationToggle' => 'bool',
        'anonymityLevel' => 'string',
        'internalMessagingToggle' => 'bool',
        'personaAuthPortalToggle' => 'bool',
        'automatedReturnToggle' => 'bool',
        'counterProposalToggle' => 'bool',
        'flatRateEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'vatNumber' => null,
        'commercialRegistryNumber' => null,
        'websiteUrl' => null,
        'customBaseUrl' => null,
        'domainVerified' => null,
        'icon' => null,
        'logo' => null,
        'primaryColor' => null,
        'directNotificationToggle' => null,
        'anonymityLevel' => null,
        'internalMessagingToggle' => null,
        'personaAuthPortalToggle' => null,
        'automatedReturnToggle' => null,
        'counterProposalToggle' => null,
        'flatRateEnabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'vatNumber' => true,
        'commercialRegistryNumber' => false,
        'websiteUrl' => true,
        'customBaseUrl' => true,
        'domainVerified' => false,
        'icon' => true,
        'logo' => true,
        'primaryColor' => true,
        'directNotificationToggle' => false,
        'anonymityLevel' => false,
        'internalMessagingToggle' => false,
        'personaAuthPortalToggle' => false,
        'automatedReturnToggle' => false,
        'counterProposalToggle' => false,
        'flatRateEnabled' => false
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
        'name' => 'name',
        'vatNumber' => 'vatNumber',
        'commercialRegistryNumber' => 'commercialRegistryNumber',
        'websiteUrl' => 'websiteUrl',
        'customBaseUrl' => 'customBaseUrl',
        'domainVerified' => 'domainVerified',
        'icon' => 'icon',
        'logo' => 'logo',
        'primaryColor' => 'primaryColor',
        'directNotificationToggle' => 'directNotificationToggle',
        'anonymityLevel' => 'anonymityLevel',
        'internalMessagingToggle' => 'internalMessagingToggle',
        'personaAuthPortalToggle' => 'personaAuthPortalToggle',
        'automatedReturnToggle' => 'automatedReturnToggle',
        'counterProposalToggle' => 'counterProposalToggle',
        'flatRateEnabled' => 'flatRateEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'vatNumber' => 'setVatNumber',
        'commercialRegistryNumber' => 'setCommercialRegistryNumber',
        'websiteUrl' => 'setWebsiteUrl',
        'customBaseUrl' => 'setCustomBaseUrl',
        'domainVerified' => 'setDomainVerified',
        'icon' => 'setIcon',
        'logo' => 'setLogo',
        'primaryColor' => 'setPrimaryColor',
        'directNotificationToggle' => 'setDirectNotificationToggle',
        'anonymityLevel' => 'setAnonymityLevel',
        'internalMessagingToggle' => 'setInternalMessagingToggle',
        'personaAuthPortalToggle' => 'setPersonaAuthPortalToggle',
        'automatedReturnToggle' => 'setAutomatedReturnToggle',
        'counterProposalToggle' => 'setCounterProposalToggle',
        'flatRateEnabled' => 'setFlatRateEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'vatNumber' => 'getVatNumber',
        'commercialRegistryNumber' => 'getCommercialRegistryNumber',
        'websiteUrl' => 'getWebsiteUrl',
        'customBaseUrl' => 'getCustomBaseUrl',
        'domainVerified' => 'getDomainVerified',
        'icon' => 'getIcon',
        'logo' => 'getLogo',
        'primaryColor' => 'getPrimaryColor',
        'directNotificationToggle' => 'getDirectNotificationToggle',
        'anonymityLevel' => 'getAnonymityLevel',
        'internalMessagingToggle' => 'getInternalMessagingToggle',
        'personaAuthPortalToggle' => 'getPersonaAuthPortalToggle',
        'automatedReturnToggle' => 'getAutomatedReturnToggle',
        'counterProposalToggle' => 'getCounterProposalToggle',
        'flatRateEnabled' => 'getFlatRateEnabled'
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

    public const ANONYMITY_LEVEL_COMPLETE = 'COMPLETE';
    public const ANONYMITY_LEVEL_PARTIAL_FIRST_NAME = 'PARTIAL_FIRST_NAME';
    public const ANONYMITY_LEVEL_TRANSPARENT = 'TRANSPARENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnonymityLevelAllowableValues()
    {
        return [
            self::ANONYMITY_LEVEL_COMPLETE,
            self::ANONYMITY_LEVEL_PARTIAL_FIRST_NAME,
            self::ANONYMITY_LEVEL_TRANSPARENT,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('vatNumber', $data ?? [], null);
        $this->setIfExists('commercialRegistryNumber', $data ?? [], null);
        $this->setIfExists('websiteUrl', $data ?? [], null);
        $this->setIfExists('customBaseUrl', $data ?? [], null);
        $this->setIfExists('domainVerified', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('primaryColor', $data ?? [], null);
        $this->setIfExists('directNotificationToggle', $data ?? [], true);
        $this->setIfExists('anonymityLevel', $data ?? [], 'PARTIAL_FIRST_NAME');
        $this->setIfExists('internalMessagingToggle', $data ?? [], true);
        $this->setIfExists('personaAuthPortalToggle', $data ?? [], null);
        $this->setIfExists('automatedReturnToggle', $data ?? [], true);
        $this->setIfExists('counterProposalToggle', $data ?? [], true);
        $this->setIfExists('flatRateEnabled', $data ?? [], null);
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
        if ($this->container['directNotificationToggle'] === null) {
            $invalidProperties[] = "'directNotificationToggle' can't be null";
        }
        if ($this->container['anonymityLevel'] === null) {
            $invalidProperties[] = "'anonymityLevel' can't be null";
        }
        $allowedValues = $this->getAnonymityLevelAllowableValues();
        if (!is_null($this->container['anonymityLevel']) && !in_array($this->container['anonymityLevel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'anonymityLevel', must be one of '%s'",
                $this->container['anonymityLevel'],
                implode("', '", $allowedValues)
            );
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
     * Gets vatNumber
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string|null $vatNumber vatNumber
     *
     * @return self
     */
    public function setVatNumber($vatNumber)
    {
        if (is_null($vatNumber)) {
            array_push($this->openAPINullablesSetToNull, 'vatNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vatNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets commercialRegistryNumber
     *
     * @return string|null
     */
    public function getCommercialRegistryNumber()
    {
        return $this->container['commercialRegistryNumber'];
    }

    /**
     * Sets commercialRegistryNumber
     *
     * @param string|null $commercialRegistryNumber commercialRegistryNumber
     *
     * @return self
     */
    public function setCommercialRegistryNumber($commercialRegistryNumber)
    {
        if (is_null($commercialRegistryNumber)) {
            throw new \InvalidArgumentException('non-nullable commercialRegistryNumber cannot be null');
        }
        $this->container['commercialRegistryNumber'] = $commercialRegistryNumber;

        return $this;
    }

    /**
     * Gets websiteUrl
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['websiteUrl'];
    }

    /**
     * Sets websiteUrl
     *
     * @param string|null $websiteUrl websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl($websiteUrl)
    {
        if (is_null($websiteUrl)) {
            array_push($this->openAPINullablesSetToNull, 'websiteUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('websiteUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['websiteUrl'] = $websiteUrl;

        return $this;
    }

    /**
     * Gets customBaseUrl
     *
     * @return string|null
     */
    public function getCustomBaseUrl()
    {
        return $this->container['customBaseUrl'];
    }

    /**
     * Sets customBaseUrl
     *
     * @param string|null $customBaseUrl customBaseUrl
     *
     * @return self
     */
    public function setCustomBaseUrl($customBaseUrl)
    {
        if (is_null($customBaseUrl)) {
            array_push($this->openAPINullablesSetToNull, 'customBaseUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customBaseUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customBaseUrl'] = $customBaseUrl;

        return $this;
    }

    /**
     * Gets domainVerified
     *
     * @return bool
     */
    public function getDomainVerified()
    {
        return $this->container['domainVerified'];
    }

    /**
     * Sets domainVerified
     *
     * @param bool $domainVerified domainVerified
     *
     * @return self
     */
    public function setDomainVerified($domainVerified)
    {
        if (is_null($domainVerified)) {
            throw new \InvalidArgumentException('non-nullable domainVerified cannot be null');
        }
        $this->container['domainVerified'] = $domainVerified;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return \Tripartie\Tpdk\Model\OrganizationMediaRead|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param \Tripartie\Tpdk\Model\OrganizationMediaRead|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        if (is_null($icon)) {
            array_push($this->openAPINullablesSetToNull, 'icon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \Tripartie\Tpdk\Model\OrganizationMediaRead|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Tripartie\Tpdk\Model\OrganizationMediaRead|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            array_push($this->openAPINullablesSetToNull, 'logo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets primaryColor
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primaryColor'];
    }

    /**
     * Sets primaryColor
     *
     * @param string|null $primaryColor primaryColor
     *
     * @return self
     */
    public function setPrimaryColor($primaryColor)
    {
        if (is_null($primaryColor)) {
            array_push($this->openAPINullablesSetToNull, 'primaryColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primaryColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primaryColor'] = $primaryColor;

        return $this;
    }

    /**
     * Gets directNotificationToggle
     *
     * @return bool
     */
    public function getDirectNotificationToggle()
    {
        return $this->container['directNotificationToggle'];
    }

    /**
     * Sets directNotificationToggle
     *
     * @param bool $directNotificationToggle directNotificationToggle
     *
     * @return self
     */
    public function setDirectNotificationToggle($directNotificationToggle)
    {
        if (is_null($directNotificationToggle)) {
            throw new \InvalidArgumentException('non-nullable directNotificationToggle cannot be null');
        }
        $this->container['directNotificationToggle'] = $directNotificationToggle;

        return $this;
    }

    /**
     * Gets anonymityLevel
     *
     * @return string
     */
    public function getAnonymityLevel()
    {
        return $this->container['anonymityLevel'];
    }

    /**
     * Sets anonymityLevel
     *
     * @param string $anonymityLevel anonymityLevel
     *
     * @return self
     */
    public function setAnonymityLevel($anonymityLevel)
    {
        if (is_null($anonymityLevel)) {
            throw new \InvalidArgumentException('non-nullable anonymityLevel cannot be null');
        }
        $allowedValues = $this->getAnonymityLevelAllowableValues();
        if (!in_array($anonymityLevel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'anonymityLevel', must be one of '%s'",
                    $anonymityLevel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['anonymityLevel'] = $anonymityLevel;

        return $this;
    }

    /**
     * Gets internalMessagingToggle
     *
     * @return bool
     */
    public function getInternalMessagingToggle()
    {
        return $this->container['internalMessagingToggle'];
    }

    /**
     * Sets internalMessagingToggle
     *
     * @param bool $internalMessagingToggle internalMessagingToggle
     *
     * @return self
     */
    public function setInternalMessagingToggle($internalMessagingToggle)
    {
        if (is_null($internalMessagingToggle)) {
            throw new \InvalidArgumentException('non-nullable internalMessagingToggle cannot be null');
        }
        $this->container['internalMessagingToggle'] = $internalMessagingToggle;

        return $this;
    }

    /**
     * Gets personaAuthPortalToggle
     *
     * @return bool
     */
    public function getPersonaAuthPortalToggle()
    {
        return $this->container['personaAuthPortalToggle'];
    }

    /**
     * Sets personaAuthPortalToggle
     *
     * @param bool $personaAuthPortalToggle personaAuthPortalToggle
     *
     * @return self
     */
    public function setPersonaAuthPortalToggle($personaAuthPortalToggle)
    {
        if (is_null($personaAuthPortalToggle)) {
            throw new \InvalidArgumentException('non-nullable personaAuthPortalToggle cannot be null');
        }
        $this->container['personaAuthPortalToggle'] = $personaAuthPortalToggle;

        return $this;
    }

    /**
     * Gets automatedReturnToggle
     *
     * @return bool
     */
    public function getAutomatedReturnToggle()
    {
        return $this->container['automatedReturnToggle'];
    }

    /**
     * Sets automatedReturnToggle
     *
     * @param bool $automatedReturnToggle automatedReturnToggle
     *
     * @return self
     */
    public function setAutomatedReturnToggle($automatedReturnToggle)
    {
        if (is_null($automatedReturnToggle)) {
            throw new \InvalidArgumentException('non-nullable automatedReturnToggle cannot be null');
        }
        $this->container['automatedReturnToggle'] = $automatedReturnToggle;

        return $this;
    }

    /**
     * Gets counterProposalToggle
     *
     * @return bool
     */
    public function getCounterProposalToggle()
    {
        return $this->container['counterProposalToggle'];
    }

    /**
     * Sets counterProposalToggle
     *
     * @param bool $counterProposalToggle counterProposalToggle
     *
     * @return self
     */
    public function setCounterProposalToggle($counterProposalToggle)
    {
        if (is_null($counterProposalToggle)) {
            throw new \InvalidArgumentException('non-nullable counterProposalToggle cannot be null');
        }
        $this->container['counterProposalToggle'] = $counterProposalToggle;

        return $this;
    }

    /**
     * Gets flatRateEnabled
     *
     * @return bool|null
     */
    public function getFlatRateEnabled()
    {
        return $this->container['flatRateEnabled'];
    }

    /**
     * Sets flatRateEnabled
     *
     * @param bool|null $flatRateEnabled flatRateEnabled
     *
     * @return self
     */
    public function setFlatRateEnabled($flatRateEnabled)
    {
        if (is_null($flatRateEnabled)) {
            throw new \InvalidArgumentException('non-nullable flatRateEnabled cannot be null');
        }
        $this->container['flatRateEnabled'] = $flatRateEnabled;

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


