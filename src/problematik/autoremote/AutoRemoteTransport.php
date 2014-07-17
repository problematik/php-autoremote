<?php

namespace Problematik\Autoremote;

abstract class AutoRemoteTransport {

	/**
	 * We set the transport method
	 *
	 * @return string
	 */
	abstract public function transportMethod();

	/**
	 * Which properties should we ignore in the query string
	 *
	 * @return array
	 */
	abstract protected function ignoredProperties();

	/**
	 * Some properties have different name in the query string
	 *
	 * @return array
	 */
	abstract protected function propertiesWithDifferentQueryStringName();

	/**
	 * If there are any extra properties (like button properties in Notification) we can set their values here
	 *
	 * @return string
	 */
	abstract protected function compileExtraQueryString();

	/**
	 * We prepare the query string that gets send to the server
	 *
	 * @return string $query
	 */
	public function compileQueryString()
	{
		$properties = get_object_vars($this);

		if (($ignoredProperties = $this->ignoredProperties()) == null) {
			$ignoredProperties = array();
		}

		if (($differentNames = $this->propertiesWithDifferentQueryStringName()) == null) {
			$differentNames = array();
		}

		$data = array();

		foreach ($properties as $property => $value)
		{
			if (!in_array($property, $ignoredProperties) && $property[0] != "_") {

				if ($this->$property != null) {
					if (array_key_exists($property, $differentNames)) {
						$queryStringName = $differentNames[$property];
					} else {
						$queryStringName = $property;
					}

					$data[] = $this->compilePropertyQueryString($property, $queryStringName);
				}
			}
		}

		if (($extraQueryString = $this->compileExtraQueryString()) != null) {
			$data[] = $this->compileExtraQueryString();
		}

		return implode("&", $data);
	}

	/**
	 * We compile every property
	 * @param  string $property
	 * @param  string $propertyQueryStringName
	 *
	 * @return string
	 */
	protected function compilePropertyQueryString($property, $propertyQueryStringName)
	{
		$propertyValue = urlencode($this->$property);

		return "{$propertyQueryStringName}={$propertyValue}";
	}
}

