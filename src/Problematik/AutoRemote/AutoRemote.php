<?php

namespace Problematik\AutoRemote;

/**
 * Class that send the desired AutoRemoteTransport class to the server/your device
 */
class AutoRemote {

	/**
	 * Our API key
	 *
	 * @var [type]
	 */
	protected $API_KEY;

	/**
	 * Notification|Message
	 *
	 * @var AutoRemoteTransport
	 */
	protected $transport;

	/**
	 * Hostname
	 *
	 * @var string
	 */
	protected $host = "https://autoremotejoaomgcd.appspot.com/";

	/**
	 * Constructor for AutoRemote
	 *
	 * @param string $API_KEY Our API key
	 */
	public function __construct($API_KEY)
	{
		$this->API_KEY = $API_KEY;
	}

	/**
	 * We send the data to the device
	 *
	 * @param  AutoRemoteTransport $transport
	 *
	 * @throws  AutoRemoteException
	 */
	public function send(AutoRemoteTransport $transport)
	{
		$this->transport = $transport;

		$url = $this->compileURL();

		$response = file_get_contents($url);

		if ($response != "OK") {
			throw new AutoRemoteException("Operation failed, invalid response received: $response", 1);
		}
	}

	/**
	 * Compile API key data for URL
	 *
	 * @return string
	 */
	protected function compileApiKey()
	{
		return "?key={$this->API_KEY}";
	}

	/**
	 * Compiles the whole URL
	 *
	 * @return string
	 */
	protected function compileURL()
	{
		return "{$this->host}".
				"{$this->transport->transportMethod()}".
				"{$this->compileApiKey()}".
				"&{$this->transport->compileQueryString()}";
	}
}
