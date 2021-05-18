<?php
/**
 * StatisticsSpamExpertsStatistics
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reseller/Customer
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Person\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * StatisticsSpamExpertsStatistics Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatisticsSpamExpertsStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'statisticsSpamExpertsStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activated_at' => 'string',
        'created_at' => 'string',
        'exists' => 'bool',
        'expired_at' => 'string',
        'incoming_count' => 'int',
        'incoming_limit' => 'int',
        'outgoing_count' => 'int',
        'outgoing_limit' => 'int',
        'status' => 'string',
        'with_outgoing_filter' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activated_at' => null,
        'created_at' => null,
        'exists' => 'boolean',
        'expired_at' => null,
        'incoming_count' => 'int32',
        'incoming_limit' => 'int32',
        'outgoing_count' => 'int32',
        'outgoing_limit' => 'int32',
        'status' => null,
        'with_outgoing_filter' => 'boolean'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activated_at' => 'activated_at',
        'created_at' => 'created_at',
        'exists' => 'exists',
        'expired_at' => 'expired_at',
        'incoming_count' => 'incoming_count',
        'incoming_limit' => 'incoming_limit',
        'outgoing_count' => 'outgoing_count',
        'outgoing_limit' => 'outgoing_limit',
        'status' => 'status',
        'with_outgoing_filter' => 'with_outgoing_filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated_at' => 'setActivatedAt',
        'created_at' => 'setCreatedAt',
        'exists' => 'setExists',
        'expired_at' => 'setExpiredAt',
        'incoming_count' => 'setIncomingCount',
        'incoming_limit' => 'setIncomingLimit',
        'outgoing_count' => 'setOutgoingCount',
        'outgoing_limit' => 'setOutgoingLimit',
        'status' => 'setStatus',
        'with_outgoing_filter' => 'setWithOutgoingFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated_at' => 'getActivatedAt',
        'created_at' => 'getCreatedAt',
        'exists' => 'getExists',
        'expired_at' => 'getExpiredAt',
        'incoming_count' => 'getIncomingCount',
        'incoming_limit' => 'getIncomingLimit',
        'outgoing_count' => 'getOutgoingCount',
        'outgoing_limit' => 'getOutgoingLimit',
        'status' => 'getStatus',
        'with_outgoing_filter' => 'getWithOutgoingFilter'
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
        $this->container['activated_at'] = isset($data['activated_at']) ? $data['activated_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['exists'] = isset($data['exists']) ? $data['exists'] : null;
        $this->container['expired_at'] = isset($data['expired_at']) ? $data['expired_at'] : null;
        $this->container['incoming_count'] = isset($data['incoming_count']) ? $data['incoming_count'] : null;
        $this->container['incoming_limit'] = isset($data['incoming_limit']) ? $data['incoming_limit'] : null;
        $this->container['outgoing_count'] = isset($data['outgoing_count']) ? $data['outgoing_count'] : null;
        $this->container['outgoing_limit'] = isset($data['outgoing_limit']) ? $data['outgoing_limit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['with_outgoing_filter'] = isset($data['with_outgoing_filter']) ? $data['with_outgoing_filter'] : null;
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
     * Gets activated_at
     *
     * @return string|null
     */
    public function getActivatedAt()
    {
        return $this->container['activated_at'];
    }

    /**
     * Sets activated_at
     *
     * @param string|null $activated_at activated_at
     *
     * @return $this
     */
    public function setActivatedAt($activated_at)
    {
        $this->container['activated_at'] = $activated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets exists
     *
     * @return bool|null
     */
    public function getExists()
    {
        return $this->container['exists'];
    }

    /**
     * Sets exists
     *
     * @param bool|null $exists exists
     *
     * @return $this
     */
    public function setExists($exists)
    {
        $this->container['exists'] = $exists;

        return $this;
    }

    /**
     * Gets expired_at
     *
     * @return string|null
     */
    public function getExpiredAt()
    {
        return $this->container['expired_at'];
    }

    /**
     * Sets expired_at
     *
     * @param string|null $expired_at expired_at
     *
     * @return $this
     */
    public function setExpiredAt($expired_at)
    {
        $this->container['expired_at'] = $expired_at;

        return $this;
    }

    /**
     * Gets incoming_count
     *
     * @return int|null
     */
    public function getIncomingCount()
    {
        return $this->container['incoming_count'];
    }

    /**
     * Sets incoming_count
     *
     * @param int|null $incoming_count incoming_count
     *
     * @return $this
     */
    public function setIncomingCount($incoming_count)
    {
        $this->container['incoming_count'] = $incoming_count;

        return $this;
    }

    /**
     * Gets incoming_limit
     *
     * @return int|null
     */
    public function getIncomingLimit()
    {
        return $this->container['incoming_limit'];
    }

    /**
     * Sets incoming_limit
     *
     * @param int|null $incoming_limit incoming_limit
     *
     * @return $this
     */
    public function setIncomingLimit($incoming_limit)
    {
        $this->container['incoming_limit'] = $incoming_limit;

        return $this;
    }

    /**
     * Gets outgoing_count
     *
     * @return int|null
     */
    public function getOutgoingCount()
    {
        return $this->container['outgoing_count'];
    }

    /**
     * Sets outgoing_count
     *
     * @param int|null $outgoing_count outgoing_count
     *
     * @return $this
     */
    public function setOutgoingCount($outgoing_count)
    {
        $this->container['outgoing_count'] = $outgoing_count;

        return $this;
    }

    /**
     * Gets outgoing_limit
     *
     * @return int|null
     */
    public function getOutgoingLimit()
    {
        return $this->container['outgoing_limit'];
    }

    /**
     * Sets outgoing_limit
     *
     * @param int|null $outgoing_limit outgoing_limit
     *
     * @return $this
     */
    public function setOutgoingLimit($outgoing_limit)
    {
        $this->container['outgoing_limit'] = $outgoing_limit;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets with_outgoing_filter
     *
     * @return bool|null
     */
    public function getWithOutgoingFilter()
    {
        return $this->container['with_outgoing_filter'];
    }

    /**
     * Sets with_outgoing_filter
     *
     * @param bool|null $with_outgoing_filter with_outgoing_filter
     *
     * @return $this
     */
    public function setWithOutgoingFilter($with_outgoing_filter)
    {
        $this->container['with_outgoing_filter'] = $with_outgoing_filter;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


