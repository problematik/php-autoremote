<?php

namespace Problematik\AutoRemote;

/**
 * Overwrite for test
 *
 * @param  string $url
 *
 * @return string
 */
function file_get_contents($url)
{
	if ($url == "https://autoremotejoaomgcd.appspot.com/method?key=OUR_SUPER_DUPER_API_KEY&") {
		return "FALSE";
	}

	return "OK";
}

use Mockery as m;

class AutoRemoteTest extends \PHPUnit_Framework_TestCase {

	public function tearDown()
	{
		m::close();
	}

	/**
	 * @test
	 * @expectedException Problematik\AutoRemote\AutoRemoteException
	 */
	public function send_should_fail_if_response_not_ok()
	{
		$transport = m::mock("Problematik\AutoRemote\AutoRemoteTransport");
		$transport->shouldReceive("transportMethod")
					->once()
					->andReturn("method");

		$transport->shouldReceive("compileQueryString")
					->once()
					->andReturn("");

		$a = new AutoRemote("OUR_SUPER_DUPER_API_KEY");

		$a->send($transport);
	}

	/**
	 * @test
	 */
	public function send_is_successful_if_response_ok()
	{
		$transport = m::mock("Problematik\AutoRemote\AutoRemoteTransport");
		$transport->shouldReceive("transportMethod")
					->once()
					->andReturn("method");

		$transport->shouldReceive("compileQueryString")
					->once()
					->andReturn("");

		$a = new AutoRemote("OUR_SUPER_DUPER_API_KEY_V2");

		$a->send($transport);
	}
}
