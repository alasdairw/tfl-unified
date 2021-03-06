<?php
/**
 * EmissionsSurchargeVehicle
 *
 * PHP version 5
 *
 * @category Class
 * @package  Abulia\TflUnified\Swagger
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transport for London Unified API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Abulia\TflUnified\Swagger\Model;

use \ArrayAccess;
use Illuminate\Contracts\Support\Jsonable;

/**
 * EmissionsSurchargeVehicle Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Abulia\TflUnified\Swagger
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmissionsSurchargeVehicle implements ArrayAccess, Jsonable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmissionsSurchargeVehicle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'colour' => 'string',
        'compliance' => 'string',
        'make' => 'string',
        'model' => 'string',
        'type' => 'string',
        'vrm' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'colour' => 'colour',
        'compliance' => 'compliance',
        'make' => 'make',
        'model' => 'model',
        'type' => 'type',
        'vrm' => 'vrm'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'colour' => 'setColour',
        'compliance' => 'setCompliance',
        'make' => 'setMake',
        'model' => 'setModel',
        'type' => 'setType',
        'vrm' => 'setVrm'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'colour' => 'getColour',
        'compliance' => 'getCompliance',
        'make' => 'getMake',
        'model' => 'getModel',
        'type' => 'getType',
        'vrm' => 'getVrm'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const COMPLIANCE_NOT_COMPLIANT = 'NotCompliant';
    const COMPLIANCE_COMPLIANT = 'Compliant';
    const COMPLIANCE_EXEMPT = 'Exempt';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getComplianceAllowableValues()
    {
        return [
            self::COMPLIANCE_NOT_COMPLIANT,
            self::COMPLIANCE_COMPLIANT,
            self::COMPLIANCE_EXEMPT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['colour'] = isset($data['colour']) ? $data['colour'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vrm'] = isset($data['vrm']) ? $data['vrm'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["NotCompliant", "Compliant", "Exempt"];
        if (!in_array($this->container['compliance'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'compliance', must be one of 'NotCompliant', 'Compliant', 'Exempt'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["NotCompliant", "Compliant", "Exempt"];
        if (!in_array($this->container['compliance'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets colour
     * @return string
     */
    public function getColour()
    {
        return $this->container['colour'];
    }

    /**
     * Sets colour
     * @param string $colour
     * @return $this
     */
    public function setColour($colour)
    {
        $this->container['colour'] = $colour;

        return $this;
    }

    /**
     * Gets compliance
     * @return string
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /**
     * Sets compliance
     * @param string $compliance
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $allowed_values = array('NotCompliant', 'Compliant', 'Exempt');
        if (!is_null($compliance) && (!in_array($compliance, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'compliance', must be one of 'NotCompliant', 'Compliant', 'Exempt'");
        }
        $this->container['compliance'] = $compliance;

        return $this;
    }

    /**
     * Gets make
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     * @param string $make
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vrm
     * @return string
     */
    public function getVrm()
    {
        return $this->container['vrm'];
    }

    /**
     * Sets vrm
     * @param string $vrm
     * @return $this
     */
    public function setVrm($vrm)
    {
        $this->container['vrm'] = $vrm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Abulia\TflUnified\Swagger\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Abulia\TflUnified\Swagger\ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * To allow implict conversion to JSON by Laravel.
     */
    public function toJson($options = 0)
    {
        return $this->__toString();
    }

    /**
     * For convenient property based access.
     */
    public function __get($name)
    {
        if (isset(static::$getters[$name])) {
            return $this->{static::$getters[$name]}();
        }
        return null;
    }
}


