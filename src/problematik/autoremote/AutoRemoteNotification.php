<?php

namespace Problematik\AutoRemote;

use LogicException;
use InvalidArgumentException;

/**
 * Class that sets the notification data
 */
class AutoRemoteNotification extends AutoRemoteTransport
{
	/**
	 * The title of the notification
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * The text of the Notification
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * Value of 1 to 10. One of the 10 notification sounds chosen in AutoRemote' settings
	 *
	 * @var number
	 */
	protected $sound;

	/**
	 * Similar to Tasker's Vibration Pattern
	 * @var string
	 */
	protected $vibrationPattern;

	/**
	 * This Url will be opened when you touch the Notification body. The "Action" field will override this
	 *
	 * @var string
	 */
	protected $url;

	/**
	 * Notifications with different ids will not overlap eachother
	 *
	 * @var string
	 */
	protected $notificationId;

	/**
	 * AutoRemote action (can be in the param1 param2=:=command format) that will be executed on Notification touch
	 *
	 * @var string
	 */
	protected $actionOnTap;

	/**
	 * Notification icon. Will only work on Android 3.0 and above.
	 *
	 * @var string
	 */
	protected $iconUrl;

	/**
	 * Not supported on all devices. Supported formats are: #RRGGBB #AARRGGBB 'red', 'blue', 'green', 'black', 'white', 'gray', 'cyan', 'magenta', 'yellow', 'lightgray', 'darkgray'.
	 *
	 * @var string
	 */
	protected $ledColor;

	/**
	 * Time in milliseconds the LED will be on during blinking
	 *
	 * @var number
	 */
	protected $ledOnMS;

	/**
	 * Time in milliseconds the LED will be off during blinking
	 *
	 * @var number
	 */
	protected $ledOffMS;

	/**
	 * Picture to show on Big Picture notifications. Will only work on Android 4.1 and above
	 *
	 * @var string
	 */
	protected $pictureUrl;

	/**
	 * AutoRemote action (can be in the param1 param2=:=command format) that will automatically execute when receiving this notification
	 *
	 * @var string
	 */
	protected $actionOnReceive;

	/**
	 * Add Share button(s) on Jelly Bean Notifications. Input any value other than false to show these buttons
	 *
	 * @var boolean
	 */
	protected $share;

	/**
	 * Fill in any value other than false to make the notification persistent
	 *
	 * @var string
	 */
	protected $persistent;

	/**
	 * Choose one of the constatants from Icon class or In the Android app, go to the AutoRemote Notification action in Tasker and click the Status Bar Icon field. There you can see the possible values for this field
	 *
	 * @var string
	 */
	protected $statusBarIcon;

	/**
	 * Text to appear on the status bar when the notification is first created. Defaults to the text field above.
	 *
	 * @var string
	 */
	protected $tickerText;

	/**
	 * Set to true to make the notification dismiss itself when touched
	 *
	 * @var boolean
	 */
	protected $dismissOnTouch;

	/**
	 * Values ranging from -2 (min priority) to 2 (max priority)
	 *
	 * @var number
	 */
	protected $priority;

	/**
	 * Number to appear on the lower right of the Notification
	 *
	 * @var number
	 */
	protected $number;

	/**
	 * Small string to appear on the lower right of the Notification, overrides Number
	 *
	 * @var number
	 */
	protected $contentInfo;

	/**
	 * Sub Text of the Notification
	 *
	 * @var string
	 */
	protected $subText;

	/**
	 * Max value the progress can have
	 *
	 * @var number
	 */
	protected $maxProgress;

	/**
	 * Value from 0 to the value you set in Max Progress
	 *
	 * @var number
	 */
	protected $currentProgress;

	/**
	 * If set, an indeterminate progress bar will be used
	 *
	 * @var number
	 */
	protected $indeterminateProgress;

	/**
	 * AutoRemote Message that will be executed when the Notification is dismissed
	 *
	 * @var string
	 */
	protected $actionOnDismiss;

	/**
	 * Fill any value other than false to cancel notification with the given Id. Must fill Id to cancel. All other settings besides Id will be ignored
	 *
	 * @var string
	 */
	protected $cancel;

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
	 * If the receiving device is unreachable, only one message in a message group will be delivered. Useful you if e.g. leave a device in airplane mode at night and only want to receive the last of the messages that were sent during that time. Leave false to deliver all messages.
	 *
	 * @var boolean
	 */
	protected $messageGroup;

	/**
	 * Array that holds all the buttons for the notification
	 * @var array
	 */
	protected $buttons = array();

	/**
	 * We set the transport method
	 *
	 * @return string
	 */
	public function transportMethod()
	{
		return "sendnotification";
	}

	/**
	 * Which properties should we ignore in the query string
	 *
	 * @return array
	 */
	protected function ignoredProperties()
	{
		return array('buttons');
	}

	/**
	 * Some properties have different name in the query string
	 *
	 * @return array
	 */
	protected function propertiesWithDifferentQueryStringName()
	{
		return array("vibrationPattern" => "vibration",
					 "notificationId" => "id",
					 "actionOnTap" => "action",
					 "iconUrl" => "icon",
					 "ledColor" => "led",
					 "ledOnMS" => "ledon",
					 "ledOffMS" => "ledoff",
					 "pictureUrl" => "picture",
					 "actionOnReceive" => "message",
					 "actAsSender" => "sender",
					 "tickerText" => "ticker",
					 "currentProgress" => "progress",
					 "messageValidity" => "ttl",
					 "messageGroup" => "collapseKey");
	}

	/**
	 * If there are any extra properties (like button properties in Notification) we can set their values here
	 *
	 * @return string
	 */
	protected function compileExtraQueryString()
	{
		$values = array();
		foreach ($this->buttons as $button)
		{
			$values[] = $button->compileQueryString();
		}

		return implode("&", $values);
	}

	/**
	 * Sets the sound for the notification
	 * @param  number $level One of the 10 notification sounds chosen in AutoRemote's settings.
	 *
	 * @return Notification $this
	 *
	 * @throws InvalidArgumentException
	 */
	public function sound($level)
	{
		if ($level < 1 || $level > 10 || !is_numeric($level)) {
			throw new InvalidArgumentException("Invalid sound level - $level");
		}

		$this->sound = $level;

		return $this;
	}

	/**
	 * Set the led color
	 * @param  string $color Supported formats are: #RRGGBB #AARRGGBB 'red', 'blue', 'green', 'black', 'white', 'gray', 'cyan', 'magenta', 'yellow', 'lightgray', 'darkgray'
	 *
	 * @return Notification $this
	 *
	 * @throws InvalidArgumentException
	 */
	public function ledColor($color)
	{
		// matches hex colors with/without alpha and the listed colors
		$expression = "/^([0-9A-Fa-f]{8})$|^([0-9A-Fa-f]{6})$|^(red|blue|green|black|white|gray|cyan|magenta|yellow|lightgray|darkgray)$/";

		preg_match($expression, $color, $matches);

		if (count($matches)) {

			$this->ledColor = array_pop($matches);

			return $this;
		}

		throw new InvalidArgumentException("Invalid led color - $color");
	}

	/**
	 * Shorthand method for led quick led setup
	 * @param  string $color led color
	 * @param  number $ledOn led on time in ms
	 * @param  number $ledOff ledd off time in ms
	 *
	 * @return Notification $this
	 */
	public function led($color, $ledOn, $ledOff)
	{
		$this->ledColor($color);

		$this->ledOnMS($ledOn);

		$this->ledOffMS($ledOff);

		return $this;
	}
	/**
	 * Add a button for the notification
	 *
	 * @param NotificationButton $button
	 *
	 * @return  Notification $this
	 *
	 * @throws  LogicException
	 */
	public function addButton(AutoRemoteNotificationButton $button)
	{
		$this->buttons[] = $button;

		$count = count($this->buttons);

		if ($count > 3) {
			throw new LogicException("Maximum numbers of buttons exceeded");
		}

		$button->referenceNumber($count);

		return $this;
	}

	/**
	 * Set the notification priority
	 * @param  number $level Values ranging from -2 (min priority) to 2 (max priority)
	 *
	 * @return Notification $this
	 *
	 * @throws InvalidArgumentException
	 */
	public function priority($priority)
	{
		if ($priority < -2 || $priority > 2 || !is_numeric($priority)) {
			throw new InvalidArgumentException("Invalid priority level");
		}

		$this->priority = $priority;

		return $this;
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

