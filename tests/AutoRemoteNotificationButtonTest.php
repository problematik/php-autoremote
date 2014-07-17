<?php

namespace Problematik\AutoRemote;

use Mockery as m;

class AutoRemoteNotificationButtonTest extends \PHPUnit_Framework_TestCase {

	public function tearDown()
	{
		m::close();
	}

	/**
	 * @test
	 */
	public function empty_constructor()
	{
		$button = new AutoRemoteNotificationButton();

		$this->assertEquals(null, $button->action);
		$this->assertEquals(null, $button->label);
		$this->assertEquals(null, $button->icon);
	}

	/**
	 * @test
	 */
	public function constructor()
	{
		$button = new AutoRemoteNotificationButton("action", "label", "icon");

		$this->assertEquals("action", $button->action);
		$this->assertEquals("label", $button->label);
		$this->assertEquals("icon", $button->icon);
	}

	/**
	 * @test
	 * @expectedException LogicException
	 */
	public function exception_thrown_if_calling_compile_query_string_without_reference_number()
	{
		$button = new AutoRemoteNotificationButton();

		$button->compileQueryString();
	}

	public function multiple_buttons()
	{
		return array(
			array(1),
			array(2),
			array(3)
		);
	}

	/**
	 * @test
	 * @dataProvider multiple_buttons
	 */
	public function compile_query_string_return_corret_value($buttonNumber)
	{
		$button = new AutoRemoteNotificationButton("action", "label with spaces", "icon");
		$button->referenceNumber($buttonNumber);

		$query = $button->compileQueryString();

		$this->assertEquals("action{$buttonNumber}=action&action{$buttonNumber}name=label+with+spaces&action{$buttonNumber}icon=icon", $query);
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
		$notification = new AutoRemoteNotificationButton();

		$notification->$badProperty("value");
	}

	public function good_properties()
	{
		return array(
			array("action"),
			array("label"),
			array("referenceNumber"),
		);
	}

	/**
	 * @test
	 * @dataProvider good_properties
	 */
	public function property_set_value_set_if_property_exists($goodProperty)
	{
		$notification = new AutoRemoteNotificationButton();

		$returnedInstance = $notification->$goodProperty("value");

		$this->assertEquals("value", $notification->$goodProperty);
		$this->assertEquals($notification, $returnedInstance);
	}
}
