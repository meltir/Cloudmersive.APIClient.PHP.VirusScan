<?php
/**
 * WebsiteScanResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * virusapi
 *
 * The Cloudmersive Virus Scan API lets you scan files and content for viruses and identify security issues with content.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * WebsiteScanResult Class Doc Comment
 *
 * @category Class
 * @description Result of running a website scan
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebsiteScanResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebsiteScanResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clean_result' => 'bool',
        'website_threat_type' => 'string',
        'found_viruses' => '\Swagger\Client\Model\VirusFound[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clean_result' => null,
        'website_threat_type' => null,
        'found_viruses' => null
    ];

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
        'clean_result' => 'CleanResult',
        'website_threat_type' => 'WebsiteThreatType',
        'found_viruses' => 'FoundViruses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clean_result' => 'setCleanResult',
        'website_threat_type' => 'setWebsiteThreatType',
        'found_viruses' => 'setFoundViruses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clean_result' => 'getCleanResult',
        'website_threat_type' => 'getWebsiteThreatType',
        'found_viruses' => 'getFoundViruses'
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
        return self::$swaggerModelName;
    }

    const WEBSITE_THREAT_TYPE_NONE = 'None';
    const WEBSITE_THREAT_TYPE_MALWARE = 'Malware';
    const WEBSITE_THREAT_TYPE_PHISHING = 'Phishing';
    const WEBSITE_THREAT_TYPE_FORCED_DOWNLOAD = 'ForcedDownload';
    const WEBSITE_THREAT_TYPE_UNABLE_TO_CONNECT = 'UnableToConnect';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebsiteThreatTypeAllowableValues()
    {
        return [
            self::WEBSITE_THREAT_TYPE_NONE,
            self::WEBSITE_THREAT_TYPE_MALWARE,
            self::WEBSITE_THREAT_TYPE_PHISHING,
            self::WEBSITE_THREAT_TYPE_FORCED_DOWNLOAD,
            self::WEBSITE_THREAT_TYPE_UNABLE_TO_CONNECT,
        ];
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
        $this->container['clean_result'] = isset($data['clean_result']) ? $data['clean_result'] : null;
        $this->container['website_threat_type'] = isset($data['website_threat_type']) ? $data['website_threat_type'] : null;
        $this->container['found_viruses'] = isset($data['found_viruses']) ? $data['found_viruses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWebsiteThreatTypeAllowableValues();
        if (!in_array($this->container['website_threat_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'website_threat_type', must be one of '%s'",
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

        $allowedValues = $this->getWebsiteThreatTypeAllowableValues();
        if (!in_array($this->container['website_threat_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets clean_result
     *
     * @return bool
     */
    public function getCleanResult()
    {
        return $this->container['clean_result'];
    }

    /**
     * Sets clean_result
     *
     * @param bool $clean_result True if the scan contained no threats, false otherwise
     *
     * @return $this
     */
    public function setCleanResult($clean_result)
    {
        $this->container['clean_result'] = $clean_result;

        return $this;
    }

    /**
     * Gets website_threat_type
     *
     * @return string
     */
    public function getWebsiteThreatType()
    {
        return $this->container['website_threat_type'];
    }

    /**
     * Sets website_threat_type
     *
     * @param string $website_threat_type Type of threat returned; can be None, Malware, ForcedDownload or Phishing
     *
     * @return $this
     */
    public function setWebsiteThreatType($website_threat_type)
    {
        $allowedValues = $this->getWebsiteThreatTypeAllowableValues();
        if (!is_null($website_threat_type) && !in_array($website_threat_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'website_threat_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['website_threat_type'] = $website_threat_type;

        return $this;
    }

    /**
     * Gets found_viruses
     *
     * @return \Swagger\Client\Model\VirusFound[]
     */
    public function getFoundViruses()
    {
        return $this->container['found_viruses'];
    }

    /**
     * Sets found_viruses
     *
     * @param \Swagger\Client\Model\VirusFound[] $found_viruses Array of viruses found, if any
     *
     * @return $this
     */
    public function setFoundViruses($found_viruses)
    {
        $this->container['found_viruses'] = $found_viruses;

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


