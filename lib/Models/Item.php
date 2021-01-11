<?php
/**
 * Item.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Models;

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * Item Class Doc Comment.
 *
 * @category Class
 * @description An Amazon order item identifier and a quantity.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Item implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'order_item_id' => '\Swagger\Client\Models\OrderItemId',
'quantity' => '\Swagger\Client\Models\ItemQuantity',
'item_weight' => '\Swagger\Client\Models\Weight',
'item_description' => '\Swagger\Client\Models\ItemDescription',
'transparency_code_list' => '\Swagger\Client\Models\TransparencyCodeList',
'item_level_seller_inputs_list' => '\Swagger\Client\Models\AdditionalSellerInputsList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'order_item_id' => null,
'quantity' => null,
'item_weight' => null,
'item_description' => null,
'transparency_code_list' => null,
'item_level_seller_inputs_list' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_item_id' => 'OrderItemId',
'quantity' => 'Quantity',
'item_weight' => 'ItemWeight',
'item_description' => 'ItemDescription',
'transparency_code_list' => 'TransparencyCodeList',
'item_level_seller_inputs_list' => 'ItemLevelSellerInputsList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'order_item_id' => 'setOrderItemId',
'quantity' => 'setQuantity',
'item_weight' => 'setItemWeight',
'item_description' => 'setItemDescription',
'transparency_code_list' => 'setTransparencyCodeList',
'item_level_seller_inputs_list' => 'setItemLevelSellerInputsList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'order_item_id' => 'getOrderItemId',
'quantity' => 'getQuantity',
'item_weight' => 'getItemWeight',
'item_description' => 'getItemDescription',
'transparency_code_list' => 'getTransparencyCodeList',
'item_level_seller_inputs_list' => 'getItemLevelSellerInputsList',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['item_weight'] = isset($data['item_weight']) ? $data['item_weight'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['transparency_code_list'] = isset($data['transparency_code_list']) ? $data['transparency_code_list'] : null;
        $this->container['item_level_seller_inputs_list'] = isset($data['item_level_seller_inputs_list']) ? $data['item_level_seller_inputs_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['order_item_id']) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }
        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets order_item_id.
     *
     * @return \Swagger\Client\Models\OrderItemId
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param \Swagger\Client\Models\OrderItemId $order_item_id order_item_id
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return \Swagger\Client\Models\ItemQuantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param \Swagger\Client\Models\ItemQuantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets item_weight.
     *
     * @return \Swagger\Client\Models\Weight
     */
    public function getItemWeight()
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight.
     *
     * @param \Swagger\Client\Models\Weight $item_weight item_weight
     *
     * @return $this
     */
    public function setItemWeight($item_weight)
    {
        $this->container['item_weight'] = $item_weight;

        return $this;
    }

    /**
     * Gets item_description.
     *
     * @return \Swagger\Client\Models\ItemDescription
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description.
     *
     * @param \Swagger\Client\Models\ItemDescription $item_description item_description
     *
     * @return $this
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets transparency_code_list.
     *
     * @return \Swagger\Client\Models\TransparencyCodeList
     */
    public function getTransparencyCodeList()
    {
        return $this->container['transparency_code_list'];
    }

    /**
     * Sets transparency_code_list.
     *
     * @param \Swagger\Client\Models\TransparencyCodeList $transparency_code_list transparency_code_list
     *
     * @return $this
     */
    public function setTransparencyCodeList($transparency_code_list)
    {
        $this->container['transparency_code_list'] = $transparency_code_list;

        return $this;
    }

    /**
     * Gets item_level_seller_inputs_list.
     *
     * @return \Swagger\Client\Models\AdditionalSellerInputsList
     */
    public function getItemLevelSellerInputsList()
    {
        return $this->container['item_level_seller_inputs_list'];
    }

    /**
     * Sets item_level_seller_inputs_list.
     *
     * @param \Swagger\Client\Models\AdditionalSellerInputsList $item_level_seller_inputs_list item_level_seller_inputs_list
     *
     * @return $this
     */
    public function setItemLevelSellerInputsList($item_level_seller_inputs_list)
    {
        $this->container['item_level_seller_inputs_list'] = $item_level_seller_inputs_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
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
