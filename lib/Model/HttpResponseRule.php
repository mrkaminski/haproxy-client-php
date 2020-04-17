<?php
/**
 * HttpResponseRule
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
 * HttpResponseRule Class Doc Comment
 *
 * @category Class
 * @description HAProxy HTTP response rule configuration (corresponds to http-response directives)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpResponseRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'http_response_rule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acl_file' => 'string',
'acl_keyfmt' => 'string',
'capture_id' => 'int',
'capture_sample' => 'string',
'cond' => 'string',
'cond_test' => 'string',
'hdr_format' => 'string',
'hdr_match' => 'string',
'hdr_name' => 'string',
'id' => 'int',
'log_level' => 'string',
'redir_code' => 'int',
'redir_option' => 'string',
'redir_type' => 'string',
'redir_value' => 'string',
'spoe_engine' => 'string',
'spoe_group' => 'string',
'status' => 'int',
'status_reason' => 'string',
'type' => 'string',
'var_expr' => 'string',
'var_name' => 'string',
'var_scope' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acl_file' => null,
'acl_keyfmt' => null,
'capture_id' => null,
'capture_sample' => null,
'cond' => null,
'cond_test' => null,
'hdr_format' => null,
'hdr_match' => null,
'hdr_name' => null,
'id' => null,
'log_level' => null,
'redir_code' => null,
'redir_option' => null,
'redir_type' => null,
'redir_value' => null,
'spoe_engine' => null,
'spoe_group' => null,
'status' => null,
'status_reason' => null,
'type' => null,
'var_expr' => null,
'var_name' => null,
'var_scope' => null    ];

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
        'acl_file' => 'acl_file',
'acl_keyfmt' => 'acl_keyfmt',
'capture_id' => 'capture_id',
'capture_sample' => 'capture_sample',
'cond' => 'cond',
'cond_test' => 'cond_test',
'hdr_format' => 'hdr_format',
'hdr_match' => 'hdr_match',
'hdr_name' => 'hdr_name',
'id' => 'id',
'log_level' => 'log_level',
'redir_code' => 'redir_code',
'redir_option' => 'redir_option',
'redir_type' => 'redir_type',
'redir_value' => 'redir_value',
'spoe_engine' => 'spoe_engine',
'spoe_group' => 'spoe_group',
'status' => 'status',
'status_reason' => 'status_reason',
'type' => 'type',
'var_expr' => 'var_expr',
'var_name' => 'var_name',
'var_scope' => 'var_scope'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acl_file' => 'setAclFile',
'acl_keyfmt' => 'setAclKeyfmt',
'capture_id' => 'setCaptureId',
'capture_sample' => 'setCaptureSample',
'cond' => 'setCond',
'cond_test' => 'setCondTest',
'hdr_format' => 'setHdrFormat',
'hdr_match' => 'setHdrMatch',
'hdr_name' => 'setHdrName',
'id' => 'setId',
'log_level' => 'setLogLevel',
'redir_code' => 'setRedirCode',
'redir_option' => 'setRedirOption',
'redir_type' => 'setRedirType',
'redir_value' => 'setRedirValue',
'spoe_engine' => 'setSpoeEngine',
'spoe_group' => 'setSpoeGroup',
'status' => 'setStatus',
'status_reason' => 'setStatusReason',
'type' => 'setType',
'var_expr' => 'setVarExpr',
'var_name' => 'setVarName',
'var_scope' => 'setVarScope'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acl_file' => 'getAclFile',
'acl_keyfmt' => 'getAclKeyfmt',
'capture_id' => 'getCaptureId',
'capture_sample' => 'getCaptureSample',
'cond' => 'getCond',
'cond_test' => 'getCondTest',
'hdr_format' => 'getHdrFormat',
'hdr_match' => 'getHdrMatch',
'hdr_name' => 'getHdrName',
'id' => 'getId',
'log_level' => 'getLogLevel',
'redir_code' => 'getRedirCode',
'redir_option' => 'getRedirOption',
'redir_type' => 'getRedirType',
'redir_value' => 'getRedirValue',
'spoe_engine' => 'getSpoeEngine',
'spoe_group' => 'getSpoeGroup',
'status' => 'getStatus',
'status_reason' => 'getStatusReason',
'type' => 'getType',
'var_expr' => 'getVarExpr',
'var_name' => 'getVarName',
'var_scope' => 'getVarScope'    ];

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

    const COND__IF = 'if';
const COND_UNLESS = 'unless';
const LOG_LEVEL_EMERG = 'emerg';
const LOG_LEVEL_ALERT = 'alert';
const LOG_LEVEL_CRIT = 'crit';
const LOG_LEVEL_ERR = 'err';
const LOG_LEVEL_WARNING = 'warning';
const LOG_LEVEL_NOTICE = 'notice';
const LOG_LEVEL_INFO = 'info';
const LOG_LEVEL_DEBUG = 'debug';
const LOG_LEVEL_SILENT = 'silent';
const REDIR_CODE_301 = 301;
const REDIR_CODE_302 = 302;
const REDIR_CODE_303 = 303;
const REDIR_TYPE_LOCATION = 'location';
const REDIR_TYPE_PREFIX = 'prefix';
const REDIR_TYPE_SCHEME = 'scheme';
const TYPE_ALLOW = 'allow';
const TYPE_DENY = 'deny';
const TYPE_REDIRECT = 'redirect';
const TYPE_ADD_HEADER = 'add-header';
const TYPE_SET_HEADER = 'set-header';
const TYPE_DEL_HEADER = 'del-header';
const TYPE_SET_LOG_LEVEL = 'set-log-level';
const TYPE_SET_VAR = 'set-var';
const TYPE_SET_STATUS = 'set-status';
const TYPE_SEND_SPOE_GROUP = 'send-spoe-group';
const TYPE_REPLACE_HEADER = 'replace-header';
const TYPE_REPLACE_VALUE = 'replace-value';
const TYPE_ADD_ACL = 'add-acl';
const TYPE_DEL_ACL = 'del-acl';
const TYPE_CAPTURE = 'capture';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCondAllowableValues()
    {
        return [
            self::COND__IF,
self::COND_UNLESS,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLogLevelAllowableValues()
    {
        return [
            self::LOG_LEVEL_EMERG,
self::LOG_LEVEL_ALERT,
self::LOG_LEVEL_CRIT,
self::LOG_LEVEL_ERR,
self::LOG_LEVEL_WARNING,
self::LOG_LEVEL_NOTICE,
self::LOG_LEVEL_INFO,
self::LOG_LEVEL_DEBUG,
self::LOG_LEVEL_SILENT,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedirCodeAllowableValues()
    {
        return [
            self::REDIR_CODE_301,
self::REDIR_CODE_302,
self::REDIR_CODE_303,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedirTypeAllowableValues()
    {
        return [
            self::REDIR_TYPE_LOCATION,
self::REDIR_TYPE_PREFIX,
self::REDIR_TYPE_SCHEME,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALLOW,
self::TYPE_DENY,
self::TYPE_REDIRECT,
self::TYPE_ADD_HEADER,
self::TYPE_SET_HEADER,
self::TYPE_DEL_HEADER,
self::TYPE_SET_LOG_LEVEL,
self::TYPE_SET_VAR,
self::TYPE_SET_STATUS,
self::TYPE_SEND_SPOE_GROUP,
self::TYPE_REPLACE_HEADER,
self::TYPE_REPLACE_VALUE,
self::TYPE_ADD_ACL,
self::TYPE_DEL_ACL,
self::TYPE_CAPTURE,        ];
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
        $this->container['acl_file'] = isset($data['acl_file']) ? $data['acl_file'] : null;
        $this->container['acl_keyfmt'] = isset($data['acl_keyfmt']) ? $data['acl_keyfmt'] : null;
        $this->container['capture_id'] = isset($data['capture_id']) ? $data['capture_id'] : null;
        $this->container['capture_sample'] = isset($data['capture_sample']) ? $data['capture_sample'] : null;
        $this->container['cond'] = isset($data['cond']) ? $data['cond'] : null;
        $this->container['cond_test'] = isset($data['cond_test']) ? $data['cond_test'] : null;
        $this->container['hdr_format'] = isset($data['hdr_format']) ? $data['hdr_format'] : null;
        $this->container['hdr_match'] = isset($data['hdr_match']) ? $data['hdr_match'] : null;
        $this->container['hdr_name'] = isset($data['hdr_name']) ? $data['hdr_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['log_level'] = isset($data['log_level']) ? $data['log_level'] : null;
        $this->container['redir_code'] = isset($data['redir_code']) ? $data['redir_code'] : null;
        $this->container['redir_option'] = isset($data['redir_option']) ? $data['redir_option'] : null;
        $this->container['redir_type'] = isset($data['redir_type']) ? $data['redir_type'] : null;
        $this->container['redir_value'] = isset($data['redir_value']) ? $data['redir_value'] : null;
        $this->container['spoe_engine'] = isset($data['spoe_engine']) ? $data['spoe_engine'] : null;
        $this->container['spoe_group'] = isset($data['spoe_group']) ? $data['spoe_group'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_reason'] = isset($data['status_reason']) ? $data['status_reason'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['var_expr'] = isset($data['var_expr']) ? $data['var_expr'] : null;
        $this->container['var_name'] = isset($data['var_name']) ? $data['var_name'] : null;
        $this->container['var_scope'] = isset($data['var_scope']) ? $data['var_scope'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCondAllowableValues();
        if (!is_null($this->container['cond']) && !in_array($this->container['cond'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cond', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getLogLevelAllowableValues();
        if (!is_null($this->container['log_level']) && !in_array($this->container['log_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'log_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRedirCodeAllowableValues();
        if (!is_null($this->container['redir_code']) && !in_array($this->container['redir_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'redir_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRedirTypeAllowableValues();
        if (!is_null($this->container['redir_type']) && !in_array($this->container['redir_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'redir_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets acl_file
     *
     * @return string
     */
    public function getAclFile()
    {
        return $this->container['acl_file'];
    }

    /**
     * Sets acl_file
     *
     * @param string $acl_file acl_file
     *
     * @return $this
     */
    public function setAclFile($acl_file)
    {
        $this->container['acl_file'] = $acl_file;

        return $this;
    }

    /**
     * Gets acl_keyfmt
     *
     * @return string
     */
    public function getAclKeyfmt()
    {
        return $this->container['acl_keyfmt'];
    }

    /**
     * Sets acl_keyfmt
     *
     * @param string $acl_keyfmt acl_keyfmt
     *
     * @return $this
     */
    public function setAclKeyfmt($acl_keyfmt)
    {
        $this->container['acl_keyfmt'] = $acl_keyfmt;

        return $this;
    }

    /**
     * Gets capture_id
     *
     * @return int
     */
    public function getCaptureId()
    {
        return $this->container['capture_id'];
    }

    /**
     * Sets capture_id
     *
     * @param int $capture_id capture_id
     *
     * @return $this
     */
    public function setCaptureId($capture_id)
    {
        $this->container['capture_id'] = $capture_id;

        return $this;
    }

    /**
     * Gets capture_sample
     *
     * @return string
     */
    public function getCaptureSample()
    {
        return $this->container['capture_sample'];
    }

    /**
     * Sets capture_sample
     *
     * @param string $capture_sample capture_sample
     *
     * @return $this
     */
    public function setCaptureSample($capture_sample)
    {
        $this->container['capture_sample'] = $capture_sample;

        return $this;
    }

    /**
     * Gets cond
     *
     * @return string
     */
    public function getCond()
    {
        return $this->container['cond'];
    }

    /**
     * Sets cond
     *
     * @param string $cond cond
     *
     * @return $this
     */
    public function setCond($cond)
    {
        $allowedValues = $this->getCondAllowableValues();
        if (!is_null($cond) && !in_array($cond, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cond', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cond'] = $cond;

        return $this;
    }

    /**
     * Gets cond_test
     *
     * @return string
     */
    public function getCondTest()
    {
        return $this->container['cond_test'];
    }

    /**
     * Sets cond_test
     *
     * @param string $cond_test cond_test
     *
     * @return $this
     */
    public function setCondTest($cond_test)
    {
        $this->container['cond_test'] = $cond_test;

        return $this;
    }

    /**
     * Gets hdr_format
     *
     * @return string
     */
    public function getHdrFormat()
    {
        return $this->container['hdr_format'];
    }

    /**
     * Sets hdr_format
     *
     * @param string $hdr_format hdr_format
     *
     * @return $this
     */
    public function setHdrFormat($hdr_format)
    {
        $this->container['hdr_format'] = $hdr_format;

        return $this;
    }

    /**
     * Gets hdr_match
     *
     * @return string
     */
    public function getHdrMatch()
    {
        return $this->container['hdr_match'];
    }

    /**
     * Sets hdr_match
     *
     * @param string $hdr_match hdr_match
     *
     * @return $this
     */
    public function setHdrMatch($hdr_match)
    {
        $this->container['hdr_match'] = $hdr_match;

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
     * Gets log_level
     *
     * @return string
     */
    public function getLogLevel()
    {
        return $this->container['log_level'];
    }

    /**
     * Sets log_level
     *
     * @param string $log_level log_level
     *
     * @return $this
     */
    public function setLogLevel($log_level)
    {
        $allowedValues = $this->getLogLevelAllowableValues();
        if (!is_null($log_level) && !in_array($log_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'log_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['log_level'] = $log_level;

        return $this;
    }

    /**
     * Gets redir_code
     *
     * @return int
     */
    public function getRedirCode()
    {
        return $this->container['redir_code'];
    }

    /**
     * Sets redir_code
     *
     * @param int $redir_code redir_code
     *
     * @return $this
     */
    public function setRedirCode($redir_code)
    {
        $allowedValues = $this->getRedirCodeAllowableValues();
        if (!is_null($redir_code) && !in_array($redir_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'redir_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redir_code'] = $redir_code;

        return $this;
    }

    /**
     * Gets redir_option
     *
     * @return string
     */
    public function getRedirOption()
    {
        return $this->container['redir_option'];
    }

    /**
     * Sets redir_option
     *
     * @param string $redir_option redir_option
     *
     * @return $this
     */
    public function setRedirOption($redir_option)
    {
        $this->container['redir_option'] = $redir_option;

        return $this;
    }

    /**
     * Gets redir_type
     *
     * @return string
     */
    public function getRedirType()
    {
        return $this->container['redir_type'];
    }

    /**
     * Sets redir_type
     *
     * @param string $redir_type redir_type
     *
     * @return $this
     */
    public function setRedirType($redir_type)
    {
        $allowedValues = $this->getRedirTypeAllowableValues();
        if (!is_null($redir_type) && !in_array($redir_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'redir_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redir_type'] = $redir_type;

        return $this;
    }

    /**
     * Gets redir_value
     *
     * @return string
     */
    public function getRedirValue()
    {
        return $this->container['redir_value'];
    }

    /**
     * Sets redir_value
     *
     * @param string $redir_value redir_value
     *
     * @return $this
     */
    public function setRedirValue($redir_value)
    {
        $this->container['redir_value'] = $redir_value;

        return $this;
    }

    /**
     * Gets spoe_engine
     *
     * @return string
     */
    public function getSpoeEngine()
    {
        return $this->container['spoe_engine'];
    }

    /**
     * Sets spoe_engine
     *
     * @param string $spoe_engine spoe_engine
     *
     * @return $this
     */
    public function setSpoeEngine($spoe_engine)
    {
        $this->container['spoe_engine'] = $spoe_engine;

        return $this;
    }

    /**
     * Gets spoe_group
     *
     * @return string
     */
    public function getSpoeGroup()
    {
        return $this->container['spoe_group'];
    }

    /**
     * Sets spoe_group
     *
     * @param string $spoe_group spoe_group
     *
     * @return $this
     */
    public function setSpoeGroup($spoe_group)
    {
        $this->container['spoe_group'] = $spoe_group;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string
     */
    public function getStatusReason()
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string $status_reason status_reason
     *
     * @return $this
     */
    public function setStatusReason($status_reason)
    {
        $this->container['status_reason'] = $status_reason;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets var_expr
     *
     * @return string
     */
    public function getVarExpr()
    {
        return $this->container['var_expr'];
    }

    /**
     * Sets var_expr
     *
     * @param string $var_expr var_expr
     *
     * @return $this
     */
    public function setVarExpr($var_expr)
    {
        $this->container['var_expr'] = $var_expr;

        return $this;
    }

    /**
     * Gets var_name
     *
     * @return string
     */
    public function getVarName()
    {
        return $this->container['var_name'];
    }

    /**
     * Sets var_name
     *
     * @param string $var_name var_name
     *
     * @return $this
     */
    public function setVarName($var_name)
    {
        $this->container['var_name'] = $var_name;

        return $this;
    }

    /**
     * Gets var_scope
     *
     * @return string
     */
    public function getVarScope()
    {
        return $this->container['var_scope'];
    }

    /**
     * Sets var_scope
     *
     * @param string $var_scope var_scope
     *
     * @return $this
     */
    public function setVarScope($var_scope)
    {
        $this->container['var_scope'] = $var_scope;

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