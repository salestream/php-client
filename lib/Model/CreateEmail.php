<?php
/**
 * CreateEmail
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Salestream API
 *
 * Salestream API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreateEmail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateEmail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_id' => 'string',
        'to' => 'string[]',
        'cc' => 'string[]',
        'bcc' => 'string[]',
        'subject' => 'string',
        'message' => 'string',
        'draft' => 'bool',
        'reminder_enabled' => 'bool',
        'reminder_date' => 'int',
        'schedule' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'email_id' => null,
        'to' => null,
        'cc' => null,
        'bcc' => null,
        'subject' => null,
        'message' => null,
        'draft' => null,
        'reminder_enabled' => null,
        'reminder_date' => 'int32',
        'schedule' => 'int32'
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
        'email_id' => 'emailId',
        'to' => 'to',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'subject' => 'subject',
        'message' => 'message',
        'draft' => 'draft',
        'reminder_enabled' => 'reminderEnabled',
        'reminder_date' => 'reminderDate',
        'schedule' => 'schedule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_id' => 'setEmailId',
        'to' => 'setTo',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'subject' => 'setSubject',
        'message' => 'setMessage',
        'draft' => 'setDraft',
        'reminder_enabled' => 'setReminderEnabled',
        'reminder_date' => 'setReminderDate',
        'schedule' => 'setSchedule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_id' => 'getEmailId',
        'to' => 'getTo',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'subject' => 'getSubject',
        'message' => 'getMessage',
        'draft' => 'getDraft',
        'reminder_enabled' => 'getReminderEnabled',
        'reminder_date' => 'getReminderDate',
        'schedule' => 'getSchedule'
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
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['draft'] = isset($data['draft']) ? $data['draft'] : null;
        $this->container['reminder_enabled'] = isset($data['reminder_enabled']) ? $data['reminder_enabled'] : null;
        $this->container['reminder_date'] = isset($data['reminder_date']) ? $data['reminder_date'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email_id'] === null) {
            $invalidProperties[] = "'email_id' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
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
     * Gets email_id
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param string $email_id email_id
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string[] $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[]|null $cc cc
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string[]|null
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[]|null $bcc bcc
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets draft
     *
     * @return bool|null
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     *
     * @param bool|null $draft draft
     *
     * @return $this
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

        return $this;
    }

    /**
     * Gets reminder_enabled
     *
     * @return bool|null
     */
    public function getReminderEnabled()
    {
        return $this->container['reminder_enabled'];
    }

    /**
     * Sets reminder_enabled
     *
     * @param bool|null $reminder_enabled reminder_enabled
     *
     * @return $this
     */
    public function setReminderEnabled($reminder_enabled)
    {
        $this->container['reminder_enabled'] = $reminder_enabled;

        return $this;
    }

    /**
     * Gets reminder_date
     *
     * @return int|null
     */
    public function getReminderDate()
    {
        return $this->container['reminder_date'];
    }

    /**
     * Sets reminder_date
     *
     * @param int|null $reminder_date reminder_date
     *
     * @return $this
     */
    public function setReminderDate($reminder_date)
    {
        $this->container['reminder_date'] = $reminder_date;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return int|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param int|null $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

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


