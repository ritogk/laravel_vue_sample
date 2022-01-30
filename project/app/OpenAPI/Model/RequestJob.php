<?php
/**
 * RequestJob
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  App\OpenAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Tutorial
 *
 * OpenAPI Tutorial by halhorn
 *
 * The version of the OpenAPI document: 0.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace App\OpenAPI\Model;

use \ArrayAccess;
use \App\OpenAPI\ObjectSerializer;

/**
 * RequestJob Class Doc Comment
 *
 * @category Class
 * @description リクエスト 仕事登録
 * @package  App\OpenAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RequestJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'requestJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'content' => 'string',
        'attention' => 'bool',
        'jobCategoryId' => 'int',
        'price' => 'int',
        'welfare' => 'string',
        'holiday' => 'string',
        'image' => 'string',
        'sortNo' => 'int',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'content' => null,
        'attention' => null,
        'jobCategoryId' => null,
        'price' => null,
        'welfare' => null,
        'holiday' => null,
        'image' => null,
        'sortNo' => null,
        'updatedAt' => 'date'
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
        'title' => 'title',
        'content' => 'content',
        'attention' => 'attention',
        'jobCategoryId' => 'jobCategoryId',
        'price' => 'price',
        'welfare' => 'welfare',
        'holiday' => 'holiday',
        'image' => 'image',
        'sortNo' => 'sortNo',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'content' => 'setContent',
        'attention' => 'setAttention',
        'jobCategoryId' => 'setJobCategoryId',
        'price' => 'setPrice',
        'welfare' => 'setWelfare',
        'holiday' => 'setHoliday',
        'image' => 'setImage',
        'sortNo' => 'setSortNo',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'content' => 'getContent',
        'attention' => 'getAttention',
        'jobCategoryId' => 'getJobCategoryId',
        'price' => 'getPrice',
        'welfare' => 'getWelfare',
        'holiday' => 'getHoliday',
        'image' => 'getImage',
        'sortNo' => 'getSortNo',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['attention'] = $data['attention'] ?? null;
        $this->container['jobCategoryId'] = $data['jobCategoryId'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['welfare'] = $data['welfare'] ?? null;
        $this->container['holiday'] = $data['holiday'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['sortNo'] = $data['sortNo'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['attention'] === null) {
            $invalidProperties[] = "'attention' can't be null";
        }
        if ($this->container['jobCategoryId'] === null) {
            $invalidProperties[] = "'jobCategoryId' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['sortNo'] === null) {
            $invalidProperties[] = "'sortNo' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title タイトル
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content 内容
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets attention
     *
     * @return bool
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param bool $attention 注目の求人
     *
     * @return self
     */
    public function setAttention($attention)
    {
        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets jobCategoryId
     *
     * @return int
     */
    public function getJobCategoryId()
    {
        return $this->container['jobCategoryId'];
    }

    /**
     * Sets jobCategoryId
     *
     * @param int $jobCategoryId 職種id
     *
     * @return self
     */
    public function setJobCategoryId($jobCategoryId)
    {
        $this->container['jobCategoryId'] = $jobCategoryId;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price 金額
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets welfare
     *
     * @return string|null
     */
    public function getWelfare()
    {
        return $this->container['welfare'];
    }

    /**
     * Sets welfare
     *
     * @param string|null $welfare 福利厚生
     *
     * @return self
     */
    public function setWelfare($welfare)
    {
        $this->container['welfare'] = $welfare;

        return $this;
    }

    /**
     * Gets holiday
     *
     * @return string|null
     */
    public function getHoliday()
    {
        return $this->container['holiday'];
    }

    /**
     * Sets holiday
     *
     * @param string|null $holiday 休日
     *
     * @return self
     */
    public function setHoliday($holiday)
    {
        $this->container['holiday'] = $holiday;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image 画像URL
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets sortNo
     *
     * @return int
     */
    public function getSortNo()
    {
        return $this->container['sortNo'];
    }

    /**
     * Sets sortNo
     *
     * @param int $sortNo 並び順
     *
     * @return self
     */
    public function setSortNo($sortNo)
    {
        $this->container['sortNo'] = $sortNo;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt 更新日時
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


