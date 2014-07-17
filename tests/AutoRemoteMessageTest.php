<?php

namespace Problematik\AutoRemote;

use Mockery as m;

class AutoRemoteMessageTest extends \PHPUnit_Framework_TestCase {

	public function tearDown()
	{
		m::close();
	}

	/**
	 * @test
	 */
	public function constructor_with_array()
	{
		$message = new AutoRemoteMessage(array("message" => "message", "target" => "target", "actAsSender" => "actAsSender"));

		$this->assertEquals("message", $message->message);
		$this->assertEquals("target", $message->target);
		$this->assertEquals("actAsSender", $message->actAsSender);
	}

	/**
	 * @test
	 */
	public function transport_method_returns_string()
	{
		$message = new AutoRemoteMessage();
		$this->assertTrue(is_string($message->transportMethod()));
	}

	/**
	 * @test
	 */
	public function compile_query_string_returns_valid_query()
	{
		$notification = new AutoRemoteMessage();

		$notification->message("message");
		$notification->target("target");
		$notification->actAsSender("sender with space");

		$query = $notification->compileQueryString();

		$this->assertEquals("message=message&target=target&sender=sender+with+space", $query);
	}

	public function bad_properties()
	{
		return array(
			array("none"),
			array("nope"),
			array("soundd")
		);
	}
	/**
	 * @test
	 * @dataProvider bad_properties
 	 * @expectedException LogicException
	 */
	public function exception_thrown_if_property_doesnt_exist($badProperty)
	{
		$message = new AutoRemoteMessage();

		$message->$badProperty("value");
	}

	public function good_properties()
	{
		return array(
			array("message"),
			array("target"),
			array("actAsSender"),
		);
	}

	/**
	 * @test
	 * @dataProvider good_properties
	 */
	public function property_set_value_set_if_property_exists($goodProperty)
	{
		$message = new AutoRemoteMessage();

		$returnedInstance = $message->$goodProperty("value");

		$this->assertEquals("value", $message->$goodProperty);
		$this->assertEquals($returnedInstance, $message);
	}
}
