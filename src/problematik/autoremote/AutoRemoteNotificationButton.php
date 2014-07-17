<?php

namespace Problematik\AutoRemote;

use LogicException;
use InvalidArgumentException;

/**
 * Button for the notification
 */
class AutoRemoteNotificationButton
{
	/**
	 * AutoRemote action (can be in the param1 param2=:=command format) that will be available in the form of a button on Jelly Bean
	 *
	 * @var string
	 */
	protected $action;

	/**
	 * Label for Action Button
	 *
	 * @var string
	 */
	protected $label;

	/**
	 * Choose one of the constatants from Icon class or In the Android app, go to the AutoRemote Notification action in Tasker and click the Status Bar Icon field. There you can see the possible values for this field
	 *
	 * @var string
	 */
	protected $icon;

	/**
	 * Button reference number
	 *
	 * @var number
	 */
	protected $referenceNumber;

	/**
	 * Basic constructor, you can set action, label and the icon
	 *
	 * @param string $action
	 * @param string $label
	 * @param string $icon
	 *
	 */
	public function __construct($action = null, $label = null, $icon = null)
	{
		$this->action = $action;

		$this->label = $label;

		$this->icon = $icon;
	}

	/**
	 * We compile the Notification button query string
	 *
	 * @return string
	 *
	 * @throws LogicException If reference number is not set
	 */
	public function compileQueryString()
	{
		if (!isset($this->referenceNumber)) {
			throw new LogicException("Reference number is not set");
		}

		$data = array();

		$properties = array("action" => "", "label" => "name", "icon" => "icon");

		foreach ($properties as $property => $propertyQueryStringName)
		{
			$data[] = $this->compilePropertyQueryString($property, strtolower($propertyQueryStringName));
		}

		return implode("&", $data);
	}

	/**
	 * We compile the query string for each individual property
	 *
	 * @param  string $property
	 * @param  string $propertyQueryStringName
	 *
	 * @return string
	 */
	protected function compilePropertyQueryString($property, $propertyQueryStringName)
	{
		$propertyValue = urlencode($this->$property);

		return "action{$this->referenceNumber}{$propertyQueryStringName}={$propertyValue}";
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

		throw new InvalidArgumentException("Method {$name} doesn't exist");
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
