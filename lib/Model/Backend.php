<?php
/**
 * Backend
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
 * Backend Class Doc Comment
 *
 * @category Class
 * @description HAProxy backend configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Backend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'backend';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abortonclose' => 'string',
'adv_check' => 'string',
'balance' => '\Swagger\Client\Model\Balance',
'check_timeout' => 'int',
'connect_timeout' => 'int',
'cookie' => '\Swagger\Client\Model\Cookie',
'default_server' => '\Swagger\Client\Model\DefaultServer',
'external_check' => 'string',
'external_check_command' => 'string',
'external_check_path' => 'string',
'forwardfor' => '\Swagger\Client\Model\Forwardfor',
'hash_type' => '\Swagger\Client\Model\BackendHashType',
'http_use_htx' => 'string',
'http_connection_mode' => 'string',
'http_keep_alive_timeout' => 'int',
'http_pretend_keepalive' => 'string',
'http_request_timeout' => 'int',
'httpchk' => '\Swagger\Client\Model\Httpchk',
'log_tag' => 'string',
'mode' => 'string',
'name' => 'string',
'queue_timeout' => 'int',
'redispatch' => '\Swagger\Client\Model\Redispatch',
'retries' => 'int',
'server_timeout' => 'int',
'stick_table' => '\Swagger\Client\Model\BackendStickTable'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'abortonclose' => null,
'adv_check' => null,
'balance' => null,
'check_timeout' => null,
'connect_timeout' => null,
'cookie' => null,
'default_server' => null,
'external_check' => null,
'external_check_command' => null,
'external_check_path' => null,
'forwardfor' => null,
'hash_type' => null,
'http_use_htx' => null,
'http_connection_mode' => null,
'http_keep_alive_timeout' => null,
'http_pretend_keepalive' => null,
'http_request_timeout' => null,
'httpchk' => null,
'log_tag' => null,
'mode' => null,
'name' => null,
'queue_timeout' => null,
'redispatch' => null,
'retries' => null,
'server_timeout' => null,
'stick_table' => null    ];

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
        'abortonclose' => 'abortonclose',
'adv_check' => 'adv_check',
'balance' => 'balance',
'check_timeout' => 'check_timeout',
'connect_timeout' => 'connect_timeout',
'cookie' => 'cookie',
'default_server' => 'default_server',
'external_check' => 'external_check',
'external_check_command' => 'external_check_command',
'external_check_path' => 'external_check_path',
'forwardfor' => 'forwardfor',
'hash_type' => 'hash_type',
'http_use_htx' => 'http-use-htx',
'http_connection_mode' => 'http_connection_mode',
'http_keep_alive_timeout' => 'http_keep_alive_timeout',
'http_pretend_keepalive' => 'http_pretend_keepalive',
'http_request_timeout' => 'http_request_timeout',
'httpchk' => 'httpchk',
'log_tag' => 'log_tag',
'mode' => 'mode',
'name' => 'name',
'queue_timeout' => 'queue_timeout',
'redispatch' => 'redispatch',
'retries' => 'retries',
'server_timeout' => 'server_timeout',
'stick_table' => 'stick_table'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abortonclose' => 'setAbortonclose',
'adv_check' => 'setAdvCheck',
'balance' => 'setBalance',
'check_timeout' => 'setCheckTimeout',
'connect_timeout' => 'setConnectTimeout',
'cookie' => 'setCookie',
'default_server' => 'setDefaultServer',
'external_check' => 'setExternalCheck',
'external_check_command' => 'setExternalCheckCommand',
'external_check_path' => 'setExternalCheckPath',
'forwardfor' => 'setForwardfor',
'hash_type' => 'setHashType',
'http_use_htx' => 'setHttpUseHtx',
'http_connection_mode' => 'setHttpConnectionMode',
'http_keep_alive_timeout' => 'setHttpKeepAliveTimeout',
'http_pretend_keepalive' => 'setHttpPretendKeepalive',
'http_request_timeout' => 'setHttpRequestTimeout',
'httpchk' => 'setHttpchk',
'log_tag' => 'setLogTag',
'mode' => 'setMode',
'name' => 'setName',
'queue_timeout' => 'setQueueTimeout',
'redispatch' => 'setRedispatch',
'retries' => 'setRetries',
'server_timeout' => 'setServerTimeout',
'stick_table' => 'setStickTable'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abortonclose' => 'getAbortonclose',
'adv_check' => 'getAdvCheck',
'balance' => 'getBalance',
'check_timeout' => 'getCheckTimeout',
'connect_timeout' => 'getConnectTimeout',
'cookie' => 'getCookie',
'default_server' => 'getDefaultServer',
'external_check' => 'getExternalCheck',
'external_check_command' => 'getExternalCheckCommand',
'external_check_path' => 'getExternalCheckPath',
'forwardfor' => 'getForwardfor',
'hash_type' => 'getHashType',
'http_use_htx' => 'getHttpUseHtx',
'http_connection_mode' => 'getHttpConnectionMode',
'http_keep_alive_timeout' => 'getHttpKeepAliveTimeout',
'http_pretend_keepalive' => 'getHttpPretendKeepalive',
'http_request_timeout' => 'getHttpRequestTimeout',
'httpchk' => 'getHttpchk',
'log_tag' => 'getLogTag',
'mode' => 'getMode',
'name' => 'getName',
'queue_timeout' => 'getQueueTimeout',
'redispatch' => 'getRedispatch',
'retries' => 'getRetries',
'server_timeout' => 'getServerTimeout',
'stick_table' => 'getStickTable'    ];

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

    const ABORTONCLOSE_ENABLED = 'enabled';
const ABORTONCLOSE_DISABLED = 'disabled';
const ADV_CHECK_SSL_HELLO_CHK = 'ssl-hello-chk';
const ADV_CHECK_SMTPCHK = 'smtpchk';
const ADV_CHECK_LDAP_CHECK = 'ldap-check';
const ADV_CHECK_MYSQL_CHECK = 'mysql-check';
const ADV_CHECK_PGSQL_CHECK = 'pgsql-check';
const ADV_CHECK_TCP_CHECK = 'tcp-check';
const ADV_CHECK_REDIS_CHECK = 'redis-check';
const EXTERNAL_CHECK_ENABLED = 'enabled';
const EXTERNAL_CHECK_DISABLED = 'disabled';
const HTTP_USE_HTX_ENABLED = 'enabled';
const HTTP_USE_HTX_DISABLED = 'disabled';
const HTTP_CONNECTION_MODE_HTTPCLOSE = 'httpclose';
const HTTP_CONNECTION_MODE_HTTP_SERVER_CLOSE = 'http-server-close';
const HTTP_CONNECTION_MODE_HTTP_KEEP_ALIVE = 'http-keep-alive';
const HTTP_PRETEND_KEEPALIVE_ENABLED = 'enabled';
const HTTP_PRETEND_KEEPALIVE_DISABLED = 'disabled';
const MODE_HTTP = 'http';
const MODE_TCP = 'tcp';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAbortoncloseAllowableValues()
    {
        return [
            self::ABORTONCLOSE_ENABLED,
self::ABORTONCLOSE_DISABLED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdvCheckAllowableValues()
    {
        return [
            self::ADV_CHECK_SSL_HELLO_CHK,
self::ADV_CHECK_SMTPCHK,
self::ADV_CHECK_LDAP_CHECK,
self::ADV_CHECK_MYSQL_CHECK,
self::ADV_CHECK_PGSQL_CHECK,
self::ADV_CHECK_TCP_CHECK,
self::ADV_CHECK_REDIS_CHECK,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExternalCheckAllowableValues()
    {
        return [
            self::EXTERNAL_CHECK_ENABLED,
self::EXTERNAL_CHECK_DISABLED,        ];
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
    public function getHttpPretendKeepaliveAllowableValues()
    {
        return [
            self::HTTP_PRETEND_KEEPALIVE_ENABLED,
self::HTTP_PRETEND_KEEPALIVE_DISABLED,        ];
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
        $this->container['abortonclose'] = isset($data['abortonclose']) ? $data['abortonclose'] : null;
        $this->container['adv_check'] = isset($data['adv_check']) ? $data['adv_check'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['check_timeout'] = isset($data['check_timeout']) ? $data['check_timeout'] : null;
        $this->container['connect_timeout'] = isset($data['connect_timeout']) ? $data['connect_timeout'] : null;
        $this->container['cookie'] = isset($data['cookie']) ? $data['cookie'] : null;
        $this->container['default_server'] = isset($data['default_server']) ? $data['default_server'] : null;
        $this->container['external_check'] = isset($data['external_check']) ? $data['external_check'] : null;
        $this->container['external_check_command'] = isset($data['external_check_command']) ? $data['external_check_command'] : null;
        $this->container['external_check_path'] = isset($data['external_check_path']) ? $data['external_check_path'] : null;
        $this->container['forwardfor'] = isset($data['forwardfor']) ? $data['forwardfor'] : null;
        $this->container['hash_type'] = isset($data['hash_type']) ? $data['hash_type'] : null;
        $this->container['http_use_htx'] = isset($data['http_use_htx']) ? $data['http_use_htx'] : null;
        $this->container['http_connection_mode'] = isset($data['http_connection_mode']) ? $data['http_connection_mode'] : null;
        $this->container['http_keep_alive_timeout'] = isset($data['http_keep_alive_timeout']) ? $data['http_keep_alive_timeout'] : null;
        $this->container['http_pretend_keepalive'] = isset($data['http_pretend_keepalive']) ? $data['http_pretend_keepalive'] : null;
        $this->container['http_request_timeout'] = isset($data['http_request_timeout']) ? $data['http_request_timeout'] : null;
        $this->container['httpchk'] = isset($data['httpchk']) ? $data['httpchk'] : null;
        $this->container['log_tag'] = isset($data['log_tag']) ? $data['log_tag'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['queue_timeout'] = isset($data['queue_timeout']) ? $data['queue_timeout'] : null;
        $this->container['redispatch'] = isset($data['redispatch']) ? $data['redispatch'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['server_timeout'] = isset($data['server_timeout']) ? $data['server_timeout'] : null;
        $this->container['stick_table'] = isset($data['stick_table']) ? $data['stick_table'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAbortoncloseAllowableValues();
        if (!is_null($this->container['abortonclose']) && !in_array($this->container['abortonclose'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'abortonclose', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdvCheckAllowableValues();
        if (!is_null($this->container['adv_check']) && !in_array($this->container['adv_check'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'adv_check', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExternalCheckAllowableValues();
        if (!is_null($this->container['external_check']) && !in_array($this->container['external_check'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'external_check', must be one of '%s'",
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

        $allowedValues = $this->getHttpPretendKeepaliveAllowableValues();
        if (!is_null($this->container['http_pretend_keepalive']) && !in_array($this->container['http_pretend_keepalive'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'http_pretend_keepalive', must be one of '%s'",
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
     * Gets abortonclose
     *
     * @return string
     */
    public function getAbortonclose()
    {
        return $this->container['abortonclose'];
    }

    /**
     * Sets abortonclose
     *
     * @param string $abortonclose abortonclose
     *
     * @return $this
     */
    public function setAbortonclose($abortonclose)
    {
        $allowedValues = $this->getAbortoncloseAllowableValues();
        if (!is_null($abortonclose) && !in_array($abortonclose, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'abortonclose', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['abortonclose'] = $abortonclose;

        return $this;
    }

    /**
     * Gets adv_check
     *
     * @return string
     */
    public function getAdvCheck()
    {
        return $this->container['adv_check'];
    }

    /**
     * Sets adv_check
     *
     * @param string $adv_check adv_check
     *
     * @return $this
     */
    public function setAdvCheck($adv_check)
    {
        $allowedValues = $this->getAdvCheckAllowableValues();
        if (!is_null($adv_check) && !in_array($adv_check, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'adv_check', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['adv_check'] = $adv_check;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \Swagger\Client\Model\Balance
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \Swagger\Client\Model\Balance $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets check_timeout
     *
     * @return int
     */
    public function getCheckTimeout()
    {
        return $this->container['check_timeout'];
    }

    /**
     * Sets check_timeout
     *
     * @param int $check_timeout check_timeout
     *
     * @return $this
     */
    public function setCheckTimeout($check_timeout)
    {
        $this->container['check_timeout'] = $check_timeout;

        return $this;
    }

    /**
     * Gets connect_timeout
     *
     * @return int
     */
    public function getConnectTimeout()
    {
        return $this->container['connect_timeout'];
    }

    /**
     * Sets connect_timeout
     *
     * @param int $connect_timeout connect_timeout
     *
     * @return $this
     */
    public function setConnectTimeout($connect_timeout)
    {
        $this->container['connect_timeout'] = $connect_timeout;

        return $this;
    }

    /**
     * Gets cookie
     *
     * @return \Swagger\Client\Model\Cookie
     */
    public function getCookie()
    {
        return $this->container['cookie'];
    }

    /**
     * Sets cookie
     *
     * @param \Swagger\Client\Model\Cookie $cookie cookie
     *
     * @return $this
     */
    public function setCookie($cookie)
    {
        $this->container['cookie'] = $cookie;

        return $this;
    }

    /**
     * Gets default_server
     *
     * @return \Swagger\Client\Model\DefaultServer
     */
    public function getDefaultServer()
    {
        return $this->container['default_server'];
    }

    /**
     * Sets default_server
     *
     * @param \Swagger\Client\Model\DefaultServer $default_server default_server
     *
     * @return $this
     */
    public function setDefaultServer($default_server)
    {
        $this->container['default_server'] = $default_server;

        return $this;
    }

    /**
     * Gets external_check
     *
     * @return string
     */
    public function getExternalCheck()
    {
        return $this->container['external_check'];
    }

    /**
     * Sets external_check
     *
     * @param string $external_check external_check
     *
     * @return $this
     */
    public function setExternalCheck($external_check)
    {
        $allowedValues = $this->getExternalCheckAllowableValues();
        if (!is_null($external_check) && !in_array($external_check, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'external_check', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['external_check'] = $external_check;

        return $this;
    }

    /**
     * Gets external_check_command
     *
     * @return string
     */
    public function getExternalCheckCommand()
    {
        return $this->container['external_check_command'];
    }

    /**
     * Sets external_check_command
     *
     * @param string $external_check_command external_check_command
     *
     * @return $this
     */
    public function setExternalCheckCommand($external_check_command)
    {
        $this->container['external_check_command'] = $external_check_command;

        return $this;
    }

    /**
     * Gets external_check_path
     *
     * @return string
     */
    public function getExternalCheckPath()
    {
        return $this->container['external_check_path'];
    }

    /**
     * Sets external_check_path
     *
     * @param string $external_check_path external_check_path
     *
     * @return $this
     */
    public function setExternalCheckPath($external_check_path)
    {
        $this->container['external_check_path'] = $external_check_path;

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
     * Gets hash_type
     *
     * @return \Swagger\Client\Model\BackendHashType
     */
    public function getHashType()
    {
        return $this->container['hash_type'];
    }

    /**
     * Sets hash_type
     *
     * @param \Swagger\Client\Model\BackendHashType $hash_type hash_type
     *
     * @return $this
     */
    public function setHashType($hash_type)
    {
        $this->container['hash_type'] = $hash_type;

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
     * Gets http_pretend_keepalive
     *
     * @return string
     */
    public function getHttpPretendKeepalive()
    {
        return $this->container['http_pretend_keepalive'];
    }

    /**
     * Sets http_pretend_keepalive
     *
     * @param string $http_pretend_keepalive http_pretend_keepalive
     *
     * @return $this
     */
    public function setHttpPretendKeepalive($http_pretend_keepalive)
    {
        $allowedValues = $this->getHttpPretendKeepaliveAllowableValues();
        if (!is_null($http_pretend_keepalive) && !in_array($http_pretend_keepalive, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_pretend_keepalive', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_pretend_keepalive'] = $http_pretend_keepalive;

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
     * Gets httpchk
     *
     * @return \Swagger\Client\Model\Httpchk
     */
    public function getHttpchk()
    {
        return $this->container['httpchk'];
    }

    /**
     * Sets httpchk
     *
     * @param \Swagger\Client\Model\Httpchk $httpchk httpchk
     *
     * @return $this
     */
    public function setHttpchk($httpchk)
    {
        $this->container['httpchk'] = $httpchk;

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
     * Gets queue_timeout
     *
     * @return int
     */
    public function getQueueTimeout()
    {
        return $this->container['queue_timeout'];
    }

    /**
     * Sets queue_timeout
     *
     * @param int $queue_timeout queue_timeout
     *
     * @return $this
     */
    public function setQueueTimeout($queue_timeout)
    {
        $this->container['queue_timeout'] = $queue_timeout;

        return $this;
    }

    /**
     * Gets redispatch
     *
     * @return \Swagger\Client\Model\Redispatch
     */
    public function getRedispatch()
    {
        return $this->container['redispatch'];
    }

    /**
     * Sets redispatch
     *
     * @param \Swagger\Client\Model\Redispatch $redispatch redispatch
     *
     * @return $this
     */
    public function setRedispatch($redispatch)
    {
        $this->container['redispatch'] = $redispatch;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int $retries retries
     *
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets server_timeout
     *
     * @return int
     */
    public function getServerTimeout()
    {
        return $this->container['server_timeout'];
    }

    /**
     * Sets server_timeout
     *
     * @param int $server_timeout server_timeout
     *
     * @return $this
     */
    public function setServerTimeout($server_timeout)
    {
        $this->container['server_timeout'] = $server_timeout;

        return $this;
    }

    /**
     * Gets stick_table
     *
     * @return \Swagger\Client\Model\BackendStickTable
     */
    public function getStickTable()
    {
        return $this->container['stick_table'];
    }

    /**
     * Sets stick_table
     *
     * @param \Swagger\Client\Model\BackendStickTable $stick_table stick_table
     *
     * @return $this
     */
    public function setStickTable($stick_table)
    {
        $this->container['stick_table'] = $stick_table;

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
