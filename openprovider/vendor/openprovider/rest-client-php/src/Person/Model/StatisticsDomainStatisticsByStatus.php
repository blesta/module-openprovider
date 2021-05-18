<?php
/**
 * StatisticsDomainStatisticsByStatus
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
 * StatisticsDomainStatisticsByStatus Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatisticsDomainStatisticsByStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'statisticsDomainStatisticsByStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'act' => 'int',
        'fai' => 'int',
        'nsr' => 'int',
        'pen' => 'int',
        'rej' => 'int',
        'req' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'act' => 'int32',
        'fai' => 'int32',
        'nsr' => 'int32',
        'pen' => 'int32',
        'rej' => 'int32',
        'req' => 'int32'
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
        'act' => 'ACT',
        'fai' => 'FAI',
        'nsr' => 'NSR',
        'pen' => 'PEN',
        'rej' => 'REJ',
        'req' => 'REQ'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'act' => 'setAct',
        'fai' => 'setFai',
        'nsr' => 'setNsr',
        'pen' => 'setPen',
        'rej' => 'setRej',
        'req' => 'setReq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'act' => 'getAct',
        'fai' => 'getFai',
        'nsr' => 'getNsr',
        'pen' => 'getPen',
        'rej' => 'getRej',
        'req' => 'getReq'
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
        $this->container['act'] = isset($data['act']) ? $data['act'] : null;
        $this->container['fai'] = isset($data['fai']) ? $data['fai'] : null;
        $this->container['nsr'] = isset($data['nsr']) ? $data['nsr'] : null;
        $this->container['pen'] = isset($data['pen']) ? $data['pen'] : null;
        $this->container['rej'] = isset($data['rej']) ? $data['rej'] : null;
        $this->container['req'] = isset($data['req']) ? $data['req'] : null;
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
     * Gets act
     *
     * @return int|null
     */
    public function getAct()
    {
        return $this->container['act'];
    }

    /**
     * Sets act
     *
     * @param int|null $act act
     *
     * @return $this
     */
    public function setAct($act)
    {
        $this->container['act'] = $act;

        return $this;
    }

    /**
     * Gets fai
     *
     * @return int|null
     */
    public function getFai()
    {
        return $this->container['fai'];
    }

    /**
     * Sets fai
     *
     * @param int|null $fai fai
     *
     * @return $this
     */
    public function setFai($fai)
    {
        $this->container['fai'] = $fai;

        return $this;
    }

    /**
     * Gets nsr
     *
     * @return int|null
     */
    public function getNsr()
    {
        return $this->container['nsr'];
    }

    /**
     * Sets nsr
     *
     * @param int|null $nsr nsr
     *
     * @return $this
     */
    public function setNsr($nsr)
    {
        $this->container['nsr'] = $nsr;

        return $this;
    }

    /**
     * Gets pen
     *
     * @return int|null
     */
    public function getPen()
    {
        return $this->container['pen'];
    }

    /**
     * Sets pen
     *
     * @param int|null $pen pen
     *
     * @return $this
     */
    public function setPen($pen)
    {
        $this->container['pen'] = $pen;

        return $this;
    }

    /**
     * Gets rej
     *
     * @return int|null
     */
    public function getRej()
    {
        return $this->container['rej'];
    }

    /**
     * Sets rej
     *
     * @param int|null $rej rej
     *
     * @return $this
     */
    public function setRej($rej)
    {
        $this->container['rej'] = $rej;

        return $this;
    }

    /**
     * Gets req
     *
     * @return int|null
     */
    public function getReq()
    {
        return $this->container['req'];
    }

    /**
     * Sets req
     *
     * @param int|null $req req
     *
     * @return $this
     */
    public function setReq($req)
    {
        $this->container['req'] = $req;

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


