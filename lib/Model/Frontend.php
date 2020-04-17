<?php
/**
 * Frontend
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
 * Frontend Class Doc Comment
 *
 * @category Class
 * @description HAProxy frontend configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Frontend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'frontend';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clflog' => 'bool',
'client_timeout' => 'int',
'clitcpka' => 'string',
'contstats' => 'string',
'default_backend' => 'string',
'dontlognull' => 'string',
'forwardfor' => '\Swagger\Client\Model\Forwardfor',
'http_use_htx' => 'string',
'http_connection_mode' => 'string',
'http_keep_alive_timeout' => 'int',
'http_request_timeout' => 'int',
'httplog' => 'bool',
'log_format' => 'string',
'log_format_sd' => 'string',
'log_separate_errors' => 'string',
'log_tag' => 'string',
'maxconn' => 'int',
'mode' => 'string',
'name' => 'string',
'tcplog' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clflog' => null,
'client_timeout' => null,
'clitcpka' => null,
'contstats' => null,
'default_backend' => null,
'dontlognull' => null,
'forwardfor' => null,
'http_use_htx' => null,
'http_connection_mode' => null,
'http_keep_alive_timeout' => null,
'http_request_timeout' => null,
'httplog' => null,
'log_format' => null,
'log_format_sd' => null,
'log_separate_errors' => null,
'log_tag' => null,
'maxconn' => null,
'mode' => null,
'name' => null,
'tcplog' => null    ];

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
        'clflog' => 'clflog',
'client_timeout' => 'client_timeout',
'clitcpka' => 'clitcpka',
'contstats' => 'contstats',
'default_backend' => 'default_backend',
'dontlognull' => 'dontlognull',
'forwardfor' => 'forwardfor',
'http_use_htx' => 'http-use-htx',
'http_connection_mode' => 'http_connection_mode',
'http_keep_alive_timeout' => 'http_keep_alive_timeout',
'http_request_timeout' => 'http_request_timeout',
'httplog' => 'httplog',
'log_format' => 'log_format',
'log_format_sd' => 'log_format_sd',
'log_separate_errors' => 'log_separate_errors',
'log_tag' => 'log_tag',
'maxconn' => 'maxconn',
'mode' => 'mode',
'name' => 'name',
'tcplog' => 'tcplog'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clflog' => 'setClflog',
'client_timeout' => 'setClientTimeout',
'clitcpka' => 'setClitcpka',
'contstats' => 'setContstats',
'default_backend' => 'setDefaultBackend',
'dontlognull' => 'setDontlognull',
'forwardfor' => 'setForwardfor',
'http_use_htx' => 'setHttpUseHtx',
'http_connection_mode' => 'setHttpConnectionMode',
'http_keep_alive_timeout' => 'setHttpKeepAliveTimeout',
'http_request_timeout' => 'setHttpRequestTimeout',
'httplog' => 'setHttplog',
'log_format' => 'setLogFormat',
'log_format_sd' => 'setLogFormatSd',
'log_separate_errors' => 'setLogSeparateErrors',
'log_tag' => 'setLogTag',
'maxconn' => 'setMaxconn',
'mode' => 'setMode',
'name' => 'setName',
'tcplog' => 'setTcplog'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clflog' => 'getClflog',
'client_timeout' => 'getClientTimeout',
'clitcpka' => 'getClitcpka',
'contstats' => 'getContstats',
'default_backend' => 'getDefaultBackend',
'dontlognull' => 'getDontlognull',
'forwardfor' => 'getForwardfor',
'http_use_htx' => 'getHttpUseHtx',
'http_connection_mode' => 'getHttpConnectionMode',
'http_keep_alive_timeout' => 'getHttpKeepAliveTimeout',
'http_request_timeout' => 'getHttpRequestTimeout',
'httplog' => 'getHttplog',
'log_format' => 'getLogFormat',
'log_format_sd' => 'getLogFormatSd',
'log_separate_errors' => 'getLogSeparateErrors',
'log_tag' => 'getLogTag',
'maxconn' => 'getMaxconn',
'mode' => 'getMode',
'name' => 'getName',
'tcplog' => 'getTcplog'    ];

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

    const CLITCPKA_ENABLED = 'enabled';
const CLITCPKA_DISABLED = 'disabled';
const CONTSTATS_ENABLED = 'enabled';
const DONTLOGNULL_ENABLED = 'enabled';
const DONTLOGNULL_DISABLED = 'disabled';
const HTTP_USE_HTX_ENABLED = 'enabled';
const HTTP_USE_HTX_DISABLED = 'disabled';
const HTTP_CONNECTION_MODE_HTTPCLOSE = 'httpclose';
const HTTP_CONNECTION_MODE_HTTP_SERVER_CLOSE = 'http-server-close';
const HTTP_CONNECTION_MODE_HTTP_KEEP_ALIVE = 'http-keep-alive';
const LOG_SEPARATE_ERRORS_ENABLED = 'enabled';
const LOG_SEPARATE_ERRORS_DISABLED = 'disabled';
const MODE_HTTP = 'http';
const MODE_TCP = 'tcp';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClitcpkaAllowableValues()
    {
        return [
            self::CLITCPKA_ENABLED,
self::CLITCPKA_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContstatsAllowableValues()
    {
        return [
            self::CONTSTATS_ENABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDontlognullAllowableValues()
    {
        return [
            self::DONTLOGNULL_ENABLED,
self::DONTLOGNULL_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpUseHtxAllowableValues()
    {
        return [
            self::HTTP_USE_HTX_ENABLED,
self::HTTP_USE_HTX_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpConnectionModeAllowableValues()
    {
        return [
            self::HTTP_CONNECTION_MODE_HTTPCLOSE,
self::HTTP_CONNECTION_MODE_HTTP_SERVER_CLOSE,
self::HTTP_CONNECTION_MODE_HTTP_KEEP_ALIVE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogSeparateErrorsAllowableValues()
    {
        return [
            self::LOG_SEPARATE_ERRORS_ENABLED,
self::LOG_SEPARATE_ERRORS_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_HTTP,
self::MODE_TCP,        ];
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
        $this->container['clflog'] = isset($data['clflog']) ? $data['clflog'] : null;
        $this->container['client_timeout'] = isset($data['client_timeout']) ? $data['client_timeout'] : null;
        $this->container['clitcpka'] = isset($data['clitcpka']) ? $data['clitcpka'] : null;
        $this->container['contstats'] = isset($data['contstats']) ? $data['contstats'] : null;
        $this->container['default_backend'] = isset($data['default_backend']) ? $data['default_backend'] : null;
        $this->container['dontlognull'] = isset($data['dontlognull']) ? $data['dontlognull'] : null;
        $this->container['forwardfor'] = isset($data['forwardfor']) ? $data['forwardfor'] : null;
        $this->container['http_use_htx'] = isset($data['http_use_htx']) ? $data['http_use_htx'] : null;
        $this->container['http_connection_mode'] = isset($data['http_connection_mode']) ? $data['http_connection_mode'] : null;
        $this->container['http_keep_alive_timeout'] = isset($data['http_keep_alive_timeout']) ? $data['http_keep_alive_timeout'] : null;
        $this->container['http_request_timeout'] = isset($data['http_request_timeout']) ? $data['http_request_timeout'] : null;
        $this->container['httplog'] = isset($data['httplog']) ? $data['httplog'] : null;
        $this->container['log_format'] = isset($data['log_format']) ? $data['log_format'] : null;
        $this->container['log_format_sd'] = isset($data['log_format_sd']) ? $data['log_format_sd'] : null;
        $this->container['log_separate_errors'] = isset($data['log_separate_errors']) ? $data['log_separate_errors'] : null;
        $this->container['log_tag'] = isset($data['log_tag']) ? $data['log_tag'] : null;
        $this->container['maxconn'] = isset($data['maxconn']) ? $data['maxconn'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tcplog'] = isset($data['tcplog']) ? $data['tcplog'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getClitcpkaAllowableValues();
        if (!is_null($this->container['clitcpka']) && !in_array($this->container['clitcpka'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'clitcpka', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContstatsAllowableValues();
        if (!is_null($this->container['contstats']) && !in_array($this->container['contstats'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contstats', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDontlognullAllowableValues();
        if (!is_null($this->container['dontlognull']) && !in_array($this->container['dontlognull'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dontlognull', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHttpUseHtxAllowableValues();
        if (!is_null($this->container['http_use_htx']) && !in_array($this->container['http_use_htx'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'http_use_htx', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHttpConnectionModeAllowableValues();
        if (!is_null($this->container['http_connection_mode']) && !in_array($this->container['http_connection_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'http_connection_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLogSeparateErrorsAllowableValues();
        if (!is_null($this->container['log_separate_errors']) && !in_array($this->container['log_separate_errors'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'log_separate_errors', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets clflog
     *
     * @return bool
     */
    public function getClflog()
    {
        return $this->container['clflog'];
    }

    /**
     * Sets clflog
     *
     * @param bool $clflog clflog
     *
     * @return $this
     */
    public function setClflog($clflog)
    {
        $this->container['clflog'] = $clflog;

        return $this;
    }

    /**
     * Gets client_timeout
     *
     * @return int
     */
    public function getClientTimeout()
    {
        return $this->container['client_timeout'];
    }

    /**
     * Sets client_timeout
     *
     * @param int $client_timeout client_timeout
     *
     * @return $this
     */
    public function setClientTimeout($client_timeout)
    {
        $this->container['client_timeout'] = $client_timeout;

        return $this;
    }

    /**
     * Gets clitcpka
     *
     * @return string
     */
    public function getClitcpka()
    {
        return $this->container['clitcpka'];
    }

    /**
     * Sets clitcpka
     *
     * @param string $clitcpka clitcpka
     *
     * @return $this
     */
    public function setClitcpka($clitcpka)
    {
        $allowedValues = $this->getClitcpkaAllowableValues();
        if (!is_null($clitcpka) && !in_array($clitcpka, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'clitcpka', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['clitcpka'] = $clitcpka;

        return $this;
    }

    /**
     * Gets contstats
     *
     * @return string
     */
    public function getContstats()
    {
        return $this->container['contstats'];
    }

    /**
     * Sets contstats
     *
     * @param string $contstats contstats
     *
     * @return $this
     */
    public function setContstats($contstats)
    {
        $allowedValues = $this->getContstatsAllowableValues();
        if (!is_null($contstats) && !in_array($contstats, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contstats', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contstats'] = $contstats;

        return $this;
    }

    /**
     * Gets default_backend
     *
     * @return string
     */
    public function getDefaultBackend()
    {
        return $this->container['default_backend'];
    }

    /**
     * Sets default_backend
     *
     * @param string $default_backend default_backend
     *
     * @return $this
     */
    public function setDefaultBackend($default_backend)
    {
        $this->container['default_backend'] = $default_backend;

        return $this;
    }

    /**
     * Gets dontlognull
     *
     * @return string
     */
    public function getDontlognull()
    {
        return $this->container['dontlognull'];
    }

    /**
     * Sets dontlognull
     *
     * @param string $dontlognull dontlognull
     *
     * @return $this
     */
    public function setDontlognull($dontlognull)
    {
        $allowedValues = $this->getDontlognullAllowableValues();
        if (!is_null($dontlognull) && !in_array($dontlognull, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dontlognull', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dontlognull'] = $dontlognull;

        return $this;
    }

    /**
     * Gets forwardfor
     *
     * @return \Swagger\Client\Model\Forwardfor
     */
    public function getForwardfor()
    {
        return $this->container['forwardfor'];
    }

    /**
     * Sets forwardfor
     *
     * @param \Swagger\Client\Model\Forwardfor $forwardfor forwardfor
     *
     * @return $this
     */
    public function setForwardfor($forwardfor)
    {
        $this->container['forwardfor'] = $forwardfor;

        return $this;
    }

    /**
     * Gets http_use_htx
     *
     * @return string
     */
    public function getHttpUseHtx()
    {
        return $this->container['http_use_htx'];
    }

    /**
     * Sets http_use_htx
     *
     * @param string $http_use_htx http_use_htx
     *
     * @return $this
     */
    public function setHttpUseHtx($http_use_htx)
    {
        $allowedValues = $this->getHttpUseHtxAllowableValues();
        if (!is_null($http_use_htx) && !in_array($http_use_htx, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_use_htx', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_use_htx'] = $http_use_htx;

        return $this;
    }

    /**
     * Gets http_connection_mode
     *
     * @return string
     */
    public function getHttpConnectionMode()
    {
        return $this->container['http_connection_mode'];
    }

    /**
     * Sets http_connection_mode
     *
     * @param string $http_connection_mode http_connection_mode
     *
     * @return $this
     */
    public function setHttpConnectionMode($http_connection_mode)
    {
        $allowedValues = $this->getHttpConnectionModeAllowableValues();
        if (!is_null($http_connection_mode) && !in_array($http_connection_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_connection_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_connection_mode'] = $http_connection_mode;

        return $this;
    }

    /**
     * Gets http_keep_alive_timeout
     *
     * @return int
     */
    public function getHttpKeepAliveTimeout()
    {
        return $this->container['http_keep_alive_timeout'];
    }

    /**
     * Sets http_keep_alive_timeout
     *
     * @param int $http_keep_alive_timeout http_keep_alive_timeout
     *
     * @return $this
     */
    public function setHttpKeepAliveTimeout($http_keep_alive_timeout)
    {
        $this->container['http_keep_alive_timeout'] = $http_keep_alive_timeout;

        return $this;
    }

    /**
     * Gets http_request_timeout
     *
     * @return int
     */
    public function getHttpRequestTimeout()
    {
        return $this->container['http_request_timeout'];
    }

    /**
     * Sets http_request_timeout
     *
     * @param int $http_request_timeout http_request_timeout
     *
     * @return $this
     */
    public function setHttpRequestTimeout($http_request_timeout)
    {
        $this->container['http_request_timeout'] = $http_request_timeout;

        return $this;
    }

    /**
     * Gets httplog
     *
     * @return bool
     */
    public function getHttplog()
    {
        return $this->container['httplog'];
    }

    /**
     * Sets httplog
     *
     * @param bool $httplog httplog
     *
     * @return $this
     */
    public function setHttplog($httplog)
    {
        $this->container['httplog'] = $httplog;

        return $this;
    }

    /**
     * Gets log_format
     *
     * @return string
     */
    public function getLogFormat()
    {
        return $this->container['log_format'];
    }

    /**
     * Sets log_format
     *
     * @param string $log_format log_format
     *
     * @return $this
     */
    public function setLogFormat($log_format)
    {
        $this->container['log_format'] = $log_format;

        return $this;
    }

    /**
     * Gets log_format_sd
     *
     * @return string
     */
    public function getLogFormatSd()
    {
        return $this->container['log_format_sd'];
    }

    /**
     * Sets log_format_sd
     *
     * @param string $log_format_sd log_format_sd
     *
     * @return $this
     */
    public function setLogFormatSd($log_format_sd)
    {
        $this->container['log_format_sd'] = $log_format_sd;

        return $this;
    }

    /**
     * Gets log_separate_errors
     *
     * @return string
     */
    public function getLogSeparateErrors()
    {
        return $this->container['log_separate_errors'];
    }

    /**
     * Sets log_separate_errors
     *
     * @param string $log_separate_errors log_separate_errors
     *
     * @return $this
     */
    public function setLogSeparateErrors($log_separate_errors)
    {
        $allowedValues = $this->getLogSeparateErrorsAllowableValues();
        if (!is_null($log_separate_errors) && !in_array($log_separate_errors, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'log_separate_errors', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['log_separate_errors'] = $log_separate_errors;

        return $this;
    }

    /**
     * Gets log_tag
     *
     * @return string
     */
    public function getLogTag()
    {
        return $this->container['log_tag'];
    }

    /**
     * Sets log_tag
     *
     * @param string $log_tag log_tag
     *
     * @return $this
     */
    public function setLogTag($log_tag)
    {
        $this->container['log_tag'] = $log_tag;

        return $this;
    }

    /**
     * Gets maxconn
     *
     * @return int
     */
    public function getMaxconn()
    {
        return $this->container['maxconn'];
    }

    /**
     * Sets maxconn
     *
     * @param int $maxconn maxconn
     *
     * @return $this
     */
    public function setMaxconn($maxconn)
    {
        $this->container['maxconn'] = $maxconn;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

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
     * Gets tcplog
     *
     * @return bool
     */
    public function getTcplog()
    {
        return $this->container['tcplog'];
    }

    /**
     * Sets tcplog
     *
     * @param bool $tcplog tcplog
     *
     * @return $this
     */
    public function setTcplog($tcplog)
    {
        $this->container['tcplog'] = $tcplog;

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
