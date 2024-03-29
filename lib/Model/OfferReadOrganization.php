<?php
/**
 * OfferReadOrganization
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
 * OfferReadOrganization Class Doc Comment
 *
 * @category Class
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OfferReadOrganization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Offer_Read_organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'websiteUrl' => 'mixed',
        'customBaseUrl' => 'mixed',
        'icon' => '\Tripartie\Tpdk\Model\EvidenceReadMedia',
        'logo' => '\Tripartie\Tpdk\Model\EvidenceReadMedia',
        'primaryColor' => 'mixed',
        'secondaryColor' => 'mixed',
        'accentColor' => 'mixed',
        'errorColor' => 'mixed',
        'infoColor' => 'mixed',
        'successColor' => 'mixed',
        'warningColor' => 'mixed',
        'directNotificationToggle' => 'mixed',
        'personaAuthPortalToggle' => 'mixed',
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
        'name' => null,
        'websiteUrl' => null,
        'customBaseUrl' => null,
        'icon' => null,
        'logo' => null,
        'primaryColor' => null,
        'secondaryColor' => null,
        'accentColor' => null,
        'errorColor' => null,
        'infoColor' => null,
        'successColor' => null,
        'warningColor' => null,
        'directNotificationToggle' => null,
        'personaAuthPortalToggle' => null,
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
        'name' => true,
        'websiteUrl' => true,
        'customBaseUrl' => true,
        'icon' => false,
        'logo' => false,
        'primaryColor' => true,
        'secondaryColor' => true,
        'accentColor' => true,
        'errorColor' => true,
        'infoColor' => true,
        'successColor' => true,
        'warningColor' => true,
        'directNotificationToggle' => true,
        'personaAuthPortalToggle' => true,
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
        'name' => 'name',
        'websiteUrl' => 'websiteUrl',
        'customBaseUrl' => 'customBaseUrl',
        'icon' => 'icon',
        'logo' => 'logo',
        'primaryColor' => 'primaryColor',
        'secondaryColor' => 'secondaryColor',
        'accentColor' => 'accentColor',
        'errorColor' => 'errorColor',
        'infoColor' => 'infoColor',
        'successColor' => 'successColor',
        'warningColor' => 'warningColor',
        'directNotificationToggle' => 'directNotificationToggle',
        'personaAuthPortalToggle' => 'personaAuthPortalToggle',
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
        'name' => 'setName',
        'websiteUrl' => 'setWebsiteUrl',
        'customBaseUrl' => 'setCustomBaseUrl',
        'icon' => 'setIcon',
        'logo' => 'setLogo',
        'primaryColor' => 'setPrimaryColor',
        'secondaryColor' => 'setSecondaryColor',
        'accentColor' => 'setAccentColor',
        'errorColor' => 'setErrorColor',
        'infoColor' => 'setInfoColor',
        'successColor' => 'setSuccessColor',
        'warningColor' => 'setWarningColor',
        'directNotificationToggle' => 'setDirectNotificationToggle',
        'personaAuthPortalToggle' => 'setPersonaAuthPortalToggle',
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
        'name' => 'getName',
        'websiteUrl' => 'getWebsiteUrl',
        'customBaseUrl' => 'getCustomBaseUrl',
        'icon' => 'getIcon',
        'logo' => 'getLogo',
        'primaryColor' => 'getPrimaryColor',
        'secondaryColor' => 'getSecondaryColor',
        'accentColor' => 'getAccentColor',
        'errorColor' => 'getErrorColor',
        'infoColor' => 'getInfoColor',
        'successColor' => 'getSuccessColor',
        'warningColor' => 'getWarningColor',
        'directNotificationToggle' => 'getDirectNotificationToggle',
        'personaAuthPortalToggle' => 'getPersonaAuthPortalToggle',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('websiteUrl', $data ?? [], null);
        $this->setIfExists('customBaseUrl', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('primaryColor', $data ?? [], null);
        $this->setIfExists('secondaryColor', $data ?? [], null);
        $this->setIfExists('accentColor', $data ?? [], null);
        $this->setIfExists('errorColor', $data ?? [], null);
        $this->setIfExists('infoColor', $data ?? [], null);
        $this->setIfExists('successColor', $data ?? [], null);
        $this->setIfExists('warningColor', $data ?? [], null);
        $this->setIfExists('directNotificationToggle', $data ?? [], null);
        $this->setIfExists('personaAuthPortalToggle', $data ?? [], null);
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

        if ($this->container['directNotificationToggle'] === null) {
            $invalidProperties[] = "'directNotificationToggle' can't be null";
        }
        if ($this->container['personaAuthPortalToggle'] === null) {
            $invalidProperties[] = "'personaAuthPortalToggle' can't be null";
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
     * Gets websiteUrl
     *
     * @return mixed|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['websiteUrl'];
    }

    /**
     * Sets websiteUrl
     *
     * @param mixed|null $websiteUrl websiteUrl
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
     * @return mixed|null
     */
    public function getCustomBaseUrl()
    {
        return $this->container['customBaseUrl'];
    }

    /**
     * Sets customBaseUrl
     *
     * @param mixed|null $customBaseUrl customBaseUrl
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
     * Gets icon
     *
     * @return \Tripartie\Tpdk\Model\EvidenceReadMedia|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param \Tripartie\Tpdk\Model\EvidenceReadMedia|null $icon icon
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
     * @return \Tripartie\Tpdk\Model\EvidenceReadMedia|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Tripartie\Tpdk\Model\EvidenceReadMedia|null $logo logo
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
     * Gets primaryColor
     *
     * @return mixed|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primaryColor'];
    }

    /**
     * Sets primaryColor
     *
     * @param mixed|null $primaryColor primaryColor
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
     * Gets secondaryColor
     *
     * @return mixed|null
     */
    public function getSecondaryColor()
    {
        return $this->container['secondaryColor'];
    }

    /**
     * Sets secondaryColor
     *
     * @param mixed|null $secondaryColor secondaryColor
     *
     * @return self
     */
    public function setSecondaryColor($secondaryColor)
    {
        if (is_null($secondaryColor)) {
            array_push($this->openAPINullablesSetToNull, 'secondaryColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('secondaryColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['secondaryColor'] = $secondaryColor;

        return $this;
    }

    /**
     * Gets accentColor
     *
     * @return mixed|null
     */
    public function getAccentColor()
    {
        return $this->container['accentColor'];
    }

    /**
     * Sets accentColor
     *
     * @param mixed|null $accentColor accentColor
     *
     * @return self
     */
    public function setAccentColor($accentColor)
    {
        if (is_null($accentColor)) {
            array_push($this->openAPINullablesSetToNull, 'accentColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accentColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accentColor'] = $accentColor;

        return $this;
    }

    /**
     * Gets errorColor
     *
     * @return mixed|null
     */
    public function getErrorColor()
    {
        return $this->container['errorColor'];
    }

    /**
     * Sets errorColor
     *
     * @param mixed|null $errorColor errorColor
     *
     * @return self
     */
    public function setErrorColor($errorColor)
    {
        if (is_null($errorColor)) {
            array_push($this->openAPINullablesSetToNull, 'errorColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errorColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errorColor'] = $errorColor;

        return $this;
    }

    /**
     * Gets infoColor
     *
     * @return mixed|null
     */
    public function getInfoColor()
    {
        return $this->container['infoColor'];
    }

    /**
     * Sets infoColor
     *
     * @param mixed|null $infoColor infoColor
     *
     * @return self
     */
    public function setInfoColor($infoColor)
    {
        if (is_null($infoColor)) {
            array_push($this->openAPINullablesSetToNull, 'infoColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('infoColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['infoColor'] = $infoColor;

        return $this;
    }

    /**
     * Gets successColor
     *
     * @return mixed|null
     */
    public function getSuccessColor()
    {
        return $this->container['successColor'];
    }

    /**
     * Sets successColor
     *
     * @param mixed|null $successColor successColor
     *
     * @return self
     */
    public function setSuccessColor($successColor)
    {
        if (is_null($successColor)) {
            array_push($this->openAPINullablesSetToNull, 'successColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('successColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['successColor'] = $successColor;

        return $this;
    }

    /**
     * Gets warningColor
     *
     * @return mixed|null
     */
    public function getWarningColor()
    {
        return $this->container['warningColor'];
    }

    /**
     * Sets warningColor
     *
     * @param mixed|null $warningColor warningColor
     *
     * @return self
     */
    public function setWarningColor($warningColor)
    {
        if (is_null($warningColor)) {
            array_push($this->openAPINullablesSetToNull, 'warningColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('warningColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['warningColor'] = $warningColor;

        return $this;
    }

    /**
     * Gets directNotificationToggle
     *
     * @return mixed
     */
    public function getDirectNotificationToggle()
    {
        return $this->container['directNotificationToggle'];
    }

    /**
     * Sets directNotificationToggle
     *
     * @param mixed $directNotificationToggle directNotificationToggle
     *
     * @return self
     */
    public function setDirectNotificationToggle($directNotificationToggle)
    {
        if (is_null($directNotificationToggle)) {
            array_push($this->openAPINullablesSetToNull, 'directNotificationToggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('directNotificationToggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['directNotificationToggle'] = $directNotificationToggle;

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


