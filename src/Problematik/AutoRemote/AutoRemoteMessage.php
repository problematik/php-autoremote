<?php

namespace Problematik\AutoRemote;

use InvalidArgumentException;

/**
 * Class that sets the Message data that can be send to the device
 */
class AutoRemoteMessage extends AutoRemoteTransport
{
	/**
 	 * The text you want to send
 	 *
	 * @var string
	 */
	protected $message;

	/**
	 * Sets the Target on this message
     *
	 * @var string
	 */
	protected $target;

	/**
	 * The device that receives this message will reply to this device key when choosing "Last Sender" in the devices list)
	 *
	 * @var string
	 */
	protected $actAsSender;

	/**
	 * The password you have configured on your device
	 *
	 * @var string
	 */
	protected $password;

	/**
	 * Time in seconds AutoRemote will try to deliver the message for before giving up
	 *
	 * @var number
	 */
	protected $messageValidity;

	/**
	 * If the receiving device is unreachable, only one message in a message group will be delivered. Useful you if e.g. leave a device in airplane mode at night and only want to receive the last of the messages that were sent during that time. Leave blank to deliver all messages
	 *
	 * @var [type]
	 */
	protected $messageGroup;

	/**
	 * We set the transport method
	 *
	 * @return string
	 */
	public function transportMethod()
	{
		return "sendmessage";
	}

	/**
	 * Which properties should we ignore in the query string
	 *
	 * @return array
	 */
	protected function ignoredProperties()
	{
		return array();
	}

	/**
	 * Some properties have different name in the query string
	 *
	 * @return array
	 */
	protected function propertiesWithDifferentQueryStringName()
	{
		return array("actAsSender" => "sender");
	}

	/**
	 * If there are any extra properties (like button properties in Notification) we can set their values here
	 *
	 * @return string
	 */
	protected function compileExtraQueryString()
	{
		return "";
	}

	/**
	 * Constructor
	 * @param array $fields
	 *
	 * @return  $this
	 */
	public function __construct($fields = array())
	{
		foreach($fields as $property => $value) {
			$this->$property($value);
		}

		return $this;
	}

	/**
	 * Setters
	 * @param  string $name
	 *
	 * @param  array $arguments
	 *
	 * @return Notification $this
	 *
	 * @throws  InvalidArgumentException
	 */
	public function __call($name, $arguments)
	{
		if (property_exists($this, $name)) {

			if (count($arguments) == 1) {

				$this->$name = $arguments[0];

				return $this;
			}

			throw new InvalidArgumentException("Too many arguments passed");
		}

		throw new InvalidArgumentException("Property {$name} doesn't exist");
	}

	/**
	 * Getters
	 * @param  string $name
	 *
	 * @return mixed
	 *
	 * @throws  InvalidArgumentException
	 */
	public function __get($name)
	{
		if (property_exists($this, $name)) {
			return $this->$name;
		}

		throw new InvalidArgumentException("Property {$name} doesn't exist");
	}

	/**
	 * We do not allow any new properties to be created
	 * @param string $name
	 *
	 * @throws LogicException
	 */
	public function __set($name, $value)
	{
		throw new LogicException("Trying to set value to non-existing property $name");
	}
}
