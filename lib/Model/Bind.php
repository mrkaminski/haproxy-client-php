<?php
/**
 * Bind
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * HAProxy Data Plane API
 *
 * API for editing and managing haproxy instances. Provides process information, configuration management, haproxy stats and logs.  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * OpenAPI spec version: 2.0
 * Contact: support@haproxy.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Bind Class Doc Comment
 *
 * @category Class
 * @description HAProxy frontend bind configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Bind implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bind';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_proxy' => 'bool',
'address' => 'string',
'allow_0rtt' => 'bool',
'alpn' => 'string',
'name' => 'string',
'port' => 'int',
'process' => 'string',
'ssl' => 'bool',
'ssl_cafile' => 'string',
'ssl_certificate' => 'string',
'tcp_user_timeout' => 'int',
'transparent' => 'bool',
'v4v6' => 'bool',
'verify' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_proxy' => null,
'address' => null,
'allow_0rtt' => null,
'alpn' => null,
'name' => null,
'port' => null,
'process' => null,
'ssl' => null,
'ssl_cafile' => null,
'ssl_certificate' => null,
'tcp_user_timeout' => null,
'transparent' => null,
'v4v6' => null,
'verify' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accept_proxy' => 'accept_proxy',
'address' => 'address',
'allow_0rtt' => 'allow_0rtt',
'alpn' => 'alpn',
'name' => 'name',
'port' => 'port',
'process' => 'process',
'ssl' => 'ssl',
'ssl_cafile' => 'ssl_cafile',
'ssl_certificate' => 'ssl_certificate',
'tcp_user_timeout' => 'tcp_user_timeout',
'transparent' => 'transparent',
'v4v6' => 'v4v6',
'verify' => 'verify'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_proxy' => 'setAcceptProxy',
'address' => 'setAddress',
'allow_0rtt' => 'setAllow0rtt',
'alpn' => 'setAlpn',
'name' => 'setName',
'port' => 'setPort',
'process' => 'setProcess',
'ssl' => 'setSsl',
'ssl_cafile' => 'setSslCafile',
'ssl_certificate' => 'setSslCertificate',
'tcp_user_timeout' => 'setTcpUserTimeout',
'transparent' => 'setTransparent',
'v4v6' => 'setV4v6',
'verify' => 'setVerify'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_proxy' => 'getAcceptProxy',
'address' => 'getAddress',
'allow_0rtt' => 'getAllow0rtt',
'alpn' => 'getAlpn',
'name' => 'getName',
'port' => 'getPort',
'process' => 'getProcess',
'ssl' => 'getSsl',
'ssl_cafile' => 'getSslCafile',
'ssl_certificate' => 'getSslCertificate',
'tcp_user_timeout' => 'getTcpUserTimeout',
'transparent' => 'getTransparent',
'v4v6' => 'getV4v6',
'verify' => 'getVerify'    ];

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
        return self::$swaggerModelName;
    }

    const VERIFY_NONE = 'none';
const VERIFY_OPTIONAL = 'optional';
const VERIFY_REQUIRED = 'required';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerifyAllowableValues()
    {
        return [
            self::VERIFY_NONE,
self::VERIFY_OPTIONAL,
self::VERIFY_REQUIRED,        ];
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
        $this->container['accept_proxy'] = isset($data['accept_proxy']) ? $data['accept_proxy'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['allow_0rtt'] = isset($data['allow_0rtt']) ? $data['allow_0rtt'] : null;
        $this->container['alpn'] = isset($data['alpn']) ? $data['alpn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['ssl_cafile'] = isset($data['ssl_cafile']) ? $data['ssl_cafile'] : null;
        $this->container['ssl_certificate'] = isset($data['ssl_certificate']) ? $data['ssl_certificate'] : null;
        $this->container['tcp_user_timeout'] = isset($data['tcp_user_timeout']) ? $data['tcp_user_timeout'] : null;
        $this->container['transparent'] = isset($data['transparent']) ? $data['transparent'] : null;
        $this->container['v4v6'] = isset($data['v4v6']) ? $data['v4v6'] : null;
        $this->container['verify'] = isset($data['verify']) ? $data['verify'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getVerifyAllowableValues();
        if (!is_null($this->container['verify']) && !in_array($this->container['verify'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verify', must be one of '%s'",
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
     * Gets accept_proxy
     *
     * @return bool
     */
    public function getAcceptProxy()
    {
        return $this->container['accept_proxy'];
    }

    /**
     * Sets accept_proxy
     *
     * @param bool $accept_proxy accept_proxy
     *
     * @return $this
     */
    public function setAcceptProxy($accept_proxy)
    {
        $this->container['accept_proxy'] = $accept_proxy;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets allow_0rtt
     *
     * @return bool
     */
    public function getAllow0rtt()
    {
        return $this->container['allow_0rtt'];
    }

    /**
     * Sets allow_0rtt
     *
     * @param bool $allow_0rtt allow_0rtt
     *
     * @return $this
     */
    public function setAllow0rtt($allow_0rtt)
    {
        $this->container['allow_0rtt'] = $allow_0rtt;

        return $this;
    }

    /**
     * Gets alpn
     *
     * @return string
     */
    public function getAlpn()
    {
        return $this->container['alpn'];
    }

    /**
     * Sets alpn
     *
     * @param string $alpn alpn
     *
     * @return $this
     */
    public function setAlpn($alpn)
    {
        $this->container['alpn'] = $alpn;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets process
     *
     * @return string
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param string $process process
     *
     * @return $this
     */
    public function setProcess($process)
    {
        $this->container['process'] = $process;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return bool
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param bool $ssl ssl
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets ssl_cafile
     *
     * @return string
     */
    public function getSslCafile()
    {
        return $this->container['ssl_cafile'];
    }

    /**
     * Sets ssl_cafile
     *
     * @param string $ssl_cafile ssl_cafile
     *
     * @return $this
     */
    public function setSslCafile($ssl_cafile)
    {
        $this->container['ssl_cafile'] = $ssl_cafile;

        return $this;
    }

    /**
     * Gets ssl_certificate
     *
     * @return string
     */
    public function getSslCertificate()
    {
        return $this->container['ssl_certificate'];
    }

    /**
     * Sets ssl_certificate
     *
     * @param string $ssl_certificate ssl_certificate
     *
     * @return $this
     */
    public function setSslCertificate($ssl_certificate)
    {
        $this->container['ssl_certificate'] = $ssl_certificate;

        return $this;
    }

    /**
     * Gets tcp_user_timeout
     *
     * @return int
     */
    public function getTcpUserTimeout()
    {
        return $this->container['tcp_user_timeout'];
    }

    /**
     * Sets tcp_user_timeout
     *
     * @param int $tcp_user_timeout tcp_user_timeout
     *
     * @return $this
     */
    public function setTcpUserTimeout($tcp_user_timeout)
    {
        $this->container['tcp_user_timeout'] = $tcp_user_timeout;

        return $this;
    }

    /**
     * Gets transparent
     *
     * @return bool
     */
    public function getTransparent()
    {
        return $this->container['transparent'];
    }

    /**
     * Sets transparent
     *
     * @param bool $transparent transparent
     *
     * @return $this
     */
    public function setTransparent($transparent)
    {
        $this->container['transparent'] = $transparent;

        return $this;
    }

    /**
     * Gets v4v6
     *
     * @return bool
     */
    public function getV4v6()
    {
        return $this->container['v4v6'];
    }

    /**
     * Sets v4v6
     *
     * @param bool $v4v6 v4v6
     *
     * @return $this
     */
    public function setV4v6($v4v6)
    {
        $this->container['v4v6'] = $v4v6;

        return $this;
    }

    /**
     * Gets verify
     *
     * @return string
     */
    public function getVerify()
    {
        return $this->container['verify'];
    }

    /**
     * Sets verify
     *
     * @param string $verify verify
     *
     * @return $this
     */
    public function setVerify($verify)
    {
        $allowedValues = $this->getVerifyAllowableValues();
        if (!is_null($verify) && !in_array($verify, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'verify', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verify'] = $verify;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
