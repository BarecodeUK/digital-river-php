<?php
/**
 * GlobalFulfillmentOrder
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Model;

use \ArrayAccess;
use \DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * GlobalFulfillmentOrder Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GlobalFulfillmentOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GlobalFulfillmentOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'created_time' => '\DateTime',
        'currency' => 'string',
        'locale' => 'string',
        'upstream_order_time' => '\DateTime',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'reservation_id' => 'string',
        'upstream_id' => 'string',
        'ship_to' => '\DigitalRiver\ApiSdk\Model\Shipping2',
        'shipping_choice' => '\DigitalRiver\ApiSdk\Model\ShippingChoice',
        'items' => '\DigitalRiver\ApiSdk\Model\LineItem[]',
        'state' => 'string',
        'live_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'integer',
        'created_time' => 'date-time',
        'currency' => null,
        'locale' => null,
        'upstream_order_time' => 'date-time',
        'name' => null,
        'email' => 'email',
        'phone' => null,
        'reservation_id' => null,
        'upstream_id' => null,
        'ship_to' => null,
        'shipping_choice' => null,
        'items' => null,
        'state' => null,
        'live_mode' => null
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
        'id' => 'id',
        'created_time' => 'createdTime',
        'currency' => 'currency',
        'locale' => 'locale',
        'upstream_order_time' => 'upstreamOrderTime',
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'reservation_id' => 'reservationId',
        'upstream_id' => 'upstreamId',
        'ship_to' => 'shipTo',
        'shipping_choice' => 'shippingChoice',
        'items' => 'items',
        'state' => 'state',
        'live_mode' => 'liveMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_time' => 'setCreatedTime',
        'currency' => 'setCurrency',
        'locale' => 'setLocale',
        'upstream_order_time' => 'setUpstreamOrderTime',
        'name' => 'setName',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'reservation_id' => 'setReservationId',
        'upstream_id' => 'setUpstreamId',
        'ship_to' => 'setShipTo',
        'shipping_choice' => 'setShippingChoice',
        'items' => 'setItems',
        'state' => 'setState',
        'live_mode' => 'setLiveMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_time' => 'getCreatedTime',
        'currency' => 'getCurrency',
        'locale' => 'getLocale',
        'upstream_order_time' => 'getUpstreamOrderTime',
        'name' => 'getName',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'reservation_id' => 'getReservationId',
        'upstream_id' => 'getUpstreamId',
        'ship_to' => 'getShipTo',
        'shipping_choice' => 'getShippingChoice',
        'items' => 'getItems',
        'state' => 'getState',
        'live_mode' => 'getLiveMode'
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

    const STATE_PENDING = 'pending';
    const STATE_CANCELLED = 'cancelled';
    const STATE_SHIPPED = 'shipped';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
       $allowable = [
            self::STATE_PENDING,
            self::STATE_CANCELLED,
            self::STATE_SHIPPED,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['upstream_order_time'] = isset($data['upstream_order_time']) ? $data['upstream_order_time'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['reservation_id'] = isset($data['reservation_id']) ? $data['reservation_id'] : null;
        $this->container['upstream_id'] = isset($data['upstream_id']) ? $data['upstream_id'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['shipping_choice'] = isset($data['shipping_choice']) ? $data['shipping_choice'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['live_mode'] = isset($data['live_mode']) ? $data['live_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
       
        if (!is_null($this->container['state']) && !in_array(strtolower($this->container['state']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets id
     *
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time Time at which the order was created
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Three-letter ISO currency code.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale Locale designator combining two-letter ISO 639-1 language code with ISO 3166-1 alpha-2 country code.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets upstream_order_time
     *
     * @return \DateTime|null
     */
    public function getUpstreamOrderTime()
    {
        return $this->container['upstream_order_time'];
    }

    /**
     * Sets upstream_order_time
     *
     * @param \DateTime|null $upstream_order_time Time at which the upstream order was created
     *
     * @return $this
     */
    public function setUpstreamOrderTime($upstream_order_time)
    {
        $this->container['upstream_order_time'] = $upstream_order_time;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The customer name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The customer email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The customer phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets reservation_id
     *
     * @return string|null
     */
    public function getReservationId()
    {
        return $this->container['reservation_id'];
    }

    /**
     * Sets reservation_id
     *
     * @param string|null $reservation_id An inventory reservation identifier.
     *
     * @return $this
     */
    public function setReservationId($reservation_id)
    {
        $this->container['reservation_id'] = $reservation_id;

        return $this;
    }

    /**
     * Gets upstream_id
     *
     * @return string|null
     */
    public function getUpstreamId()
    {
        return $this->container['upstream_id'];
    }

    /**
     * Sets upstream_id
     *
     * @param string|null $upstream_id The user order identifier.
     *
     * @return $this
     */
    public function setUpstreamId($upstream_id)
    {
        $this->container['upstream_id'] = $upstream_id;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \DigitalRiver\ApiSdk\Model\Shipping2|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \DigitalRiver\ApiSdk\Model\Shipping2|null $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets shipping_choice
     *
     * @return \DigitalRiver\ApiSdk\Model\ShippingChoice|null
     */
    public function getShippingChoice()
    {
        return $this->container['shipping_choice'];
    }

    /**
     * Sets shipping_choice
     *
     * @param \DigitalRiver\ApiSdk\Model\ShippingChoice|null $shipping_choice shipping_choice
     *
     * @return $this
     */
    public function setShippingChoice($shipping_choice)
    {
        $this->container['shipping_choice'] = $shipping_choice;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\LineItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\LineItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array(strtolower($state), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets live_mode
     *
     * @return bool|null
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode
     *
     * @param bool|null $live_mode Has the value true if the object exists in live mode or the value false if the object exists in test mode.
     *
     * @return $this
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

