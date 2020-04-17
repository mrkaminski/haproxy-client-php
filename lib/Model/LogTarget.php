<?php
/**
 * LogTarget
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
 * LogTarget Class Doc Comment
 *
 * @category Class
 * @description Per-instance logging of events and traffic.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LogTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'log_target';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
'facility' => 'string',
'format' => 'string',
'global' => 'bool',
'id' => 'int',
'length' => 'int',
'level' => 'string',
'minlevel' => 'string',
'nolog' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
'facility' => null,
'format' => null,
'global' => null,
'id' => null,
'length' => null,
'level' => null,
'minlevel' => null,
'nolog' => null    ];

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
        'address' => 'address',
'facility' => 'facility',
'format' => 'format',
'global' => 'global',
'id' => 'id',
'length' => 'length',
'level' => 'level',
'minlevel' => 'minlevel',
'nolog' => 'nolog'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
'facility' => 'setFacility',
'format' => 'setFormat',
'global' => 'setGlobal',
'id' => 'setId',
'length' => 'setLength',
'level' => 'setLevel',
'minlevel' => 'setMinlevel',
'nolog' => 'setNolog'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
'facility' => 'getFacility',
'format' => 'getFormat',
'global' => 'getGlobal',
'id' => 'getId',
'length' => 'getLength',
'level' => 'getLevel',
'minlevel' => 'getMinlevel',
'nolog' => 'getNolog'    ];

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

    const FACILITY_KERN = 'kern';
const FACILITY_USER = 'user';
const FACILITY_MAIL = 'mail';
const FACILITY_DAEMON = 'daemon';
const FACILITY_AUTH = 'auth';
const FACILITY_SYSLOG = 'syslog';
const FACILITY_LPR = 'lpr';
const FACILITY_NEWS = 'news';
const FACILITY_UUCP = 'uucp';
const FACILITY_CRON = 'cron';
const FACILITY_AUTH2 = 'auth2';
const FACILITY_FTP = 'ftp';
const FACILITY_NTP = 'ntp';
const FACILITY_AUDIT = 'audit';
const FACILITY_ALERT = 'alert';
const FACILITY_CRON2 = 'cron2';
const FACILITY_LOCAL0 = 'local0';
const FACILITY_LOCAL1 = 'local1';
const FACILITY_LOCAL2 = 'local2';
const FACILITY_LOCAL3 = 'local3';
const FACILITY_LOCAL4 = 'local4';
const FACILITY_LOCAL5 = 'local5';
const FACILITY_LOCAL6 = 'local6';
const FACILITY_LOCAL7 = 'local7';
const FORMAT_RFC3164 = 'rfc3164';
const FORMAT_RFC5424 = 'rfc5424';
const FORMAT_SHORT = 'short';
const FORMAT_RAW = 'raw';
const LEVEL_EMERG = 'emerg';
const LEVEL_ALERT = 'alert';
const LEVEL_CRIT = 'crit';
const LEVEL_ERR = 'err';
const LEVEL_WARNING = 'warning';
const LEVEL_NOTICE = 'notice';
const LEVEL_INFO = 'info';
const LEVEL_DEBUG = 'debug';
const MINLEVEL_EMERG = 'emerg';
const MINLEVEL_ALERT = 'alert';
const MINLEVEL_CRIT = 'crit';
const MINLEVEL_ERR = 'err';
const MINLEVEL_WARNING = 'warning';
const MINLEVEL_NOTICE = 'notice';
const MINLEVEL_INFO = 'info';
const MINLEVEL_DEBUG = 'debug';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFacilityAllowableValues()
    {
        return [
            self::FACILITY_KERN,
self::FACILITY_USER,
self::FACILITY_MAIL,
self::FACILITY_DAEMON,
self::FACILITY_AUTH,
self::FACILITY_SYSLOG,
self::FACILITY_LPR,
self::FACILITY_NEWS,
self::FACILITY_UUCP,
self::FACILITY_CRON,
self::FACILITY_AUTH2,
self::FACILITY_FTP,
self::FACILITY_NTP,
self::FACILITY_AUDIT,
self::FACILITY_ALERT,
self::FACILITY_CRON2,
self::FACILITY_LOCAL0,
self::FACILITY_LOCAL1,
self::FACILITY_LOCAL2,
self::FACILITY_LOCAL3,
self::FACILITY_LOCAL4,
self::FACILITY_LOCAL5,
self::FACILITY_LOCAL6,
self::FACILITY_LOCAL7,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_RFC3164,
self::FORMAT_RFC5424,
self::FORMAT_SHORT,
self::FORMAT_RAW,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_EMERG,
self::LEVEL_ALERT,
self::LEVEL_CRIT,
self::LEVEL_ERR,
self::LEVEL_WARNING,
self::LEVEL_NOTICE,
self::LEVEL_INFO,
self::LEVEL_DEBUG,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMinlevelAllowableValues()
    {
        return [
            self::MINLEVEL_EMERG,
self::MINLEVEL_ALERT,
self::MINLEVEL_CRIT,
self::MINLEVEL_ERR,
self::MINLEVEL_WARNING,
self::MINLEVEL_NOTICE,
self::MINLEVEL_INFO,
self::MINLEVEL_DEBUG,        ];
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['facility'] = isset($data['facility']) ? $data['facility'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['minlevel'] = isset($data['minlevel']) ? $data['minlevel'] : null;
        $this->container['nolog'] = isset($data['nolog']) ? $data['nolog'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFacilityAllowableValues();
        if (!is_null($this->container['facility']) && !in_array($this->container['facility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'facility', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMinlevelAllowableValues();
        if (!is_null($this->container['minlevel']) && !in_array($this->container['minlevel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'minlevel', must be one of '%s'",
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
     * Gets facility
     *
     * @return string
     */
    public function getFacility()
    {
        return $this->container['facility'];
    }

    /**
     * Sets facility
     *
     * @param string $facility facility
     *
     * @return $this
     */
    public function setFacility($facility)
    {
        $allowedValues = $this->getFacilityAllowableValues();
        if (!is_null($facility) && !in_array($facility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'facility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['facility'] = $facility;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     *
     * @param bool $global global
     *
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($level) && !in_array($level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets minlevel
     *
     * @return string
     */
    public function getMinlevel()
    {
        return $this->container['minlevel'];
    }

    /**
     * Sets minlevel
     *
     * @param string $minlevel minlevel
     *
     * @return $this
     */
    public function setMinlevel($minlevel)
    {
        $allowedValues = $this->getMinlevelAllowableValues();
        if (!is_null($minlevel) && !in_array($minlevel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'minlevel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['minlevel'] = $minlevel;

        return $this;
    }

    /**
     * Gets nolog
     *
     * @return bool
     */
    public function getNolog()
    {
        return $this->container['nolog'];
    }

    /**
     * Sets nolog
     *
     * @param bool $nolog nolog
     *
     * @return $this
     */
    public function setNolog($nolog)
    {
        $this->container['nolog'] = $nolog;

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
