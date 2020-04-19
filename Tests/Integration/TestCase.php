<?php

namespace WpMedia\Crawler\Tests\Integration;

use Brain\Monkey;
use WP_UnitTestCase;



class TestCase extends WP_UnitTestCase {
	/**
	 * Prepares the test environment before each test.
	 */
	public function setUp() {
		parent::setUp();
		Monkey\setUp();
	}

	/**
	 * Cleans up the test environment after each test.
	 */
	public function tearDown() {
		Monkey\tearDown();
		parent::tearDown();
	}

}