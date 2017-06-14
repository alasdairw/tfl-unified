<?php
/**
 * MatchedRoute
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
 * MatchedRoute Class Doc Comment
 *
 * @category    Class
 * @package     Abulia\TflUnified\Swagger
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MatchedRoute implements ArrayAccess, Jsonable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MatchedRoute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination' => 'string',
        'destination_name' => 'string',
        'direction' => 'string',
        'name' => 'string',
        'origination_name' => 'string',
        'originator' => 'string',
        'route_code' => 'string',
        'service_type' => 'string'
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
        'destination' => 'destination',
        'destination_name' => 'destinationName',
        'direction' => 'direction',
        'name' => 'name',
        'origination_name' => 'originationName',
        'originator' => 'originator',
        'route_code' => 'routeCode',
        'service_type' => 'serviceType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'destination' => 'setDestination',
        'destination_name' => 'setDestinationName',
        'direction' => 'setDirection',
        'name' => 'setName',
        'origination_name' => 'setOriginationName',
        'originator' => 'setOriginator',
        'route_code' => 'setRouteCode',
        'service_type' => 'setServiceType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'destination' => 'getDestination',
        'destination_name' => 'getDestinationName',
        'direction' => 'getDirection',
        'name' => 'getName',
        'origination_name' => 'getOriginationName',
        'originator' => 'getOriginator',
        'route_code' => 'getRouteCode',
        'service_type' => 'getServiceType'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['destination_name'] = isset($data['destination_name']) ? $data['destination_name'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['origination_name'] = isset($data['origination_name']) ? $data['origination_name'] : null;
        $this->container['originator'] = isset($data['originator']) ? $data['originator'] : null;
        $this->container['route_code'] = isset($data['route_code']) ? $data['route_code'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets destination
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     * @param string $destination eg: Destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets destination_name
     * @return string
     */
    public function getDestinationName()
    {
        return $this->container['destination_name'];
    }

    /**
     * Sets destination_name
     * @param string $destination_name eg: Destination Name
     * @return $this
     */
    public function setDestinationName($destination_name)
    {
        $this->container['destination_name'] = $destination_name;

        return $this;
    }

    /**
     * Gets direction
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     * @param string $direction eg: N or S or I or O
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name such as \"72\"
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets origination_name
     * @return string
     */
    public function getOriginationName()
    {
        return $this->container['origination_name'];
    }

    /**
     * Sets origination_name
     * @param string $origination_name eg: Origination Name
     * @return $this
     */
    public function setOriginationName($origination_name)
    {
        $this->container['origination_name'] = $origination_name;

        return $this;
    }

    /**
     * Gets originator
     * @return string
     */
    public function getOriginator()
    {
        return $this->container['originator'];
    }

    /**
     * Sets originator
     * @param string $originator eg: Origination
     * @return $this
     */
    public function setOriginator($originator)
    {
        $this->container['originator'] = $originator;

        return $this;
    }

    /**
     * Gets route_code
     * @return string
     */
    public function getRouteCode()
    {
        return $this->container['route_code'];
    }

    /**
     * Sets route_code
     * @param string $route_code The route code
     * @return $this
     */
    public function setRouteCode($route_code)
    {
        $this->container['route_code'] = $route_code;

        return $this;
    }

    /**
     * Gets service_type
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     * @param string $service_type eg: Regular, Night
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

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

