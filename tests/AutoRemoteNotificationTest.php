<?php

namespace Problematik\AutoRemote;

use Mockery as m;

class AutoRemoteNotificationTest extends \PHPUnit_Framework_TestCase {

	public function tearDown()
	{
		m::close();
	}

	/**
	 * @test
	 */
	public function constructor_with_array()
	{
		$notification = new AutoRemoteNotification(array("title" => "title", "text" => "text", "vibrationPattern" => "10,20,30"));

		$this->assertEquals("title", $notification->title);
		$this->assertEquals("text", $notification->text);
		$this->assertEquals("10,20,30", $notification->vibrationPattern);
	}

	/**
	 * @test
	 */
	public function transport_method_returns_string()
	{
		$notification = new AutoRemoteNotification();
		$this->assertTrue(is_string($notification->transportMethod()));
	}

	public function bad_values_for_sound_level()
	{
		return array(
			array(-5),
			array(0),
			array(11),
			array("ten")
		);
	}

	/**
	 * @test
	 * @dataProvider bad_values_for_sound_level
	 * @expectedException InvalidArgumentException
	 */
	public function exception_thrown_if_sound_level_incorect($badValue)
	{
		$notification = new AutoRemoteNotification();

		$notification->sound($badValue);
	}

	public function good_values_for_sound_level()
	{
		return array(
			array(1),
			array(5),
			array(10)
		);
	}
	/**
	 * @test
	 * @dataProvider good_values_for_sound_level
	 */
	public function sound_level_set_if_valid_value($goodValue)
	{
		$notification = new AutoRemoteNotification();

		$notification->sound($goodValue);

		$this->assertEquals($goodValue, $notification->sound);
	}

	public function bad_values_for_led_color()
	{
		return array(
			array("no_color"),
			array("AABBC"),
			array("AABBCCDDE")
		);
	}

	/**
	 * @test
	 * @dataProvider bad_values_for_led_color
	 * @expectedException InvalidArgumentException
	 */
	public function exception_thrown_if_invalid_led_color($badValue)
	{
		$notification = new AutoRemoteNotification();

		$notification->ledColor($badValue);
	}

	public function good_values_for_led_color()
	{
		return array(
			array("AABBCC"),
			array("AABBCCDD"),
			array("red"),
			array("blue")
		);
	}
	/**
	 * @test
	 * @dataProvider good_values_for_led_color
	 */
	public function led_color_set_if_valid_value($goodValue)
	{
		$notification = new AutoRemoteNotification();

		$notification->ledColor($goodValue);

		$this->assertEquals($goodValue, $notification->ledColor);
	}

	/**
	 * @test
	 */
	public function buttons_added_normally()
	{
		$a = m::mock(new AutoRemoteNotificationButton);
		$a->shouldReceive("referenceNumber")
			->times(2);

		$b = m::mock(new AutoRemoteNotificationButton);
		$b->shouldReceive("referenceNumber")
			->once()
			->with(3);

		$notification = new AutoRemoteNotification();

		$notification->addButton($a);
		$notification->addButton($a);
		$notification->addButton($b);

		$this->assertEquals(3, count($notification->buttons));
	}

	/**
	 * @test
	 * @expectedException LogicException
	 */
	public function exception_throws_if_adding_more_than_3_buttons()
	{
		$a = m::mock(new AutoRemoteNotificationButton);
		$a->shouldReceive("referenceNumber")
			->times(3);

		$notification = new AutoRemoteNotification();

		for ($i = 0; $i < 4; $i++) {
			$notification->addButton($a);
		}
	}

	public function good_values_for_priority()
	{
		return array(
			array(0),
			array(2),
			array(-2)
		);
	}

	/**
	 * @test
	 * @dataProvider good_values_for_priority
	 */
	public function priority_set_if_valid_value($goodValue)
	{
		$notification = new AutoRemoteNotification();

		$notification->priority($goodValue);

		$this->assertEquals($goodValue, $notification->priority);
	}

	public function bad_values_for_priority()
	{
		return array(
			array(-5),
			array(5),
			array("five")
		);
	}

	/**
	 * @test
	 * @dataProvider bad_values_for_priority
	 * @expectedException InvalidArgumentException
	 */
	public function exception_thrown_if_invalid_value_for_priority($badValue)
	{
		$notification = new AutoRemoteNotification();

		$notification->priority($badValue);
	}

	/**
	 * @test
	 */
	public function compile_query_string_returns_valid_query()
	{
		$notification = new AutoRemoteNotification();

		$notification->title("title");
		$notification->messageGroup("messageGroup");
		$notification->password("password with spaces");

		$query = $notification->compileQueryString();

		$this->assertEquals("title=title&password=password+with+spaces&collapseKey=messageGroup", $query);
	}

	/**
	 * @test
	 */
	public function sets_led_properties_when_led_method_called()
	{
		$notification = new AutoRemoteNotification();

		$notification->led("red", 100, 200);

		$this->assertEquals("red", $notification->ledColor);
		$this->assertEquals(100, $notification->ledOnMS);
		$this->assertEquals(200, $notification->ledOffMS);

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
		$notification = new AutoRemoteNotification();

		$notification->$badProperty("value");
	}

	public function good_properties()
	{
		return array(
			array("title"),
			array("text"),
			array("vibrationPattern"),
		);
	}

	/**
	 * @test
	 * @dataProvider good_properties
	 */
	public function property_set_value_set_if_property_exists($goodProperty)
	{
		$notification = new AutoRemoteNotification();

		$returnedInstance = $notification->$goodProperty("value");

		$this->assertEquals("value", $notification->$goodProperty);
		$this->assertEquals($notification, $returnedInstance);
	}
}
