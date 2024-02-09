<?php
/**
 * UserWrite
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
 * UserWrite Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\Tpdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User-Write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'captcha' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'publicName' => 'string',
        'roleInCompany' => 'string',
        'birthday' => '\DateTime',
        'email' => 'string',
        'plainPassword' => 'string',
        'intlPhoneNumber' => 'string',
        'originCountry' => 'string',
        'preferredLanguage' => 'string',
        'consentMailNotification' => 'bool',
        'consentMailAds' => 'bool',
        'organization' => '\Tripartie\Tpdk\Model\UserWriteOrganization'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'captcha' => null,
        'firstName' => null,
        'lastName' => null,
        'publicName' => null,
        'roleInCompany' => null,
        'birthday' => 'date-time',
        'email' => 'email',
        'plainPassword' => null,
        'intlPhoneNumber' => null,
        'originCountry' => null,
        'preferredLanguage' => null,
        'consentMailNotification' => null,
        'consentMailAds' => null,
        'organization' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'captcha' => true,
        'firstName' => false,
        'lastName' => false,
        'publicName' => true,
        'roleInCompany' => true,
        'birthday' => true,
        'email' => false,
        'plainPassword' => true,
        'intlPhoneNumber' => true,
        'originCountry' => true,
        'preferredLanguage' => true,
        'consentMailNotification' => false,
        'consentMailAds' => false,
        'organization' => false
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
        'captcha' => 'captcha',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'publicName' => 'publicName',
        'roleInCompany' => 'roleInCompany',
        'birthday' => 'birthday',
        'email' => 'email',
        'plainPassword' => 'plainPassword',
        'intlPhoneNumber' => 'intlPhoneNumber',
        'originCountry' => 'originCountry',
        'preferredLanguage' => 'preferredLanguage',
        'consentMailNotification' => 'consentMailNotification',
        'consentMailAds' => 'consentMailAds',
        'organization' => 'organization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'captcha' => 'setCaptcha',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'publicName' => 'setPublicName',
        'roleInCompany' => 'setRoleInCompany',
        'birthday' => 'setBirthday',
        'email' => 'setEmail',
        'plainPassword' => 'setPlainPassword',
        'intlPhoneNumber' => 'setIntlPhoneNumber',
        'originCountry' => 'setOriginCountry',
        'preferredLanguage' => 'setPreferredLanguage',
        'consentMailNotification' => 'setConsentMailNotification',
        'consentMailAds' => 'setConsentMailAds',
        'organization' => 'setOrganization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'captcha' => 'getCaptcha',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'publicName' => 'getPublicName',
        'roleInCompany' => 'getRoleInCompany',
        'birthday' => 'getBirthday',
        'email' => 'getEmail',
        'plainPassword' => 'getPlainPassword',
        'intlPhoneNumber' => 'getIntlPhoneNumber',
        'originCountry' => 'getOriginCountry',
        'preferredLanguage' => 'getPreferredLanguage',
        'consentMailNotification' => 'getConsentMailNotification',
        'consentMailAds' => 'getConsentMailAds',
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
        $this->setIfExists('captcha', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('publicName', $data ?? [], null);
        $this->setIfExists('roleInCompany', $data ?? [], null);
        $this->setIfExists('birthday', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('plainPassword', $data ?? [], null);
        $this->setIfExists('intlPhoneNumber', $data ?? [], null);
        $this->setIfExists('originCountry', $data ?? [], null);
        $this->setIfExists('preferredLanguage', $data ?? [], null);
        $this->setIfExists('consentMailNotification', $data ?? [], null);
        $this->setIfExists('consentMailAds', $data ?? [], null);
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

        if ($this->container['captcha'] === null) {
            $invalidProperties[] = "'captcha' can't be null";
        }
        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ((mb_strlen($this->container['firstName']) > 64)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['firstName']) < 1)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ((mb_strlen($this->container['lastName']) > 64)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['lastName']) < 1)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['publicName'] === null) {
            $invalidProperties[] = "'publicName' can't be null";
        }
        if ((mb_strlen($this->container['publicName']) > 32)) {
            $invalidProperties[] = "invalid value for 'publicName', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['publicName']) < 2)) {
            $invalidProperties[] = "invalid value for 'publicName', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['roleInCompany'] === null) {
            $invalidProperties[] = "'roleInCompany' can't be null";
        }
        if ((mb_strlen($this->container['roleInCompany']) > 32)) {
            $invalidProperties[] = "invalid value for 'roleInCompany', the character length must be smaller than or equal to 32.";
        }

        if ((mb_strlen($this->container['roleInCompany']) < 2)) {
            $invalidProperties[] = "invalid value for 'roleInCompany', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 180)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 180.";
        }

        if ($this->container['plainPassword'] === null) {
            $invalidProperties[] = "'plainPassword' can't be null";
        }
        if ((mb_strlen($this->container['plainPassword']) > 64)) {
            $invalidProperties[] = "invalid value for 'plainPassword', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['plainPassword']) < 6)) {
            $invalidProperties[] = "invalid value for 'plainPassword', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['originCountry'] === null) {
            $invalidProperties[] = "'originCountry' can't be null";
        }
        if ($this->container['preferredLanguage'] === null) {
            $invalidProperties[] = "'preferredLanguage' can't be null";
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
     * Gets captcha
     *
     * @return string
     */
    public function getCaptcha()
    {
        return $this->container['captcha'];
    }

    /**
     * Sets captcha
     *
     * @param string $captcha captcha
     *
     * @return self
     */
    public function setCaptcha($captcha)
    {
        if (is_null($captcha)) {
            array_push($this->openAPINullablesSetToNull, 'captcha');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('captcha', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['captcha'] = $captcha;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }
        if ((mb_strlen($firstName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling UserWrite., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($firstName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling UserWrite., must be bigger than or equal to 1.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            throw new \InvalidArgumentException('non-nullable lastName cannot be null');
        }
        if ((mb_strlen($lastName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling UserWrite., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($lastName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling UserWrite., must be bigger than or equal to 1.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets publicName
     *
     * @return string
     */
    public function getPublicName()
    {
        return $this->container['publicName'];
    }

    /**
     * Sets publicName
     *
     * @param string $publicName publicName
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
        if (!is_null($publicName) && (mb_strlen($publicName) > 32)) {
            throw new \InvalidArgumentException('invalid length for $publicName when calling UserWrite., must be smaller than or equal to 32.');
        }
        if (!is_null($publicName) && (mb_strlen($publicName) < 2)) {
            throw new \InvalidArgumentException('invalid length for $publicName when calling UserWrite., must be bigger than or equal to 2.');
        }

        $this->container['publicName'] = $publicName;

        return $this;
    }

    /**
     * Gets roleInCompany
     *
     * @return string
     */
    public function getRoleInCompany()
    {
        return $this->container['roleInCompany'];
    }

    /**
     * Sets roleInCompany
     *
     * @param string $roleInCompany roleInCompany
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
        if (!is_null($roleInCompany) && (mb_strlen($roleInCompany) > 32)) {
            throw new \InvalidArgumentException('invalid length for $roleInCompany when calling UserWrite., must be smaller than or equal to 32.');
        }
        if (!is_null($roleInCompany) && (mb_strlen($roleInCompany) < 2)) {
            throw new \InvalidArgumentException('invalid length for $roleInCompany when calling UserWrite., must be bigger than or equal to 2.');
        }

        $this->container['roleInCompany'] = $roleInCompany;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime|null $birthday birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        if (is_null($birthday)) {
            array_push($this->openAPINullablesSetToNull, 'birthday');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('birthday', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 180)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UserWrite., must be smaller than or equal to 180.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->container['plainPassword'];
    }

    /**
     * Sets plainPassword
     *
     * @param string $plainPassword plainPassword
     *
     * @return self
     */
    public function setPlainPassword($plainPassword)
    {
        if (is_null($plainPassword)) {
            array_push($this->openAPINullablesSetToNull, 'plainPassword');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('plainPassword', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($plainPassword) && (mb_strlen($plainPassword) > 64)) {
            throw new \InvalidArgumentException('invalid length for $plainPassword when calling UserWrite., must be smaller than or equal to 64.');
        }
        if (!is_null($plainPassword) && (mb_strlen($plainPassword) < 6)) {
            throw new \InvalidArgumentException('invalid length for $plainPassword when calling UserWrite., must be bigger than or equal to 6.');
        }

        $this->container['plainPassword'] = $plainPassword;

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
     * Gets originCountry
     *
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->container['originCountry'];
    }

    /**
     * Sets originCountry
     *
     * @param string $originCountry The originating country
     *
     * @return self
     */
    public function setOriginCountry($originCountry)
    {
        if (is_null($originCountry)) {
            array_push($this->openAPINullablesSetToNull, 'originCountry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('originCountry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['originCountry'] = $originCountry;

        return $this;
    }

    /**
     * Gets preferredLanguage
     *
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->container['preferredLanguage'];
    }

    /**
     * Sets preferredLanguage
     *
     * @param string $preferredLanguage preferredLanguage
     *
     * @return self
     */
    public function setPreferredLanguage($preferredLanguage)
    {
        if (is_null($preferredLanguage)) {
            array_push($this->openAPINullablesSetToNull, 'preferredLanguage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preferredLanguage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preferredLanguage'] = $preferredLanguage;

        return $this;
    }

    /**
     * Gets consentMailNotification
     *
     * @return bool|null
     */
    public function getConsentMailNotification()
    {
        return $this->container['consentMailNotification'];
    }

    /**
     * Sets consentMailNotification
     *
     * @param bool|null $consentMailNotification consentMailNotification
     *
     * @return self
     */
    public function setConsentMailNotification($consentMailNotification)
    {
        if (is_null($consentMailNotification)) {
            throw new \InvalidArgumentException('non-nullable consentMailNotification cannot be null');
        }
        $this->container['consentMailNotification'] = $consentMailNotification;

        return $this;
    }

    /**
     * Gets consentMailAds
     *
     * @return bool|null
     */
    public function getConsentMailAds()
    {
        return $this->container['consentMailAds'];
    }

    /**
     * Sets consentMailAds
     *
     * @param bool|null $consentMailAds consentMailAds
     *
     * @return self
     */
    public function setConsentMailAds($consentMailAds)
    {
        if (is_null($consentMailAds)) {
            throw new \InvalidArgumentException('non-nullable consentMailAds cannot be null');
        }
        $this->container['consentMailAds'] = $consentMailAds;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Tripartie\Tpdk\Model\UserWriteOrganization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Tripartie\Tpdk\Model\UserWriteOrganization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
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


