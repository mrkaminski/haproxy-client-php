<?php
/**
 * Balance
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
 * Balance Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Balance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'balance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'algorithm' => 'string',
'hdr_name' => 'string',
'hdr_use_domain_only' => 'bool',
'random_draws' => 'int',
'rdp_cookie_name' => 'string',
'uri_depth' => 'int',
'uri_len' => 'int',
'uri_whole' => 'bool',
'url_param' => 'string',
'url_param_check_post' => 'int',
'url_param_max_wait' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'algorithm' => null,
'hdr_name' => null,
'hdr_use_domain_only' => null,
'random_draws' => null,
'rdp_cookie_name' => null,
'uri_depth' => null,
'uri_len' => null,
'uri_whole' => null,
'url_param' => null,
'url_param_check_post' => null,
'url_param_max_wait' => null    ];

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
        'algorithm' => 'algorithm',
'hdr_name' => 'hdr_name',
'hdr_use_domain_only' => 'hdr_use_domain_only',
'random_draws' => 'random_draws',
'rdp_cookie_name' => 'rdp_cookie_name',
'uri_depth' => 'uri_depth',
'uri_len' => 'uri_len',
'uri_whole' => 'uri_whole',
'url_param' => 'url_param',
'url_param_check_post' => 'url_param_check_post',
'url_param_max_wait' => 'url_param_max_wait'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'algorithm' => 'setAlgorithm',
'hdr_name' => 'setHdrName',
'hdr_use_domain_only' => 'setHdrUseDomainOnly',
'random_draws' => 'setRandomDraws',
'rdp_cookie_name' => 'setRdpCookieName',
'uri_depth' => 'setUriDepth',
'uri_len' => 'setUriLen',
'uri_whole' => 'setUriWhole',
'url_param' => 'setUrlParam',
'url_param_check_post' => 'setUrlParamCheckPost',
'url_param_max_wait' => 'setUrlParamMaxWait'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'algorithm' => 'getAlgorithm',
'hdr_name' => 'getHdrName',
'hdr_use_domain_only' => 'getHdrUseDomainOnly',
'random_draws' => 'getRandomDraws',
'rdp_cookie_name' => 'getRdpCookieName',
'uri_depth' => 'getUriDepth',
'uri_len' => 'getUriLen',
'uri_whole' => 'getUriWhole',
'url_param' => 'getUrlParam',
'url_param_check_post' => 'getUrlParamCheckPost',
'url_param_max_wait' => 'getUrlParamMaxWait'    ];

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

    const ALGORITHM_ROUNDROBIN = 'roundrobin';
const ALGORITHM_STATIC_RR = 'static-rr';
const ALGORITHM_LEASTCONN = 'leastconn';
const ALGORITHM_FIRST = 'first';
const ALGORITHM_SOURCE = 'source';
const ALGORITHM_URI = 'uri';
const ALGORITHM_URL_PARAM = 'url_param';
const ALGORITHM_HDR = 'hdr';
const ALGORITHM_RANDOM = 'random';
const ALGORITHM_RDP_COOKIE = 'rdp-cookie';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlgorithmAllowableValues()
    {
        return [
            self::ALGORITHM_ROUNDROBIN,
self::ALGORITHM_STATIC_RR,
self::ALGORITHM_LEASTCONN,
self::ALGORITHM_FIRST,
self::ALGORITHM_SOURCE,
self::ALGORITHM_URI,
self::ALGORITHM_URL_PARAM,
self::ALGORITHM_HDR,
self::ALGORITHM_RANDOM,
self::ALGORITHM_RDP_COOKIE,        ];
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['hdr_name'] = isset($data['hdr_name']) ? $data['hdr_name'] : null;
        $this->container['hdr_use_domain_only'] = isset($data['hdr_use_domain_only']) ? $data['hdr_use_domain_only'] : null;
        $this->container['random_draws'] = isset($data['random_draws']) ? $data['random_draws'] : null;
        $this->container['rdp_cookie_name'] = isset($data['rdp_cookie_name']) ? $data['rdp_cookie_name'] : null;
        $this->container['uri_depth'] = isset($data['uri_depth']) ? $data['uri_depth'] : null;
        $this->container['uri_len'] = isset($data['uri_len']) ? $data['uri_len'] : null;
        $this->container['uri_whole'] = isset($data['uri_whole']) ? $data['uri_whole'] : null;
        $this->container['url_param'] = isset($data['url_param']) ? $data['url_param'] : null;
        $this->container['url_param_check_post'] = isset($data['url_param_check_post']) ? $data['url_param_check_post'] : null;
        $this->container['url_param_max_wait'] = isset($data['url_param_max_wait']) ? $data['url_param_max_wait'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['algorithm'] === null) {
            $invalidProperties[] = "'algorithm' can't be null";
        }
        $allowedValues = $this->getAlgorithmAllowableValues();
        if (!is_null($this->container['algorithm']) && !in_array($this->container['algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'algorithm', must be one of '%s'",
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
     * Gets algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param string $algorithm algorithm
     *
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $allowedValues = $this->getAlgorithmAllowableValues();
        if (!in_array($algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'algorithm', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets hdr_name
     *
     * @return string
     */
    public function getHdrName()
    {
        return $this->container['hdr_name'];
    }

    /**
     * Sets hdr_name
     *
     * @param string $hdr_name hdr_name
     *
     * @return $this
     */
    public function setHdrName($hdr_name)
    {
        $this->container['hdr_name'] = $hdr_name;

        return $this;
    }

    /**
     * Gets hdr_use_domain_only
     *
     * @return bool
     */
    public function getHdrUseDomainOnly()
    {
        return $this->container['hdr_use_domain_only'];
    }

    /**
     * Sets hdr_use_domain_only
     *
     * @param bool $hdr_use_domain_only hdr_use_domain_only
     *
     * @return $this
     */
    public function setHdrUseDomainOnly($hdr_use_domain_only)
    {
        $this->container['hdr_use_domain_only'] = $hdr_use_domain_only;

        return $this;
    }

    /**
     * Gets random_draws
     *
     * @return int
     */
    public function getRandomDraws()
    {
        return $this->container['random_draws'];
    }

    /**
     * Sets random_draws
     *
     * @param int $random_draws random_draws
     *
     * @return $this
     */
    public function setRandomDraws($random_draws)
    {
        $this->container['random_draws'] = $random_draws;

        return $this;
    }

    /**
     * Gets rdp_cookie_name
     *
     * @return string
     */
    public function getRdpCookieName()
    {
        return $this->container['rdp_cookie_name'];
    }

    /**
     * Sets rdp_cookie_name
     *
     * @param string $rdp_cookie_name rdp_cookie_name
     *
     * @return $this
     */
    public function setRdpCookieName($rdp_cookie_name)
    {
        $this->container['rdp_cookie_name'] = $rdp_cookie_name;

        return $this;
    }

    /**
     * Gets uri_depth
     *
     * @return int
     */
    public function getUriDepth()
    {
        return $this->container['uri_depth'];
    }

    /**
     * Sets uri_depth
     *
     * @param int $uri_depth uri_depth
     *
     * @return $this
     */
    public function setUriDepth($uri_depth)
    {
        $this->container['uri_depth'] = $uri_depth;

        return $this;
    }

    /**
     * Gets uri_len
     *
     * @return int
     */
    public function getUriLen()
    {
        return $this->container['uri_len'];
    }

    /**
     * Sets uri_len
     *
     * @param int $uri_len uri_len
     *
     * @return $this
     */
    public function setUriLen($uri_len)
    {
        $this->container['uri_len'] = $uri_len;

        return $this;
    }

    /**
     * Gets uri_whole
     *
     * @return bool
     */
    public function getUriWhole()
    {
        return $this->container['uri_whole'];
    }

    /**
     * Sets uri_whole
     *
     * @param bool $uri_whole uri_whole
     *
     * @return $this
     */
    public function setUriWhole($uri_whole)
    {
        $this->container['uri_whole'] = $uri_whole;

        return $this;
    }

    /**
     * Gets url_param
     *
     * @return string
     */
    public function getUrlParam()
    {
        return $this->container['url_param'];
    }

    /**
     * Sets url_param
     *
     * @param string $url_param url_param
     *
     * @return $this
     */
    public function setUrlParam($url_param)
    {
        $this->container['url_param'] = $url_param;

        return $this;
    }

    /**
     * Gets url_param_check_post
     *
     * @return int
     */
    public function getUrlParamCheckPost()
    {
        return $this->container['url_param_check_post'];
    }

    /**
     * Sets url_param_check_post
     *
     * @param int $url_param_check_post url_param_check_post
     *
     * @return $this
     */
    public function setUrlParamCheckPost($url_param_check_post)
    {
        $this->container['url_param_check_post'] = $url_param_check_post;

        return $this;
    }

    /**
     * Gets url_param_max_wait
     *
     * @return int
     */
    public function getUrlParamMaxWait()
    {
        return $this->container['url_param_max_wait'];
    }

    /**
     * Sets url_param_max_wait
     *
     * @param int $url_param_max_wait url_param_max_wait
     *
     * @return $this
     */
    public function setUrlParamMaxWait($url_param_max_wait)
    {
        $this->container['url_param_max_wait'] = $url_param_max_wait;

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
