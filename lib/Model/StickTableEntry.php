<?php
/**
 * StickTableEntry
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
 * StickTableEntry Class Doc Comment
 *
 * @category Class
 * @description One entry in stick table
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StickTableEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'stick_table_entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bytes_in_cnt' => 'int',
'bytes_in_rate' => 'int',
'bytes_out_cnt' => 'int',
'bytes_out_rate' => 'int',
'conn_cnt' => 'int',
'conn_cur' => 'int',
'conn_rate' => 'int',
'exp' => 'int',
'gpc0' => 'int',
'gpc0_rate' => 'int',
'gpc1' => 'int',
'gpc1_rate' => 'int',
'http_err_cnt' => 'int',
'http_err_rate' => 'int',
'http_req_cnt' => 'int',
'http_req_rate' => 'int',
'id' => 'string',
'key' => 'string',
'server_id' => 'int',
'sess_cnt' => 'int',
'sess_rate' => 'int',
'use' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bytes_in_cnt' => null,
'bytes_in_rate' => null,
'bytes_out_cnt' => null,
'bytes_out_rate' => null,
'conn_cnt' => null,
'conn_cur' => null,
'conn_rate' => null,
'exp' => null,
'gpc0' => null,
'gpc0_rate' => null,
'gpc1' => null,
'gpc1_rate' => null,
'http_err_cnt' => null,
'http_err_rate' => null,
'http_req_cnt' => null,
'http_req_rate' => null,
'id' => null,
'key' => null,
'server_id' => null,
'sess_cnt' => null,
'sess_rate' => null,
'use' => null    ];

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
        'bytes_in_cnt' => 'bytes_in_cnt',
'bytes_in_rate' => 'bytes_in_rate',
'bytes_out_cnt' => 'bytes_out_cnt',
'bytes_out_rate' => 'bytes_out_rate',
'conn_cnt' => 'conn_cnt',
'conn_cur' => 'conn_cur',
'conn_rate' => 'conn_rate',
'exp' => 'exp',
'gpc0' => 'gpc0',
'gpc0_rate' => 'gpc0_rate',
'gpc1' => 'gpc1',
'gpc1_rate' => 'gpc1_rate',
'http_err_cnt' => 'http_err_cnt',
'http_err_rate' => 'http_err_rate',
'http_req_cnt' => 'http_req_cnt',
'http_req_rate' => 'http_req_rate',
'id' => 'id',
'key' => 'key',
'server_id' => 'server_id',
'sess_cnt' => 'sess_cnt',
'sess_rate' => 'sess_rate',
'use' => 'use'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bytes_in_cnt' => 'setBytesInCnt',
'bytes_in_rate' => 'setBytesInRate',
'bytes_out_cnt' => 'setBytesOutCnt',
'bytes_out_rate' => 'setBytesOutRate',
'conn_cnt' => 'setConnCnt',
'conn_cur' => 'setConnCur',
'conn_rate' => 'setConnRate',
'exp' => 'setExp',
'gpc0' => 'setGpc0',
'gpc0_rate' => 'setGpc0Rate',
'gpc1' => 'setGpc1',
'gpc1_rate' => 'setGpc1Rate',
'http_err_cnt' => 'setHttpErrCnt',
'http_err_rate' => 'setHttpErrRate',
'http_req_cnt' => 'setHttpReqCnt',
'http_req_rate' => 'setHttpReqRate',
'id' => 'setId',
'key' => 'setKey',
'server_id' => 'setServerId',
'sess_cnt' => 'setSessCnt',
'sess_rate' => 'setSessRate',
'use' => 'setUse'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bytes_in_cnt' => 'getBytesInCnt',
'bytes_in_rate' => 'getBytesInRate',
'bytes_out_cnt' => 'getBytesOutCnt',
'bytes_out_rate' => 'getBytesOutRate',
'conn_cnt' => 'getConnCnt',
'conn_cur' => 'getConnCur',
'conn_rate' => 'getConnRate',
'exp' => 'getExp',
'gpc0' => 'getGpc0',
'gpc0_rate' => 'getGpc0Rate',
'gpc1' => 'getGpc1',
'gpc1_rate' => 'getGpc1Rate',
'http_err_cnt' => 'getHttpErrCnt',
'http_err_rate' => 'getHttpErrRate',
'http_req_cnt' => 'getHttpReqCnt',
'http_req_rate' => 'getHttpReqRate',
'id' => 'getId',
'key' => 'getKey',
'server_id' => 'getServerId',
'sess_cnt' => 'getSessCnt',
'sess_rate' => 'getSessRate',
'use' => 'getUse'    ];

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
        $this->container['bytes_in_cnt'] = isset($data['bytes_in_cnt']) ? $data['bytes_in_cnt'] : null;
        $this->container['bytes_in_rate'] = isset($data['bytes_in_rate']) ? $data['bytes_in_rate'] : null;
        $this->container['bytes_out_cnt'] = isset($data['bytes_out_cnt']) ? $data['bytes_out_cnt'] : null;
        $this->container['bytes_out_rate'] = isset($data['bytes_out_rate']) ? $data['bytes_out_rate'] : null;
        $this->container['conn_cnt'] = isset($data['conn_cnt']) ? $data['conn_cnt'] : null;
        $this->container['conn_cur'] = isset($data['conn_cur']) ? $data['conn_cur'] : null;
        $this->container['conn_rate'] = isset($data['conn_rate']) ? $data['conn_rate'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['gpc0'] = isset($data['gpc0']) ? $data['gpc0'] : null;
        $this->container['gpc0_rate'] = isset($data['gpc0_rate']) ? $data['gpc0_rate'] : null;
        $this->container['gpc1'] = isset($data['gpc1']) ? $data['gpc1'] : null;
        $this->container['gpc1_rate'] = isset($data['gpc1_rate']) ? $data['gpc1_rate'] : null;
        $this->container['http_err_cnt'] = isset($data['http_err_cnt']) ? $data['http_err_cnt'] : null;
        $this->container['http_err_rate'] = isset($data['http_err_rate']) ? $data['http_err_rate'] : null;
        $this->container['http_req_cnt'] = isset($data['http_req_cnt']) ? $data['http_req_cnt'] : null;
        $this->container['http_req_rate'] = isset($data['http_req_rate']) ? $data['http_req_rate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['server_id'] = isset($data['server_id']) ? $data['server_id'] : null;
        $this->container['sess_cnt'] = isset($data['sess_cnt']) ? $data['sess_cnt'] : null;
        $this->container['sess_rate'] = isset($data['sess_rate']) ? $data['sess_rate'] : null;
        $this->container['use'] = isset($data['use']) ? $data['use'] : null;
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
     * Gets bytes_in_cnt
     *
     * @return int
     */
    public function getBytesInCnt()
    {
        return $this->container['bytes_in_cnt'];
    }

    /**
     * Sets bytes_in_cnt
     *
     * @param int $bytes_in_cnt bytes_in_cnt
     *
     * @return $this
     */
    public function setBytesInCnt($bytes_in_cnt)
    {
        $this->container['bytes_in_cnt'] = $bytes_in_cnt;

        return $this;
    }

    /**
     * Gets bytes_in_rate
     *
     * @return int
     */
    public function getBytesInRate()
    {
        return $this->container['bytes_in_rate'];
    }

    /**
     * Sets bytes_in_rate
     *
     * @param int $bytes_in_rate bytes_in_rate
     *
     * @return $this
     */
    public function setBytesInRate($bytes_in_rate)
    {
        $this->container['bytes_in_rate'] = $bytes_in_rate;

        return $this;
    }

    /**
     * Gets bytes_out_cnt
     *
     * @return int
     */
    public function getBytesOutCnt()
    {
        return $this->container['bytes_out_cnt'];
    }

    /**
     * Sets bytes_out_cnt
     *
     * @param int $bytes_out_cnt bytes_out_cnt
     *
     * @return $this
     */
    public function setBytesOutCnt($bytes_out_cnt)
    {
        $this->container['bytes_out_cnt'] = $bytes_out_cnt;

        return $this;
    }

    /**
     * Gets bytes_out_rate
     *
     * @return int
     */
    public function getBytesOutRate()
    {
        return $this->container['bytes_out_rate'];
    }

    /**
     * Sets bytes_out_rate
     *
     * @param int $bytes_out_rate bytes_out_rate
     *
     * @return $this
     */
    public function setBytesOutRate($bytes_out_rate)
    {
        $this->container['bytes_out_rate'] = $bytes_out_rate;

        return $this;
    }

    /**
     * Gets conn_cnt
     *
     * @return int
     */
    public function getConnCnt()
    {
        return $this->container['conn_cnt'];
    }

    /**
     * Sets conn_cnt
     *
     * @param int $conn_cnt conn_cnt
     *
     * @return $this
     */
    public function setConnCnt($conn_cnt)
    {
        $this->container['conn_cnt'] = $conn_cnt;

        return $this;
    }

    /**
     * Gets conn_cur
     *
     * @return int
     */
    public function getConnCur()
    {
        return $this->container['conn_cur'];
    }

    /**
     * Sets conn_cur
     *
     * @param int $conn_cur conn_cur
     *
     * @return $this
     */
    public function setConnCur($conn_cur)
    {
        $this->container['conn_cur'] = $conn_cur;

        return $this;
    }

    /**
     * Gets conn_rate
     *
     * @return int
     */
    public function getConnRate()
    {
        return $this->container['conn_rate'];
    }

    /**
     * Sets conn_rate
     *
     * @param int $conn_rate conn_rate
     *
     * @return $this
     */
    public function setConnRate($conn_rate)
    {
        $this->container['conn_rate'] = $conn_rate;

        return $this;
    }

    /**
     * Gets exp
     *
     * @return int
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param int $exp exp
     *
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets gpc0
     *
     * @return int
     */
    public function getGpc0()
    {
        return $this->container['gpc0'];
    }

    /**
     * Sets gpc0
     *
     * @param int $gpc0 gpc0
     *
     * @return $this
     */
    public function setGpc0($gpc0)
    {
        $this->container['gpc0'] = $gpc0;

        return $this;
    }

    /**
     * Gets gpc0_rate
     *
     * @return int
     */
    public function getGpc0Rate()
    {
        return $this->container['gpc0_rate'];
    }

    /**
     * Sets gpc0_rate
     *
     * @param int $gpc0_rate gpc0_rate
     *
     * @return $this
     */
    public function setGpc0Rate($gpc0_rate)
    {
        $this->container['gpc0_rate'] = $gpc0_rate;

        return $this;
    }

    /**
     * Gets gpc1
     *
     * @return int
     */
    public function getGpc1()
    {
        return $this->container['gpc1'];
    }

    /**
     * Sets gpc1
     *
     * @param int $gpc1 gpc1
     *
     * @return $this
     */
    public function setGpc1($gpc1)
    {
        $this->container['gpc1'] = $gpc1;

        return $this;
    }

    /**
     * Gets gpc1_rate
     *
     * @return int
     */
    public function getGpc1Rate()
    {
        return $this->container['gpc1_rate'];
    }

    /**
     * Sets gpc1_rate
     *
     * @param int $gpc1_rate gpc1_rate
     *
     * @return $this
     */
    public function setGpc1Rate($gpc1_rate)
    {
        $this->container['gpc1_rate'] = $gpc1_rate;

        return $this;
    }

    /**
     * Gets http_err_cnt
     *
     * @return int
     */
    public function getHttpErrCnt()
    {
        return $this->container['http_err_cnt'];
    }

    /**
     * Sets http_err_cnt
     *
     * @param int $http_err_cnt http_err_cnt
     *
     * @return $this
     */
    public function setHttpErrCnt($http_err_cnt)
    {
        $this->container['http_err_cnt'] = $http_err_cnt;

        return $this;
    }

    /**
     * Gets http_err_rate
     *
     * @return int
     */
    public function getHttpErrRate()
    {
        return $this->container['http_err_rate'];
    }

    /**
     * Sets http_err_rate
     *
     * @param int $http_err_rate http_err_rate
     *
     * @return $this
     */
    public function setHttpErrRate($http_err_rate)
    {
        $this->container['http_err_rate'] = $http_err_rate;

        return $this;
    }

    /**
     * Gets http_req_cnt
     *
     * @return int
     */
    public function getHttpReqCnt()
    {
        return $this->container['http_req_cnt'];
    }

    /**
     * Sets http_req_cnt
     *
     * @param int $http_req_cnt http_req_cnt
     *
     * @return $this
     */
    public function setHttpReqCnt($http_req_cnt)
    {
        $this->container['http_req_cnt'] = $http_req_cnt;

        return $this;
    }

    /**
     * Gets http_req_rate
     *
     * @return int
     */
    public function getHttpReqRate()
    {
        return $this->container['http_req_rate'];
    }

    /**
     * Sets http_req_rate
     *
     * @param int $http_req_rate http_req_rate
     *
     * @return $this
     */
    public function setHttpReqRate($http_req_rate)
    {
        $this->container['http_req_rate'] = $http_req_rate;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets server_id
     *
     * @return int
     */
    public function getServerId()
    {
        return $this->container['server_id'];
    }

    /**
     * Sets server_id
     *
     * @param int $server_id server_id
     *
     * @return $this
     */
    public function setServerId($server_id)
    {
        $this->container['server_id'] = $server_id;

        return $this;
    }

    /**
     * Gets sess_cnt
     *
     * @return int
     */
    public function getSessCnt()
    {
        return $this->container['sess_cnt'];
    }

    /**
     * Sets sess_cnt
     *
     * @param int $sess_cnt sess_cnt
     *
     * @return $this
     */
    public function setSessCnt($sess_cnt)
    {
        $this->container['sess_cnt'] = $sess_cnt;

        return $this;
    }

    /**
     * Gets sess_rate
     *
     * @return int
     */
    public function getSessRate()
    {
        return $this->container['sess_rate'];
    }

    /**
     * Sets sess_rate
     *
     * @param int $sess_rate sess_rate
     *
     * @return $this
     */
    public function setSessRate($sess_rate)
    {
        $this->container['sess_rate'] = $sess_rate;

        return $this;
    }

    /**
     * Gets use
     *
     * @return bool
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     *
     * @param bool $use use
     *
     * @return $this
     */
    public function setUse($use)
    {
        $this->container['use'] = $use;

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
