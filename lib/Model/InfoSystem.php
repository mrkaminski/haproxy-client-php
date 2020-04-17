<?php
/**
 * InfoSystem
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
 * InfoSystem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InfoSystem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'info_system';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpu_info' => '\Swagger\Client\Model\InfoSystemCpuInfo',
'hostname' => 'string',
'mem_info' => '\Swagger\Client\Model\InfoSystemMemInfo',
'os_string' => 'string',
'time' => 'int',
'uptime' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cpu_info' => null,
'hostname' => null,
'mem_info' => null,
'os_string' => null,
'time' => null,
'uptime' => null    ];

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
        'cpu_info' => 'cpu_info',
'hostname' => 'hostname',
'mem_info' => 'mem_info',
'os_string' => 'os_string',
'time' => 'time',
'uptime' => 'uptime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpu_info' => 'setCpuInfo',
'hostname' => 'setHostname',
'mem_info' => 'setMemInfo',
'os_string' => 'setOsString',
'time' => 'setTime',
'uptime' => 'setUptime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpu_info' => 'getCpuInfo',
'hostname' => 'getHostname',
'mem_info' => 'getMemInfo',
'os_string' => 'getOsString',
'time' => 'getTime',
'uptime' => 'getUptime'    ];

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
        $this->container['cpu_info'] = isset($data['cpu_info']) ? $data['cpu_info'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['mem_info'] = isset($data['mem_info']) ? $data['mem_info'] : null;
        $this->container['os_string'] = isset($data['os_string']) ? $data['os_string'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['uptime'] = isset($data['uptime']) ? $data['uptime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets cpu_info
     *
     * @return \Swagger\Client\Model\InfoSystemCpuInfo
     */
    public function getCpuInfo()
    {
        return $this->container['cpu_info'];
    }

    /**
     * Sets cpu_info
     *
     * @param \Swagger\Client\Model\InfoSystemCpuInfo $cpu_info cpu_info
     *
     * @return $this
     */
    public function setCpuInfo($cpu_info)
    {
        $this->container['cpu_info'] = $cpu_info;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname Hostname where the HAProxy is running
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets mem_info
     *
     * @return \Swagger\Client\Model\InfoSystemMemInfo
     */
    public function getMemInfo()
    {
        return $this->container['mem_info'];
    }

    /**
     * Sets mem_info
     *
     * @param \Swagger\Client\Model\InfoSystemMemInfo $mem_info mem_info
     *
     * @return $this
     */
    public function setMemInfo($mem_info)
    {
        $this->container['mem_info'] = $mem_info;

        return $this;
    }

    /**
     * Gets os_string
     *
     * @return string
     */
    public function getOsString()
    {
        return $this->container['os_string'];
    }

    /**
     * Sets os_string
     *
     * @param string $os_string OS string
     *
     * @return $this
     */
    public function setOsString($os_string)
    {
        $this->container['os_string'] = $os_string;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int $time Current time in milliseconds since Epoch.
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets uptime
     *
     * @return int
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     *
     * @param int $uptime System uptime
     *
     * @return $this
     */
    public function setUptime($uptime)
    {
        $this->container['uptime'] = $uptime;

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
